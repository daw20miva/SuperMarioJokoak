<?php

?>

</style>
<body>
    <script>
  
    function erakusti(){
      
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){

        if (xhr.readyState == 4 && xhr.status == 200)
        {
            var array = new Array();
            array = JSON.parse(xhr.responseText);
           
            var txt="";//string , karaktere kate bat
            for (var x=0;x<array.length;x++)
            {
                txt += array[x].eskaera_id+" | "+array[x].produktua_id+ " | "+array[x].produktu_izena+ " | "+array[x].kantitatea+ " | "+array[x].prezio_totala+ " | "+array[x].bezero_nan+"</br>";
                document.getElementById("texto").innerHTML = txt;
            }
        }
    }
    var eskaera_id = document.getElementById("eskaera_id").value;
        xhr.open("GET", "index.php?eskaera_id="+eskaera_id, true);
        xhr.send();
    }
    </script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Hasiera</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="erregistroa.html">Erregistratu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="erreserba_bilatu.html">Bilaketa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="erreserba_aldatu.html">Aldaketa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontaktua.html">Kontaktua</a>
            </li>
          </ul>
        </div>
      </nav>
    
</div>

<br>
<div style="text-align: center;" id="texto"></div>
<br>
</body>
</html>