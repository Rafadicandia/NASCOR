<html>
<head>
<script>
function getVote(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }else{
    alert()
  }
  xmlhttp.open("GET","http://localhost:8888/Nascor/MYSQL/Ejemplo%20primera%20conexion/tablanoticias.php"+int,true);
  xmlhttp.send();
}
</script>
</head>
<body>