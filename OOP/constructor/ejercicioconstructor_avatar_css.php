<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos Alumnos</title>
<style>
  @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

html{    background:url(http://thekitemap.com/images/feedback-img.jpg) no-repeat;
  background-size: cover;
  height:100%;
}

#feedback-page{
	text-align:center;
}

#form-main{
	width:100%;
	float:left;
	padding-top:0px;
}

#form-div {
	background-color:rgba(72,72,72,0.4);
	padding-left:35px;
	padding-right:35px;
	padding-top:35px;
	padding-bottom:50px;
	width: 450px;
	float: left;
	left: 50%;
	position: absolute;
  margin-top:30px;
	margin-left: -260px;
  -moz-border-radius: 7px;
  -webkit-border-radius: 7px;
}

.feedback-input {
	color:#3c3c3c;
	font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
	font-size: 18px;
	border-radius: 0;
	line-height: 22px;
	background-color: #fbfbfb;
	padding: 13px 13px 13px 54px;
	margin-bottom: 10px;
	width:100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
  border: 3px solid rgba(0,0,0,0);
}

.feedback-input:focus{
	background: #fff;
	box-shadow: 0;
	border: 3px solid #3498db;
	color: #3498db;
	outline: none;
  padding: 13px 13px 13px 54px;
}

.focused{
	color:#30aed6;
	border:#30aed6 solid 3px;
}

/* Icons ---------------------------------- */
#name{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#name:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 30px 30px;
	background-position: 8px 5px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#email{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#email:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 30px 30px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#comment{
	background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

textarea {
    width: 100%;
    height: 150px;
    line-height: 150%;
    resize:vertical;
}

input:hover, textarea:hover,
input:focus, textarea:focus {
	background-color:white;
}

#button-blue{
	font-family: 'Montserrat', Arial, Helvetica, sans-serif;
	float:left;
	width: 100%;
	border: #fbfbfb solid 4px;
	cursor:pointer;
	background-color: #3498db;
	color:white;
	font-size:24px;
	padding-top:22px;
	padding-bottom:22px;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}

#button-blue:hover{
	background-color: rgba(0,0,0,0);
	color: #0493bd;
}
	
.submit:hover {
	color: #3498db;
}
	
.ease {
	width: 0px;
	height: 74px;
	background-color: #fbfbfb;
	-webkit-transition: .3s ease;
	-moz-transition: .3s ease;
	-o-transition: .3s ease;
	-ms-transition: .3s ease;
	transition: .3s ease;
}

.submit:hover .ease{
  width:100%;
  background-color:white;
}

@media only screen and (max-width: 580px) {
	#form-div{
		left: 3%;
		margin-right: 3%;
		width: 88%;
		margin-left: 0;
		padding-left: 3%;
		padding-right: 3%;
	}
}
  </style>
</head>
<body>
  
</body>

<?php
//establecemos la clase Alumno
class Alumno {
    //aqui determinamos los atributos
  private $name;
  private $email;
  private $empleo;
  private $titulacion;
  private $comentario;
//aquí determinamos lel constructor del método
  function __construct($name, $email, $empleo, $titulacion, $comentario) {
    $this->name = $name; 
    $this->name = $email;
    $this->name = $empleo;
    $this->name = $titulacion;
    $this->name = $comentario;
  }
  //aquí van las funciones del metodo
  function get_name() {
    return $this->name;
  }
  function get_email() {
    return $this->email;
  }
  function get_empleo() {
  return $this->empleo;
  }
  function get_titulacion() {
  return $this->titulacion;
  }
  function get_comentario() {
  return $this->comentario;
  }
}
?>
<div id="form-main">
  <div id="form-div">
    <form class="form" action="avataralumno.php" id="form1">
      
      <p class="name">
        <input name="name" type="text" value=" <?php $nuevo_alumno->name() ?>" placeholder="Name" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="text" value="<?php echo $email;?>" id="email" placeholder="email" />
      </p>
      <p class="empleo">
        <input name="empleo" type="text" value="<?php echo $empleo;?>" id="empleo" placeholder="empleo" />
      </p>
      <p class="titulacion">
        <input name="titulacion" type="text" value="<?php echo $titulacion;?>" id="titulacion" placeholder="titulacion" />
      </p>
      
      <p class="comentario">
        <textarea name="text" value="<?php echo $comentario;?>" id="comment" placeholder="Comment"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
 
<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recuperar los datos del formulario
  $name = $_POST['name'];
  $email = $_POST['email'];
  $empleo = $_POST['empleo'];
  $titulacion = $_POST['titulacion'];
  $comentario = $_POST['comment'];
  }
  // Crear una nueva instancia de la clase Alumno
  $nuevo_alumno = new Alumno($name, $email, $empleo, $titulacion, $comentario);

?>
</body>
</html>