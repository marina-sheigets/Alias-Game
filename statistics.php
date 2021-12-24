<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.js"></script>
    <title>Статистика слів</title>
</head>
<body>
    
    <div id="list"></div>

<script>
 document.addEventListener("DOMContentLoaded", function(e)
    {
        e.preventDefault();
        var com2=localStorage.getItem('command2');
        var com1=localStorage.getItem('command3');

        alert(typeof(localStorage.getItem('command3')));

        $.ajax({
            type:"POST",
            url:"showStatistics.php",
            data:{
                'com1':com1,
                'com2':com2,
                
            },
            dataType: "text",
            success:function(res)
            {
                $('#list').append('<p>'+res+'</p>');
            }
        });
    });
</script>
 
</body>
</html>