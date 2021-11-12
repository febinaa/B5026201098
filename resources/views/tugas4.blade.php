<!DOCTYPE html>
<html lang="en">
<head>
    <title>5026201098-jQuery AJAX load() Method</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
      $("button").click(function(){
        $("#div1").load("https://icanhazdadjoke.com/j/K6UvXD5Mexc", function(res){
        if(statusTxt == "success"){
                alert("yeyy kamu berhasil!");
                $("h1").text(res.getJSON());
            }
            if(statusTxt == "error"){
                alert("Error: " + jqXHR.status + " " + jqXHR.statusText);}
      });
    });
  });
    </script>
</head>
<body>
    <style>

        body{ font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Geneva, Verdana, sans-serif;
             font-size: 20px;
             background-color: rgb(79, 214, 203);;

           }
       </style>

<center>
<div id="div1"><h2>Klik tombol dibawah dan temukan kejutannya</h2></div>

<button class="btn btn-primary">Klik disini!!</button>
</center>
</body>
</html>
