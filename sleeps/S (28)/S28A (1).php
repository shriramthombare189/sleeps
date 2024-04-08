<html>
    <head>
        <script>
            function show(){
                if (window.XMLHttpRequest) {
                    xmlhttp=new XMLHttpRequest();
                }else{
                    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                        document.getElementById("t").innerHTML=xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","http://localhost/work/a1.php",true);
                xmlhttp.send();
            }
        </script>
    </head>
<body>
    <form method="get">
        <input type="button" value="Ok" onclick=show()><br>
        <span id="t">
        </span>
    </form>
</body>
</html>