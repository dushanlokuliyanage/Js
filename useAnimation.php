<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Using Animaton Libreries</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <div class="medium row">
        <div class="circle dir-normal"></div>
        <div class="padded label">reversed: false</div>
    </div>
    <div class="medium row">
        <div class="circle dir-reverse"></div>
        <div class="padded label">reversed: true</div>
    </div>

    <script>
        import {
            animate
        } from 'animejs';

        animate('.dir-normal', {
            x: '17rem',
            reversed: false, // Default behaviour
            loop: true
        });

        animate('.dir-reverse', {
            x: '17rem',
            reversed: true,
            loop: true
        });
    </script>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

</body>

</html>