<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destructuring </title>
</head>

<body>


    <script>
        const myArray = ['Samal', 'Kamla', 'Pahan', 'Sugath'];

        let [Name1, Name2, Name3] = myArray;
        console.log(myArray[Name1, Name2, Name3]);

        let name1 = myArray[0];
        let name2 = myArray[1];
        let name3 = myArray[2];

        console.log(name1, name2, name3);
        [n4, n2, n3] = myArray;
        console.log(n4, n2, n3);



        
    </script>

</body>

</html>