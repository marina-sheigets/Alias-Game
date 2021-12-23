<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="teams.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <title>Команди</title>
</head>
<body>
    <div class="main">
        <div class="game_name"><a href="menu.php">Alias</a></div>
        
        <div class="menu">
            <ul>
                <li> <a href="Rules.html">Правила</a></li>
                
            </ul>
        </div>
        <div class="list_command">Список команд</div>
        <div class="const_command">
        <form class="form" method="post">
            <input type="text" value="" placeholder="Назва команди" id="command1" name="command1">
            <br>
            <input type="text" value="" placeholder="Назва команди" id="command2" name="command2">
            <br>
            <input type="submit" name="play" style="margin-top:30px" class="play" value="Далі"  id="next">
        </form>

        </div>


    
    <?php
        require_once __DIR__ .'/database/pdo.php';

        if(isset($_POST["play"]))
        {
            if(($_POST["command1"]=="") || ($_POST["command2"]==""))
            {
                echo "<h2>Введіть назву команди</h2>";
            }
            else
            {
                $command1=$_REQUEST["command1"];
                $command2=$_REQUEST["command2"];
               

                $sql="INSERT INTO `commands` (`command_name`)VALUES (:command1)";
                $params= [
                    "command1"=>$command1,
                ];
                $dbh->prepare($sql)->execute($params);

                $sql="INSERT INTO `commands` (`command_name`)VALUES (:command2)";
                $params= [
                    "command2"=>$command2,
                ];
                $dbh->prepare($sql)->execute($params);


                header("Location: settings.php");
            }
        
            
        }
    ?>
<script src="saveNameCommands.js"></script>
</body>
</html>