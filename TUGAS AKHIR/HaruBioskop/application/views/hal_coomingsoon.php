<!DOCTYPE html>
<head>
    <title>HaruBioskop</title>
</head>
<body>
    <?php
    $this->load->view('header');
    ?>
                <div class="inner">
                   <h2 align="center">Cooming Soon </h2>

                      <div class="content">

                         <!--Buat Form-->
                         <form method="POST" action="<?php echo base_url(); ?>index.php/welcometiku/jadwal">
                         <table>
                          <tr> <!--Keterangan film-->
                          <?php foreach($data as $soon){?>
                          <td>
                           <center>
                           <img height="450px" src="<?php echo base_url(); ?>assets/images/<?php echo $soon['foto']; ?>">
                           <h5><?php  echo $soon['judul']; ?> </h5>
                           </center>
                           <p> <?php  echo $soon['sinopsis']; ?> </p>
                           <medium><?php echo $soon['keterangan']; ?></medium>
                           <br><br>
                        </td>

                    <?php } ?>
                  </tr>
                </form>
                </div>
             </div>

</body>
</html>



