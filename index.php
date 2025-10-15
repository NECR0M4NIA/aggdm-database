<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>

    <h1>AGG<span style="color: red;">D</span>M - Database</h1>

    <h2>Characters</h2>

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

    <h2>Districts (Center)</h2>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include 'data-config.php';

    $sql = "SELECT * FROM center;";
    $results = mysqli_query($conn, $sql);

    if ($results->num_rows > 0) {
        echo "<table>";
        echo "<tr> <th>ID</th> <th>Name</th> <th>Style</th> <th>Population Count</th> <th>Description</th> </tr>";

        while ($row = mysqli_fetch_assoc($results)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['style'] . "</td>";
            echo "<td>" . $row['population_count'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    ?>

</body>

</html>