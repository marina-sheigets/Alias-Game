<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="game.css">
    <title>Гра</title>
</head>
   
<body>
    <div class="main">
        <div class="title">Alias</div>
        <div id="count"></div>
        <form >
            <div id="hideButton">
                    <h3 id="name_command"></h3>
                    <p> Ви готові почати гру?</p>
                    <input type="button" id="startClock" name="start" value="Старт">
                
            </div>
            <div id="list_words">
                    <h1 id="word"></h1>
                    <input type="button"  id="skip" value="Пропустити" '>
                    <input type="button"  id="guess" value="Відгадано" '>
            </div>
        </form>
    </div>

<script src="settings.js"></script>
<script src="readyDocument.js"></script>
<script src="gameProccess.js"></script>



</body>
</html>