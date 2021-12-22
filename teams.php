<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="teams.css">
    <title>Команди</title>
</head>
<body>
    <div class="main">
        <div class="game_name"><a href="menu.php">Alias</a></div>
        
        <div class="menu">
            <ul>
                <li> <a href="Rules.html">Правила</a></li>
                <li><a href="settings.php">Налаштування</a></li>
            </ul>
        </div>
        <div class="list_command">Список команд</div>
        <div class="const_command">
            
            <input type="text" value="Помідори" placeholder="Назва команди">

        </div>
        <div id="variants">
            
                    <div class="control-group" id="uzz">
            
            
                        <div class="controls">
            
                            <input  type="text"  placeholder="Назва команди" name="name[]">
                            <a class="del_variant" onclick="showButton()">X</a>
            
                        </div>
            
                    </div>
                
                </div>
                <span id="ss" onclick="count()">Додати команду</span>
                <br><br>
                <button class="play">Грати</button>
    </div>   
        

    
    <script src="http://code.jquery.com/jquery-latest.js"></script>


    <script>

    $(document)
        .ready(function () {
            var variant = $('#uzz')
                .clone(true);
            $('#ss')
                .click(function () {
                    $(variant)
                        .clone(true)
                        .appendTo('#variants')
                        .fadeIn('slow')
                        .find("input[name*=name]")
                        .focus();
                });
            $(document)
               .on('click', 'a.del_variant', function () {
                    $(this)
                        .parents(".control-group")
                        .remove();
                });
       });
    </script>

    <script>
        function count()
        {
            //margin();
            //alert(document.getElementById('variants').getElementsByTagName('input').length);
            if(document.getElementById('variants').getElementsByTagName('input').length>1)
            {
                
                document.getElementById('ss').style.display = 'none';

            }
            else{
                //document.getElementById('ss').style.margin-top = '20px';
            }
            
            
        }

        function margin(){
            //document.getElementById('ss').style.margin-top = '20px';
        }

        function showButton()
        {

            document.getElementById('ss').style.display = 'inline';
            
        }

        
        </script>

    
</body>
</html>