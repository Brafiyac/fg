<?php

include_once '../../includes/user.php';
include_once '../../includes/user_session.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
   






?>

<html><head>
    <meta charset="utf-8">
    
    
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    </head>
	.
<?php


 



 $hoy = date("Y-m-d H:i:s"); 

require('../bd/conexion.php');



 $dato2=$_POST['nombre'];

 $dato4=$_POST['descripcion'];
 $empresa=$user->getempresa(); 


$queb="INSERT INTO `cargo`(`id_cargo`, `nombre`, `descripcion`, `empresa`, `state_fsc`, 
`created_by`, `created_at`) VALUES (NULL,'$dato2','$dato4','$empresa',
'activo','0','$hoy')";
 $resultadoa=$mysqli->query($queb);
 
 
 

 


 
 
 
 
 
 
 
 
 

?>
 <script> 
       Swal.fire({
  title: 'Correcto!',
  text: 'Se a creado una nuevo cargo',
  icon: 'success',
  confirmButtonText: 'Aceptar'
}).then(function() {
     window.history.go(-2)
});
</script>



</html>
<?php

}else{
    //echo "login";
    
	?>
	<script>
	location.href = "../../index.php";
	</script>
	<?php
}

?>