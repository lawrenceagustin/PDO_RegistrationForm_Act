<?php

require_once 'dbConfig.php';
require_once 'models.php';

if(isset($_POST['insertNewShopBtn'])){
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['emailAdress'];
    $shop_name = $_POST['shopName'];
    $contact_no = $_POST['contactNumber'];
    $stall_number = $_POST['stallNumber'];
    $event_date= $_POST['eventDate'];
    $date_added = $_POST['dateAdded'];

    $query = insertIntoStallRecords($pdo, $first_name, $last_name, $email, $shop_name,  $contact_no, $stall_number,
    $event_date, $date_added);

    if($query){
        header("Location: ../index.php");
    }
    else{
        echo "Query failed";
    }
}

?>