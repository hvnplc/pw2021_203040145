<?php 
//cek tombol submit
if( isset($_POST['submit'])){
//cek username dan password
    if($_POST['username'] == 'admin' && $_POST['password'] == '123') {
//jika benar kirim ke halaman admin
        header('location: admin.php');
        exit;
    } else {
//jika salah tampikan pesan salah
        $error = true;

    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
<?php if (isset($error)):?>
        <P style='color: red; font-style: bold;'> Username / Password salah! </p>
<?php endif; ?>
    <ul>
    <form action='' method='post'>
        <li>
            <label for='username'>Username :</label>
            <input type='text' name='username' id='username'>
        </li>
        <li>
            <label for='password'>password :</label>
            <input type='password' name='password' id='password'>
        </li>
        <li>
            <button type='submit' name='submit'>Login</button>
        </li>
    </form>
    </ul>
</body>
</html>

