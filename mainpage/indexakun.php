<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%3A400%2C500"/>
    <link rel="stylesheet" href="./styles/login-page.css"/>
</head>

<body>
    <div class="login-page-7KF">
        <img class="pix-bkg-1-doP" src="./assets/pix-bkg-1.png"/>
        <div class="rectangle-24-ycM"> 
        </div>
        <div class="rectangle-25-pcy">
            <form action="proseslogin.php" method="POST">
                <input type="text" name="username" placeholder="Nama" required class="inputNama">
                <p class="username-ZKf">Username</p>
                <div class="rectangle-27-e6D">
                    <input type="password" name="password" placeholder="Password" required class="inputPassword">
                </div>
                <p class="password-kf3">Password</p>
                <button type="submit" name="login" class="SubmitButton"></button>
            </form>
        </div>
        <p class="login-nrd">Login</p>
        
        <?php
        include("configgabung.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $username = pg_escape_string($conn_account, $username);

            $query = "SELECT * FROM users WHERE username = '$username'";
            $result = pg_query($conn_account, $query);

            if ($result && $row = pg_fetch_assoc($result)) {
                if (password_verify($password, $row['password'])) {
                    header('Location: daftarbarang.php');
                    exit();
                } else {
                    echo '<p class="error-message">Password salah!</p>';
                    echo '<div id="notification">Invalid username or password</div>';
                }
            } else {
                echo '<p class="error-message">Username tidak ada, silahkan buat akun terlebih dahulu.</p>';
            }
        }

        pg_close($conn_account);
        ?>
        
        <img class="premium-vector-close-and-open-box-with-pixel-art-style-2-66d" src="./assets/premium-vector-close-and-open-box-with-pixel-art-style-2-LBs.png"/>
        <p class="upload-your-lost-item-and-wait-until-someone-finds-it-oWq">upload your lost item and wait until someone finds it!</p>
        <img class="premiumvectorabrownwalletwithpixelartstyle-removebg-preview-2-WAM" src="./assets/premiumvectorabrownwalletwithpixelartstyle-removebg-preview-2.png"/>
        <img class="premiumvectormoneysetwithpixelartstyle-removebg-preview-2-kaV" src="./assets/premiumvectormoneysetwithpixelartstyle-removebg-preview-2-7Po.png"/>
        <div class="group-5-4r5">
            <img class="ellipse-1-1WR" src="./assets/ellipse-1-KuB.png"/>
            <img class="box-removebg-preview-1-M4V" src="./assets/box-removebg-preview-1-KN9.png"/>
            <img class="e-removebg-preview-1-h8M" src="./assets/e-removebg-preview-1-PpM.png"/>
        </div>
        <p class="find-ur-beloved-stuff-QoT">Find ur beloved stuff</p>
        <p class="welcome-new-member-KvR">Welcome Back!</p>
        <img class="ed248e50dc6565fa174e0aedf212fa90-2-3bX" src="./assets/ed248e50dc6565fa174e0aedf212fa90-2-YJ5.png"/>
        <img class="frasierandthecranefamily-removebg-preview-2-n3K" src="./assets/frasierandthecranefamily-removebg-preview-2-38u.png"/>
        <p class="dont-have-an-account-register-VCd">
            <span class="dont-have-an-account-register-VCd-sub-0">Don’t have an account? </span>
            <a class="dont-have-an-account-register-VCd-sub-1" href="formregis.php">Register</a>
        </p>
    </div>
</body>

</html>
