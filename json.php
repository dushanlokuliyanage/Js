<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>

<body>

    <p id="msg"></p>

    <script>
        const person = {
            name: "Kumara",
            age: "25",
            ecucation: ['o/l', 'A/l', 'Doploma']

        }

        let myJosn = JSON.stringify(person);
        // console.log(person);
        document.getElementById('msg').innerHTML = myJosn;

        let newObj = JSON.parse(myJosn);
        console.log(newObj);
        // document.getElementById('msg').innerHTML = newObj;
    </script>




</body>

</html>