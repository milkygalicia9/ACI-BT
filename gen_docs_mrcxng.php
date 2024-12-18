<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit();
}

//Include database connection file
include("db.php");

// Check if form is submitted
if (isset($_POST["barangay_clearance"])) {
  // Sanitize and assign form data to variables
  $first_name = $conn->real_escape_string($_POST["first_name"]);
  $middle_name = $conn->real_escape_string($_POST["middle_initial"]);
  $last_name = $conn->real_escape_string($_POST["last_name"]);
  $suffix = $conn->real_escape_string($_POST["suffix"]);
  $purok = $conn->real_escape_string($_POST["purok"]);
  $birthplace = $conn->real_escape_string($_POST["birthplace"]);
  $birthdate = $conn->real_escape_string($_POST["birthdate"]);
  $civil_status = $conn->real_escape_string($_POST["civil_status"]);
  $period_of_residency = $conn->real_escape_string($_POST["residency_period"]);
  //$issued_date = $conn->real_escape_string($_POST["issued_date"]);
  $purpose = $conn->real_escape_string($_POST["purpose"]);
  //$duty_officer_name = $conn->real_escape_string($_POST["duty_officer_full_name"]);

  // Define SQL query using prepared statements
  $stmt = $conn->prepare("INSERT INTO barangay_clearance (first_name, middle_name, last_name, address, birthplace, birthdate, civil_status, period_of_residency, issued_date, purpose, duty_officer_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $issued_date = date('Y-m-d');
  $fullname = $first_name . ' ' . $middle_name . ' ' . $last_name . ' ' . $suffix;
  $duty_officer_name = $_SESSION['username'];
  $stmt->bind_param('sssssssssss', $first_name, $middle_name, $last_name, $purok, $birthplace, $birthdate, $civil_status, $period_of_residency, $issued_date, $purpose, $duty_officer_name);

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
      $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, fullname, client_trans_id, created_at) VALUES (?, 1, ?,(SELECT COUNT(*) FROM barangay_clearance), NOW())");
      $trans_stmt->bind_param('is', $admin_id, $fullname);

      if ($trans_stmt->execute()) {
        echo "Transaction record inserted successfully";
      } else {
        echo "Error: " . $trans_stmt->error;
      }

      $trans_stmt->close();
    } else {
      echo "Error: Admin user not found.";
      echo "Error: Admin user not found.";
    }

    $admin_stmt->close();
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close database connection
  $stmt->close();
  // $conn->close();
}

