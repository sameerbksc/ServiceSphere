<?php
session_start();
define('TITLE', 'Success');
define('PAGE', 'assets'); 

// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('includes/header.php'); 
include('../dbConnection.php');

// Check if admin is logged in
if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
} else {
  echo "<script> location.href='login.php'; </script>";
}

// Fetch customer details based on session's myid
$sql = "SELECT * FROM customer_tb WHERE custid = {$_SESSION['myid']}";
$result = $conn->query($sql);

// Check if the query was successful and data exists
if($result && $result->num_rows == 1){
  $row = $result->fetch_assoc();
  echo "
    <div class='ml-5 mt-5'>
      <h3 class='text-center'>Customer Bill</h3>
      <table class='table'>
        <tbody>
          <tr>
            <th>Customer ID</th>
            <td>".$row['custid']."</td>
          </tr>
          <tr>
            <th>Customer Name</th>
            <td>".$row['custname']."</td>
          </tr>
          <tr>
            <th>Address</th>
            <td>".$row['custadd']."</td>
          </tr>
          <tr>
            <th>Product</th>
            <td>".$row['cpname']."</td>
          </tr>
          <tr>
            <th>Quantity</th>
            <td>".$row['cpquantity']."</td>
          </tr>
          <tr>
            <th>Price Each</th>
            <td>".$row['cpeach']."</td>
          </tr>
          <tr>
            <th>Total Cost</th>
            <td>".$row['cptotal']."</td>
          </tr>
          <tr>
            <th>Date</th>
            <td>".$row['cpdate']."</td>
          </tr>
          <tr>
            <td>
              <form class='d-print-none'>
                <input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'>
              </form>
            </td>
            <td><a href='assets.php' class='btn btn-secondary d-print-none'>Close</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  ";
} else {
  // Output a message if the query failed or no data found
  echo "<div class='alert alert-danger mt-5 ml-5'>No Record Found or Query Failed</div>";
}

include('includes/footer.php'); 
$conn->close();
?>

