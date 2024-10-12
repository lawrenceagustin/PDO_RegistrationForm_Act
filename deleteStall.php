<?php require_once 'core/dbConfig.php';?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop-up Shop Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Are you sure you want to delete this user?</h1>
  <?php $getUserByID = getUserByID($pdo, $_GET['UserID']);?>
  <form action="core/handleForms.php?UserID=<?php echo $_GET['UserID']; ?>" method="POST">

    <div class="StallContainer">
      <p>First Name: <?php echo $getUserByID['first_name']; ?></p>
      <p>Last Name: <?php echo $getUserByID['last_name']; ?></p>
      <p>E-mail: <?php echo $getUserByID['email']; ?></p>
      <p>Shop Name: <?php echo $getUserByID['shop_name']; ?></p>
      <p>Contact no.: <?php echo $getUserByID['contact_no']; ?></p>
      <p>Stall no.: <?php echo $getUserByID['stall_number']; ?></p>
      <p>Event Date: <?php echo $getUserByID['event_date']; ?></p>
      <input type="submit" name="deleteStallBtn" value = "Delete">

    </div>
  </form>
</body>
</html>
