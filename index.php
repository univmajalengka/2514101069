
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Menghitung Diskon</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            width: 350px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2563eb;
        }

        input, button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            box-sizing: border-box;
            border-radius: 6px;
        }

        input {
            border: 1px solid #ccc;
        }

        button {
            background: #2563eb;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        .hasil {
            background: #eff6ff;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }

        .total {
            color: #16a34a;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Program Menghitung Diskon</h2>

    <form method="POST">
        <label>Masukkan Total Belanja (Rp)</label>

        <input type="number" name="totalBelanja"
               placeholder="Contoh: 120000"
               min="0" required>

        <button type="submit" name="hitung">
            Hitung Diskon
        </button>
    </form>

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

    // Contoh penggunaan fungsi untuk menghitung diskon
    if (isset($_POST['hitung'])) {

        $totalBelanja = (int) $_POST['totalBelanja'];

        // Memanggil fungsi untuk menghitung diskon
        $diskon = hitungDiskon($totalBelanja);

        // Menghitung total yang harus dibayar
        $totalBayar = $totalBelanja - $diskon;

    ?>

    <div class="hasil">

        <h3>Hasil Perhitungan</h3>

        <p>Total belanja:
            Rp. <?php echo number_format($totalBelanja, 0, ',', '.'); ?>
        </p>

        <p>Diskon:
            Rp. <?php echo number_format($diskon, 0, ',', '.'); ?>
        </p>

        <hr>

        <p class="total">
            Total yang harus dibayar:
            Rp. <?php echo number_format($totalBayar, 0, ',', '.'); ?>
        </p>

    </div>

    <?php } ?>

</div>

</body>
</html>
