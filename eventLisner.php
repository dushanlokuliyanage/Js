<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Listeners</title>
</head>

<body>
    <h1>Event Listeners</h1>
    <h2 id="runUs"></h2>
    <h2 id="runYou"></h2>
    <h4 id="para"></h4>

    <input type="text" id="pw">
    <h3 id="pwInput"></h3>
    <br>
    <button id="runMe">Click Me</button>

    <script>
        window.addEventListener('click', function() {
            document.getElementById("runUs").innerHTML = "Hello World";
        });

        window.addEventListener('dblclick', function() {
            document.getElementById("runYou").innerHTML = "Mouse Leave";
        });

        window.addEventListener('keyup', function(c) {
            document.getElementById('pwInput').innerHTML = "Password is Incurrect !";
            let check = document.getElementById("para").innerHTML = c.key;
            if (check == '9') {
                alert("That's Great");
            }
        })
    </script>
</body>

</html>