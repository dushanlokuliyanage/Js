<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>

<body id="body">
    <h1>Typing Game</h1>

    <div id="game_section">
        <h2 id="display" style="padding: 20px;">Key</h2>
        <p>
            Correct Inputs : <span id="correct">0</span>
            Missed : <span id="missed">0</span>
            Wrong Inputs : <span id="wrong">0</span>
        </p>
    </div>

    <progress style="width: 80%; " max="100" value="0" id="progress"></progress>
    <input type="range" id="speed" min="100" max="1000">

    <script>
        function randpwLatter() {
            const alphabet = 'ABCDEFGHIJKLMNOPQURXYZTW';
            const randomIndex = Math.floor(Math.random() * alphabet.length);
            return alphabet[randomIndex];
        }
             let timer;
        var progress = document.getElementById("progress");
        var speed = document.getElementById('speed');
        const display = document.getElementById("display").innerHTML = randpwLatter();
        document.getElementById('body').addEventListener('keyup', function(k) {
            let timer;
            var correct = document.getElementById('correct');
            var wrong = document.getElementById('wrong');
            var missed = document.getElementById('missed');
            covertor = k.key.toUpperCase();

            if (display == covertor) {
                correct.innerHTML++;
                    randpwLatter();
            } else {
                wrong.innerHTML++;
                    randpwLatter();
            }
        
            starTimer();
        });

        var dealy = 1000;

        function starTimer() {

            progress.value = 0;
            clearInterval(timer);
            timer = setInterval(function() {
                progress.value += 10;
                if (progress.value >= 100) {
                    missed.innerHTML++;
                    randpwLatter();
                    starTimer();
                }
            }, dealy)
        }

        speed.onchange = function() {
            dealy = speed.value;
            starTimer();
        }
    </script>
</body>

</html>