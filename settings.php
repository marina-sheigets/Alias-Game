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
        <div class="title">Налаштування</div>
        <div class="amount_points">
            <p>Кількість балів для досягнення перемоги</p>
            <input type="range" min="10" max="40" step="1" value="25"
            class="slider" id="firstRange" oninput="showAmountPoints()">
            <span id="one" style="margin-left:30px"></span>
        </div>
        <div>
            <p>Час раунду в секундах</p>
            <input type="range" min="30" max="120" step="1" value="75" class="slider" id="secondRange" oninput="showAmountTime()">
            <span id="second" style="margin-left:30px"></span>
        </div>
        <div>
            <p>Штраф за пропуск слова</p>
            <input type="checkbox" id="switch" />

        </div>
        <div>
            <p>Мова ігрових слів:</p>
            <select>

                <option>Російська</option>
                <option>English</option>
            </select>
        </div>
        <div>
        <form>
                    <input type="button" class="play" value="Грати" onClick='location.href="game.php"'>
                </form>

        </div>
    </div>

    <script>
       function showAmountPoints() {
            var rng=document.getElementById('firstRange'); //rng - это Input
            var p=document.getElementById('one'); // p - абзац
            p.innerHTML=rng.value;
        }

        function showAmountTime() {
            var rng=document.getElementById('secondRange'); //rng - это Input
            var p=document.getElementById('second'); // p - абзац
            p.innerHTML=rng.value;
        }
    </script>

    
</body>
</html>