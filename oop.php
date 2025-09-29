<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        let myObject = {
            age: 20,
            name: "Dushan",
            address: "Colombo",
            sublects: ['English', 'Math', 'Sinhala'],

            sayHi: function() {
                console.log("Hi, I am" + this.name);

            },
            schollo: {
                name: "Cnterl School",
                phone: '05595659595',
                address: "Main road, Homagama"
            }
        }


        // OOP Function

        function Preson(name, age, addr) {
            this.name = name;
            this.age = age;
            this.address = addr;
            this.sayHi = function() {
                console.log("Hi, I am" + this.name);
            }
        }

        let preson2 = new Preson("Sunil", 30, "Raaa");
        console.log(preson2);
        let preson3 = new Preson("nil", 80, "mmaa");
        console.log(preson3);

        preson3.sayHello = function() {
            console.log("Hi,............I am" + this.name);
        }

        Preson.prototype.sayHELLO = function() {
            console.log("Hi, I am" + this.name);
        }


        preson3.sayHello();

        // Call()


        const stdn1 = {
            fullName: function(start, end) {
                console.log(this.firstName + "" + this.lastName);
            }
        }
        const stdn2 = {
            firstName: "Saman",
            lastName: "Kumara"
        }


        stdn1.fullName.call(stdn2, "*", "__");


        //Apply

        stdn1.fullName.apply(stdn2, "+", "=");
    </script>

</body>

</html>