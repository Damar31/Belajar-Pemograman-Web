<!DOCTYPE html>
<head>
    <title>HaruBioskop</title>
</head>
<body>
<?php
    $this->load->view('header');
    ?>
<h2 align="center">Data Diri</h2>      
<div class="content">
    <form class="diri" method="POST" action="<?php echo base_url(); ?>index.php/welcometiku/data_diri">
    <fieldset>
    <legend>Data Diri</legend>
    <label for="nik">NIK</label>
	<br><input type="text" name="nik" placeholder="Masukkan NIK" required/>    
    <br><label for="nama">Nama Lengkap</label>
	<br><input type="text" name="nama" placeholder="Masukkan Nama" required/>
    <br><label for="usia">kelas</label>
	<br><input type="text" name="kelas" placeholder="Masukkan Kelas" required/>
</fieldset>
<br>
    <button type="submit" name="submit" class="btn">Cetak Tiket</button>                     
</form>
</body>
</html>
