<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pythagoras Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Pythagoras Calculator</h1>
    <p>
        This program calculates the hypotenuse or one of the sides of a right
        triangle using the Pythagoras theorem.
    </p>

  <h2>  <b>
        a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup>
    </b></h2>

    <div class="center">
        <svg width="200" height="200">
            <polygon points="10,10 10,190 190,190"
                style="fill: none; stroke: red; stroke-width: 5; fill-rule: evenodd" />
            <rect x="10" y="180" width="10" height="10" style="stroke: red; stroke-width: 5; fill: none;" />
            <!-- a -->
            <text x="80" y="180" fill="black" font-size="2rem">a</text>
            <!-- b -->
            <text x="15" y="120" fill="black" font-size="2rem">b</text>
            <!-- c -->
            <text x="100" y="95" fill="black" font-size="2rem">c</text>
        </svg>
    </div>
    <br />
    <b>
        Fill 2 known sides values and leave the third one empty. Click the
        "Calculate" button to calculate the third side.
    </b>

    <div id="solution-section">
        <form action="#">
            <label for="a">a =</label>
            <input type="number" id="a" />
            <br />
            <label for="b">b =</label>
            <input type="number" id="b" />
            <br />
            <label for="c">c =</label>
            <input type="number" id="c" />
            <br />
            <div id="buttons">
                <button onclick="calculate()">Calculate</button>
                <button type="reset">Reset</button>
            </div>
        </form>
        <div id="calculation">
            <span id="solution"> </span>
        </div>
    </div>

    <script>
        function calculate() {
            let a = document.getElementById('a').value;
            let b = document.getElementById('b').value;
            let c = document.getElementById('c').value;
            const solution = document.getElementById('solution');

            if (a == '') {
                solution.innerHTML = "Sloving for a: <br>";
                solution.innerHTML += "a = √ (c<sup>2</sup> - b<sup>2</sup>  )  <Br>";
                solution.innerHTML += "a = √ (" + c + "<sup>2</sup> - " + b + "<sup>2</sup>  ) <Br>";
                solution.innerHTML += "a = √ (" + c * c + " - " + b * b + " ) <Br>";
                solution.innerHTML += "a = √ (" + ((c * c) - (b * b)) + " ) <Br>";
                solution.innerHTML += Math.sqrt((c * c) - (b * b));
                document.getElementById('a').value = Math.sqrt((c * c) - (b * b));


            } else if (b == '') {

                solution.innerHTML = "Sloving for b: <br>";
                solution.innerHTML += "b = √ (c<sup>2</sup> - b<sup>2</sup>  )  <Br>";
                solution.innerHTML += "b = √ (" + c + "<sup>2</sup> - " + a + "<sup>2</sup>  ) <Br>";
                solution.innerHTML += "b = √ (" + c * c + " - " + a * a + " ) <Br>";
                solution.innerHTML += "b = √ (" + ((c * c) - (a * a)) + " ) <Br>";
                solution.innerHTML += Math.sqrt((c * c) - (a * a));
                document.getElementById('b').value = Math.sqrt((c * c) - (a * a));


            } else if (c == '') {

                solution.innerHTML = "Sloving for c: <br>";
                solution.innerHTML += "c = √ (c<sup>2</sup> - b<sup>2</sup>  )  <Br>";
                solution.innerHTML += "c = √ (" + a + "<sup>2</sup> + " + b + "<sup>2</sup>  ) <Br>";
                solution.innerHTML += "c = √ (" + a * a + " + " + b * b + " ) <Br>";
                solution.innerHTML += "c = √ (" + ((a * a) + (b * b)) + " ) <Br>";
                solution.innerHTML += Math.sqrt((a * a) + (b * b));
                document.getElementById('c').value = Math.sqrt((a * a) + (b * b));

            }

        }
    </script>
</body>

</html>