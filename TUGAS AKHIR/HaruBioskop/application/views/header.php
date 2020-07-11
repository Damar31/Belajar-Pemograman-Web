<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/css.css') ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {margin: 0; }
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            overflow: auto;
            width: 100%;
            height: auto;
            position: relative;
        }
        ul.navbar li a {
            display: block;
            color: #000;
            text-decoration: none;
            float: left;
            padding: 15px;
        }
        ul.navbar li a.logo:hover{
            background-color: #f8f9fa;
        }
        ul.navbar li a:hover{
            background-color: #007bff;
            color: white;
        }
        div.content {
            padding: 1px 16px;
            margin: 0;
        }
        div.content td{
            padding-left: 50px;
            padding-right: 50px;
        }
        button.btn {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .txt-center {text-align: center;}
        input[type=checkbox] {
            width: 25px;
            margin: 20px;
            cursor: pointer;
        }
        input[type=checkbox]:before {
            content: "";
            width: 50px;
            height: 50px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
        }
        input[type=checkbox]:before:checked:before {background-color: Green;}
        input[type=checkbox]:disabled:checked:before {background-color: red;}
            
        button.btn.hapus{
            background-color: red;
        }
        button.btn.edit{
            background-color: green;
        }
        fieldset {
            font-size: 14px;
            padding: 1em 2em;
        }
        .diri {
            background-color: white;
            width: 350px;
            padding: 20px;
            margin: auto;
            margin-top: 100px;
            font-size: 18px;
            }
        legend {
            background: #BFD48C;     /* Green */
            color: #FFFFFF;          /* White */
            margin-bottom: 10px;
            padding: 0.5em 1em;
        }
        </style>
        <title>HaruBioskop</title>
        </head>
            <header id="header">
                <div class="inner">
                    <a class="logo" href="<?= base_url() ?>index.php">HaruBioskop</a>
                    <nav id="nav">
                         <a class="nav-link" href="<?= base_url();?>index.php/welcometiku/hal_release">New Release</a>
                         <a class="nav-link" href="<?= base_url();?>index.php/welcometiku/hal_coomingsoon">Cooming Soon</a>
                         <a class="nav-link" href="<?= base_url();?>index.php/welcometiku/rev">About website</a>
                         <a class="nav-link" href="<?= base_url();?>index.php/welcometiku/logout">Logout</a>
                    </nav>
                </div>
            </header>

            <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>





