<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Back</title>
</head>

<body>

    <h3 id="display"></h3>
    <button id="click">click Me</button>


    <script>
        function greeting(name) {
            console.log("Hello" + name);
        }

        function processUserInput(callBack) {
            let name = prompt("Please, Honey Enter Your Name here.");
            callBack(name);

        }
        processUserInput(greeting);
       
         processUserInput(function(name) {
            document.getElementById("display").innerHTML = name;
        })

        document.getElementById("click").addEventListener('click', function() {

        })
    </script>




</body>

</html>