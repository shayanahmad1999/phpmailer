<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php mailer</title>
    <style>
        form{
            text-align: center;
            margin-top: 200px;
        }
        input{
            padding: 5px;
            margin-bottom: 20px;
            border-radius: 10px;
            border-color: #eee;
        }
        button{
            margin-top: 20px;
            margin-left: 50px;
            border-radius: 10px;
            padding: 20px;
            height: 50px;
            width: 100px;
            background-color: #333;
            color: #eee;
        }
    </style>
</head>
<body>
    <form action="sendemail.php" method="post">
        <label for="">email
        <?php
            if(isset($_GET['msg'])){ 
        ?>
        <span style="color: red;">*</span>
        <input type="email" name="email" style="border-color: red;"><br>
        <?php } else { ?>
            <input type="email" name="email"><br>
            <?php } ?>
        </label>
        <label for="">subject</label>
        <textarea name="subject" col="10" rows="7"></textarea><br>
        <label for="">message</label>
        <textarea name="message" col="10" rows="7"></textarea><br>
        <input type="hidden" name="send">
        <button type="submit">email</button>
    </form>
</body>
</html>