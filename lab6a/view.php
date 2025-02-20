<?php

require_once 'FileUtility.php';

$people = FileUtility::readFromFile('persons.csv');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Records</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Person Records</h1>
    <table>
        <thead>
            <tr>
                <th>UUID</th>
                <th>Title</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Street Address</th>
                <th>Barangay</th>
                <th>Municipality</th>
                <th>Province</th>
                <th>Country</th>
                <th>Phone Number</th>
                <th>Mobile Number</th>
                <th>Company Name</th>
                <th>Company Website</th>
                <th>Job Title</th>
                <th>Favorite Color</th>
                <th>Birthdate</th>
                <th>Email Address</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $person): ?>
                <tr>
                    <?php foreach ($person as $data): ?>
                        <td><?php echo htmlspecialchars($data); ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
