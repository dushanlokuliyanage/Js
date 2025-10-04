<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest And Spread</title>
</head>

<body>


    <script>
        //Rest
        function myFunction(a, ...myArry) {
            console.log("Hello", a, myArry);
        }

        myFunction("Dushan", 20, 30);


        // Spread 

        function myFunction2(a, b, c, d, e, f, g) {
            console.log(a, b, c, d, e, f, g);
        }
        myFunction2("a", "b", 5555, 8899, 55612);

     
     
        // Destructuring

        const myArry = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        let [A, B,C] = myArry;
        console.log(A, B ,C);


    </script>
</body>

</html>