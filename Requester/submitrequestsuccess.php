<?php
define('TITLE', 'Success');
define('PAGE', 'SubmitRequest');
include('includes/header.php'); 
include('../dbConnection.php'); 
session_start();

// Check if user is logged in
if (isset($_SESSION['is_login']) && $_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    echo "<script> location.href='RequesterLogin.php';</script>";
    exit;
}

// Check if myid is set in session
if (isset($_SESSION['myid'])) {
    $requestID = $_SESSION['myid'];
    
    // Prepare SQL query
    $sql = "SELECT * FROM submitrequest_tb WHERE request_id = ?";
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param("i", $requestID);
    
    // Execute the query
    $stmt->execute();
    
    // Get result
    $result = $stmt->get_result();
    
    // Check if a request was found
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        echo "<div class='ml-5 mt-5'>
        <table class='table'>
            <tbody>
                <tr>
                    <th>Request ID</th>
                    <td>".$row['request_id']."</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>".$row['requester_name']."</td>
                </tr>
                <tr>
                    <th>Email ID</th>
                    <td>".$row['requester_email']."</td>
                </tr>
                <tr>
                    <th>Request Info</th>
                    <td>".$row['request_info']."</td>
                </tr>
                <tr>
                    <th>Request Description</th>
                    <td>".$row['request_desc']."</td>
                </tr>
                <tr>
                    <td>
                        <form class='d-print-none'>
                            <input class='btn btn-danger' type='button' value='Print' onClick='window.print()'>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>";
    } else {
        echo "<div class='alert alert-danger'>No request found with this ID.</div>";
    }

    // Close statement
    $stmt->close();
} else {
    echo "<div class='alert alert-danger'>Invalid request ID.</div>";
}

// Include footer
include('includes/footer.php');
$conn->close();
?>

