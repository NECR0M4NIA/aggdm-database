<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">

</head>

<body>

    <h1>AGGDM - Database</h1>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include 'data-config.php';

    $sql = "SELECT * FROM characters";
    $results = $conn->query($sql);

    if ($results->num_rows > 0) {
        echo "<table>";
        echo "<tr> <th>ID</th> <th>Name</th> <th>Gender</th> <th>Is Muted</th> <tr>";
        while ($row = $results->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . ($row['is_muted'] ? 'Yes' : 'No') . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No results found.</p>";
    }

    ?>

</body>

</html>