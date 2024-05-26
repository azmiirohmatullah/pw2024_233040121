<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6a</title>
    <style>
        .box {
            display: flex;
            width: 50px;
            height: 50px;
            color : white;
            border : 1px solid black;
            border-radius : 2px;
            margin : 2px;
        }

        .box h2 {
            margin : auto;
        }

        .row {
            display : flex;
        }

        .row1 {
            .box {
                background-color: plum
            }
        }

        .row2 {
            .box {
                background-color: lightskyblue;
            }
        }
    </style>
</head>
<body>
    <?php if (!isset($_GET["angka"])) : ?>
        <h2>Masukan Variable Angka pada URL</h2>
    <?php else : ?>
        <?php for ($i = $_GET["angka"]; $i >= 1; $i--) : ?>
            <?php if($i % 2 === 0) : ?>
                <div class="row row1">
            <?php else : ?>
                <div class="row row2">
            <?php endif; ?>
                <?php for ($j = 1; $j <= $i; $j++) : ?>
                    <div class="box"><h2><?= "$i" ?></h2></div>
                <?php endfor; ?>
                    <br>
                </div>
            <?php endfor; ?>
        <?php endif; ?>
</body>
</html>