<html>
<head><title>Login here</title></head>
<body>
    <form ACTION = "" method ="POST" name = "Login">
    username : <input type="text" name="username"><br>
    password : <input type="password" name="password"><br>
    <!-- <input type="sumbit" name="Login" value ="Login"> -->
    <input type="submit" name="Login" value="Login">    
</form>
</body>
</html>

<?php
if(isset($_POST['Login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user == "irmasrid@gmail.com" && $pass == "123"){
        echo "<h2>Login berhasil</h2>";
    }else{
        echo "<h2>Login gagal</h2>";
    }
}
?>