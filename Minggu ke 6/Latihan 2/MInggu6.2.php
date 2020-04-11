<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="proses(1).php" method="post">
        <table>
            <tr>
                 <td><label>NIM</label></td>
                 <td> : <input type="text" name="nim"></td>
               
           </tr>
            <tr>
                 <td><label>Program Studi </label>
                 <td> : <select name="prodi">
                    <option value="Teknik Informatika S1">Teknik Informatika S1</option>
                    <option value="Sistem Informasi S1">Sistem Informasi S1</option>
                    <option value="Teknik Informatika D3">Teknik Informatika D3</option></td>
                 <td>
                </select>
                </td>
           </tr>
             <tr>
                <td><label>Nilai Tugas</label>
                <td> : <input type="text" name="nilai_tugas">
             </tr>
             <tr>
                <td><label>Nilai UTS</label>
                <td> : <input type="text" name="nilai_uts">
            </tr>
                <td><label>Nilai UAS</label>
                <td> : <input type="text" name="nilai_uas">
            <tr>
                <td><label>Catatan Khusus</label>
                <td><input type="checkbox" name="catatan[]" value="Kehadiran >= 70%" />Kehadiran >= 70%</p>
                    <input type="checkbox" name="catatan[]" value="Interaktif di kelas" />Interaktif Di Kelas</p>
                    <input type="checkbox" name="catatan[]" value="Tidak Terlambat Mengumpulkan Tugas" />Tidak Terlambat Mengumpulkan Tugas</p><div>

                </div>
                <button type="submit" name="kirim">Submit</button>
            </tr>
                  </table>
    </form>
</body>

</html>