<?php
if(isset($_SESSION['admin_login']) == 1)
{
    global $correo;
    $correo = $_SESSION['admin_login'];
    error_reporting(0);
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI, PHP_URL_PATH);
    $components = explode('/', $path);
    $first_part = $components[1];
    $second_part = $components[2];
    #Pendiente trabajar en los accesos del navbar
    #Para el administrador (secciones ya añadidas, solo editar y ajustar)
    ?>
      <!-- Inicia navbar -->
          <nav class='navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light' id='ftco-navbar'>
          <div class='container'>
            <img src='../images/logos/logochoa.png' alt='' class='navbar-brand' style='  display: block; margin-left: auto; margin-right: auto;'><a class='navbar-brand' href='../'>Ochoa Real<span>&nbsp;Estate Services</span></a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#ftco-nav' aria-controls='ftco-nav' aria-expanded='false' aria-label='Toggle navigation'>
              <span class='oi oi-menu'></span> Menú
            </button>

            <div class='collapse navbar-collapse' id='ftco-nav'>
              <ul class='navbar-nav ml-auto'>
                <li class='nav-item' id='index'><a href='../' class='nav-link'>Inicio</a></li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="../categories" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorías
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item <?php if ($second_part=="all") {echo "active"; } else  {echo "noactive";}?>" href="../categories/all">Todas</a>
                    <a class="dropdown-item <?php if ($second_part=="houses") {echo "active"; } else  {echo "noactive";}?>" href="../categories/houses">Casas</a>
                    <a class="dropdown-item <?php if ($second_part=="rent") {echo "active"; } else  {echo "noactive";}?>" href="../categories/rent">Rentas</a>
                    <a class="dropdown-item <?php if ($second_part=="hectares") {echo "active"; } else  {echo "noactive";}?>" href="../categories/hectares">Hectáreas</a>
                    <a class="dropdown-item <?php if ($second_part=="terrains") {echo "active"; } else  {echo "noactive";}?>" href="../categories/terrains">Terrenos</a>
                    <a class="dropdown-item <?php if ($second_part=="subdivisions") {echo "active"; } else  {echo "noactive";}?>" href="../categories/subdivisions">Fraccionamientos</a>
                    <a class="dropdown-item <?php if ($second_part=="cotos") {echo "active"; } else  {echo "noactive";}?>" href="../categories/cotos">Cotos</a>
                    <a class="dropdown-item <?php if ($second_part=="depart") {echo "active"; } else  {echo "noactive";}?>" href="../categories/depart">Departamentos</a>
                    <a class="dropdown-item <?php if ($second_part=="hotels") {echo "active"; } else  {echo "noactive";}?>" href="../categories/hotels">Hoteles</a>
                    <a class="dropdown-item <?php if ($second_part=="residentials") {echo "active"; } else  {echo "noactive";}?>" href="../categories/bodega">Bodega</a>
                    <a class="dropdown-item <?php if ($second_part=="locals") {echo "active"; } else  {echo "noactive";}?>" href="../categories/locals">Locales</a>
                    <?php #<!-- <div class="dropdown-divider"></div>
                    #<a class="dropdown-item" href="#">Something else here</a> -->?>
                    </div>
                  </li>
                  
                <li class='nav-item' id='Vinmueble'><a href='../admin/datatable-ajax-php' class='nav-link'>Dashboard</a></li>
                <li class='nav-item' id='Vinmueble'><a href='../admin/usr_adm' class='nav-link'>Validadores</a></li>
                <li class='nav-item dropdown'>
                  <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    <?php echo $correo; ?>
                  </a>
                  <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                    <a class='dropdown-item' href='../admin/cerrar_sesion.php'>Cerrar sesion</a>
                  </div>
                </li>

              </ul>
            </div><!-- Termina contenedor que contiene las categorías del menu -->

          </div><!-- Termina contenedor de todo el navbar -->
        </nav>
      <!-- Termina nav -->
    <?php
}elseif(isset($_SESSION['personal_login'])==1)
{
    global $correo;
    $correo = $_SESSION['personal_login'];
    error_reporting(0);
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI, PHP_URL_PATH);
    $components = explode('/', $path);
    $first_part = $components[1];
    $second_part = $components[2];
    ?>
      <!-- Inicia navbar -->
          <nav class='navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light' id='ftco-navbar'>
          <div class='container'>
            <img src='../images/logos/logochoa.png' alt='' class='navbar-brand' style='  display: block; margin-left: auto; margin-right: auto;'><a class='navbar-brand' href='../'>Ochoa Real<span>&nbsp;Estate Services</span></a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#ftco-nav' aria-controls='ftco-nav' aria-expanded='false' aria-label='Toggle navigation'>
              <span class='oi oi-menu'></span> Menú
            </button>

            <div class='collapse navbar-collapse' id='ftco-nav'>
              <ul class='navbar-nav ml-auto'>
                <li class='nav-item' id='index'><a href='../' class='nav-link'></a></li>
                
                <li class='nav-item dropdown'>
                  <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    <?php echo $correo; ?>
                  </a>
                  <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                    <a class='dropdown-item' href='../admin/cerrar_sesion.php'>Cerrar sesion</a>
                    <a class='dropdown-item'>Los accesos a subir propiedades se habilitarán próximamente.</a>
                  </div>
                </li>

              </ul>
            </div><!-- Termina contenedor que contiene las categorías del menu -->

          </div><!-- Termina contenedor de todo el navbar -->
        </nav>
      <!-- Termina nav -->
    <?php
}
else{
	error_reporting(0);
	$directoryURI = $_SERVER['REQUEST_URI'];
	$path = parse_url($directoryURI, PHP_URL_PATH);
	$components = explode('/', $path);
	$first_part = $components[1];
  $second_part = $components[2];
  ?>
  <!-- Comienza Nav -->
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <img src="../images/logos/logochoa.png" alt="" class="navbar-brand" style="  display: block; margin-left: auto; margin-right: auto;"><a class="navbar-brand" href="../">Ochoa Real<span>&nbsp;Estate Services</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menú
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item <?php if ($first_part=="/" or $first_part=="") {echo "active"; } else  {echo "noactive";}?>" id="index"><a href="../" class="nav-link">Inicio</a></li>
              <li class="nav-item <?php if ($first_part=="agents") {echo "active"; } else  {echo "noactive";}?>"><a href="../categorias" class="nav-link">Categorias</a></li>
              <li class="nav-item <?php if ($first_part=="agents") {echo "active"; } else  {echo "noactive";}?>"><a href="../agents" class="nav-link">Agentes</a></li>
              <li class="nav-item <?php if ($first_part=="about") {echo "active"; } else  {echo "noactive";}?>"><a href="../about" class="nav-link">Sobre</a></li>
              <li class="nav-item <?php if ($first_part=="contact") {echo "active"; } else  {echo "noactive";}?>"><a href="../contact" class="nav-link">Contacto</a></li>
              <!-- <li class="nav-item cta"><a href="#" class="nav-link ml-lg-2"><span class="icon-user"></span> Sign-In</a></li> -->
              <!-- <li class="nav-item cta cta-colored"><a href="#" class="nav-link"><span class="icon-pencil"></span> Sign-Up</a></li> -->
            </ul>
          </div>

        </div><!-- Termina contenedor de todo el navbar -->
      </nav>
    <!-- Termina nav -->
<?php
}
?>