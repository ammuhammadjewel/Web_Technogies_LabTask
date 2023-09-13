<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        h1{
            text-align: center;
            color: green;
        }
    </style>
<fieldset>
    <h1> <b>Welcome Home</b> </h1>
    <h3 style="text-align:center; color:red;"> LabTask 2 </h3>
</fieldset>
<br>
<center>
    <fieldset>
<?php
    session_start();
    if(isset($_SESSION['username'])
    )
    {
        echo "User Name: ".$_SESSION['username']; echo" Miah";
        
    }
?>
    </fieldset>
</center>
</body>
</html>