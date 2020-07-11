<!DOCTYPE html>
<head>
    <title>Tiku</title>
</head>
<body>
<?php
    $this->load->view('header');
    ?>
<h2 align="center"> Edit Kursi </h2>
<div class="content">      
    <form action="<?php echo base_url('index.php/welcometiku/pesanan') ?>" method="post">
        <p><?php echo $this->session->userdata('judul') ?></p>
        <p><?php $tn = $this->session->userdata("tanggal_nonton");
            echo date('l',strtotime($tn)).",".$tn."/ ".$this->session->userdata('jadwal');
        ?></p>

        <p>Tempat duduk</p>
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
                    for($i='A'; $i<='E'; $i++){?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <?php for($j=1; $j<=4; $j++){
                                $ij=$data['kursi'][$k]['nokur'];
                             ?>
                            <td>
                                <input type="checkbox" name="pilihkursi[]" value="<?php echo $ij; ?>"
                                <?php foreach($data['kursi_checked'] as $kursi){
                                    if($ij==$kursi)
                                        echo "checked";
                                }

                                for($x=0; $x<count($data['kursi_booked']); $x++){
                                    if($ij==$data['kursi_booked'][$x]['nokur']){
                                        echo "disabled";
                                    }
                                }
                                
                                ?>
                                
                            >
                            </td>

                             <?php $k++; } ?>
                        </tr>
                   
                            <?php } ?>      
            </tr>
        
        </table>
    <br>
    <p>Harga : Rp. 60.000,00 /Tiket</p>
    <br>
    <br>
    <button type="submit" name="submit" class="btn">Ubah</button>
    </form>
                            </div>
</body>
</html>