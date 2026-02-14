<?php
session_start();

// admin master
$admin_user = "master";
$admin_pass = "123456"; // mật khẩu tạm

// login form
if(isset($_POST['username'], $_POST['password'])){
    if($_POST['username']==$admin_user && $_POST['password']==$admin_pass){
        $_SESSION['admin'] = $admin_user;
    } else {
        echo "Sai tài khoản hoặc mật khẩu!";
    }
}

// logout
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: index.php");
    exit;
}

// nếu chưa login
if(!isset($_SESSION['admin'])){
?>
<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>
<?php
exit;
}
?>

<h2>Welcome Admin!</h2>
<a href="index.php?logout=1">Logout</a>
