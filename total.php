<?php
    if(isset($_POST["jabatan"])){
        $nama = $_POST["nama"];
        $jabatan = $_POST["jabatan"];
        $jmlhadir = $_POST["hadir"];
        $jmllembur = $_POST["lembur"];
        if($jabatan == "sales"){
            $gajipokok = 2250000;
            $tunjangan = 500000;
            $transport = 450000;
            $uangmakan = 10000;
            $lembur = $_POST["lembur"] * 30000;
        } else if($jabatan == "supervisor"){
            $gajipokok = 2750000;
            $tunjangan = 700000;
            $transport = 500000;
            $uangmakan = 10000;
            $lembur = $_POST["lembur"] * 40000;
        } else if($jabatan == "manager"){
            $gajipokok = 3300000;
            $tunjangan = 1200000;
            $transport = 700000;
            $uangmakan = 10000;
            $lembur = $_POST["lembur"] * 50000;
        };
        $masakerja = $_POST["masakerja"];
        if($masakerja == "under1th"){
            $thr = $gajipokok / 100 * 50;
        } else if($masakerja == "between1and3th"){
            $thr = $gajipokok / 100 * 75;
        } else if($masakerja == "morethan3th"){
            $thr = $gajipokok;
        };
        $jumlahharialpa = $_POST["jumlahalpa"];
        $jumlahalpa = $_POST["jumlahalpa"] * 5000;

        $gajibersih = (($gajipokok + $tunjangan + $transport + $uangmakan + $lembur) + $thr);
        $gajitotal = (($gajipokok + $tunjangan + $transport + $uangmakan + $lembur) + $thr) - $jumlahalpa;
    };
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Slip Gaji Karyawan | $nama" ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <button type="submit" name="submit" id="kembali"><- Kembali</button>
    <div class="container">
        <span>Hai,</span>
        <h2><?php echo $nama ?>!</h2><br>
        <span>Berikut rincian total gaji kamu selama <?php echo $jmlhadir / 24 ?> hari (<?php echo $jabatan ?>) :</span><br><br>
        <table>
            <tr>
                <th style="background-color: rgb(218, 218, 218);">Nama</th>
                <th style="background-color: rgb(218, 218, 218);">Total (jam)</th>
                <th style="background-color: rgb(218, 218, 218);">Jumlah</th>
            </tr>
            <tr>
                <td>Gaji pokok</td>
                <td>-</td>
                <td>Rp. <?php echo $gajipokok ?>,-</td>
            </tr>
            <tr>
                <td>Tunjangan</td>
                <td>-</td>
                <td>Rp. <?php echo $tunjangan ?>,-</td>
            </tr>
            <tr>
                <td>Transportasi</td>
                <td>-</td>
                <td>Rp. <?php echo $transport ?>,-</td>
            </tr>
            <tr>
                <td>Uang Makan</td>
                <td>-</td>
                <td>Rp. <?php echo $uangmakan ?>,-</td>
            </tr>
            <tr>
                <td>Lembur</td>
                <td><?php echo $jmllembur ?></td>
                <td>Rp. <?php echo $lembur ?>,-</td>
            </tr>
            <tr>
                <td>THR</td>
                <td>-</td>
                <td>Rp. <?php echo $thr ?>,-</td>
            </tr>
            <tr>
                <td colspan=2 style="background-color: rgb(218, 218, 218);">Total</td>
                <td>Rp. <?php echo $gajibersih ?>,-</td>
            </tr>
        </table><br>
        <table>
            <tr>
                <td style="background-color: rgb(218, 218, 218);">Potongan (alpa)</td>
                <td style="background-color: rgb(218, 218, 218);"><?php echo $jumlahharialpa ?> jam</td>
                <td style="background-color: rgb(218, 218, 218);">Rp. <?php echo $jumlahalpa ?>,-</td>
            </tr>
        </table><br>
        <span>Total gaji kamu adalah :</span>
        <h2 style="text-align: end;">Rp. <?php echo $gajitotal ?>,-</h2>
    </div>

    <script>
        const kembali = document.getElementById("kembali");
        kembali.addEventListener("click", function(){
            location.href = "index.php";
        })
    </script>
</body>
</html>