<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <input type="checkbox" name="myCheckbox" checked id="myCheckbox">

    <script>
        function doSomthing() {
            const myPromise = new Promise(function(resolve, reject) {
                //Do something

                let output;

                if (document.getElementById('myCheckbox').checked) {
                    output = "OK";
                    resolve(output);
                } else {
                    output = "Faill"
                    reject(output);
                }
            })

            myPromise.then(function(data) {
                console.log(data);
            }).catch(function(data) {
                console.log(data);
            })
            return myPromise;
        }
        doSomthing();

        // fetch('https://jsonplaceholder.typicode.com/todos/1').then(
        //     function() {
        //         console.log("Ok");

        //     }
        // ).catch(
        //     function(e) {
        //         console.log(e);
        //     }
        // )
    </script>



</body>

</html>