
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
    $("#allow_click").click(function () {
        $(document).unbind();
    });

</script>



</body>
</html>