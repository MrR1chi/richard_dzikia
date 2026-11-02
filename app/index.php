
<?php
$host = "db";
$user = "richard";
$password = "richard123";
$database = "kool";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Andmebaasi ühenduse viga: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

$result = $conn->query("SELECT * FROM kasutajad");
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Docker PHP ja MySQL</title>
</head>
<body>

<h1>Docker PHP ja MySQL</h1>
<h2>Kasutajate nimekiri</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nimi</th>
        <th>Vanus</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row["id"] ?></td>
        <td><?= htmlspecialchars($row["nimi"]) ?></td>
        <td><?= $row["vanus"] ?></td>
    </tr>
    <?php endwhile; ?>
</table>

<h2>PHP info</h2>
<?php phpinfo(); ?>

</body>
</html>

<?php $conn->close(); ?>
