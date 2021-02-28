
<html>
<body>
<?php
$koneksi = mysqli_connect('localhost','root','','login');
$panggil = mysqli_query($koneksi, 'SELECT * FROM table_login');
if ($koneksi) {
    echo("database telah terhubung");
}
else 
{
    echo ("database gagal terhubung");
}
?>


     <h1>Belajar php</h1>
     <table border="2">
     <tr>
     <td>Username</td>
     <td>Password</td>
     </tr>
     
     <?php 
     while ($baris = mysqli_fetch_array($panggil)) 
     {
        echo "<tr>";
        echo "<td>", $baris['username'],"</td>";
        echo "<td>", $baris['password'],"</td>";
        echo "</tr>";
     }
     ?>
     </table>
</body>
</html>