<?php
   // require_once __DIR__ ."/database/pdo.php";
    require_once __DIR__ ."/functions/functions.php";

 

   $conn = mysqli_connect("localhost", "root",  "234565Aa","kursova_db");
          
   // Check connection

   if($conn === false){
       die("ERROR: Could not connect. " 
           . mysqli_connect_error());
   }
    
   if(isset($_POST["send"]))
   {
        // Taking all 5 values from the form data(input)
        $email =  $_REQUEST['email'];
        $message =  $_REQUEST['message'];

        // Performing insert query execution
        // here our table name is college

        $errors=validateInput($_POST);

        if(empty($errors))
      {

            $sql = "INSERT INTO `feedback`(`email`,`message`)  VALUES ('$email', '$message')";
                
            if(mysqli_query($conn, $sql)){

                    $state=mysqli_query($conn, $sql);
                /*echo nl2br("\n$first_name\n $last_name\n "
                    . "$gender\n $address\n $email");*/
            } else{
                    $state= "ERROR: Hush! Sorry $sql. " 
                //echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
        }
        
        }   
        
    }
    // Close connection
    mysqli_close($conn);


?>






<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зворотній зв'язок</title>
</head>
<body>
    <header>
        <ul class="title">
            <li class="first"><a href="menu.php"><img src="https://img.icons8.com/material-outlined/50/000000/back--v2.png"/></a></li>
            <li class="second">Зворотній зв'язок</li>
        </ul>
    </header>
    <div class="form">
        <p>Якщо помітили помилку, є питання чи пропозиції
             по покращенню гри-заповнюйте форму нижче.</p>
        <form action="" method="post">
            <ul>
              <li>
                <label for="email">Email:</label>
                <input
                 for="email-field" 
                 type="email" 
                 id="email-field" 
                 name="email"
                 value=""
                 
                      <?=
                         isset($errors["email"]) ? "is-invalid":""
                      ?>"
                 >
              </li>
             
              <li>
                <label for="message">Повідомлення:</label>
                <input
                id="message"
                type="text"
                name="message"
                value=""
                class="form-control  
                <?=isset($errors["message"]) ? "is-invalid":""?>">
                </input>
              </li>
              <li class="button">
                <button type="submit" name="send">Надіслати</button>
              </li>
              <?php
                if(isset($state))
                {
                    echo "<br><h3>Дякуємо за відгук !</h3>";
                }
              ?>
            </ul>
          </form>
    </div>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
        *{
            margin:0;
            padding:0;
            font-family: 'Open Sans', sans-serif;
            background-color:#403cac;
            color:lightgrey;

        }
         header{
            border-bottom:2px solid grey;
            margin-bottom: 30px;
        }
        .title{
            display:flex;
            list-style: none;
           
        }

        .first{
            flex:2;
            padding-top:20px;
            padding-left:20px;
        }
        .second{
            flex:10;
            padding:20px 0 20px 30%;
            font-size:40px;
        }

        .form{
            width:35%;
            margin:0 auto;
            text-align: center;
        }

        ul{
            list-style: none;
        }

        li{
            margin-top:20px;
        }

        input,textarea{
            width:100%;
            margin-top:20px;
            border:none;
            border-bottom:1px solid grey;
            outline:none;
            resize:none;


        }

        button{
            width:100px;
            height:30px;
            border-radius:20px;
            border:none;
            background-color:rgb(175, 103, 14);
        }
        

        

    </style>
    
</body>
</html>