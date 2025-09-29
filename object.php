<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object</title>
</head>

<body>





    <script>
        // function hello(f,l){
        //     console.log("First Name is"+ f);
        //         console.log("Last Name is"+ l);
        //         console.log("-------------------")
        // }

        // hello("dushan", "malinga");
        // hello("thh", "lll");
        // hello("huee", "llj");


        function getInfo(f, age) {
            let output = f+" is "+age+" year Old";
            console.log(output);
        }
        getInfo("Dushan", 19);


let dushan = {
    name: "Sheni",
    age: "19",
        sayHi : function (){
        console.log("Hello myName is" +this.name);
        console.log("Hello myAge is" +this.age);
  }
}

let dushan1 = {
    name: "Shen555i"

}
// dushan.sayHi();

//  Common Object Methods 

console.log(Object.keys(dushan));
console.log(Object.values(dushan));
console.log(Object.entries(dushan));

Object.assign(dushan1,dushan);
console.log(dushan1)

    </script>
</body>

</html>