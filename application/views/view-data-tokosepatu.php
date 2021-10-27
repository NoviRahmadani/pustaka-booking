<!DOCTYPE html>
<html>
<head>
    <title>TRANSAKSI TOKO SEPATU</title>
</head>

<body>
    <center>
        <table bgcolor="white">
            <tr>
                <th colspan="5">
                    <h3>TOKO SEPATU</h3>
                    <hr>
                </th>
            </tr>
            <tr>
                <td>NAMA PEMBELI</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>NO HP</td>
                <td>:</td>
                <td><?= $no ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>MERK SEPATU</td>
                <td>:</td>
                <td><?= $merk ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>UKURAN SEPATU</td>
                <td>:</td>
                <td><?= $size ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>HARGA</td>
                <td>:</td>
                <td>Rp. <?= $harga ?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
        </table>
        <p><button><a href="<?php echo base_url() . 'index.php/tokosepatu' ?>">KEMBALI</a></button></p>
    </center>
</body>
</html>