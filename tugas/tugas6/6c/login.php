<?php
if(isset($_POST["submit"])) {
    if($_POST["username"] == "azmi" && $_POST["password"] == "12345") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            color: black;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            color: white;
            background-image: url(img/gambar.jpg);
        }

        .content{
            width: 60%;
            height: 70%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            background-color: white;
            font-size: 25px;
            font-family: 'Poppins';
            border-radius: 20px
        }

        .profile {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            background-image: url(img/user.png);
            background-size: cover;
            background-position: center;
        }

        input {
            margin-top: 15px;
            border: 1px solid black;
            width: 220px;
            height: 25px;
        }

        button {
            margin-top: 25px;
            cursor: pointer;
            font-size: 15px;
            background-color: red;
            border-radius: 6px;
            padding: 5px;
            border: 1px solid black;
        }

        form { 
            font-size: 18px;
        }

        input {
            padding: 15px;
            border-radius: 4px;
        }

        p {
            color: red;
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="profile"> </div>
                <h2>Login Admin</h2>
                <?php if(isset($error)) : ?>
                    <p>Login gagal, mohon periksa kembali username dan password yang anda gunakan <?= $_POST["username"];?></p>
                <?php endif; ?>
        
                <form action="" method="post">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username">
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                    <br>
                    <button type="submit" name="submit">Login</button>
                </form>
        </div>
    </div>
</body>
</html>