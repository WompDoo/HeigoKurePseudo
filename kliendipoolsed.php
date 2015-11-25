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
    <button onclick="myFunctioni()"><a href="http://www.khk.ee" a/>Tere maailm</button>
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

<span class="buttons">
<button id="Blue">yellow</button>
<button id="Red">purple</button>
<button id="Green">cyan</button>
    </span>

<br>
<script>
    $('#Blue').click(function () {
        $('body').css("background-color", "Blue");
        $('body').css('backgroundColor', $('#Blue').text());
    });
    $('#Green').click(function () {
        $('body').css("background-color", "Green");
        $('body').css('backgroundColor', $('#Green').text());
    });
    $('#Red').click(function () {
        $('body').css("background-color", "Red");
        $('body').css('backgroundColor', $('#Red').text());
    });

</script>

<!---Ülesanne 9,10--->
<script>
    document.onmousedown=disableclick;
    status="Right Click Disabled";
    function disableclick(event) {

        if(event.button==2) {
            alert(status);
            return false;
        }
    }


</script>
<button id="klops">Luba parem klõps</button>
<script>
    $("#klops").click(function () {
        -$(document).unbind();
    });
</script>



</body>
</html>