<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Gaji Karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gaji Karyawan</h1>
    <div class="form">
        <form action="total.php" method="POST">
            <div class="data">
                <h2>Data</h2>
                <input type="text" name="nama" id="nama" placeholder="Masukkan nama" required>
                <select name="jabatan" id="jabatan" required>
                    <option>Jabatan</option>
                    <option value="sales">Sales</option>
                    <option value="supervisor">Supervisor</option>
                    <option value="manager">Manager</option>
                </select>
                <div class="day">
                    <input type="number" name="hadir" id="hadir" placeholder="Jumlah Kehadiran" required>
                    <span class="txtd">Jam</span>
                </div>
            </div>

            <div class="gaji">
                <h2>Gaji</h2>
                <div class="day">
                    <input type="number" name="lembur" id="lembur" placeholder="Lembur" required>
                    <span class="txtd">Jam</span>
                </div>
                <select name="masakerja" id="masakerja" required>
                    <option>Masa Kerja</option>
                    <option value="under1th">< 1 tahun</option>
                    <option value="between1and3th">1 - 3 tahun</option>
                    <option value="morethan3th">> 3th</option>
                </select>
                <div class="day">
                    <input type="number" name="jumlahalpa" id="jumlahalpa" placeholder="Jumlah Alpa" required>
                    <span class="txtd">Jam</span>
                </div>
            </div>
            
            <button type="submit" name="submit">Total Penerimaan</button>
        </form>
    </div>
</body>
</html>