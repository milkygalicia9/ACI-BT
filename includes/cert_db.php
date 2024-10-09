<?php
// Barangay Clearance
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
// End of Barangay Clearance

// Business Permit New
if (isset($_POST["business_permit_new"])) {
    // Sanitize and assign form data to variables
    $business_name = $conn->real_escape_string($_POST["businessName"]);
    $purok = $conn->real_escape_string($_POST["purok"]);
    $manager = $conn->real_escape_string($_POST["manager_operator"]);
    $address = $conn->real_escape_string($_POST["manager_operator_address"]);

    // Define SQL query using prepared statements for the business permit
    $address = $address . ' ' . $purok;
    $fullname = $manager;
    $issued_date = date('Y-m-d');
    $stmt = $conn->prepare("INSERT INTO business_permit_new (business_name, manager, address, issued_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', $business_name, $manager, $address, $issued_date);

    // Execute the business permit insertion query
    if ($stmt->execute()) {
        echo "New business permit record inserted successfully";

        // Fetch admin ID
        $sql = "SELECT id FROM admin WHERE username = ?";
        $admin_stmt = $conn->prepare($sql);
        $admin_stmt->bind_param('s', $_SESSION['username']);
        $admin_stmt->execute();
        $admin_result = $admin_stmt->get_result();

        // Check if the admin user was found
        if ($admin_result->num_rows > 0) {
            $row = mysqli_fetch_assoc($admin_result);
            $admin_id = $row['id'];

            // Insert a transaction record into the `transactions` table
            $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, fullname, client_trans_id, created_at) VALUES (?, 2, ?,(SELECT COUNT(*) FROM business_permit_new), NOW())");
            $trans_stmt->bind_param('is', $admin_id, $fullname);

            // Execute the transaction query
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
//   End of Business Permit New

// Business Permit Renew
if (isset($_POST["business_permit_renew"])) {
    // Sanitize and assign form data to variables
    $business_name = $conn->real_escape_string($_POST["business_name_renew"]);
    $purok = $conn->real_escape_string($_POST["purok"]);
    $manager = $conn->real_escape_string($_POST["manager_operator_renew"]);
    $address = $conn->real_escape_string($_POST["manager_operator_address_renew"]);

    // Define SQL query using prepared statements for the business permit
    $address = $address . ' ' . $purok;
    $fullname = $manager;
    $issued_date = date('Y-m-d');
    $stmt = $conn->prepare("INSERT INTO business_permit_renew (business_name, manager, address, issued_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', $business_name, $manager, $address, $issued_date);

    // Execute the business permit insertion query
    if ($stmt->execute()) {
        echo "New business permit record inserted successfully";

        // Fetch admin ID
        $sql = "SELECT id FROM admin WHERE username = ?";
        $admin_stmt = $conn->prepare($sql);
        $admin_stmt->bind_param('s', $_SESSION['username']);
        $admin_stmt->execute();
        $admin_result = $admin_stmt->get_result();

        // Check if the admin user was found
        if ($admin_result->num_rows > 0) {
            $row = mysqli_fetch_assoc($admin_result);
            $admin_id = $row['id'];

            // Insert a transaction record into the `transactions` table
            $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, fullname, client_trans_id, created_at) VALUES (?, 2, ?,(SELECT COUNT(*) FROM business_permit_renew), NOW())");
            $trans_stmt->bind_param('is', $admin_id, $fullname);

            // Execute the transaction query
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
// End of Business Permit Renew

// Certificate of Employability
if (isset($_POST["certificate_of_employability"])) {
    // Sanitize and assign form data to variables
    $first_name = $conn->real_escape_string($_POST["first_name"]);
    $middle_initial = $conn->real_escape_string($_POST["middle_initial"]);
    $last_name = $conn->real_escape_string($_POST["last_name"]);
    $suffix = $conn->real_escape_string($_POST["suffix"]);
    $age = $conn->real_escape_string($_POST["age"]);
    $address = $conn->real_escape_string($_POST["purok"]);
    //$issued_date = $conn->real_escape_string($_POST["issued_date"]);
    //$duty_officer_name = $conn->real_escape_string($_POST["duty_officer_name"]);

    // Define SQL query using prepared statements for the business permit
    $fullname = $first_name . ' ' . $middle_initial . ' ' . $last_name . ' ' . $suffix;
    $fullname = ucwords($fullname);
    $duty_officer_name = $_SESSION['username'];
    $issued_date = date('Y-m-d');
    $stmt = $conn->prepare("INSERT INTO certificate_of_employability (fullname, age, address, issued_date, duty_officer_name) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param('sssss', $fullname, $age, $address, $issued_date, $duty_officer_name);

    // Execute the business permit insertion query
    if ($stmt->execute()) {
        echo "New certificate of employability record inserted successfully";

        // Fetch admin ID
        $sql = "SELECT id FROM admin WHERE username = ?";
        $admin_stmt = $conn->prepare($sql);
        $admin_stmt->bind_param('s', $_SESSION['username']);
        $admin_stmt->execute();
        $admin_result = $admin_stmt->get_result();

        // Check if the admin user was found
        if ($admin_result->num_rows > 0) {
            $row = mysqli_fetch_assoc($admin_result);
            $admin_id = $row['id'];

            // Insert a transaction record into the `transactions` table
            $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, fullname, client_trans_id, created_at) VALUES (?, 2, ?,(SELECT COUNT(*) FROM business_permit_renew), NOW())");
            $trans_stmt->bind_param('is', $admin_id, $fullname);

            // Execute the transaction query
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
// End of Certificate of Employability 







// Certificate of Transfer
if (isset($_POST["transfer_of_residency"])) {
    // Sanitize and assign form data to variables
    $first_name = $conn->real_escape_string($_POST["first_name"]);
    $middle_initial = $conn->real_escape_string($_POST["middle_initial"]);
    $last_name = $conn->real_escape_string($_POST["last_name"]);
    $suffix = $conn->real_escape_string($_POST["suffix"]);
    $purok = $conn->real_escape_string($_POST["purok"]);
    $current_address = $conn->real_escape_string($_POST["current_address"]);
    $previous_address = $conn->real_escape_string($_POST["previous_address"]);
    $nationality = $conn->real_escape_string($_POST["nationality"]);
    $civil_status = $conn->real_escape_string($_POST["civil_status"]);
    $purpose = $conn->real_escape_string($_POST["purpose"]);

    // Define SQL query using prepared statements for the certificate of transfer
    $address = $current_address . ' . ' . $purok;
    $fullname = $first_name . ' ' . $middle_initial . ' ' . $last_name . ' ' . $suffix;
    $fullname = ucwords($fullname);
    $issued_date = date('Y-m-d');

    $stmt = $conn->prepare("INSERT INTO transfer_of_residency (fullname, address, nationality, civil_status, previous_address, purpose, issued_date) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssssss', $fullname, $address, $nationality, $civil_status, $previous_address, $purpose, $issued_date);


    // Execute the certificate of transfer insertion query
    if ($stmt->execute()) {
        echo "New certificate of transfer record inserted successfully";

        // Fetch admin ID
        $sql = "SELECT id FROM admin WHERE username = ?";
        $admin_stmt = $conn->prepare($sql);
        $admin_stmt->bind_param('s', $_SESSION['username']);
        $admin_stmt->execute();
        $admin_result = $admin_stmt->get_result();

        // Check if the admin user was found
        if ($admin_result->num_rows > 0) {
            $row = mysqli_fetch_assoc($admin_result);
            $admin_id = $row['id'];

            // Insert a transaction record into the `transactions` table
            $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, fullname, client_trans_id, created_at) VALUES (?, 2, ?,(SELECT COUNT(*) FROM business_permit_renew), NOW())");
            $trans_stmt->bind_param('is', $admin_id, $fullname);

            // Execute the transaction query
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
// End of Certificate of Transfer 