<?php

require_once 'dbConfig.php';
require_once 'models.php';

if(isset($_POST['insertNewShopBtn'])){
    $first_name = trim($_POST['firstName']);
    $last_name = trim($_POST['lastName']);
    $email = trim($_POST['emailAddress']);
    $shop_name = trim($_POST['shopName']);
    $contact_no = trim($_POST['contactNumber']);
    $stall_number = trim($_POST['stallNumber']);
    $event_date= trim($_POST['eventDate']);
    $DateAdded = date("Y-m-d");

    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($shop_name) && !empty($contact_no) && !empty($stall_number) && !empty($event_date)){
        $query = insertIntoStallRecords($pdo, $first_name, $last_name, $email, $shop_name,  $contact_no, $stall_number,
        $event_date, $DateAdded);
        
        if($query){
            header("Location: ../index.php");
            exit;
        }
        else{
            echo "Query failed";
        }
    }
    else{
        echo"Make sure that no fields are empty";
    };
        
}

if(isset($_POST['editShopBtn'])){
    $UserID = $_GET['UserID'];
    $first_name = trim($_POST['firstName']);
    $last_name = trim($_POST['lastName']);
    $email = trim($_POST['emailAddress']);
    $shop_name = trim($_POST['shopName']);
    $contact_no = trim($_POST['contactNumber']);
    $stall_number = trim($_POST['stallNumber']);
    $event_date= trim($_POST['eventDate']);
    $DateAdded = date("Y-m-d");

    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($shop_name) && !empty($contact_no) && !empty($stall_number) && !empty($event_date)){
        $query = updateAStall($pdo, $first_name, $last_name, $email, $shop_name,  $contact_no, $stall_number,
        $event_date, $DateAdded, $UserID);
        
        if($query){
            header("Location: ../index.php");
            exit;
        }
        else{
            echo "Query failed";
        }
    }
    else{
        echo"Make sure that no fields are empty";
    };
}

if (isset($_POST['deleteStallBtn'])){
    $UserID = $_GET['UserID'];
    $query = deleteAStall($pdo, $UserID);
    if($query){
        header("Location: ../index.php");
        exit;
    }
    else{
        echo "Deletion failed";
    }
}
?>
