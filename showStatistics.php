<?php

    require_once __DIR__ .'/database/pdo.php';

    $command_name=$_POST['com1'];
    $get_id_command=$dbh->prepare("SELECT `id` FROM `commands` WHERE `command_name`='$command_name'");
    $get_id_command->execute();
    $name_command=$get_id_command->fetch();
    $name_comm=$name_command['id']??= '';
    echo "<p style='margin-top:10px'>$command_name</p>";

    echo "<table>
    <tr>
        <td align=center><b>Слово</b></td>
        <td align=center><b>Статус</b></td>
    </tr>";
    
    $sql=$dbh->prepare("SELECT `word`,`word_status` FROM `word_statistics` WHERE `id_command`='$name_comm'");
    $sql->execute();
    while($row=$sql->fetch(PDO::FETCH_ASSOC))//щоб не дублювалось
    {
        $word=$row['word']??= '';
        $status=$row['word_status']??= '';
       
        if($status==1)
        {
            $status='<input type="checkbox" onclick="return false" name="checked" id="status" checked />';
        }
        else {
            $status='<input type="checkbox" onclick="return false" name="unchecked" id="status"  />';

        }



        echo "<tr>";
        echo "<td align='center'>$word</td>";
        echo "<td align='center'>$status</td>";
        echo"</tr>";
        
    }
    
    echo "</table";


    ?>