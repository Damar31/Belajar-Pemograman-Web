<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HaruBisokop</title>
 <link rel="stylesheet"
     href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <style>
        .jumbotron{
            position: absolute;
            top: 0%;
            left: 0%;
            margin-top: 3em;
            background-image: url('Mabinogi.jpg');
            background-attachment: fixed;
            background-size: cover;
            background-position: 0 -90px;
            color: #eaeaea;               
        }
        .jumbotron img{
            width: 200px;
            border: 5px solid #eaeaea;
            box-shadow: 1px 1px 10px rgba(0,0,0,0.5);
            margin-left: 42%;
        }
        .jumbotron h1, .jumbotron p{
            text-shadow: 1px 1px 10px black;
            text-align: center;
            color: #eaeaea;    
        }
        .container {
            width: 1350px;
            background-color: rgba(0,0,0,0.5);
        }
        .btn{
           margin-left: 44%;
           margin-bottom:10%;
        }
        .navbar
        {

            background-color: rgba(0,0,0,0.9);
        }

        a
        {
            text-decoration: none;

            font-weight: bold;
        }
        .navbar .active 
        {
            color: #fff;
        }
     </style>
</head>
<body>
<?php
    $this->load->view('header');
    ?>


    <div class="jumbotron">
        <div class="container">    
    <h1 class="display-4">About Website!</h1>
     <img height="200px" src="<?php echo base_url(); ?>assets/foto/UDINUS.jpg ?>">
      <p class="lead"></p>
      <hr class="my-4">
      <p>Website HaruBioskop yang saya buat, untuk memenuhi tugas akhir matakuliah yang Bapak ampuh 
      yaitu pemrogramman website, TA website yang saya buat ini merupakan website ticketing bioskop pada umumnya seperti:

	  1.pilih dan pesan film 
	  2.pilih tanggal dan jadwal ingin menonton 
	  3.booking kursi 
	  4.pengditian,penambahan dan menghapus data ticket. 
	  5. pembayaran 
	  6. pengiputan data informasi costumer 
	  7.pencetekan ticket	  

	  website ini juga menyediakan fitur film cooming soon, film new release dan home

	  ............

 .</p> 


    </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
         crossorigin="anonymous"></script>
    </div>
            </ul>
        </div>
    </nav>
</body>
</html>
