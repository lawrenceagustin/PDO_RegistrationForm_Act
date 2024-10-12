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
    <h3>Welcome to the Pop-up shop stall registration. Input your details here to register.</h3>
    <form action="core/handleForms.php" method="POST">
        <p><label for="firstName">First Name:</label> <input type="text" name="firstName"></p>
        <p><label for="lastName">Last Name:</label> <input type="text" name="lastName"></p>
        <p><label for="emailAddress">E-mail:</label> <input type="text" name="emailAddress"></p>
        <p><label for="shopName">Shop Name:</label> <input type="text" name="shopName"></p>
        <p><label for="contactNumber">Contact no.:</label> <input type="text" name="contactNumber"></p>
        <p><label for="stallNumber">Stall no.:</label> <input type="text" name="stallNumber"></p>
        <p><label for="eventDate">Event Date:</label> <input type="date" name="eventDate" ></p>
        <br><br>
            <input type="submit" id="btn" name="insertNewShopBtn">
        </p>
    </form>
    <a href="testGetVariable.php?lastName=Agustin&shopName=nekoHanekawa">Test Get Superglobal</a>

    <table>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>E-mail</th>
            <th>Shop Name</th>
            <th>Contact no.</th>
            <th>Stall no.</th>
            <th>Event Date</th>
            <th>Date Added</th>
        </tr>

        <?php $seeAllStallRecords = seeAllStallRecords($pdo); ?>
        <?php foreach ($seeAllStallRecords as $row) { ?>
            <tr>
                <td><?php echo $row['UserID']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['shop_name']; ?></td>
                <td><?php echo $row['contact_no']; ?></td>
                <td><?php echo $row['stall_number']; ?></td>
                <td><?php echo $row['event_date']; ?></td>
                <td><?php echo $row['DateAdded']; ?></td>
                <td>
                    <a href="editStall.php?UserID=<?php echo $row['UserID'];?>">Edit</a>
                    <a href="deleteStall.php?UserID=<?php echo $row['UserID'];?>">Delete</a>
                </td>
            </tr
        <?php } ?>
    </table>
</body>
</html>
