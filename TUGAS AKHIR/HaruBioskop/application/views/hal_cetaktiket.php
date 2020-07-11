<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HaruBioskop</title>
</head>
<body>
<?php
    $this->load->view('header');
    ?>
    <div class="content" id="printableArea">
    <h2 align="center"> Tiket </h2>
    <br>
    <p><b>Nama: <?php echo $this->session->userdata('identitas')['nama']; ?></b></p>
    <?php foreach($data['kursi'] as $kursi){?>
        <hr width="50%" align="left">
        <h3>Tiket HaruBioskop</h3>
        <p><?php echo $this->session->userdata('judul'); ?></p>

        <p><?php $tn = $this->session->userdata("tanggal_nonton");
            echo date('l',strtotime($tn)).",".$tn."/ ".$this->session->userdata('jadwal');
        ?></p>

        <p>Kursi : <?php echo $kursi; ?></p>

        <small><hr width="50%" align="left" style="border-top: 1px dashed;">Disobek untuk diberikan petugas<br>Tiket HaruBioskop(HTICK)<br>
        <b><?php echo $this->session->userdata('judul'); ?> - <?php $tn = $this->session->userdata('tanggal_nonton');
            echo date('l',strtotime($tn)).",".$tn."/ ".$this->session->userdata('jadwal');
        ?> - <?php echo $kursi ?> </b></small>
        <hr width="50%" align="left">
    <?php } ?>
    <button class="btn" onclick="print()">Print</button>
    <br>
    </div>
    <script>
        function print() {
            $('#printableArea').html2canvas({
                onrendered: function( canvas )
                var img = canvas.toDataURL()
                wiindow.open(img);
            })
        }
        </script>
</body>
</html>