<?php

include_once '../../includes/user.php';
include_once '../../includes/user_session.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());







?>
<!DOCTYPE html>
<html>


<!-- Mirrored from demos.creative-tim.com/argon-dashboard-pro/pages/forms/validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jun 2021 05:27:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>SECURAPP</title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard/index.html" />
  <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg" />
  <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
  <meta property="og:site_name" content="Creative Tim" />
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../assets/css/argon.min23cd.css?v=1.2.1" type="text/css">
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Sidenav -->
 <?php require('../general/nav.php')?>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Gestión de centros prueba</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="../dashboards/dashboard.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="centros.php">Centros</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Gestionar</li>
                </ol>
              </nav>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card-wrapper">

            <!-- Default browser form validation -->
            <div class="card">
              <!-- Card header -->





















              <!-- Card body -->
              <div class="card-body">


               <div class="row icon-examples">
                <div style="padding-top: 15px;" class="col-lg-4 col-md-6">
				<button  type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href=&quot;nuevocentro.php&quot;">

				  <div>
                      <i class="ni ni-fat-add "></i>
                      <span>Nuevo centro</span>
                    </div>



				</button>
                </div>

                <div style="padding-top: 15px;"class="col-lg-4 col-md-6">
                  <button type="button" class="btn btn-warning btn-lg btn-block" onclick="location.href=&quot;modificarcentro.php&quot;">
				 <div>
                      <i class="ni ni-settings-gear-65 "></i>
                      <span>Modificar centro</span>
                    </div>
				  </button>
                </div>

				 <div style="padding-top: 15px;" class="col-lg-4 col-md-6">
                  <button type="button" class="btn btn-danger btn-lg btn-block" onclick="location.href=&quot;eliminarcentro.php&quot;">
				  <div>
                      <i class="ni ni-fat-remove "></i>
                      <span>Eliminar centro</span>
                    </div>
				  </button>
                </div>

				</div>


              </div>
            </div>
            <!-- Default browser form validation -->




			  <div class="row ">


			  <?php

	require('../bd/conexion.php');

 $empresa=$user->getempresa();
$quera="SELECT * FROM centro WHERE state_fsc='activo' AND empresa='$empresa' ORDER BY `centro`.`id_centro` DESC";
$caa=$mysqli->query($quera);
while($rov=$caa->fetch_assoc()){
	$id=$rov['id_centro'];
	$nombre=$rov['nombre'];
    $costos=$rov['costos'];
	$responsable=$rov['responsable'];






?>






			  <style>
			  .avatar {
    font-size: 1rem;
    display: inline-flex;
    width: 48px;
    height: 48px;
    color: #fff;
    border-radius: .375rem;
    background-color: #fcfdff;
    align-items: center;
    justify-content: center;
}
			  </style>

			   <div class="col-md-4 ">
              <style>
#foto {
    font-size: 1rem;
    display: inline-flex;
    width: 40px;
    height: 40px;
    color: #fff;
    border-radius: .375rem;
    background-color: #fcfdff;
    align-items: center;
    justify-content: center;
}
				  </style>
<div class="card">
            <!-- Card body -->
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <!-- Avatar -->
                  <a href="#" id="foto" class="avatar avatar-xl  ">
                    <img src="../../assets/img/mapa.svg">
                  </a>
                </div>
                <div class="col ml--2">
                  <h4 class="mb-0">
                    <a href="#!"><?php echo $nombre;?></a>
                  </h4>
				       <p class="text-sm text-muted mb-0">C. Costos: <?php echo $costos;  ?></p>
					        <p class="text-sm text-muted mb-0"><?php echo $responsable;?></p>

                  <span class="text-success">●</span>
                  <small>Activo</small>
                </div>
                <div class="col-auto">
				 <style>
#qr {
    font-size: 1rem;
    display: inline-flex;
    width: 80px;
    height: 80px;
    color: #fff;
    border-radius: .375rem;
    background-color: #fcfdff;
    align-items: center;
    justify-content: center;
}
				  </style>

                  <button type="button" onclick="location.href='centrover.php?valor=<?php echo $rov['id_centro'] ?>'" class="btn btn-sm btn-success">Ver</button>
                </div>
              </div>
            </div>
          </div>

		   </div>

<?php  } ?>

		    </div>














      <?php require('../general/footer.php');?>




  <!-- Argon Scripts -->
  <!-- Core -->
   <!-- Core -->



  <!-- Argon JS -->
  <script src="../../assets/js/argon.min23cd.js?v=1.2.1"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="../../assets/js/demo.min.js"></script>
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.min23cd.js?v=1.2.1"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="../../assets/js/demo.min.js"></script>
  <script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '../../../../connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</body>


<!-- Mirrored from demos.creative-tim.com/argon-dashboard-pro/pages/forms/validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jun 2021 05:27:04 GMT -->
</html><?php

}else{
    //echo "login";

	?>
	<script>
	location.href = "../../index.php";
	</script>
	<?php
}

?>
