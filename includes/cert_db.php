<?php
// Check if form is submitted
if (isset($_POST["barangay_clearance"])) {
    // Sanitize and assign form data to variables
    $first_name = $conn->real_escape_string($_POST["first_name"]);
    $middle_initial = $conn->real_escape_string($_POST["middle_initial"]);
    $last_name = $conn->real_escape_string($_POST["last_name"]);
    $suffix = $conn->real_escape_string($_POST["suffix"]);
    $purok = $conn->real_escape_string($_POST["purok"]);
    $birthplace = $conn->real_escape_string($_POST["birthplace"]);
    $birthdate = $conn->real_escape_string($_POST["birthday"]);
    $civil_status = $conn->real_escape_string($_POST["civil_status"]);
    $period_of_residency = $conn->real_escape_string($_POST["residency_period"]);
    //$issued_date = $conn->real_escape_string($_POST["issued_date"]);
    $purpose = $conn->real_escape_string($_POST["purpose"]);
    //$duty_officer_name = $conn->real_escape_string($_POST["duty_officer_full_name"]);

    // Define SQL query using prepared statements
    $stmt = $conn->prepare("INSERT INTO barangay_clearance (fullname, address, birthplace, birthdate, civil_status, period_of_residency, issued_date, purpose, duty_officer_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $fullname = $first_name . ' ' . $middle_initial . ' ' . $last_name . ' ' . $suffix;
    $fullname = ucwords($fullname);
    $issued_date = date('Y-m-d');
    $duty_officer_name = $_SESSION['username'];
    $stmt->bind_param('sssssssss', $fullname, $purok, $birthplace, $birthdate, $civil_status, $period_of_residency, $issued_date, $purpose, $duty_officer_name);

    // Execute SQL query
    if ($stmt->execute()) {
        echo "New record inserted successfully";

        // Fetch admin ID
        $sql = "SELECT id FROM admin WHERE username = ?";
        $admin_stmt = $conn->prepare($sql);
        $admin_stmt->bind_param('s', $_SESSION['username']);
        $admin_stmt->execute();
        $admin_result = $admin_stmt->get_result();
        // Add missing import statement
        if ($admin_result->num_rows > 0) {
            $row = mysqli_fetch_assoc($admin_result);
            $admin_id = $row['id'];

            // Modify SQL query to use COUNT function correctly
            $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, fullname, client_trans_id, created_at) VALUES (?, 1, ?, (SELECT COUNT(*) FROM barangay_clearance), NOW())");
            $trans_stmt->bind_param('is', $admin_id, $fullname);

            if ($trans_stmt->execute()) {
                echo "Transaction record inserted successfully";
            } else {
                echo "Error: " . $trans_stmt->error;
            }

            $trans_stmt->close();
        } else {
            echo "Error: Admin user not found.";
        }

        $admin_stmt->close();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}