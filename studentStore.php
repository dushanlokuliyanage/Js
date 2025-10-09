<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 
        This script manages the student score sheet functionality:
        - Handles dialog open/close for adding students
        - Stores student data in an array
        - Displays student list with position, name, score, and delete action
        - Calculates and displays statistics (number, max, min, average)
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Score Sheet</title>
    <style>
        h1 {
            color: darkblue;
        }

        h2 {
            font-size: 1.2rem;
        }

        button {
            background-color: darkblue;
            color: white;
            padding: 5px;
            border-radius: 5px;
            border: none;
        }

        .dialog-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            opacity: 0;
            justify-content: center;
            align-items: center;
            align-items: center;
            /* animation */
            transition: all 200ms ease-in-out;
            ;
        }

        .dialog-container>div {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            position: relative;
            box-shadow: 0 0 5px black;
            height: 450px;
            width: 450px;
        }

        .field-set {
            margin-top: 50px;
        }

        #closeAddDataBtn {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: red;
            color: white;
            border-radius: 50%;
            border: none;
            padding: 1px 4px;
            box-shadow: 0 1px 0px black;
        }

        #addDataBtn {
            background-color: green;
            color: white;
            border-radius: 5px;
            border: none;
            padding: 5px;
            box-shadow: 0 1px 0px black;
            width: 100%;
            margin-top: 10px;
        }

        .delete-btn {
            background-color: red;
            color: white;
            border-radius: 50%;
            border: none;
            padding: 1px 4px;
            box-shadow: 0 1px 0px black;
            margin-left: 10px;
            font-size: .8rem;
        }

        .delete-btn1 {
            background-color: red;
            color: white;
            padding: 1px 4px;
            box-shadow: 0 1px 0px black;
            margin-left: 10px;
            font-size: .8rem;
            width: 45px;
        }

        #info {
            margin-top: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Student Score Sheet</h1>
    <button id="addDataDialogBtn">Add Data</button>

    <div id="info"> </div>

    <table>
        <thead>
            <tr>
                <th>Position</th>
                <th>Name</th>
                <th>Score</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="list"> </tbody>
    </table>

    <!-- Dialog -->
    <div class="dialog-container">
        <div>
            <h2>Add Data</h2>
            <div class="field-set">
                <label for="name">Name</label>
                <input type="text" id="name">
            </div>
            <div class="field-set">
                <label for="score">Score</label>
                <input type="number" id="score">
            </div>
            <button id="addDataBtn">Add</button>
            <button id="closeAddDataBtn">X</button>
        </div>
    </div>

    
    <script>
        // Get references to DOM elements
        const list = document.getElementById('list');
        const addDataDialogBtn = document.getElementById('addDataDialogBtn');
        const closeAddDataBtn = document.getElementById('closeAddDataBtn');
        const dialogContainer = document.querySelector('.dialog-container');
        const nameInput = document.getElementById('name');
        const scoreInput = document.getElementById('score');
        const addDataBtn = document.getElementById('addDataBtn');
        const info = document.getElementById('info');

        // Show the dialog when "Add Data" button is clicked
        addDataDialogBtn.addEventListener('click', function() {
            dialogContainer.style.display = 'flex';
            setTimeout(function() {
                dialogContainer.style.opacity = 1;
            }, 100);
        });

        // Close dialog when close button is clicked
        closeAddDataBtn.addEventListener('click', closeDialog);

        // Function to close the dialog with fade-out effect
        function closeDialog() {
            dialogContainer.style.opacity = 0;
            setTimeout(function() {
                dialogContainer.style.display = 'none';
            }, 100);
        }

        // Array to store student objects {name, score}
        const students = [];

        // Add student data when "Add" button is clicked
        addDataBtn.onclick = () => {
            let name = nameInput.value;
            let score = scoreInput.value;
            // Validate input fields
            if (name != '' && score != '') {
                students.push({
                    name: name,
                    score: score
                });
                // Clear input fields
                nameInput.value = '';
                scoreInput.value = '';
                // Update the student list display
                displayList();
                // Close the dialog
                closeDialog();
            } else {
                // Alert if fields are empty
                alert("Please Fill all the filesds");
            }
        }

        // Function to display the student list and statistics
        function displayList() {
            // Sort students by score descending
            students.sort(function(a, b) {
                return b.score - a.score;
            });

            let total = 0;
            let max = 0;
            let min = 100;

            // Calculate total, max, and min scores
            students.forEach(student => {
                // Ensure score is an integer
                student.score = parseInt(student.score);

                if (student.score > max) {
                    max = student.score;
                }
                if (student.score < min) {
                    min = student.score;
                }
                total += student.score;
            });

            // Calculate average score
            let avarage = total / students.length;
            // Display statistics
            info.innerHTML = `No. Students: ${students.length} <br>`;
            info.innerHTML += `Max: ${max} | Min: ${min}  | Avarage: ${avarage.toFixed(1)}`;

            // Clear the current list
            list.innerHTML = '';

            // Display each student in the table
            students.forEach(function(student) {
                let record = document.createElement('tr');

                // Position column
                let td0 = document.createElement('td');
                td0.innerHTML = students.indexOf(student) + 1;

                // Name column
                let td1 = document.createElement('td');
                td1.innerHTML = student.name;

                // Score column
                let td2 = document.createElement('td');
                td2.innerHTML = student.score;

                // Action column (delete button)
                let td3 = document.createElement('td');
                td3.innerHTML = student.score;

                // Create "Drop" button for deleting student
                let btn = document.createElement('button');
                btn.innerHTML = 'Drop';
                btn.classList.add('delete-btn1');
                btn.onclick = () => {
                    // Confirm before deleting
                    if (!confirm('Are u sure to remove?')) {
                        return;
                    }
                    // Remove student from array and update display
                    let index = students.indexOf(student);
                    students.splice(index, 1);
                    displayList();
                };

                // Add button to action column
                td3.appendChild(btn);
                // Add all columns to the row
                record.appendChild(td0);
                record.appendChild(td1);
                record.appendChild(td2);
                record.appendChild(td3);
                // Add row to the table body
                list.appendChild(record);
            });
        }
    </script>
</body>

</html>