<?php
     require_once __DIR__ .'/database/pdo.php';

    $command_name=$_POST['com1'];
    $get_id_command=$dbh->prepare("SELECT `id` FROM `commands` WHERE `command_name`='$command_name'");
    $get_id_command->execute();
    $name_command=$get_id_command->fetch();
    $name_comm=$name_command['id'];
   // print_r($name_comm);

    //echo "<span>$command_name</span> &nbsp &nbsp&nbsp";


    $sql=$dbh->prepare("SELECT SUM(points) AS total FROM word_statistics WHERE id_command=$name_comm");
    $sql->execute();
    $amount=$sql->fetch(PDO::FETCH_ASSOC);
    $amoun=$amount['total'];
    echo "<p>$command_name : &nbsp&nbsp&nbsp $amoun </p>"



?>