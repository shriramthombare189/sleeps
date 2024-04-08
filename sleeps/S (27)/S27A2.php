<html>
    <head>
        <script>
            function show(str){
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
                xmlhttp.open("GET","http://localhost/work/a1.php?q="+str,true);
                xmlhttp.send();
            }
        </script>
    </head>
<body>
    <form method="get">
        <input type="text" onkeyup="show(this.value)"><br>
        Factoreal is a : 
        <span id="t">
        </span>
    </form>
</body>
</html>