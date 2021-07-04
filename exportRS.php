<?php
include "koneksi1.php";
header('Content-Type: application/json');
$query = "SELECT id_penerbangan AS ID, dari, ke, jam_berangkat AS depart, jam_tiba AS arrive, harga AS price FROM tabel_penerbangan;";
$hasil = mysqli_query($conn, $query);
$jumField = mysqli_num_fields($hasil);
while ($data = mysqli_fetch_assoc($hasil)) {
    $rows[] = $data;
}
$data1 = array('flight' => $rows);
echo json_encode($data1);

?>