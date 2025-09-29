<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Loop In Js</title>
</head>
<body>
    
<h1>Loop</h1>
<ol id="list">
    <li>First Line</li>
        <li>First Line</li>
            <li>First Line</li>
</ol>


<script>
 for(let i = 0; i < 5; i++ ){
       let list = document.getElementById("list");
    let listItem = document.createElement("li");
    let text = document.createTextNode(i);
   
    listItem.appendChild(text);
    list.appendChild(listItem);
 }

 // For in loop
let user = {
    name: "Kumara",
    age : "20",
    addtress: "25 / 4"
}

for (const data in user) {
  //console.log(user[data]);
     let list = document.getElementById("list");
    let listItem = document.createElement("li");
    let text = document.createTextNode(user[data]);
   
    listItem.appendChild(text);
    list.appendChild(listItem);
}

</script>

</body>
</html>