if (isset($_POST["business_permit_new"])) {
  // Sanitize and assign form data to variables
  $business_name = $conn->real_escape_string($_POST["businessName"]);
  $purok = $conn->real_escape_string($_POST["purok"]);
  $manager = $conn->real_escape_string($_POST["manager_operator"]);
  $address = $conn->real_escape_string($_POST["manager_operator_address"]);

  // Define SQL query using prepared statements for the business permit
  $address = $address . ', ' . $purok;
  $fullname = $manager;
  $issued_date = date('Y-m-d');
  $stmt = $conn->prepare("INSERT INTO business_permit_new (business_name, manager, address, issued_date) VALUES (?, ?, ?, ?)");
  $stmt->bind_param('ssss', $business_name, $manager, $address, $issued_date);

  //Execute the business permit insertion query
  if ($stmt->execute()) {
    echo "New business permit record inserted successfully";

    //Fetch admin ID
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

if (isset($_POST["business_permit_renew"])) {
  // Sanitize and assign form data to variables
  $business_name = $conn->real_escape_string($_POST["business_name_renew"]);
  $purok = $conn->real_escape_string($_POST["purok"]);
  $manager = $conn->real_escape_string($_POST["manager_operator_renew"]);
  $address = $conn->real_escape_string($_POST["manager_operator_address_renew"]);

  // Define SQL query using prepared statements for the business permit
  $address = $address . ', ' . $purok;
  $fullname = $manager;
  $issued_date = date('Y-m-d');
  $stmt = $conn->prepare("INSERT INTO business_permit_renew (business_name, manager, address, issued_date) VALUES (?, ?, ?, ?)");
  $stmt->bind_param('ssss', $business_name, $manager, $address, $issued_date);

  //Execute the business permit insertion query
  if ($stmt->execute()) {
    echo "New business permit record inserted successfully";

    // Fetch admin ID
    $sql = "SELECT id FROM admin WHERE username = ?";
    $admin_stmt = $conn->prepare($sql);
    $admin_stmt->bind_param('s', $_SESSION['username']);
    $admin_stmt->execute();
    $admin_result = $admin_stmt->get_result();

    //Check if the admin user was found
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

// if (isset($_POST["certificate_of_employability"])) {
//   // Sanitize and assign form data to variables
//   $first_name = $conn->real_escape_string($_POST["first_name"]);
//   $middle_initial = $conn->real_escape_string($_POST["middle_initial"]);
//   $last_name = $conn->real_escape_string($_POST["last_name"]);
//   $suffix = $conn->real_escape_string($_POST["suffix"]);
//   $age = $conn->real_escape_string($_POST["age"]);
//   $address = $conn->real_escape_string($_POST["purok"]);
//   //$issued_date = $conn->real_escape_string($_POST["issued_date"]);
//   //$duty_officer_name = $conn->real_escape_string($_POST["duty_officer_name"]);

//   // Define SQL query using prepared statements for the business permit
//   $fullname = $first_name . ' ' . $middle_initial . ' ' . $last_name . ' ' . $suffix;
//   $fullname = ucwords($fullname);
//   $duty_officer_name = $_SESSION['username'];
//   $issued_date = date('Y-m-d');
//   $stmt = $conn->prepare("INSERT INTO certificate_of_employability (fullname, age, address, issued_date, duty_officer_name) VALUES (?, ?, ?, ?, ?)");
//   $stmt->bind_param('sssss', $fullname, $age, $address, $issued_date, $duty_officer_name);

//   // Execute the business permit insertion query
//   if ($stmt->execute()) {
//     echo "New certificate of employability record inserted successfully";

//     // Fetch admin ID
//     $sql = "SELECT id FROM admin WHERE username = ?";
//     $admin_stmt = $conn->prepare($sql);
//     $admin_stmt->bind_param('s', $_SESSION['username']);
//     $admin_stmt->execute();
//     $admin_result = $admin_stmt->get_result();

//     // Check if the admin user was found
//     if ($admin_result->num_rows > 0) {
//       $row = mysqli_fetch_assoc($admin_result);
//       $admin_id = $row['id'];

//       // Insert a transaction record into the `transactions` table
//       $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, fullname, client_trans_id, created_at) VALUES (?, 2, ?,(SELECT COUNT(*) FROM business_permit_renew), NOW())");
//       $trans_stmt->bind_param('is', $admin_id, $fullname);

//       // Execute the transaction query
//       if ($trans_stmt->execute()) {
//         echo "Transaction record inserted successfully";
//       } else {
//         echo "Error: " . $trans_stmt->error;
//       }

//       $trans_stmt->close();
//     } else {
//       echo "Error: Admin user not found.";
//     }

//     $admin_stmt->close();
//   } else {
//     echo "Error: " . $stmt->error;
//   }

//   // Close database connection
//   $stmt->close();
//   $conn->close();
// }

// if (isset($_POST["first_time_job_seeker"])) {

//   // Sanitize and assign form data to variables
//   $first_name = $conn->real_escape_string($_POST["first_name"]);
//   $middle_initial = $conn->real_escape_string($_POST["middle_initial"]);
//   $last_name = $conn->real_escape_string($_POST["last_name"]);
//   $suffix = $conn->real_escape_string($_POST["suffix"]);
//   $purok = $conn->real_escape_string($_POST["purok"]);
//   $period_of_residency = $conn->real_escape_string($_POST["residency_period"]);
//   $signed_date = $conn->real_escape_string($_POST["signed_date"]);
//   $validation_date = $conn->real_escape_string($_POST["validation_date"]);
//   $witness = $conn->real_escape_string($_POST["witness"]);

//   // Define SQL query using prepared statements
//   $fullname = $first_name . ' ' . $middle_initial . ' ' . $last_name . ' ' . $suffix;
//   $fullname = ucwords($fullname);
//   $signed_date = date('Y-m-d');
//   $witness = $_SESSION['username'];
//   $stmt = $conn->prepare("INSERT INTO first_time_job_seeker (fullname, address, period_of_residency, signed_date, validation_date, witness) VALUES (?, ?, ?, ?, ?, ?)");
//   $stmt->bind_param('ssssss', $fullname, $purok, $period_of_residency, $signed_date, $validation_date, $witness);

//   // Execute SQL query
//   if ($stmt->execute()) {
//     echo "New record inserted successfully";

//     // Fetch admin ID
//     $sql = "SELECT id FROM admin WHERE username = ?";
//     $admin_stmt = $conn->prepare($sql);
//     $admin_stmt->bind_param('s', $_SESSION['username']);
//     $admin_stmt->execute();
//     $admin_result = $admin_stmt->get_result();
//     // Add missing import statement
//     if ($admin_result->num_rows > 0) {
//       $row = mysqli_fetch_assoc($admin_result);
//       $admin_id = $row['id'];

//       // Modify SQL query to use COUNT function correctly
//       $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, fullname, client_trans_id, created_at) VALUES (?, 1, ?,(SELECT COUNT(*) FROM barangay_clearance), NOW())");
//       $trans_stmt->bind_param('is', $admin_id, $fullname);

//       if ($trans_stmt->execute()) {
//         echo "Transaction record inserted successfully";
//       } else {
//         echo "Error: " . $trans_stmt->error;
//       }

//       $trans_stmt->close();
//     } else {
//       echo "Error: Admin user not found.";
//       echo "Error: Admin user not found.";
//     }

//     $admin_stmt->close();
//   } else {
//     echo "Error: " . $stmt->error;
//   }

//   // Close database connection
//   $stmt->close();
//   $conn->close();
// }


if (isset($_POST["indigency"])) {
  // Sanitize and assign form data to variables
  $first_name = $conn->real_escape_string($_POST["first_name"]);
  $middle_initial = $conn->real_escape_string($_POST["middle_initial"]);
  $last_name = $conn->real_escape_string($_POST["last_name"]);
  $suffix = $conn->real_escape_string($_POST["suffix"]);
  $age = $conn->real_escape_string($_POST["age"]);
  $civil_status = $conn->real_escape_string($_POST["civil_status"]);
  $purok = $conn->real_escape_string($_POST["purok"]);
  // $purpose = $conn->real_escape_string($_POST["purpose"]);

  // Define SQL query using prepared statements for the indigency
  $fullname = $first_name . ' ' . $middle_initial . ' ' . $last_name . ' ' . $suffix;
  $fullname = ucwords($fullname);
  $address = $purok;
  $purpose = "wala lang";
  $issued_date = date('Y-m-d');
  $purpose = "Indigency"; // Add a default purpose or get it from the form if needed

  $stmt = $conn->prepare("INSERT INTO indigency (fullname, age, civil_status, address, purpose, issued_date) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param('ssssss', $fullname, $age, $civil_status, $address, $purpose, $issued_date);

  // Execute the indigency insertion query
  if ($stmt->execute()) {
    echo "New Indigency record inserted successfully";

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
      $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, fullname, client_trans_id, created_at) VALUES (?, 2, ?, (SELECT COUNT(*) FROM indigency), NOW())");
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

if (isset($_POST["cohabitation"])) {
  // Sanitize and assign form data to variables
  $first_name = $conn->real_escape_string($_POST["first_name"]);
  $middle_initial = $conn->real_escape_string($_POST["middle_initial"]);
  $last_name = $conn->real_escape_string($_POST["last_name"]);
  $suffix = $conn->real_escape_string($_POST["suffix"]);
  $birthdate = $conn->real_escape_string($_POST["birth_date"]);
  $first_name1 = $conn->real_escape_string($_POST["first_name1"]);
  $middle_initial1 = $conn->real_escape_string($_POST["middle_initial1"]);
  $last_name1 = $conn->real_escape_string($_POST["last_name1"]);
  $cohabitant_birthdate = $conn->real_escape_string($_POST["cohabitant_birth_date"]);
  $purok = $conn->real_escape_string($_POST["purok"]);
  $date_of_marriage = $conn->real_escape_string($_POST["date_of_marriage"]);

  // Define SQL query using prepared statements for the business permit
  $fullname_male = $first_name . ' ' . $middle_initial . ' ' . $last_name . ' ' . $suffix;
  $fullname_male = ucwords($fullname_male);
  $fullname_female = $first_name1 . ' ' . $middle_initial1 . ' ' . $last_name;
  $fullname_female = ucwords($fullname_female);
  $duty_officer_name = $_SESSION['username'];
  $address = $purok;
  $fullname = $fullname_male;
  $years_married = date('Y') - date('Y', strtotime($date_of_marriage));
  $issued_date = date('Y-m-d');
  $stmt = $conn->prepare("INSERT INTO cohabitation (fullname_male, birthdate_male, fullname_female, birthdate_female, address, date_of_marriage, years_married, issued_date, duty_officer_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param('sssssssss', $fullname_male, $birthdate, $fullname_female, $cohabitant_birthdate, $address, $date_of_marriage, $years_married, $issued_date, $duty_officer_name);

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
  $address = $current_address . ', ' . $purok;
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

if (isset($_POST["certificate_of_income"])) {
  // Sanitize and assign form data to variables
  $first_name = $conn->real_escape_string($_POST["first_name"]);
  $middle_initial = $conn->real_escape_string($_POST["middle_initial"]);
  $last_name = $conn->real_escape_string($_POST["last_name"]);
  $suffix = $conn->real_escape_string($_POST["suffix"]);
  $purok = $conn->real_escape_string($_POST["purok"]);
  $income_num = $conn->real_escape_string($_POST["income_num"]); // Changed from amount
  $income_words = $conn->real_escape_string($_POST["income_words"]); // Added new field

  //$issued_date = $conn->real_escape_string($_POST["issued_date"]);
  //$duty_officer_name = $conn->real_escape_string($_POST["duty_officer_name"]);

  // Define SQL query using prepared statements for the business permit
  $fullname = $first_name . ' ' . $middle_initial . ' ' . $last_name . ' ' . $suffix;
  $fullname = ucwords($fullname);
  $address = $purok;
  $issued_date = date('Y-m-d');
  $stmt = $conn->prepare("INSERT INTO certificate_of_income (fullname, address, income_num, income_words, issued_date) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param('ssiss', $fullname, $address, $income_num, $income_words, $issued_date);

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


// if (isset($_POST["death_certificate"])) {
//   // Sanitize and assign form data to variables
//   $first_name = $conn->real_escape_string($_POST["first_name"]);
//   $middle_initial = $conn->real_escape_string($_POST["middle_initial"]);
//   $last_name = $conn->real_escape_string($_POST["last_name"]);
//   $suffix = $conn->real_escape_string($_POST["suffix"]);
//   $purok = $conn->real_escape_string($_POST["purok"]);
//   $date_of_death = $conn->real_escape_string($_POST["date_of_death"]);
//   $time_of_death = $conn->real_escape_string($_POST["time_of_death"]);
//   $cause_of_death = $conn->real_escape_string($_POST["cause_of_death"]);
//   $first_named = $conn->real_escape_string($_POST["first_named"]);
//   $middle_initiald = $conn->real_escape_string($_POST["middle_initiald"]);
//   $last_named = $conn->real_escape_string($_POST["last_named"]);
//   $suffixd = $conn->real_escape_string($_POST["suffixd"]);
//   $relationship_to_dead_person = $conn->real_escape_string($_POST["relationship_to_dead_person"]);
//   $date_requested = $conn->real_escape_string($_POST["date_requested"]);
//   //$issued_date = $conn->real_escape_string($_POST["issued_date"]);
//   //$duty_officer_name = $conn->real_escape_string($_POST["duty_officer_name"]);

//   // Define SQL query using prepared statements for the business permit
//   $fullname = $first_name . ' ' . $middle_initial . ' ' . $last_name . ' ' . $suffix;
//   $fullname = ucwords($fullname);
//   $address = $purok;
//   $req_fullname = $first_named . ' ' . $middle_initiald . ' ' . $last_named . ' ' . $suffixd;
//   $relationship = $relationship_to_dead_person;
//   $stmt = $conn->prepare("INSERT INTO death_certificate (fullname, address, date_of_death, time_of_death, req_fullname, relationship, date_requested) VALUES (?, ?, ?, ?, ?, ?, ?)");
//   $stmt->bind_param('sssssss', $fullname, $address, $date_of_death, $time_of_death, $req_fullname, $relationship, $date_requested);

//   // Execute the business permit insertion query
//   if ($stmt->execute()) {
//     echo "New certificate of employability record inserted successfully";

//     // Fetch admin ID
//     $sql = "SELECT id FROM admin WHERE username = ?";
//     $admin_stmt = $conn->prepare($sql);
//     $admin_stmt->bind_param('s', $_SESSION['username']);
//     $admin_stmt->execute();
//     $admin_result = $admin_stmt->get_result();

//     // Check if the admin user was found
//     if ($admin_result->num_rows > 0) {
//       $row = mysqli_fetch_assoc($admin_result);
//       $admin_id = $row['id'];

//       // Insert a transaction record into the `transactions` table
//       $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, fullname, client_trans_id, created_at) VALUES (?, 2, ?,(SELECT COUNT(*) FROM business_permit_renew), NOW())");
//       $trans_stmt->bind_param('is', $admin_id, $fullname);

//       // Execute the transaction query
//       if ($trans_stmt->execute()) {
//         echo "Transaction record inserted successfully";
//       } else {
//         echo "Error: " . $trans_stmt->error;
//       }

//       $trans_stmt->close();
//     } else {
//       echo "Error: Admin user not found.";
//     }

//     $admin_stmt->close();
//   } else {
//     echo "Error: " . $stmt->error;
//   }

//   // Close database connection
//   $stmt->close();
//   $conn->close();
// }

// if (isset($_POST["complaint_certificate"])) {
//   // Sanitize and assign form data to variables
//   $first_name = $conn->real_escape_string($_POST["first_name"]);
//   $middle_initial = $conn->real_escape_string($_POST["middle_initial"]);
//   $last_name = $conn->real_escape_string($_POST["last_name"]);
//   $suffix = $conn->real_escape_string($_POST["suffix"]);
//   $age = $conn->real_escape_string($_POST["age"]);
//   $purok = $conn->real_escape_string($_POST["purok"]);
//   $first_namec = $conn->real_escape_string($_POST["first_namec"]);
//   $middle_initialc = $conn->real_escape_string($_POST["middle_initialc"]);
//   $last_namec = $conn->real_escape_string($_POST["last_namec"]);

//   // Define SQL query using prepared statements for the business permit
//   $fullname_of_complainant = $first_name . ' ' . $middle_initial . ' ' . $last_name . ' ' . $suffix;
//   $address = $purok;
//   $fullname_of_respondent = $first_namec . ' ' . $middle_initialc . ' ' . $last_namec;
//   $stmt = $conn->prepare("INSERT INTO complaint_certificate (fullname_of_complainant, address, date_of_complain, fullname_of_respondent) VALUES (?, ?, ?, ?)");
//   $stmt->bind_param('ssss', $fullname_of_complainant, $address, $date_of_complain, $fullname_of_respondent);

//   //Execute the business permit insertion query
//   if ($stmt->execute()) {
//     echo "New business permit record inserted successfully";

//     //Fetch admin ID
//     $sql = "SELECT id FROM admin WHERE username = ?";
//     $admin_stmt = $conn->prepare($sql);
//     $admin_stmt->bind_param('s', $_SESSION['username']);
//     $admin_stmt->execute();
//     $admin_result = $admin_stmt->get_result();

//     // Check if the admin user was found
//     if ($admin_result->num_rows > 0) {
//       $row = mysqli_fetch_assoc($admin_result);
//       $admin_id = $row['id'];

//       // Insert a transaction record into the `transactions` table
//       $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, fullname, client_trans_id, created_at) VALUES (?, 2, ?,(SELECT COUNT(*) FROM business_permit_new), NOW())");
//       $trans_stmt->bind_param('is', $admin_id, $fullname);

//       // Execute the transaction query
//       if ($trans_stmt->execute()) {
//         echo "Transaction record inserted successfully";
//       } else {
//         echo "Error: " . $trans_stmt->error;
//       }

//       $trans_stmt->close();
//     } else {
//       echo "Error: Admin user not found.";
//     }

//     $admin_stmt->close();
//   } else {
//     echo "Error: " . $stmt->error;
//   }

//   // Close database connection
//   $stmt->close();
//   $conn->close();
// }

// FROM OLD USER

$doc_name = isset($_GET['doc_name']) ? strtolower($_GET['doc_name']) : "";
$client_trans_id = isset($_GET['client_trans_id']) ? $_GET['client_trans_id'] : "";
echo $doc_name;
echo $client_trans_id;

if ($doc_name == 'barangay_clearance') {
    $sql = "SELECT * FROM barangay_clearance WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $client_trans_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $barangay_clearance_first_name = $row['first_name'];
        $barangay_clearance_middle_name = $row['middle_name'];
        $barangay_clearance_last_name = $row['last_name'];
        $barangay_clearance_address = $row['address'];
        $barangay_clearance_birthplace = $row['birthplace'];
        $barangay_clearance_birthdate = $row['birthdate'];
        $barangay_clearance_civil_status = $row['civil_status'];
        $barangay_clearance_period_of_residency = $row['period_of_residency'];
        $barangay_clearance_purpose = $row['purpose'];
        echo $barangay_clearance_first_name;
    } else {
        echo "No record found.";
    }

    $stmt->close();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ACI-BT | Generate Documents</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/cap-log.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================= -->
</head>

<body style="background-color: #F4F3EF;">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center w-100"
    style="background-color: #F4F3EF; padding: 0">

    <div class="d-flex align-items-center justify-content-between h-100 p-2">
      <a href="home.php" class="logo d-flex align-items-center justify-content-center">
        <span class="d-none d-lg-block fs-3">ACI-BT</span>
      </a>
    </div>

    <i class="bi bi-list toggle-sidebar-btn"></i>

    <div class="title h-100 pl-5 w-100 d-flex align-items-center justify-content-between"
      style="padding-left: 20px; padding-top: 8px;">
      <h4 class="text-dark fs-3">Automated Credential Issuance for Barangay Tiniguiban</h4>
    </div>
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" style="background-color: #174793; padding: 0;">

    <div class="barangay-logo h-50 w-100" style="background-color: #729ED9; margin-bottom: 2px;">
      <div class="barangay-logo h-100 d-flex align-items-center justify-content-center">
        <a href="home.php">
          <img src="assets/img/cap-log.png" height="250" alt="">
        </a>
      </div>
    </div>

    <ul class="sidebar-nav" id="sidebar-nav" style="padding: 15px;">
      <li class="nav-item">
        <a class="nav-link text-light" href="home.php" style="background-color: #174793;">
          <i class="bi bi-grid text-light fs-5"></i>
          <span class="fs-5">Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed text-light" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"
          style="background-color: #174793;">
          <i class="bi bi-diagram-3 fs-5"></i><span class="fs-5">Officials</span><i
            class="bi bi-chevron-down ms-auto fs-5"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="officials.php">
              <i class="bi bi-person-check-fill text-light fs-5" style="font-size: 12px;"></i><span
                class="text-light fs-5">Barangay Officials</span>
            </a>
          </li>
          <li>
            <a href="sk.php">
              <i class="bi bi-person-badge text-light fs-5" style="font-size: 12px;"></i><span
                class="text-light fs-5">SK Officials</span>
            </a>
          </li>
          <li>
            <a href="staffs.php">
              <i class="bi bi-people-fill text-light fs-5" style="font-size: 12px;"></i><span
                class="text-light fs-5">Barangay Staffs</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed text-light" href="about.php" style="background-color: #174793;">
          <i class="bi bi-question-circle fs-5"></i>
          <span class="fs-5">About</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php" style="background-color: #F4F3EF;">
          <i class="bi bi-power text-dark fs-5"></i>
          <span class="fs-5">Logout</span>
        </a>
      </li>
    </ul>
  </aside>

  <main id="main" class="main">
    <section class="section">
      <div class="d-flex pb-2 pt-0 mt-0">
        <a href="home.php" class="d-flex">
          <div class="icon">
            <i class="bi-caret-left-square fs-4 p-2 text-primary"></i>
          </div>
          <div class="back d-flex text-primary align-items-center fs-5">
            Back
          </div>
        </a>
      </div>
      <div class="row">
        <div class="col-lg-6" id="fillup">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Fillup Certificate</h5>
              <style>
                @media print {
                  iframe {
                    border: none;
                    width: 21cm !important;
                    height: 29.7cm !important;
                  }
                }


                iFrame {
                  top: 50%;
                  /* position: fixed !important; */
                  left: 50%;
                  /* width: 21.05cm; */
                  height: 32cm;
                  border: none;
                  overflow: hidden !important;
                  transform: scale(0.9);
                  transform-origin: 0 0;
                  /* border: 2px solid black; */
                }

                p {
                  color: white;
                  font-size: 12px;
                }

                .certificates div {
                  display: none;
                }

                .certificates div.active {
                  display: block;
                }

                .modal {
                  display: none;
                  position: fixed;
                  z-index: 1;
                  left: 0;
                  top: 0;
                  width: 100%;
                  height: 100%;
                  overflow: auto;
                  background-color: rgb(0, 0, 0);
                  background-color: rgba(0, 0, 0, 0.4);
                  padding-top: 60px;
                }

                .modal-content {
                  background-color: #fefefe;
                  margin: 5% auto;
                  padding: 20px;
                  border: 1px solid #888;
                  width: 80%;
                }

                .close {
                  color: #aaa;
                  float: right;
                  font-size: 28px;
                  font-weight: bold;
                }

                .close:hover,
                .close:focus {
                  color: black;
                  text-decoration: none;
                  cursor: pointer;
                }
              </style>

              <!-- General Form Elements -->
              <label for="certificateType"> Select Certificate</label><br>
              <div class="col-md-6">
                <?php $selectedType = $doc_name ?? ''; ?>
                <select class="  p-2 text-left" id="certificateType" onchange="toggleFields()" style="cursor: pointer;">
                  <option value="">--select certificates--</option>
                  <option value="barangay_clearance" <?= $selectedType == "barangay_clearance" ? 'selected ' : '' ?>>Barangay Clearance</option>
                  <option value="business_permit_new" <?= $selectedType == "business_permit_new" ? 'selected' : '' ?>>Barangay Business Permit New</option>
                  <option value="business_permit_renew" <?= $selectedType == "business_permit_renew" ? 'selected' : '' ?>>Barangay Business Permit Renew</option>
                  <option value="certificate_of_employability" <?= $selectedType == "certificate_of_employability" ? 'selected' : '' ?>>Certificate Of Employability</option>
                  <option value="certificate_of_income" <?= $selectedType == "certificate_of_income" ? 'selected' : '' ?>>Certificate of Income</option>
                  <option value="cohabitation" <?= $selectedType == "cohabitation" ? 'selected' : '' ?>>Certificate of Cohabitation</option>
                  <option value="complaint_certificate" <?= $selectedType == "complaint_certificate" ? 'selected' : '' ?>>Complaint Certificate</option>
                  <option value="death_certificate" <?= $selectedType == "death_certificate" ? 'selected' : '' ?>>Death Certificate</option>
                  <option value="first_time_job_seeker" <?= $selectedType == "first_time_job_seeker" ? 'selected' : '' ?>>Barangay Certification (First time Job Seeker)</option>
                  <option value="indigency_aics" <?= $selectedType == "indigency_aics" ? 'selected' : '' ?>>Indigency (AICS)</option>
                  <option value="indigency" <?= $selectedType == "indigency" ? 'selected' : '' ?>>Indigency</option>
                  <option value="lot_ownership" <?= $selectedType == "lot_ownership" ? 'selected' : '' ?>>Lot Ownership</option>
                  <option value="Oathtaking" <?= $selectedType == "Oathtaking" ? 'selected' : '' ?>>Oathtaking</option>
                  <option value="transfer_of_residency" <?= $selectedType == "transfer_of_residency" ? 'selected' : '' ?>>Certificate of Transfer</option>
                </select>
              </div>
              <br>
              <div class="certificates">
                <div id="barangay_clearance">
                  <form action="#" method="post" id="form">

                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan" value="<?php echo $barangay_clearance_first_name ?? ''; ?>"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J" value="<?php echo $barangay_clearance_middle_name ?? ''; ?>"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz" value="<?php echo $barangay_clearance_last_name ?? ''; ?>"><br>


                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>
                    <label for="">Purok:</label>
                    <select class=" p-2 w-25 text-left" name="puroks" id="puroks">
                      <option value="Centro, Barangay Tiniguiban">Centro</option>
                      <option value="Hurawan, Barangay Tiniguiban">Huwaran</option>
                      <option value="Kaakbayan, Barangay Tiniguiban">Kaakbayan</option>
                      <option value="New Princesa, Barangay Tiniguiban"> New Princesa</option>
                      <option value="San Franciso I, Barangay Tiniguiban">San Franciso I</option>
                      <option value="San Franciso II, Barangay Tiniguiban">San Franciso II</option>
                      <option value="Sandiwa, Barangay Tiniguiban">Sandiwa</option>
                      <option value="Trece, Barangay Tiniguiban">Trece</option>
                      <option value="Uha, Barangay Tiniguiban">UHA</option>
                    </select>
                    <br>
                    <br>

                    <label for="">Birthplace:</label>
                    <input type="text" class="form-control" name="birthplace"
                      placeholder="Ex. Puerto Princesa City" value="<?php echo $barangay_clearance_birthplace ?>"><br>

                    <label for="">Birthday:</label>
                    <input type="date" class="form-control" name="birthdate" id="birthdate" value="<?php echo $barangay_clearance_birthdate ?? ''; ?>">
                    <br>
                    <label for="">Civil Status:</label>
                    <select class="form-control" onchange="update()" name="civil_status" id="stats">
                      <option value="Married">Married</option>
                      <option value="Widow">Widow</option>
                      <option value="Single">Single</option>
                    </select>
                    <br>
                    <label for="">Period of Residency:</label>
                    <input type="number" min="0" class="form-control" name="residency_period"
                      placeholder="Ex. 3 years" value="<?php echo $barangay_clearance_period_of_residency ?>"><br>

                    <label for="">Purpose:</label>
                    <!-- <input type="text" class="form-control" name="purpose"> -->
                    <input type="text" name="purpose" class="form-control" id="" cols="30" rows="10"
                      placeholder="Ex. Employment" value="<?php echo $barangay_clearance_purpose ?>"></input><br>

                    <!-- <label for="">Duty Officer Full Name:</label>
                  <input type="textarea" class="form-control" name="duty_officer_full_name" placeholder="Ex. Franz Miguel"> -->
                    <button name="barangay_clearance" id="coco" onclick="printIframe()" type="submit">Print</button>
                  </form>
                </div>

                <div id="business_permit_new">
                  <form action="#" method="post" id="form">
                    <label for="businessName">Business name/ Trade Activity:</label>
                    <input type="text" name="businessName" class="form-control" name="business_name"><br>

                    <label for="">Purok:</label><br>
                    <select name="purok" id="purok" onchange="update()">
                      <option value="Centro, Barangay Tiniguiban Puerto Princesa City">Centro</option>
                      <option value="Kaakbayan, Barangay Tiniguiban Puerto Princesa City">Kaakbayan</option>
                      <option value="New Princesa, Barangay Tiniguiban Puerto Princesa City"> New Princesa</option>
                      <option value="San Franciso I, , Barangay Tiniguiban Puerto Princesa City">San Franciso I</option>
                      <option value="San Franciso II, Barangay Tiniguiban Puerto Princesa City">San Franciso II</option>
                      <option value="Sandiwa, Barangay Tiniguiban Puerto Princesa City">Sandiwa</option>
                      <option value="Trece, Barangay Tiniguiban Puerto Princesa City">Trece</option>
                      <option value="Uha, Barangay Tiniguiban Puerto Princesa City">UHA</option>
                    </select>
                    <br>
                    <br>
                    <label for="">Manager / Operator</label>
                    <input type="text" class="form-control" name="manager_operator">
                    <br>
                    <label for="">Address(Manager / Operator)</label>
                    <input type="text" class="form-control" name="manager_operator_address">
                    <br>
                    <button name="business_permit_new" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>





                <div id="business_permit_renew">
                  <form action="#" method="post" id="form">
                    <label for="businessName">Business name/ Trade Activity:</label>
                    <input type="text" class="form-control" name="business_name_renew"><br>
                    <label for="">Purok:</label><br>
                    <select name="purok" id="purok" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>
                    <br>
                    <br>
                    <label for="">Manager / Operator</label>
                    <input type="text" class="form-control" name="manager_operator_renew">
                    <br>
                    <label for="">Address(Manager / Operator)</label>
                    <input type="text" class="form-control" name="manager_operator_address_renew">
                    <!-- <label for="businessIssuedDate">Issued Date:</label>
                     <input type="date" class="form-control" name="business_issued_date"><br> -->
                    <br>
                    <button name="business_permit_renew" onclick="printIframe()" type="submit">Print</button>
                  </form>
                </div>



                <div id="certificate_of_employability">
                  <form action="#" method="post" id="form">

                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. J"><br>


                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>
                    <label for="">Age</label>
                    <input type="number" name="age" class="form-control" placeholder="Ex. 20">

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>
                    <br>
                    <!-- <label for="">Issued Date:</label>
                  <input type="date" class="form-control"> -->

                    <!-- <label for="">Duty Officer Full Name:</label>
                    <input type="text" name="Duty_Officer" class="form-control"> -->
                    <button name="certificate_of_employability" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="certificate_of_income">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. J"><br>



                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>
                    <br>
                    <!-- Update your form field labels and inputs -->
                    <label for="amount">Amount (In Numeric Form)</label>
                    <input type="number" id="amount" name="income_num" class="form-control" maxlength="10">
                    <input type="text" id="amountinwords" name="income_words" value="">

                    <!-- <label for="">Issued Date:</label>
                    <input type="date" class="form-control"> -->

                    <label for="">Duty Officer Full Name:</label>
                    <input type="text" class="form-control">
                    <button name="certificate_of_income" onclick="printIframe()" type="submit">Print</button>
                  </form>
                </div>

                <div id="cohabitation">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. J"><br>


                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="cohabitant1Birthdate">Birthdate:</label>
                    <input type="date" class="form-control" name="bday" id="bday"><br>

                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name1" placeholder="Ex. Barbie"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial1" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name1" placeholder="Ex. J"><br>


                    <label for="cohabitant1Birthdate">Birthdate:</label>
                    <input type="date" class="form-control" name="bday2" id="bday2"><br>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>
                    <br>
                    <br>
                    <!--Month and Year daw-->
                    <label for="dateOfMarriage">Date of marriage:</label>
                    <input type="date" id="date" class="form-control" name="date_of_marriage"><br>
                    <button name="cohabitation" onclick="printIframe()" type="submit">Print</button>
                  </form>


                </div>

                <div id="complaint_certificate">
                  <form action="#" method="post" id="form">
                    <!--With honorifics-->
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>

                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="">Age</label>
                    <input type="number" name="age" class="form-control">

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>

                    <br>

                    <label for="">Date Filed:</label>
                    <input type="date" class="form-control">

                    <!--Respondent Full Name-->
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_namec" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initialc" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_namec" placeholder="Ex. Dela Cruz"><br>



                    <label for="">Suffix:</label>
                    <input type="text" class="form-control"><br>

                    <label for="">Case Number:</label>
                    <input type="number" class="form-control">

                    <label for="">VAWC Official Name</label>
                    <input type="text" class="form-control">
                    <button name="complaint_certificate" onclick="printIframe()" type="submit">Print</button>
                  </form>
                  <!-- <label for="">Issued Date:</label>
                  <input type="date" class="form-control"> -->

                </div>

                <div id="death_certificate">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>


                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr" sub>Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>
                    <label for="deathAge">Age:</label>
                    <input type="number" class="form-control" name="dead_age"><br>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>
                    <br>
                    <br>

                    <label for="dateOfDeath">Date of death:</label>
                    <input type="date" class="form-control" name="date_of_death"><br>

                    <label for="timeOfDeath">Time of death:</label>
                    <input type="time" class="form-control" name="time_of_death"><br>

                    <label for="causeOfDeath">Cause of death:</label>
                    <input type="text" class="form-control" name="cause_of_death"><br>

                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_named" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initiald" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_named" placeholder="Ex. Dela Cruz"><br>

                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="relationshipToDeadPerson">Relationship to the dead person:</label>
                    <input type="text" class="form-control" name="relationship_to_dead_person"><br>

                    <label for="dateRequested">Date requested:</label>
                    <input type="date" class="form-control" name="date_requested"><br>
                    <button name="death_certificate" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="first_time_job_seeker">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>


                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="">Purok:</label><br>
                    <select name="purok" id="purok" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>

                    <label for="residencyPeriod">Period of Residency:</label>
                    <input type="number" class="form-control" name="residency_period"><br>

                    <!--(Day/Month/Year daw)-->
                    <label for="certificationSignedDate">Signed date:</label>
                    <input type="date" class="form-control" name="signed_date"><br>

                    <!--(Month and Year daw)-->
                    <label for="certificationValidationDate">Validation date:</label>
                    <input type="date" class="form-control" name="validation_date"><br>

                    <!--(Full name daw)-->
                    <label for="">Witness</label>
                    <input type="text" class="form-control" name="witness">
                    <button name="first_time_job_seeker" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="indigency_aics">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>

                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>

                    <label for="indigencyIssuedDate">Issued Date:</label>
                    <input type="date" class="form-control" name="issued_date"><br>
                    <button name="indigency_aics" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="indigency">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>

                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="">Age</label>
                    <input type="number" class="form-control" name="age">

                    <label for="">Civil Status</label>
                    <select name="" id="civil" onchange="updateText()" class="form-control">
                      <option value="">Select Civil Status</option>
                      <option value="Married">Married</option>
                      <option value="Single">Single</option>
                      <option value="Widow">Widow</option>
                    </select>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select><br>
                    <button name="indigency" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="lot_ownership">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>

                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>

                    <ul style="list-style: none;">
                      <li>
                        <input type="checkbox">
                        <label for="">Claimant</label>
                      </li>
                      <li>
                        <input type="checkbox">
                        <label for="">Beneficiary</label>
                      </li>
                      <li>
                        <input type="checkbox">
                        <label for="">Actual Occupant</label>
                      </li>
                    </ul>

                    <label for="lotNumber">Lot Number:</label>
                    <input type="number" class="form-control" name="lot_number" placeholder="Lot No. 123"><br>

                    <label for="lotAreaNumerical">Area Measurement (Numerical Form):</label>
                    <input type="number" class="form-control" name="lot_area_numerical"><br>

                    <!-- <label for="lotAreaWord">Area Measurement (Word Form):</label>
                  <input type="text" class="form-control"  disabled><br>
               -->
                    <label for="lotLocationAddress">Location Address:</label>
                    <input type="text" class="form-control" name="lot_location_address"><br>
                    <button name="lot_ownership" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="Oathtaking"> ⁡⁢⁣⁢
                  <!-- ‍wala sa database table -->⁡⁡
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>



                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="applicantAge">Age:</label>
                    <input type="number" class="form-control" name="age"><br>

                    <label for="applicantResidencyPeriod">Period of Residency:</label>
                    <input type="number" class="form-control" name="residency_period"><br>

                    <label for="applicantSignedDate">Signed date:</label>
                    <input type="date" class="form-control" name="signed_date"><br>

                    <!--For Guardian-->
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="guardian_first_name"><br>

                    <label for="">Middle Name:</label>
                    <input type="text" class="form-control" name="guardian_middle_name"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="guardian_last_name"><br>

                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="guardianAge">Guardian Age:</label>
                    <input type="number" class="form-control" name="guardian_age"><br>

                    <!-- <label for="guardianOption">Option (Parent/ Guardian):</label>
                  <input type="text" class="form-control" ><br> -->

                    <!-- <label for="applicantName">Name of Applicant:</label>
                  <input type="text" class="form-control" ><br> -->

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>

                    <label for="applicantResidencyPeriod2">Period of Residency:</label>
                    <input type="number" class="form-control" name="residency_period"><br>

                    <!-- <label for="guardianFullName2">Guardian Full Name:</label>
                  <input type="text" class="form-control" ><br> -->
                    <button name="Oathtaking" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="transfer_of_residency">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>


                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class="form-control text-left" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br>

                    <label for="">Purok:</label>
                    <select name="puroks" class="form-control" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select><br>

                    <label for="">Current Address:</label>
                    <input type="text" class="form-control" name="current_address"
                      placeholder="Ex. Previous Address"><br>

                    <label for="">Previous Address:</label>
                    <input type="text" class="form-control" name="previous_address"
                      placeholder="Ex. Previous Address"><br>

                    <label for="">Nationality</label>
                    <input type="text" class="form-control" name="nationality" placeholder="Filipino"><br>

                    <label for="">Civil Status:</label>
                    <select class="form-control" onchange="update()" name="civil_status" id="stats">
                      <option value="Married">Married</option>
                      <option value="Widow">Widow</option>
                      <option value="Single">Single</option>
                    </select><br>

                    <label for="">Purpose:</label>
                    <input type="text" name="purpose" class="form-control" id="" cols="30" rows="10"
                      placeholder="Ex. Moving to another country"></input>

                    <input type="date" name="issueddate" style="display:none; position:absolute;">

                    <hr>

                    <button name="transfer_of_residency" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>
              </div>
              <!-- End General Form Elements -->

            </div>
          </div>

        </div>
        <div class="col-lg-6">

          <div class="card bg-light">
            <div class="card-body d-flex justify-content-center align-items-center">
              <h5 class="card-title">View Certificate</h5>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center">
              <iframe id="myIframe" class="col-lg-12" width="100%" height="100%" style="border: none;"></iframe>
            </div>
          </div>
          <div class="card-body d-flex justify-content-center align-items-center">
            <h5 class="card-title">View Certificate</h5>
            <?php
            if (isset($_POST["barangay_clearance"])) {
              echo "<p>business_permit_new</p>";
            }

            ?>
          </div>
          <div class="card-body d-flex justify-content-center align-items-center">
            <iframe id="myIframe" class="col-lg-12" width="100%" height="100%" style="border: none;"></iframe>
          </div>
        </div>

      </div>
      </div>
      </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="credits fs-5">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="about.php">&copy; Cayabyabers</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script>

  </script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/main2.js"></script>
  <script>// Function to convert number to words
    function numberToWords(num) {
      const ones = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];
      const tens = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
      const teens = ['Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];

      function convertLessThanThousand(n) {
        if (n === 0) return '';

        let result = '';

        if (n >= 100) {
          result += ones[Math.floor(n / 100)] + ' Hundred ';
          n %= 100;
        }

        if (n >= 20) {
          result += tens[Math.floor(n / 10)] + ' ';
          n %= 10;
        } else if (n >= 10) {
          result += teens[n - 10] + ' ';
          return result;
        }

        if (n > 0) {
          result += ones[n] + ' ';
        }

        return result;
      }

      if (num === 0) return 'Zero';

      let result = '';
      let billion = Math.floor(num / 1000000000);
      let million = Math.floor((num % 1000000000) / 1000000);
      let thousand = Math.floor((num % 1000000) / 1000);
      let remainder = num % 1000;

      if (billion) result += convertLessThanThousand(billion) + 'Billion ';
      if (million) result += convertLessThanThousand(million) + 'Million ';
      if (thousand) result += convertLessThanThousand(thousand) + 'Thousand ';
      if (remainder) result += convertLessThanThousand(remainder);

      return result.trim() + ' Pesos Only';
    }

    // Function to handle amount input
    document.addEventListener('DOMContentLoaded', function () {
      const amountInput = document.getElementById('amount');
      const amountInWordsInput = document.getElementById('amountinwords');

      amountInput.addEventListener('input', function (e) {
        // Remove any non-numeric characters
        let value = this.value.replace(/[^\d]/g, '');

        if (value) {
          // Convert to number
          const numValue = parseInt(value);

          // Update amount in words
          amountInWordsInput.value = numberToWords(numValue);

          // Store original number value
          this.value = value;
        } else {
          amountInWordsInput.value = '';
        }
      });
    });
  </script>
  <script>
    // Select all input elements of type "text"
    const today = new Date();
    const formattedDate = today.toISOString().split('T')[0];

    document.getElementById('issueddate').value = formattedDate;

  </script>
</body>

</html>