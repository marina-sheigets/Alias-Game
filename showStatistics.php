<?php

    require_once __DIR__ .'/database/pdo.php';

    $command_name=$_POST['com1'];
    $get_id_command=$dbh->prepare("SELECT `id` FROM `commands` WHERE `command_name`='$command_name'");
    $get_id_command->execute();
    $name_command=$get_id_command->fetch();
    $name_comm=$name_command['id'];


    $sql=$dbh->query("SELECT `word`,`word_status` FROM `word_statistics` WHERE `id_command`='$name_comm'");
    echo "<h1>$command_name</h1>";
    echo "<tr> <th> Cлово</th><th>Статус</th></tr>";
    while($row=$sql->fetch(PDO::FETCH_ASSOC))//щоб не дублювалось
    {
        $row=$row['word'];
        foreach ($row as $col_value)
        {

            echo"<tr><td>$col_value</td></tr>";
               
                   // print_r($col_value);
            
        }
    }
?>