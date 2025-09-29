<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Build a Game with Math</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>My Math Game</h1>
    <div class="main-section">
        <div class="flex hidden" id="question-section">
            <p id="question">Equation</p>
            =
            <input type="number" id="answer" />
            <button id="submit-button" onclick="nextQuation();">Submit</button>
        </div>
        <button id="start" onclick="startGame();">Start</button>
        <div id="q">0</div>
        <div id="timer"><span id="time">0</span>s</div>
    </div>

    <p id="score-section">Score: <span id="score">0</span>/10</p>

    <script>
        const questionSection = document.querySelector("#question-section");
        const question = document.querySelector("#question");
        const answerInput = document.querySelector("#answer");
        const startButton = document.querySelector("#start");
        const score = document.querySelector("#score");
        const submitButton = document.querySelector("#submit-button");
        const q = document.querySelector("#q");
        const timeOutput = document.querySelector("#time");
        let timer;
        let time;
        let duration = 10;

        let count = 0;
        let corectAnswer = 0;

        function startGame() {
            startButton.classList.add("hidden");
            questionSection.classList.remove("hidden");
            score.textContent = 0;
            count = 0;
            genarateQuation();
        }

        //Js Random number funtion
        function randomNumber(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;

        }


        function genarateQuation() {
            let questionType = randomNumber(1, 3)
            switch (questionType) {

                case 1:
                    // Addition
                    let num1 = randomNumber(10, 100);
                    let num2 = randomNumber(10, 100);
                    question.textContent = num1 + "+" + num2;
                    corectAnswer = num1 + num2;
                    duration = 10;
                    break;
                case 2:
                    // Subtraction
                    let num3 = randomNumber(10, 100);
                    let num4 = randomNumber(10, 100);
                    question.textContent = num3 + "-" + num4;
                    corectAnswer = num3 - num4;
                    duration = 15;
                    break;
                case 3:
                    // Multification
                    let num5 = randomNumber(10, 100);
                    let num6 = randomNumber(10, 100);
                    question.textContent = num5 + "*" + num6;
                    corectAnswer = num5 * num6;
                    duration = 25;
                    break;

                default:
                    break;

            }

            console.log(corectAnswer);
            count++;
            q.textContent = count;
            startTimer();
        }

        function nextQuation() {
            if (parseInt(answerInput.value) === corectAnswer) {
                score.textContent = parseInt(score.textContent) + 1;
            }
            answerInput.value = "";

            if (count == 10) {
                alert("Game Over, Your score is " + score.textContent + "/10");
                question.textContent = "";
                score.textContent = 0;
                startButton.classList.remove("hidden");
                questionSection.classList.add("hidden");
                q.textContent = 0;
                count = "";

            }
            genarateQuation();
        }

        function startTimer() {
            time = 0;
            timeOutput.textContent = duration - time;
            clearInterval(timer);
            timer = setInterval(function() {
                time++;
                timeOutput.textContent = duration - time;
                if (duration <= time) {
                    nextQuation();
                }
            }, 1000)


        }
    </script>
</body>

</html>