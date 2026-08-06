<?php
$ukuran = "L";

switch ($ukuran) {
    case "S":
        echo "Ukuran Small (Kecil)";
        break;
    case "M":
        echo "Ukuran Medium (Sedang)";
        break;
    case "L":
        echo "Ukuran Large (Besar)";
        break;
    default:
        echo "Ukuran tidak ditemukan";
}