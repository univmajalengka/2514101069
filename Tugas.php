
<?php
// Fungsi untuk menghitung diskon berdasarkan total belanja
function hitungDiskon($totalBelanja) {
    $diskon = 0;

    if ($totalBelanja >= 100000) {
        $diskon = 0.1 * $totalBelanja;
    } elseif ($totalBelanja >= 50000) {
        $diskon = 0.05 * $totalBelanja;
    }

    return $diskon;
}

// Contoh penggunaan fungsi
$totalBelanja = 150000;

// Memanggil fungsi hitungDiskon
$diskon = hitungDiskon($totalBelanja);

// Menghitung total pembayaran
$totalBayar = $totalBelanja - $diskon;

// Menampilkan hasil
echo "Total belanja: Rp. " . number_format($totalBelanja, 0, ',', '.') . "<br>";
echo "Diskon: Rp. " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total yang harus dibayar: Rp. " . number_format($totalBayar, 0, ',', '.') . "<br>";
?>
