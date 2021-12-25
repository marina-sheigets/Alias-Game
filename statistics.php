<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="statistics.css">
    <title>Статистика слів</title>
</head>
<body>
    <div class="title">Результати</div>
    <div class="include"> 
        <div id="list"></div>
        <div id="list1"></div>
    </div>

    <div id="result">
        <div id="result1"></div>
        <div id="result2"></div>

    </div>

    <div class="button">
        <form method="post" action="">
            <input type="submit" name="toMenu" class="toMenu" id="toMenu" value="Повернутись в головне меню" '>
        </form>
    </div>


    <?php
         require_once __DIR__ .'/database/pdo.php';

        if(isset($_POST['toMenu']))
         {
            $query=$dbh->prepare("DELETE FROM `word_statistics`");
            $query->execute();
            
            $query=$dbh->prepare("DELETE FROM `commands` ");
            $query->execute();
        
            header("Location: menu.php");
            
         }
?>

<script>

    


    document.addEventListener("DOMContentLoaded", function(e)
    {
        e.preventDefault();
        var com1=localStorage.getItem('command3');

        

        $.ajax({
            type:"POST",
            url:"showStatistics.php",
            data:{
                'com1':com1,
                
            },
            dataType: "text",
            success:function(res)
            {
                $('#list').html(res);
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function(e)
    {
        e.preventDefault();
        var com2=localStorage.getItem('command2');

        

        $.ajax({
            type:"POST",
            url:"showStatistics.php",
            data:{
                'com1':com2,
                
            },
            dataType: "text",
            success:function(res)
            {
                $('#list1').html(res);
            }
        });
    });

    
    document.addEventListener("DOMContentLoaded", function(e)
    {
        e.preventDefault();
        var com1=localStorage.getItem('command3');
        
        $.ajax({
            type:"POST",
            url:'showResult.php',
            data:{
                'com1':com1,
            },
            dataType: "text",
            success:function(res)
            {
                $('#result1').append(res);
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function(e)
    {
        e.preventDefault();
        var com2=localStorage.getItem('command2');
        $.ajax({
            type:"POST",
            url:'showResult.php',
            data:{

                'com1':com2,
            },
            dataType: "text",
            success:function(res)
            {
                $('#result2').append(res);
            }
        });
    });

    

</script>
 
</body>
</html>