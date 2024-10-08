<?php
if (isset($_POST["submit_barangay_clearance"])) {
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
    $issued_date = $conn->real_escape_string($_POST["issued_date"]);
    $purpose = $conn->real_escape_string($_POST["purpose"]);
    $duty_officer_name = $conn->real_escape_string($_POST["duty_officer_full_name"]);

    // Define SQL query using prepared statements
    $stmt = $conn->prepare("INSERT INTO barangay_clearance (fullname, address, birthplace, birthdate, civil_status, period_of_residency, issued_date, purpose, duty_officer_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $fullname = $first_name . ' ' . $middle_initial . ' ' . $last_name . ' ' . $suffix;
    $stmt->bind_param('sssssssss', $fullname, $purok, $birthplace, $birthdate, $civil_status, $period_of_residency, $issued_date, $purpose, $duty_officer_name);

    // Execute SQL query
    if ($stmt->execute()) {
        // Fetch admin ID
        $sql = "SELECT id FROM admin WHERE username = ?";
        $admin_stmt = $conn->prepare($sql);
        $admin_stmt->bind_param('s', $_SESSION['username']);
        $admin_stmt->execute();
        $admin_result = $admin_stmt->get_result();

        if ($admin_result->num_rows > 0) {
            $row = mysqli_fetch_assoc($admin_result);
            $admin_id = $row['id'];

            // Get count of barangay_clearance
            $count_stmt = $conn->prepare("SELECT COUNT(*) FROM barangay_clearance");
            $count_stmt->execute();
            $count_result = $count_stmt->get_result();
            $count_row = $count_result->fetch_row();
            $client_trans_id = $count_row[0];

            // Insert transaction record
            $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, client_trans_id, created_at) VALUES (?, 1, ?, NOW())");
            $trans_stmt->bind_param('ii', $admin_id, $client_trans_id);

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
?>