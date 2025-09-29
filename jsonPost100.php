<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jSon Ftech Posts</title>
</head>

<body>

    <div id="data"></div>
    <ul id="list"></ul>

    <script>
        const data = document.querySelector('#data');
        const list = document.getElementById('list');
        let url = ('https://jsonplaceholder.typicode.com/posts');

        fetch(url)
            .then(function(response) {
                return response.json();
            })
            .then(function(json) {
                console.log(json);
                json.forEach(function(element) {
                    let li = document.createElement("li");
                    li.innerHTML = element.id + "-" + element.title;
                    li.addEventListener("click", function() {
                        loadData(element.id);
                    });
                    list.appendChild(li);
                })
            });

        function loadData(id) {
            fetch(url + "/" + id, {
                    method: "GET",

                })
                .then(function(response) {
                    return response.json();
                })

                .then(function(json) {
                    console.log(json);
                    data.innerHTML = "<h3>" + json.title + "</h3>";
                    data.innerHTML +=  "<p>"+ json.body +"<p>";
                })



        }
    </script>

</body>

</html>