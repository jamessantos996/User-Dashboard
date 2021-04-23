<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
    
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
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

        <form class="mx-auto my-3 p-3" action="/Users/post_message" method="post">
            <input type="hidden" name="id" value="<?=$this->session->userdata('id')?>">
            <input type="hidden" name="user_target" value="<?=$user['id']?>">
            <div class="mb-3">
                <label for="message" class="form-label">Leave message for <?=$user['first_name']?></label>
                <input type="text" class="form-control" name="message" id="message">
            </div>
            <input class="btn btn-primary"type="submit" value="Post">
        </form>

        <div class="messages-container">
<?php
        foreach($inbox as $message){
?>
            <h5><?=$message['message_sender_name']?> wrote <span><?=time_elapsed_string($message['message_date'])?></span></h5>
            <p class="message"><?=$message['message_content']?></p>
            <div class="comments-container">
<?php
           foreach($message['comments'] as $comment){
?>              
                
                <a href="/Users/show/<?=$user['id']?>"><?=$comment['comment_sender_name']?> <span><?=time_elapsed_string($comment['comment_date'])?></span></a>
                <p class="comment"><?=$comment['comment_content']?></p>
<?php
            }
?>         
            </div>
            <form class="mx-auto my-3 p-3" action="/Users/post_comment" method="post">
                <input type="hidden" name="id" value="<?=$this->session->userdata('id')?>">
                <input type="hidden" name="user_target" value="<?=$user['id']?>">
                <input type="hidden" name="message_id" value="<?=$message['message_id']?>">
                <div class="mb-3">
                    <label for="comment" class="form-label">Leave a comment</label>
                    <input type="text" class="form-control" name="comment" id="comment">
                </div>
                <input class="btn btn-primary"type="submit" value="Post">
            </form>
<?php
        }
?>
            
            
        </div>
    </div>
</body>
</html>