<?php

require_once 'dbConfig.php';

function insertIntoStallRecords($pdo, $first_name, $last_name, $email, $shop_name, $contact_no,
$stall_number, $event_date, $date_added){

    $sql = "INSERT INTO popupShop (first_name, last_name, email, shop_name, contact_no, stall_number,
    event_date, date_added) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $email, $shop_name, $contact_no,
    $stall_number, $event_date, $date_added]);

    if ($executeQuery){
        return true;
    }
}

function seeAllStallRecords($pdo){
    $sql = "SELECT * FROM popupShop";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery){
        return $stmt->fetchAll();
    }
}