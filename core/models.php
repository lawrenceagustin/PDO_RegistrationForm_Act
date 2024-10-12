<?php

require_once 'dbConfig.php';

function insertIntoStallRecords($pdo, $first_name, $last_name, $email, $shop_name, $contact_no,
$stall_number, $event_date, $DateAdded){

    $sql = "INSERT INTO popupshop (first_name, last_name, email, shop_name, contact_no, stall_number,
    event_date, DateAdded) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $email, $shop_name, $contact_no,
    $stall_number, $event_date, $DateAdded]);

    if ($executeQuery){
        return true;
    }
}

function seeAllStallRecords($pdo){
    $sql = "SELECT * FROM popupshop";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery){
        return $stmt->fetchAll();
    }
}

function getUserByID($pdo, $UserID){
    $sql = "SELECT * FROM popupshop WHERE UserID = ?";
    $stmt = $pdo->prepare($sql);
    if($stmt->execute([$UserID])){
        return $stmt->fetch();
    }
}

function updateAStall($pdo, $first_name, $last_name, $email, $shop_name, $contact_no,
$stall_number, $event_date, $DateAdded, $UserID){
    $sql = "UPDATE popupshop
                SET first_name = ?,
                    last_name = ?,
                    email = ?,
                    shop_name = ?,
                    contact_no = ?, 
                    stall_number = ?,
                    event_date = ?,
                    DateAdded = ?
            WHERE UserID = ?";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $email, $shop_name, $contact_no,
        $stall_number, $event_date, $DateAdded, $UserID]);
    
    if ($executeQuery){
        return true;
    }
}

function deleteAStall($pdo, $UserID){
    $sql = "DELETE FROM popupshop WHERE UserID = ?";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$UserID]);

    if($executeQuery){
        return true;
    }
}
