<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: cursive;
        }
        .container{
            padding: 20px;
            width: 60%;
            margin: 70px auto;
        }
            h2{
                text-align: center;
                padding: 10px;
            }
            p{
                padding: 5px;
            }
            a{
                text-decoration: none;
                display: inline-block;
            }
            a.cancel{
                padding: 5px 15px;
                cursor: pointer;
                margin: 20px 20px;
            }
            a.delete{
                padding: 5px;
                background-color: red;
                color: white;
            }
            
    </style>
</head>
<body>
<?php
    $this->load->view('partials/navbar');
?>
    <div class="container">
        <h2>Are you sure you want to delete  the following User?</h2>
        <p>First Name: <?=$user['first_name']?></p>
        <p>Last Name: <?=$user['last_name']?></p>
        <p>Email Address: <?=$user['email']?></p>
        <a class="cancel" href="/dashboard">No</a>
        <a class="delete" href="/Users/process_remove/<?=$user['id']?>">Yes! I want to delete this</a>
    </div>
</body>
</html>