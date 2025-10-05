<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="white">

    <style>
        .dark {
            background-color: black;
            color: white;
            transition: background 0.50s, color 0.50s;
        }

        .white {
            background-color: white;
            color: black;
            transition: background 0.50s, color 0.50s;
        }
    </style>

    <h1> Unit 28 | Manipulating CSS | JavaScript</h1>
    <hr>
    <p>Why JavaScript?
        lightbulb What is JavaScript?
        check_circle High-level, interpreted programming language
        check_circle Core technology of the World Wide Web
        check_circle Enables interactive web pages
        check_circle Runs on both client-side and server-side
        trending_up Career Opportunities
        check_circle Frontend Developer (React, Vue, Angular)
        check_circle Backend Developer (Node.js)
        check_circle Full Stack Developer
        check_circle Mobile App Developer (React Native)
        star Importance in Web Development
        check_circle Powers 98% of all websites
        check_circle Essential for creating dynamic user experiences
        check_circle Versatile: web, mobile, desktop, and server applications
        check_circle Large ecosystem of frameworks and libraries
        timeline Learning Journey Overview
        check_circle 60-day roadmap from beginner to job-ready
        check_circle 8 structured stages with daily goals
        check_circle Hands-on projects and practical exercises
        check_circle Free resources and community suppor</p>
    <br>
    <center><button class="btn btn-outline-dark btn-light " style="width: 155px;">Next</button></center>

    <!-- Dark mode toggle button -->
    <button id="darkModeToggle" style="position: fixed; top: 10px; right: 10px;" class="btn btn-outline-success btn-light btn-sm " style="width: 155px;">
        Mode </button>

    <script>
        const btn = document.getElementById('darkModeToggle');
        
        btn.onclick = () => {
            document.body.classList.toggle('dark');
            document.body.classList.toggle('white');

        }
    </script>





</body>

</html>