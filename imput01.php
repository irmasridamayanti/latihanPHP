<html>
<head>
    <title>pengolahan form</title>
</head>
<body>
    <form action="" method="POST" name="input">
        nama anda : <input type="text" name="nama"> <br>
        <input type="submit" name="input" value="input">
    </form>
</body>
</html>

<?php
if (isset ($_POST['input'])){
    $nama = $_POST['nama'];
    echo "nama anda : <b>$nama</b>";
}
?>