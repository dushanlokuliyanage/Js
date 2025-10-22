<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storge</title>
</head>

<body>
    <p id="output"></p>
    <!-- <input type="text" id="name1">
    <input type="text" id="age1"> -->
    <input type="text" id="name">
    <button class="#" id="storeName"> Store</button>
    <button class="#" id="delectName" onclick="delect();"> Delect</button>
    <button id="btn" onclick="click();">Click</button>
    <script>
        let output = document.getElementById('output');
        let input = document.getElementById('name');
        let storeNameBtn = document.getElementById('storeName');
        let delectNameBtn = document.getElementById('delectName');

        // let name = document.getElementById('name1');
        // let age = document.getElementById('age1');

        storeNameBtn.addEventListener('click', () => {
            output.innerHTML = input.value;
            localStorage.setItem('myName', input.value);
        });

        function readName() {

            let storeValue = localStorage.getItem('myName');
            output.textContent = storeValue;

        }
        readName();

        delectNameBtn.onclick = () => {
            localStorage.removeItem('myName');
            output.textContent = "";
            input.value = "";
        }



        function delect() {
            localStorage.removeItem('myName');
            output.textContent = "";
            input.value = "";
        }

//         const me = [];
//         me.push({
//             myName: name,
//             myAge: age,
//             Country: "Sri Lanka"
//         });


//         function click() {
//        me.forEach(me => {
// output.innerHTML = me;
//        })
//         }
    </script>


</body>

</html>