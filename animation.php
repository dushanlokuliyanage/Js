<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animations</title>
</head>

<body>

    <canvas id="canvas" width="400" height="400" style="background-color:green;"></canvas>
<p id="text"></p>
    <script>
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');

// Rectangle

// ctx.fillStyle = 'red';
// ctx.fillRect(100,100,200,200);

// ctx.fillStyle = 'green';
// ctx.fillRect(200,200,200,200);

// Draw a line 


// ctx.beginPath();
// ctx.moveTo(0,0);
// ctx.lineTo(200,200);
// ctx.lineTo(0,400);

// ctx.strokeStyle = "red";

// //Outline

// ctx.stroke();


// //circle

// ctx.beginPath();
// ctx.arc(200,200,30,0, Math.PI*2, false);

// ctx.fillStyle =  'black';
// ctx.fill();



let fps = 1000;
let counter = 0 ;

let timer  =  setInterval(function (){


ctx.clearRect(0,0,400,400) ;

counter;
ctx.font = '30px Arial';
ctx.fillStyle = "red";
ctx.fillText(counter ,20 , 380);

}, 100/fps )


// This animation part I already stop to continue 
    </script>

</body>

</html>