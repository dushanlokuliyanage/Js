<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealy In Js</title>
</head>

<body>

    <button id="button">Click Me</button>
    <button id="animateButton">Hello Click</button>
    <button id="stopAnimate">Stop Animate</button>

    <p id="output"></p>
    <p id="animateOutput"></p>


    <script>
        const btn = document.getElementById('button');
        const animateRun = document.getElementById('animateButton');
        var animate = document.getElementById('animateOutput');
        var stop = document.getElementById('stopAnimate');

        animate.innerHTML = "Bye Bye !";

        // // St Timeout
        function click() {
            setTimeout(function() {
                document.getElementById('output').innerHTML = "Clicked";
            }, 2000);
        }
        btn.onclick = click;
        var intrvalId;

        // set Intrval

        var left = 1;

        function animateFunction() {
            intrvalId = setInterval(function() {
                left += 10;
                leftLenth = animate.style.marginLeft = left + "px";

            }, 100);


        }
        animateRun.onclick = animateFunction;
        stop.onclick = function() {
            clearInterval(intrvalId);
        }
    </script>
</body>

</html>