<?php
function validateInput(array $data)
    {
        //Валидация email
      $errors=[];

      if(filter_var($data["email"], FILTER_VALIDATE_EMAIL)==false){
          $errors["email"]=true;
      }

      //Валидация message
      if(empty($data["message"]))
      {
          $errors["message"]=true;
      }
      return $errors;
    }

    function leaveFeedBack(object $dbh, string $email, string $message):void
    {
        $sql="INSERT INTO `feedback` (`email`,`message`)VALUES (:email,:message)";
        $params= [
            "email"=>$email,
            "message"=>$message,
        ];
        $dbh->prepare($sql)->execute($params);
    }

?>
