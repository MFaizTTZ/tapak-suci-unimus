<?php

session_start();

include "../config/database.php";

// Jika sudah login langsung ke dashboard
if(isset($_SESSION['login'])){

    header("Location: dashboard.php");
    exit;

}

$error = "";

if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($conn,$_POST['username']);

    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $query = mysqli_query($conn,
        "SELECT * FROM admin
        WHERE username='$username'
        LIMIT 1");

    if(mysqli_num_rows($query)>0){

        $data = mysqli_fetch_assoc($query);

        /*
         * sementara masih memakai password biasa
         * nanti akan kita ubah menjadi password_hash()
         */

        if($password==$data['password']){

            $_SESSION['login']=true;

            $_SESSION['id_admin']=$data['id_admin'];

            $_SESSION['nama']=$data['nama'];

            $_SESSION['level']=$data['level'];

            header("Location: dashboard.php");

            exit;

        }else{

            $error="Password salah.";

        }

    }else{

        $error="Username tidak ditemukan.";

    }

}

?>

<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width,initial-scale=1">

<title>Login Admin</title>

<link rel="stylesheet"
href="../assets/css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="login-container">

<div class="login-card">

<img
src="../assets/logo/logo.png"
class="login-logo">

<h2>

UKM TAPAK SUCI

</h2>

<p>

Universitas Muhammadiyah Semarang

</p>
<?php if($error!=""){ ?>

<div class="alert-error">

    <i class="fas fa-circle-exclamation"></i>

    <?= $error; ?>

</div>

<?php } ?>

<form method="POST">

    <div class="input-group">

        <i class="fas fa-user"></i>

        <input
            type="text"
            name="username"
            placeholder="Username"
            required>

    </div>

    <div class="input-group">

        <i class="fas fa-lock"></i>

        <input
            type="password"
            name="password"
            placeholder="Password"
            required>

    </div>

    <button
        type="submit"
        name="login"
        class="login-btn">

        <i class="fas fa-right-to-bracket"></i>

        Login

    </button>

</form>

<div class="login-footer">

    © <?= date('Y'); ?>

    UKM Tapak Suci Universitas Muhammadiyah Semarang

</div>

</div>

</div>

</body>

</html>