<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>

    <button onclick="myFunction()"><a href="www.khk.ee" a/>Tere maailm</button>
    <script>
        function myFunction() {
            alert("Tere Maailm!");
        }
    </script>

    <a href="www.khk.ee" onclick="myFunction();return false">J‰‰me siia!</a>
    <script>
        function myFunction() {
            alert("J‰‰me Siia")
            "return false"
        }
    </script>

    <img id="kass" src="media/cutecat.jpg">
    <script>
        $("img#kass").click(function () {
            if($(this).attr("src") == "media/cutecat.jpg")
            {
                $(this).attr("src", "media/dog.jpg");
            }
            else
            {
                $(this).attr("src","media/cutecat.jpg");
            }
        });
    </script>

</body>
</html>