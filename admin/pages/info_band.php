<?php
$id = $_GET['id'];

$query = "SELECT * FROM tbl_band WHERE
kode_band='$id'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);

var_dump($data);
