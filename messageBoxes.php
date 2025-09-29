<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Boxes</title>
</head>

<body>
    <h1>Hello Chater</h1>

    <button onclick="showAlert();">Alert</button>
    <button onclick="showPrompt();">Prompt</button>
    <button onclick="showConfirm();">Confirm</button>

    <br>
    <br>

    <div id="output">
        My text
    </div>

    <script>
        function showAlert() {
            alert("Hello World");
            console.log("say Hello");
        }

        function showPrompt() {
            let output = prompt("Wht u think about Vidya");
            console.log(output);
            console.log(typeof output);
       
        
        }

        function showConfirm() {
            let yes = confirm("Are u sure she like you?");
            console.log(yes);
            console.log(typeof yes);
            if(yes){
                document.getElementById("output").innerHTML = yes;
            }else{
                document.getElementById("output").innerHTML = "Somthing Went wrong";
            }
        }
    </script>
</body>

</html>