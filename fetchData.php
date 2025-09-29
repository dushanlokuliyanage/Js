<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data</title>
</head>

<body>

    <p id="output"></p>
    <button onclick="getData();">Get Data</button>
    <button onclick="getDataFetch()"> Click Here</button>

    <script>
        function getData() {
            console.log("Hello World");
        }

        let request = new XMLHttpRequest();
        request.onreadystatechange = function() {
            if ((request.readyState == 4) && (request.status == 200)) {
                let response = request.responseText;
                console.log(response);
            }
            request.open("GET", 'https://jsonplaceholder.typicode.com/todos/1');
            request.send();
        }

        function getDataFetch() {
            fetch('https://jsonplaceholder.typicode.com/todos/1')
                // .then(response => response.json())
                // .then(json => console.log(json))

                .then(function(response) {
                    return response.json()

                })

                .then(function(data) {
                    console.log(data)
                    document.getElementById("output").innerHTML = data.completed;
                })
        }
    </script>


</body>

</html>