<html>
<head>
    <title> TESTER</title>
</head>
<body>
<center>
<h1>Pesanan Servisan Motor</h1>
<</center>
    <p><strong>Centang yang akan di servis</strong> </p>
    <form action="" method="POST" name="form">

        <input type="hidden" name="oli" >
        <input type="checkbox" id="oli" name="bengkel[]" value="55000">
            <label for="kp"> Ganti oli (Rp 55000) </label><br>
        <input type="hidden" name="kp" >
        <input type="checkbox" id="kampas" name="bengkel[]" value="35000">
            <label for="kp"> Ganti kampas Rem (Rp 35000) </label><br>
        <input type="hidden" name="lp">
        <input type="checkbox" id="lampu" name="bengkel[]" value="20000">
            <label for="lp"> Ganti Lampu depan (Rp 20000)</label><br>
        <input type="hidden" name="bl" >
        <input type="checkbox" id="luar" name="bengkel[]" value="250000">
            <label for="bl"> Ganti Ban Luar (Rp 250000) </label><br>
        <input type="hidden" name="bd" >
        <input type="checkbox" id="dalam" name="bengkel[]" value="25000">
            <label for="bd"> Ganti ban dalam (Rp 25000) </label><br><br>
    
    <td><input type="submit" name="psn" value="pesan"></td>
    
</form> 
</body>

<?php
if(isset($_POST['psn'])){
    $bengkel = $_POST['bengkel'];
    
    $total = 0;

    foreach ($bengkel as $harga) {
        $total += $harga;
      }
      $jumlah = $total;

            $diskon = ($total > 100000) ? 0.1 * $jumlah : 0;
            $totalbayar= $jumlah - $diskon;
?>
<b>hitungan</b>
<table class="table">
    <tr>   
        <td>Pesanan</td>
 
    </tr>
    <br>
      

        <td><?php echo "Total Belanja: Rp" . $total ?></td>
        <tr>
        <td><?php echo "Diskon 10%: apabila service lebih dari 100.000"  ?></td>
        </tr>
        <tr>
        <td><?php echo "total yang harus di bayar : Rp" . $totalbayar ?></td>
    </tr>
</br>
          
<?php
}
?>
</table>
</html>