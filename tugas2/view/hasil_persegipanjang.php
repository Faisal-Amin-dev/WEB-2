<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 2 - Persegi Panjang</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; line-height: 1.6; }
        .hasil-box { border: 1px solid #ccc; padding: 15px; width: 300px; border-radius: 5px; }
    </style>
</head>
<body>
    <h2>Hasil Perhitungan Persegi Panjang</h2>
    
    <div class="hasil-box">
        <p><strong>Nilai Input:</strong></p>
        <ul>
            <li>Panjang = <?= $panjang ?></li>
            <li>Lebar = <?= $lebar ?></li>
        </ul>
        <hr>
        <p><strong>Hasil:</strong></p>
        <ul>
            <li>Luas = <?= $luas ?></li>
            <li>Keliling = <?= $keliling ?></li>
        </ul>
    </div>
</body>
</html>