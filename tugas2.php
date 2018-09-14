<html>
    <head><title>Sistem Raport Sederhana</title></head>
    <body>
    <form action="imput.php" method="POST" name ="input">
    <table>
    <tr>
    <th>Nama</th>
    <td><input type="text" name="nama"></td>
    </tr>
    <tr>
    <th>Nis</th>
    <td><input type="number" name="nis"></td>
    </tr>
    <tr>
    <th>Alamat</th>
    <td><textarea name="alamat"  cols="30" rows="10"></textarea></td>
    </tr>
    <tr>
    <th>Jenis kelamin</th>
    <td><input type="radio" name="jk" value="laki-laki">laki-laki
    <input type="radio" name="jk" value="perempuan">perempa</td>
    </tr>
    <tr>
    <th>Agama</th>
    <td><select name="agama">
    <option value="Islam">Islam</option>
    <option value="Hindu">Hindu</option>
    <option value="Kristen">Kristen</option>
    <option value="Budha">Budha</option>
    </select>
    </td>
    </tr>
    <tr>
    <th>Sekolah</th>
    <td><input type="text" name="sekolah"></td>
    </tr>
    <tr>
    <th>Email</th>
    <td><input type="email" name="email"></td>
    </tr>
    <tr>
    <th>pengajar</th>
    <td><input type="text" name="pengajar"></td>
    </tr>
    <tr>
    <th>Mata Pelajaran Yang Disukai</th>
    <td>
    <input type="checkbox" name="pel1" value="RPL">RPL
    <input type="checkbox" name="pel2" value="B. Inggris">B. Inggis
    <input type="checkbox" name="pel3" value="B. Insdonesia">B. Indonesia <br>
    <input type="checkbox" name="pel4" value="agama">agama
    <input type="checkbox" name="pel5" value="mtk">mtk</td></tr>
    <tr>
    <th>Total Nilai Ijasah SD</th>
    <td><input type="number" name="sd"></td></tr>
    <tr>
    <th></th>
    <td><input type="submit" name="Proses" value="imputData"></td>
    </tr>
    </table>
    </form>
    </body>
</html>