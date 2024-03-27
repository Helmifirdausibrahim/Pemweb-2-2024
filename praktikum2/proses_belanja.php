<?php
//tangkap input form
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

//array harga produk
$harga = [
    'TV' => 4200000,
    'HP' => 10000000000,
    'LAPTOP' => 12000000,
    'MESIN CUCI' => 20000000
];

//hitung total harga {jumlah * harga produk}
$total = $jumlah * $harga[$produk];

//format rupiah
$total = number_format($total);

echo "nama Customer: $customer";
echo "<br> Produk: $produk";
echo "<br> Jumlah Beli: $jumlah";
echo "<br> Total Belanja: Rp $total";