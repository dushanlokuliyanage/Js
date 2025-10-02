<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception Hadeling</title>
</head>

<body>



    <script>
        // Try catch Error Hadaling

        console.log("Start");
        try {
            const input = document.getElementById("Input");
            console.log(input.value);
        } catch (error) {
            console.log(error);
        } finally {
            console.log("This is runs Always")
        }
        console.log("End");


        // thorwing Error

        let age = prompt("Enter Your Name here ...");
        if (isNaN(age)) {
            throw new Error("Not an Valid Number");
        } else {
            alert("Thank You!")
        }
        console.log("Age is " + age);
    </script>


</body>

</html>