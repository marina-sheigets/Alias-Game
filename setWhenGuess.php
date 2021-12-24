<?php
   
   require_once __DIR__ .'/database/pdo.php';


    if($_POST['language']=="ru"){
        $wor=random_int(1,78);
        $sql=$dbh->prepare("SELECT `russion_word` FROM `russion_words` WHERE `id_ru_word`='$wor'");
        $sql->execute();
        $fetch=$sql->fetch();
        $word=$fetch['russion_word'];
        print_r($word);
    }
    else{
        $wor=random_int(1,112);
        $sql=$dbh->prepare("SELECT `english_word` FROM `english_words` WHERE `id_english_word`='$wor'");
        $sql->execute();
        $fetch=$sql->fetch();
        $word=$fetch['english_word'];
        print_r($word);
    }

        $word_status=1;//тому що слово вгадане
        $prevWord=$_POST["prev_word"];
        
        //Потрібно дізнатися id команди по її імені
        $command_name=$_POST['name_command'];
        $get_id_command=$dbh->prepare("SELECT `id` FROM `commands` WHERE `command_name`='$command_name'");
        $get_id_command->execute();
        $name_command=$get_id_command->fetch();
        $name_comm=$name_command['id'];

        $points=1;

        $insert_word=$dbh->prepare("INSERT INTO `word_statistics`(`word`,`word_status`,`points`,`id_command`) VALUES ('$prevWord','$word_status','$points','$name_comm')");
        $insert_word->execute();
        $insert=$insert_word->fetch();


?>
