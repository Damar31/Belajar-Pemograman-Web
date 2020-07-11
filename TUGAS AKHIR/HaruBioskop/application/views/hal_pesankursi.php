<!DOCTYPE html>
<head>
    <title>HaruBioskop</title>
</head>
<body>
<?php
    $this->load->view('header');
    ?>
<h2 align="center">Pesan Kursi</h2>
<div class="content">      
    <form method="POST" action="<?php echo base_url(); ?>index.php/welcometiku/pesanan">
    <b>Film</b>
    <?php echo $this->session->userdata("judul"); ?>
    <br>
    <b>Tanggal / Jadwal</b>
    <?php $tn=$this->session->userdata("tanggal_nonton");
        echo date('l', strtotime($tn)).", ".$tn."/ ".$this->session->userdata("jadwal"); ?>
    <br>
    <b>Tempat Duduk</b>
    <table id="seatsBlock">
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
</tr>
<tr>
    <?php
    $k=0;
    for ($i='A'; $i<='E'; $i++){ ?>
    <tr>
        <td><?php echo $i?></td>
        <?php for($j=1; $j<=4; $j++){
        $ij=$data['kursi'][$k]['nokur']; ?>
        <td>
        <input name="pilihkursi[]" type="checkbox" value="<?php echo $ij; ?>"}
        <?php
        for ($x=0; $x<count($data['kursi_booked']); $x++){
        if($ij==$data['kursi_booked'][$x]['nokur'])
        echo "disabled";
    }
    ?> >
    </td>
    <?php $k++;} ?>
</tr>
    <?php } ?>
</tr>
</table>
<br>
Harga RP 60.000,00/ tiket
<br><br>
    <button type="submit" class="btn">Pesan</button>
</form>
</div>
</body>
</html>