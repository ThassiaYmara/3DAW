<?php
$mysqli = new mysqli("localhost", "root", "", "bd");
if($mysqli->connect_error) {
  exit('Não foi possível conectar');
}

$sql = "SELECT id, name
FROM estados WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<td>" . $id . "</td>";
echo "<th>Name</th>";
echo "<td>" . $name . "</td>";
echo "</tr>";
echo "</table>";
?>