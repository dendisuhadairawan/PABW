<!DOCTYPE html>
<html>
    <head>
            <title>Quiz Dendi Suhada Irawan</title>
    <style>
            body {background-color: powderblue;}
            h1   {color: black;
                font-family: sans-serif;
                font-size: 300%;}

            h2    {color: black;
                font-family: sans-serif;
                font-size: 200%;}

            .table1 {
                font-family: sans-serif;
                color: black;
                width: 100%;
                border-collapse: collapse;}

            .table1 tr td {
                border: 1px solid #000;
                padding: 8px; 
                text-align: center;
                background-color: #f2f2f2;}
    </style>
    </head>
<body>
        <center>
    <h1>Barang yang akan di beli bengkel</h1>
        </center>
   
    <h2>Silahkan Di Pesan</h2>

<form action="" method="POST" name="form">
            <label for="nama_barang">Nama barang yang akan di beli:</label>
        <select name="nama_barang" id="nama_barang">
            <option value="oli">Oli (Rp.45000)</option>
            <option value="lampu_depan">Lampu Depan (Rp.20000)</option>
            <option value="kampas_rem">Kampas Rem (Rp.25000)</option>
            <option value="ban_dalam">Ban Dalam (Rp.35000)</option>
            <option value="ban_luar">Ban Luar (Rp.120000)</option>
        </select><br><br>
            <label for="jumlah_barang">Jumlah Barang yang akan di beli:</label>
            <input type="jumlah" name="jumlah_barang" id="jumlah_barang"><br><br>
            <input type="submit" name="beli" value="Beli">

</form>
<?php

        $harga = array(
            "oli" => 45000,
            "lampu_depan" => 20000,
            "kampas_rem" => 25000,
            "ban_dalam" => 35000,
            "ban_luar" => 120000,
            );

    if(isset($_POST['beli'])) {
        $nama_barang = $_POST["nama_barang"];
        $jumlah = $_POST["jumlah_barang"];
        $harga_barang = $harga[$nama_barang];
        $total_bayar = $harga_barang * $jumlah;
        $diskon = ($total_bayar > 100000) ?: 0;
        $totalbayar= $total_bayar - $diskon;

?>

        <center>
    <h1>HITUNGAN</h1>
        </center>
        <table class="table1">
            
                <tr>   
                    <td>Pesanan</td>
                    <td>jumlah yang di beli</td>
                    <td>harga per barang</td>
                    <td>total</td>
                    <td>total yang harus di bayar</td>
                </tr>
                
                <br>
                    <td><?php echo $nama_barang ?></td>
                    <td><?php echo $jumlah ?></td>
                    <td><?php echo "Rp" .number_format($harga_barang) ?></td>
                    <td><?php echo "Rp" .number_format($total_bayar) ?></td>
                    <td><?php echo "Rp" .number_format($totalbayar) ?></td>
                </br>    
        </table>
                <td><?php echo "Diskon 10% apabila pembelian barang lebih dari 100.000"  ?></td>
                <br></br>
                <br><?php echo "Nama  : DENDI SUHADA IRAWAN"  ?></br>
                <br><?php echo "NIM   : A22100027"  ?></br>
                <br><?php echo "Kelas : TI - IVB"  ?></br>
                
<?php
    }
    ?>
</body>
</html>