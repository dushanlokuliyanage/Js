<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <button
        onclick="console.log(`cart Quantity: ${cartQuntity}`); "> Show Quantity
    </button>

    <button
        onclick="cartQuntity += 1; console.log(`cart Quantity: ${cartQuntity}`);">Add to cart
    </button>

    <button onclick=" cartQuntity += 2; console.log(`cart Quantity: ${cartQuntity}`); ">+2</button>
    <button onclick=" cartQuntity += 3; console.log(`cart Quantity: ${cartQuntity}`); ">+3</button>

    <button
        onclick=" cartQuntity = 0; 
        console.log(`cart was Reset.`);
        console.log(`cart Quantity: ${cartQuntity}`);">Reset
    </button>


    <script src="cartProject.js"></script>
</body>

</html>