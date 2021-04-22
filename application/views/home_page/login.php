<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        form{
            width: 500px;
            text-align: left;
        }
            .form-group{
                padding: 5px 10px 10px 0px;
            }
            a{
                margin-top: 10px;
            }
            .errors{
                background-color: #FF9494;
                margin: 5px 0px;
                padding: 5px 0px;
                text-align: center;
            }
    </style>
</head>
<body class="text-center">
<?php
    $this->load->view('partials/navbar');
?>
    <form class="mx-auto my-3 p-3" action="Home_pages/process_login" method="post">
        <h1>Login</h1>
<?php
    if($this->session->has_userdata('errors')){    
?>
        <?=$this->session->flashdata('errors')?>
<?php
    }
?>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <input type="submit" class="btn btn-primary" value="Login"></input>
        <a class="d-block" href="register">Don't have an account? Register</a>
    </form>
</body>
</html>