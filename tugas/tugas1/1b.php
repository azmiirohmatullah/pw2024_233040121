<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1b</title>
</head>
<body>
    <?php
    $npm = 21;

    echo "Aku adalah angka <b>$npm</b>";
    echo "<br>";
    echo "Jika aku dikali 5, maka aku sekarang <b>" . ($npm *= 5) . "</b><br>";
    echo "Jika aku dibagi 2, maka aku sekarang <b>" . ($npm /= 2) . "</b><br>";
    echo "Jika aku ditambah 75, maka aku sekarang <b>" . ($npm += 75) . "</b><br>";
    echo "Jika aku dikurang 20, maka aku sekarang <b>" . ($npm -= 20) . "</b>";
    ?>
</body>
</html>