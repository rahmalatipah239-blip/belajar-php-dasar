<?php
$orang = [
    ["Nama" => "dani", "Umur" => 20],
    ["Nama" => "siti", "Umur" => 22],
    ["Nama" => "fajar", "Umur" => 28]
];

echo $orang[0]["Nama"] . " berumur " . $orang[0]["Umur"] . " tahun.<br>"; // Output: dani berumur 20 tahun.
echo $orang[1]["Nama"] . " berumur " . $orang[1]["Umur"] . " tahun.<br>"; // Output: siti berumur 22 tahun.
?>