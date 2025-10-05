<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Manipulation</title>
</head>

<body>

    <input type="number" id="num" hidden>
    <hr>
    <input type="color" name="color" id="color1">
    <hr>
    <input type="color" name="color" id="color2">
    <hr>
    <input type="color" name="color" id="color3">
    <hr>
    <input type="color" name="color" id="color4">

    <center>
        <div>
            <div style="height:100px; width:100px; background-color:greenyellow; display:inline-block;" id="box1"></div>
            <div style="height:100px; width:100px; background-color:greenyellow; display:inline-block;" id="box2"></div>
        </div>

        <div>
            <div style="height:100px; width:100px; background-color:greenyellow; display:inline-block;" id="box3"></div>
            <div style="height:100px; width:100px; background-color:greenyellow; display:inline-block;" id="box4"></div>
        </div>

        <h2>Microsoft</h2>
    </center>

    <br><br>
    <button onclick="hideBox();" hidden> Hide</button>

    <script>
        let input = document.getElementById("num");
        let box1 = document.getElementById('box1');
        let box2 = document.getElementById('box2');
        let box3 = document.getElementById('box3');
        let box4 = document.getElementById('box4');
        let color1 = document.getElementById('color1');
        let color2 = document.getElementById('color2');
        let color3 = document.getElementById('color3');
        let color4 = document.getElementById('color4');

        input.addEventListener('change', function() {
            console.log(input.value);
            box.style.width = input.value + "px";
        });

        color1.addEventListener('change', () => {
            box1.style.backgroundColor = color1.value;
        });

        color2.addEventListener('change', () => {
            box2.style.backgroundColor = color2.value;
        });

        color3.addEventListener('change', () => {
            box3.style.backgroundColor = color3.value;
        });

        color4.addEventListener('change', () => {
            box4.style.backgroundColor = color4.value;
        });

        function hideBox() {
            box1.style.display = 'none';
        }
        document.addEventListener('dblclick', function() {
            box.style.display = "block";
        });

        let count = 0;

        setInterval(() => {
            count++;
            box1.style.marginLeft = count + "px";
            box2.style.marginLeft = count + "px";
            box3.style.marginLeft = count + "px";
            box4.style.marginLeft = count + "px"; // move box to the right
        }, 10);
    </script>

</body>

</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSS Manipulation</title>
</head>
<body>

  <input type="number" id="num" placeholder="Box size">
  <hr>
  <input type="color" class="color-picker">
  <input type="color" class="color-picker">
  <input type="color" class="color-picker">
  <input type="color" class="color-picker">

  <center>
    <div>
      <div class="box" style="height:100px; width:100px; background:black; display:inline-block;"></div>
      <div class="box" style="height:100px; width:100px; background:black; display:inline-block;"></div>
    </div>
    <div>
      <div class="box" style="height:100px; width:100px; background:black; display:inline-block;"></div>
      <div class="box" style="height:100px; width:100px; background:black; display:inline-block;"></div>
    </div>
    <h2>Microsoft</h2>
  </center>

  <script>
    const boxes = document.querySelectorAll('.box');          // all 4 boxes
    const colors = document.querySelectorAll('.color-picker'); // all 4 color pickers
    const numInput = document.getElementById('num');

    // Change box size (all boxes)
    numInput.addEventListener('change', () => {
      boxes.forEach(box => box.style.width = numInput.value + "px");
    });

    // Connect each color input with each box
    colors.forEach((picker, index) => {
      picker.addEventListener('input', () => {
        boxes[index].style.backgroundColor = picker.value;
      });
    });

    // Example hide/show toggle for all boxes
    document.addEventListener('dblclick', () => {
      boxes.forEach(box => {
        box.style.display = (box.style.display === "none") ? "inline-block" : "none";
      });
    });
  </script>

</body>
</html>
 -->