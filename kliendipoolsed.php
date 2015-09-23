<!doctype html>
<!--Ülesanne 1-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="jquery-1.11.3.min.js"></script>
</head>
<body id="bg">
<!--Ülesanne 2,3-->
    <button onclick="myFunctioni()"><a href="www.khk.ee" a/>Tere maailm</button>
    <script>
        function myFunctioni() {
            alert("Tere Maailm!");
        }
    </script>
<!--Ülesanne 4-->
    <a href="www.khk.ee" onclick="myFunction();return false">Jääme siia!</a>
    <script>
        function myFunction() {
            alert("Jääme Siia")
            "return false"
        }
    </script>

<!--Ülesanne 5
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
-------->
<!---Ülesanne 6--->
<img id="kass" src="media/cutecat.jpg">
<script>
    $(document).ready(function(){
        $('#kass').click(function(){
            $(this).replaceWith('<img src="media/dog.jpg">');

        });


    });
</script>
</br>
<!--- Ülesanne 7--->

<button id="Red" >Red</button>
<button id="Blue">Blue</button>
<button id="Green">Green</button>
<script>
    $(document).ready(function(){
        $('#Red').click(function(){
            $('#bg').css({"background-color":"red"});

        });
        $('#Blue').click(function(){
            $('#bg').css({"background-color":"blue"});

        });
        $('#Green').click(function(){
            $('#bg').css({"background-color":"green"});

        });

    });

</script>



</body>
</html>