<!DOCTYPE html>
<html>
<body>

<h2>Sinh viên thực hiện</h2>

<table border="1">
  <tr>
    <th>MSSV</th>
    <th>HOTEN</th>
  </tr>

<?php
$conn = mysqli_connect("localhost", "root", "mypassword", "congty");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM SinhVienThucHien";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>" . $row["MSSV"]. "</td><td>" . $row["HOTEN"]. "</td></tr>";
}
mysqli_close($conn);
?>
</table>
