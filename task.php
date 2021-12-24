<?php

require_once __DIR__ .'/database/pdo.php';



        if($_POST['task']=="true")
        {
            $sql=random_int(1,10);
            $sql=$dbh->prepare("SELECT `task` FROM `tasks` WHERE `id_task`='$sql'");
            $sql->execute();
            $task_=$sql->fetch();
            $task=$task_['task'];
        }
        else{
            $task='';
        }

        print_r($task);
?>