<?php require_once 'core/dbConfig.php';?>
<?php require_once 'core/models.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop-up Shop Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php $getUserByID = getUserByID($pdo, $_GET['UserID']); ?>
    <form action="core/handleForms.php?UserID=<?php echo $_GET['UserID']; ?>" method="POST">
      <div class="StallContainer">
        <p>
          <label for="firstName">First Name:</label> 
          <input type="text" name="firstName" value="<?php echo $getUserByID['first_name']; ?>">
        </p>
        <p>
          <label for="lastName">Last Name:</label> 
          <input type="text" name="lastName" value="<?php echo $getUserByID['last_name']; ?>">
        </p>
        <p>
          <label for="emailAddress">E-mail:</label>
          <input type="text" name="emailAddress" value="<?php echo $getUserByID['email']; ?>">
        </p>
        <p>
          <label for="shopName">Shop Name:</label>
          <input type="text" name="shopName" value="<?php echo $getUserByID['shop_name']; ?>">
        </p>
        <p>
          <label for="contactNumber">Contact no.:</label>
          <input type="text" name="contactNumber" value="<?php echo $getUserByID['contact_no']; ?>">
        </p>
        <p>
          <label for="stallNumber">Stall no.:</label>
          <input type="text" name="stallNumber"value="<?php echo $getUserByID['stall_number']; ?>"></p>
        <p>
          <label for="eventDate">Event Date:</label>
          <input type="date" name="eventDate" value="<?php echo $getUserByID['event_date']; ?>"></p>
        <br><br>
            <input type="submit" id="btn" name="editShopBtn">
        </p>
      </div>  
    </form>
</body>
</html>