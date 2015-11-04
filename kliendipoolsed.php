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
        });55555555555555555555555555555544444444444444
    </script>
-------->

<script>
    $(document).ready(function(){
        $('#HideButton').click(function(){
            $("div").toggle();
        });
    });
</script>
<button id="allow_click">Luba parem klõps</button>
<button id="HideButton">Peida ja näita</button>

<!---Ülesanne 6--->
<div><img id="kass" src="media/cutecat.jpg"></div>
<script>
    $(document).ready(function(){
        $('#kass').click(function(){
            $(this).replaceWith('<img src="media/dog.jpg">');

        });

    });

</script>
</br>
<!--- Ülesanne 7,8--->

<button id="Red" >red</button>
<button id="Blue">blue</button>
<button id="Green">green</button>
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
<!---Ülesanne 9--->
<script>
    document.onmousedown=disableclick;
    status="Right Click Disabled";
    function disableclick(event) {

        if(event.button==2) {
            alert(status);
            return false;
        }
    }
    $("#allow_click").click(function () {
        $(document).unbind();
    });

</script>



</body>
</html>