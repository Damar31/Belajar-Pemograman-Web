<!DOCTYPE html>
<head>
    <title>HaruBioskop</title>
</head>

<body>
    <?php
    $this->load->view('header');
    ?>

        <!-- One -->
            <section id="one">
                   <h2 align="center"> New Release </h2>
   
                      <div class="content">

                         <!--Buat Form-->
                         <form method="POST" action="<?php echo base_url(); ?>index.php/welcometiku/jadwal">
                         <table>
                          <tr> <!--Keterangan film-->
                          <?php foreach($data as $soon2){?>
                          <td>
                           <center>
                           <img height="450px" src="<?php echo base_url(); ?>assets/images/<?php echo $soon2['foto']; ?>">
                           <h5><?php  echo $soon2['judul']; ?> </h5>
                           </center>
                           <p> <?php  echo $soon2['sinopsis']; ?> </p>
                           <br>  <button name="id_cs2" value="<?php echo $soon2['id_cs2'];?>" type="submit" class="btn"> Pesan </button>
                           <small><?php echo $soon2['keterangan']; ?></small>
                           <br><br>
                        </td>


                    <?php } ?>
                  </tr>
                </form>
                </div>
             </div>
   
                         <!--Buat Form-->
                         <form method="POST" action="<?php echo base_url(); ?>index.php/welcometiku/jadwal">
                         <table>
                          <tr> <!--Keterangan film-->
                          <?php foreach($data as $soon2){?>
                          <td>
                           <center>
                           <img height="450px" src="<?php echo base_url(); ?>assets/images/<?php echo $soon2['foto']; ?>">
                           <h5><?php  echo $soon2['judul']; ?> </h5>
                           </center>
                           <p> <?php  echo $soon2['sinopsis']; ?> </p>
                           <br>  <button name="id_cs2" value="<?php echo $soon2['id_cs2'];?>" type="submit" class="btn"> Pesan </button>
                           <small><?php echo $soon2['keterangan']; ?></small>
                           <br><br>
                        </td>


                    <?php } ?>
                  </tr>
                </form>
                </div>
             </div>


</body>
</html>
