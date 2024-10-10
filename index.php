<?php require_once 'core/dbConfig.php';?>
<?php require_once 'core/model.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        input{
            font-size: 1.5cm;
            height: 50px;
            width: 200px;
        }
    </style>
</head>
<body>
    <h3>Welcome to the Pop-up shop stall. Input your details here to register.</h3>
    <form action="core/handleForms.php" method="POST">
        <p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
        <p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
        <p><label for="emailAddress">E-mail</label> <input type="text" name="emailAddress"></p>
        <p><label for="shopName">Shop Name</label> <input type="text" name="shopName"></p>
        <p><label for="contactNumber">Contact no.</label> <input type="text" name="contactNumber"></p>
        <p><label for="stallNumber">Stall no.</label> <input type="text" name="stallNumber"></p>
        <p><label for="eventDate">Event Date</label> <input type="text" name="eventDate"></p>
        <p><label for="dateAdded">Date Added</label> <input type="text" name="dateAdded">
            <input type="submit" name="insterNewShopBtn">
        </p>
    </form>

    <table style="width:50%; margin-top: 50px;">
        <tr>
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
                <td><?php echo $row['firstName']; ?></td>
                <td><?php echo $row['lastName']; ?></td>
                <td><?php echo $row['emailAddress']; ?></td>
                <td><?php echo $row['shopName']; ?></td>
                <td><?php echo $row['contactNumber']; ?></td>
                <td><?php echo $row['stallNumber']; ?></td>
                <td><?php echo $row['eventDate']; ?></td>
                <td><?php echo $row['dateAdded']; ?></td>
            </tr
        <?php } ?>
    </table>
</body>
</html>