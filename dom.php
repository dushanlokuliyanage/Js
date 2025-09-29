<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM</title>
</head>

<body>


    <h1 id="tittle">Hello Js, DOM</h1>
    <button id="btn">Press Me</button>

    <br>
    <br>

    <input type="text" id="age">
    <button onclick="getAge()"> Click Here</button>

    <h1 id="listAge"></h1>

    <script>
        let Changed = "Hello";
        let tittleElement = document.getElementById("tittle").innerHTML = "Hello Baba";
        console.log(tittleElement);

        // Conditinal Stemant

        function getAge() {
            var age = document.getElementById("age").value;
            if (18 >= age) {
                alert("You are too Old, Plese esixt this Site !!");
                 document.getElementById("listAge").innerHTML = age + "'this Age is looking for the Unathorrize Access!";
            } else {
                alert("Welcome mh Boys");
                document.getElementById("listAge").innerHTML = age;
            }

            switch (getAge) {
                case "50":
                    alert("You are too old");
                    break;
                case "45":
                    alert("Best  Age");
                    break;
                case "30 ":
                    alert("Real Life is start now!");
                    break;
                default:
                    document.getElementById("listAge").innerHTML = ("I don't know");

            }



        }
    </script>


</body>

</html>