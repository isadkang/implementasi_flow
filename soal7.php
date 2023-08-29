<?php 
$totalGram = 0;
$hargaSebelum = 0;
$diskon = 0;
$hargaSetelah = 0;

if (isset($_POST['submit'])) {
    $totalGram = intval($_POST['totalGram']);
    
    $hargaSebelum = 500 * $totalGram;
    $diskon = 5 * $hargaSebelum / 100;
    $hargaSetelah = $hargaSebelum - $diskon;
}   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Harga Produk</title>
    <style>
        /* ... (your CSS styles) ... */
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <h1>Kalkulator Harga Produk</h1>
            <form action="" method="post">
                <label for="totalGram">Masukkan Total Gram (Gram): </label>
                <input type="number" name="totalGram" placeholder="Gram..." required>
                <input type="submit" value="Hitung" id="button" name="submit">
            </form>
            <ul>
                <li><?php echo "Rp ". number_format($hargaSebelum, 2, ',', '.') ?></li>
                <li><?php echo "Rp ". number_format($diskon, 2, ',', '.') ?></li>
                <li><?php echo "Rp ". number_format($hargaSetelah, 2, ',', '.') ?></li>
            </ul>
        </div>
    </div>
</body>

</html>
