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
        .messages{
            padding-left: 500px;
        }
            p.message{
                padding: 10px;
                border: 2px solid black;
                height: 80px;
                overflow: auto;
            }
                .comments-container{
                    margin-left: 20px;
                }
                    p.comment{
                        padding: 10px 10px;
                        border: 2px solid black;
                        height: 70px;
                        overflow: auto;
                    }
    </style>
</head>
<body>
<?php
    $this->load->view('partials/navbar');
?>
    <div class="container-md my-3 p-5">
        <h4><?=$user['name']?></h4>
        <p class="lead">Registered at: <?=$user['created_at']?></p>
        <p class="lead">User ID: #<?=$user['id']?></p>
        <p class="lead">Email address: <?=$user['email']?></p>
        <p class="lead">Description: <?=$user['description']?></p>

        <form class="mx-auto my-3 p-3">
            <div class="mb-3">
                <label for="message" class="form-label">Leave message for <?=$user['first_name']?></label>
                <input type="text" class="form-control" id="message">
            </div>
            <input class="btn btn-primary"type="submit" value="Post">
        </form>

        <div class="messages-container">
            <h5>Mark Guillen wrote <span>7 hours ago</span></h5>
            <p class="message">Hi Michael! I am having fun building BoomYEAH!</p>
                <div class="comments-container">
                    <a href="">Diana Manlulu <span>23 minutes ago</span></a>
                    <p class="comment">Awesome!</p>
                </div>
                <form class="mx-auto my-3 p-3">
                    <div class="mb-3">
                        <label for="message" class="form-label">Leave a comment</label>
                        <input type="text" class="form-control" id="message">
                    </div>
                    <input class="btn btn-primary"type="submit" value="Post">
                </form>
        </div>
    </div>
</body>
</html>