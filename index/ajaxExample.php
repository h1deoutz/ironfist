<html>
    <head>
    <title>Exemplo Ajax</title> 
    <script>
    function solicitacao() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById("demo").innerHTML = this.responseText;
            }
        xhttp.open("GET", "compuser.php", true);
        xhttp.send();
        }
    </script>
    </head>
    <body>
        <button type="button" onclick="solicitacao()" >puxa</button>
        <div id="demo"></div>
    </body>
</html>