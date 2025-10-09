<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dialog Box</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .popUp1 {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: all 1s ease-in-out;
        }

        .popUp2 {
            background-color: beige;
            border: 2px solid gray;
            border-radius: 10px;
            padding: 20px;
            height: 250px;
            width: 250px;
            text-align: center;
        }

        button {
            width: 200px;
            height: 30px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <h1>Pop Up Dialog Box</h1>
    <p>Name: <span id="nameOutput"></span></p>

    <button id="hideBtn">Hide</button>
    <br>
    <button id="showBtn">show</button>

    <div class="popUp1" id="hideBox">
        <div class="popUp2">
            <h2>What is your Name?</h2>
            <input type="text" id="name" placeholder="Enter your name" style="width: 195px; height: 25px;">
            <hr>
            <button id="sendBtn">Send</button>
            <button id="cancelBtn">Cancel</button>
        </div>
    </div>

    <script>
        const box = document.getElementById('hideBox');
        const nameInput = document.getElementById('name');
        const nameOutput = document.getElementById('nameOutput');
        const hideBtn = document.getElementById('hideBtn');
        const showBtn = document.getElementById('showBtn');
        const sendBtn = document.getElementById('sendBtn');
        const cancelBtn = document.getElementById('cancelBtn');

        // Hide popup
        hideBtn.addEventListener('click', () => {
            box.style.display = 'none';
        });

        // Show popup
        showBtn.addEventListener('click', () => {
            nameInput.value = '';
            box.style.display = 'flex';

        });

        // Send button – show name & close popup
        sendBtn.addEventListener('click', () => {
            const name = nameInput.value.trim();
            if (name) {
                nameOutput.textContent = name;
                box.style.display = 'none';

            } else {
                alert("Please enter your name!");
            }
        });

        // Cancel button – close popup
        cancelBtn.addEventListener('click', () => {
            box.style.display = 'none';
            nameInput.value = "";
        });
    </script>

</body>

</html>