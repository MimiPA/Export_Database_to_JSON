<?php
include "koneksi3.php";
header('Content-Type: application/json');
$query = "SELECT penerbangan.kode_penerbangan AS ID, dari, ke, berangkat AS depart, tiba AS arrive, harga AS price FROM penerbangan INNER JOIN jadwal ON penerbangan.kode_penerbangan = jadwal.kode_penerbangan;";
$hasil = mysqli_query($conn, $query);
$jumField = mysqli_num_fields($hasil);
while ($data = mysqli_fetch_assoc($hasil)) {
    $rows[] = $data;
}
$data1 = array('flight' => $rows);
echo json_encode($data1);

?>