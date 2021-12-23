<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="settings.css">
    <title>Налаштування</title>
</head>
<body>
    <div class="main">
        <form method="post">
            <div class="title">Налаштування</div>
            <div class="amount_points">
                <p>Максимальна кількість слів:</p>
                <input type="range" min="10" max="40" step="1" value="25"
                class="slider" id="firstRange" name="firstRange" oninput="showAmountPoints()">
                <span id="one" style="margin-left:30px"></span>
            </div>
            <div>
                <p>Час раунду в секундах</p>
                <input type="range" min="30" max="120" step="1" value="75" class="slider" name="secondRange" id="secondRange" oninput="showAmountTime()">
                <span id="second" style="margin-left:30px"></span>
            </div>
            <div>
                <p>Штраф за пропуск слова</p>
                <input type="checkbox" name="switch" id="switch" />

            </div>
            <div>
                <p>Мова ігрових слів:</p>
                <select id="language" name="language" >

                    <option>Російська</option>
                    <option>English</option>
                </select>
            </div>
            <div>
            
                <input type="submit" class="play" id="play" value="Грати" '>
            </div>
        </form>

        
    </div>

    <script>
       
    </script>
    <script src="jquery.js"></script>
    <script src="settings.js"></script>
</body>
</html>