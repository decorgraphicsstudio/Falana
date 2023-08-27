<?php
if(isset($_POST['contact_btn'])){
    $name=$_post['user_name'];
    $email=$_post['user_email'];
    $subject=$_post['user_phone'];
    $msg=$_post['user_msg'];
    $to="hasanraza03165825495@gmail.com";
    $header="from:$email";
    if(mail($to,$subject,$msg,$header)){
        $msg1="send your message sucssecfully"
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Contact.css">
</head>
<body>
        <!-- contact me -->
        <section id="contactme" class="cont">
            <div class="my-form">
                <form method="post">
                    <strong>
                    <?php if(!empty($msg1)){
                        echo $msg1;
                    } ?>
                    </strong>
                    <h3>Contact US</h3>
                    <input type="text" placeholder="Name" name="user_name" required>
                    <input type="email" placeholder="Email" name="user_email" required>
                    <input type="text" placeholder="Phone" name="user_phone" required>
                    <textarea name="user_msg" placeholder="Type message" required></textarea>
                    <button name="contact_btn">Send</button>
                </form>
            </div>
        </section>
</body>
</html>
