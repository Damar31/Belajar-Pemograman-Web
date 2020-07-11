<!DOCTYPE html>
<head>
    <title>HaruBioskop</title>
</head>
<body>
<?php
    $this->load->view('header');
    ?>
    <form method="POST" action="<?php echo base_url(); ?>index.php/welcometiku/pesankursi">
    <div class="content">
        <h2 align="center">Pesan Tiket Film</h2>   
        <table>
            <tr>
                <td>
                    <img src="<?php echo base_url(); ?>assets/images/<?php echo $data['film'][0]['foto']; ?>">
                </td>
                <td>
                    <h5><?php echo $data['film'][0]['judul']; ?></h5>
                    <p><?php echo $data['film'][0]['sinopsis']; ?></p>
                    <p><small><?php echo $data['film'][0]['keterangan']; ?></small></p>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td><b>Tanggal</b></td>
                <td><input type="date" name="tanggal_nonton" required></td>
            </tr>
            <tr>
            <td><b>Jadwal</b></td>
            <td>
                <?php $no=1;
                foreach ($data['jadwal'] as $jdw){ ?>
                <input type="radio" id="<?php echo $no; ?>" name="jadwal" value="<?php echo $jdw['id_jadwal']; ?>" required>
                <label for="<?php echo $no; ?>"><?php echo $jdw['jadwal']; ?></label>
                <?php $no++; } ?>
                </td>
                </tr>
                <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn">Pesan</button>
                </td>
                </tr>
                </table>
            </form>
                </div>
</body>
</html>