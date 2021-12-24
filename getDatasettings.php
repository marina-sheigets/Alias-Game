<?php
    
    require_once __DIR__ .'/database/pdo.php';
    
    if($_POST['language']=="ru"){
            $wor=random_int(1,78);
            $sql=$dbh->prepare("SELECT `russion_word` FROM `russion_words` WHERE `id_ru_word`='$wor'");
            $sql->execute();
            $fetch=$sql->fetch();
            $word=$fetch['russion_word'];
           
            print_r( $word);
    }
    else{
        $wor=random_int(1,112);
        $sql=$dbh->prepare("SELECT `english_word` FROM `english_words` WHERE `id_english_word`='$wor'");
        $sql->execute();
        $fetch=$sql->fetch();
        $word=$fetch['english_word'];
        print_r( $word);
    }
       
    
   

?>