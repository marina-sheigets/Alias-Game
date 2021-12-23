<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.js"></script>
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
        <input type="range" min="10" max="40" step="1" value="25"
        class="slider" id="firstRange" name="firstRange" oninput="showAmountPoints()">
        <span id="one" style="margin-left:30px"></span>
        <p>Час раунду в секундах</p>
        <input type="range" min="30" max="120" step="1" value="75" class="slider" id="secondRange" oninput="showAmountTime()">
        <span id="second" style="margin-left:30px"></span>
        <input type="submit" class="play" id="play" value="Грати" name="button">
</form>

<script>


$(document).ready(function()
{
    $('form').submit(function(e)
    {
        e.preventDefault();
        /*var data_array=$(this).serialize();
        $.ajax({
            type:"POST",
            url:"getDatasettings.php",
            data:data_array,
            success:function()
            {
                alert("Успішно");
            }
        });*/
        alert("123");
    });
});

</script>






   
</body>
</html>