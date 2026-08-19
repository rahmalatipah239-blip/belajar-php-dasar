<?php

// 1. MEMBUAT CLASS
class Produk {

    // 2. MEMBUAT PROPERTY (Nama & Harga)
    public $nama = "Sepatu";
    public $harga = 50000;

    // 3. MEMBUAT METHOD / FUNCTION
    public function halo(){
        echo "Produk " . $this->nama . " harganya adalah Rp " . $this->harga;
    }

}

// 4. MEMBUAT OBJECT (Instansiasi)
$produk = new Produk();

// Menampilkan Property Nama & Harga
echo $produk->nama;
echo "<br>";
echo $produk->harga;

echo "<br><br>";

// Memanggil Method
$produk->halo();