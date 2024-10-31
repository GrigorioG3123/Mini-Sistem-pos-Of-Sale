<?php
$mysqli = new mysqli('localhost', 'root', '', 'pos');

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$action = $_GET['action'];

if ($action === 'getItem') {
    $barcode = $_GET['barcode'];
    $stmt = $mysqli->prepare("SELECT nama_barang, harga FROM tb_barang WHERE barcode = ?");
    $stmt->bind_param("s", $barcode);
    $stmt->execute();
    $result = $stmt->get_result();
    $item = $result->fetch_assoc();

    if ($item) {
        echo json_encode(['success' => true, 'item' => $item]);
    } else {
        echo json_encode(['success' => false]);
    }

    $stmt->close();
}
$mysqli->close();
?>
