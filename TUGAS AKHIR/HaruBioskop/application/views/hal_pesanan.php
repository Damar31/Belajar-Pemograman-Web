<!DOCTYPE html>
<head>
    <title>HaruBioskop</title>
</head>
<body>
<?php
    $this->load->view('header');
    ?>
    <div class="content">
    <h2 align="center"> Pesanan Tiket</h2><br>
    <h5><?php echo $this->session->userdata("judul"); ?></h5>
    <p><?php $tn=$this->session->userdata("tanggal_nonton");
    echo date('l', strtotime($tn)).", ".$tn."/ ".$this->session->userdata("jadwal"); ?></p>
    <hr width="25%" align="left">
    <ul>
        <?php $i=0;foreach($data['kursi'] as $kursi){?>
        <li>
        <form method="POST" action="<?php echo base_url()."index.php/welcometiku/hapuskursi/$i"; ?>">
                <?php echo $kursi;?>
        <button type="submit" name="Submit" class="btn hapus">Hapus </button>
        </form>
        </li>
    <?php $i++;}?>
        </ul>
        <hr width="25%" align="left">
        <p>Total : <?php echo number_format(count($data['kursi'])*60000,2,',','.');?></p>
        <hr width="25%" align="left">
        <form method="POST" action="<?php echo base_url()."index.php/welcometiku/edit"; ?>">
        <button type="submit" name="submit" class="btn edit">Edit Kursi </button>
        </form>
        <form method="POST" action="<?php echo base_url(); ?>">
        <button type="submit" name="submit" class="btn hapus">Hapus Semua </button>
        </form>
        <br>
        <form method="POST" action="<?php echo base_url(); ?>index.php/welcometiku/data_diri">
        <button type="submit" name="submit" class="btn">Bayar</button>
        </form>
        <br>
        </div>
</body>
</html>