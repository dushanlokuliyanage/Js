<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes </title>
</head>

<body>

    <script>
        const personObj = {
            name: 'Dushan',
            age: 30,
            hobbies: ['reading', 'music', 'movies'],
            addres: {
                street: '123 Hanwella',
                city: 'Colombo',
                state: 'NY'
            },

            showInfo: function() {
                console.log(`${this.name} is ${this.age} year old`);
            }
        }
 
        personObj.showInfo();

     ///Class 

        class person {
            constructor(name, age, hobbies) {
                this.name = name;
                this.age = age;
                this.hobbies = hobbies;

            }

            showInfo() {
                console.log(`${this.name} is ${this.age} year old`);
            }

        }

        sman = new person(" Saman", 25, ['reading', 'movies', 'music']);
        sman.showInfo();


// Inheritance

class Student extends person{

}

sumit = new Student ('sumit', 18, []);
sumit.showInfo();

    </script>

</body>

</html>