<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        function getData1() {
            fetch('https://jsonplaceholder.typicode.com/todos').then(function(res) {
                return res.json();
            }).then(function(res) {
                console.log(res);
                res.forEach(todo => {
                    fetch('https://jsonplaceholder.typicode.com/todos/' + todo.id).then(function(res) {
                        return res.json();

                    }).then(function(res) {
                        console.log(res);
                    })
                })
            })
        }

        async function getData2() {
            let res = await fetch('https://jsonplaceholder.typicode.com/todos');
        }
    </script>
</body>

</html>