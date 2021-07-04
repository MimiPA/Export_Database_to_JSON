<?php
include "koneksi2.php";
header('Content-Type: application/json');
$query = "SELECT flight.flightID AS ID, dari, ke, depart, arrive, price FROM flight INNER JOIN flighttime ON flight.flightID = flighttime.flightID;";
$hasil = mysqli_query($conn, $query);
$jumField = mysqli_num_fields($hasil);
while ($data = mysqli_fetch_assoc($hasil)) {
    $rows[] = $data;
}
$data1 = array('flight' => $rows);
echo json_encode($data1);

?>