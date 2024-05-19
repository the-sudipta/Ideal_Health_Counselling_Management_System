<?php

require_once 'db_connect.php';


function findAllMedicalLabReport()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `test`';

    try {
        $result = $conn->query($selectQuery);

        // Check if the query was successful
        if (!$result) {
            throw new Exception("Query failed: " . $conn->error);
        }

        $rows = array();

        // Fetch rows one by one
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        // Check for an empty result set
        if (empty($rows)) {
            throw new Exception("Sorry Medical test report Table is Empty");
        }

        return $rows;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return null;
    } finally {
        // Close the database connection
        $conn->close();
    }
}


function findMedicalLabReportByID($id) {

    $conn = db_conn();

    // Use prepared statement to prevent SQL injection
    $selectQuery = 'SELECT * FROM `test` WHERE `id` = ?';

    try {
        $stmt = $conn->prepare($selectQuery);

        // Bind parameters
        $stmt->bind_param("i", $id);

        // Execute the statement
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Fetch the user as an associative array
        $user = $result->fetch_assoc();

        // Close the statement
        $stmt->close();
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }

    return $user ?: null;
}

function findMedicalLabReportByUserID($id) {

    $conn = db_conn();

    // Use prepared statement to prevent SQL injection
    $selectQuery = 'SELECT * FROM `test` WHERE `user_id` = ?';

    try {
        $stmt = $conn->prepare($selectQuery);

        // Bind parameters
        $stmt->bind_param("i", $id);

        // Execute the statement
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Fetch the user as an associative array
        $user = $result->fetch_assoc();

        // Close the statement
        $stmt->close();
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }

    return $user ?: null;
}


function createMedicalLabReport($patients_name, $patients_ailment,$test_name,$test_category,$lab_test_date_conducted, $user_id) {
    $conn = db_conn();

    // Hash the password using a secure hashing algorithm (e.g., password_hash)
//    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Construct the SQL query
    $insertQuery = "INSERT INTO `test` (patients_name, patients_ailment,test_name,test_category,lab_test_date_conducted, user_id) VALUES (?, ?, ?, ?, ?, ?)";

    try {
        // Prepare the statement
        $stmt = $conn->prepare($insertQuery);

        // Check if the prepare statement was successful
        if (!$stmt) {
            throw new Exception("Prepare statement failed: " . $conn->error);
        }
        // Bind parameters
        $stmt->bind_param('sssssi', $patients_name, $patients_ailment,$test_name,$test_category,$lab_test_date_conducted, $user_id);

        // Execute the query
        $stmt->execute();

        // Return the ID of the newly inserted user
        $newUserId = $conn->insert_id;

        // Close the statement
        $stmt->close();

        return $newUserId;
    } catch (Exception $e) {
        // Handle the exception, you might want to log it or return false
        echo "Error: " . $e->getMessage();
        return -1;
    } finally {
        // Close the database connection
        $conn->close();
    }
}

function updateMedicalLabReport($patients_name, $patients_ailment,$test_name,$test_category,$lab_test_date_conducted,$id)
{
    $conn = db_conn();

    // Construct the SQL query
    $updateQuery = "UPDATE `test` SET 
                    patients_name = ?, 
                    patients_ailment = ?, 
                    test_name = ?,
                    test_category = ?,
                    lab_test_date_conducted = ?
                    WHERE id = ?";

    try {
        // Prepare the statement
        $stmt = $conn->prepare($updateQuery);

        // Check if the prepare statement was successful
        if (!$stmt) {
            throw new Exception("Prepare statement failed: " . $conn->error);
        }

        // Bind parameters
        $stmt->bind_param('sssssi',$patients_name, $patients_ailment,$test_name,$test_category,$lab_test_date_conducted,$id);

        // Execute the query
        $stmt->execute();

        // Return true if the update is successful
        return true;
    } catch (Exception $e) {
        // Handle the exception, you might want to log it or return false
        echo "Error: " . $e->getMessage();
        return false;
    } finally {
        // Close the statement
        $stmt->close();

        // Close the database connection
        $conn->close();
    }
}

function deleteMedicalLabReport($id) {
    $conn = db_conn();

    // Construct the SQL query
    $updateQuery = "DELETE FROM `test` WHERE id = ?";

    try {
        // Prepare the statement
        $stmt = $conn->prepare($updateQuery);

        // Check if the prepare statement was successful
        if (!$stmt) {
            throw new Exception("Prepare statement failed: " . $conn->error);
        }

        // Bind parameter
        $stmt->bind_param('i', $id);

        // Execute the query
        $stmt->execute();

        // Return true if the update is successful
        return true;
    } catch (Exception $e) {
        // Handle the exception, you might want to log it or return false
        echo "Error: " . $e->getMessage();
        return false;
    } finally {
        // Close the statement
        $stmt->close();

        // Close the database connection
        $conn->close();
        $data['status'] = "De-Activated";
    }
}