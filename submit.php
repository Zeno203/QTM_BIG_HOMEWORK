<?php
$conn = mysqli_connect("localhost", "root", "mypassword", "congty");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$mssv = $_POST["mssv"];
$hoten = $_POST["hoten"];

$sql = "INSERT INTO SinhVienThucHien (MSSV, HOTEN) VALUES ('$mssv', '$hoten')";

if (mysqli_query($conn, $sql)) {
    echo "Record created successfully";
    mysqli_close($conn);
    sleep(3); // add a 3-second delay
    header("Location: display.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
