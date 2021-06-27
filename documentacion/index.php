<?php
//error_reporting(0);
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: ../login/login.php');
    
    exit;
} else {
    // Show users the page!
}
include_once("conexion.php"); 
?>
<?php
$total_pages = mysqli_query($conn, 'SELECT COUNT(*) FROM alumnos as alu left join instituciones as inst ON alu.idinstitucion = inst.idinstitucion LEFT JOIN documentos AS doc ON alu.idalumno = doc.idalumno')->fetch_row()[0];
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
$num_results_on_page = 5;
?>
<html>
<div class="main" style="text-align: center; color:white;">
</div>
 <head>
<title>Gestión de Documentación</title>
		<meta charset="UTF-8">
    <style type="text/css">
      div.pager {
          text-align: center;
          display: fixed;
        /*  transform: translate(0%,200%);*/
          border-radius: 20px; 
      }
      div.pager span {
       /* transform: translate(0%,-200%);*/
          display: inline-block;
          width: 2em;
          height: 2em;
          line-height: 2;
          text-align: center;
          cursor: pointer;
          background: #191919;
          color: #ccc;
          margin-right: 0.5em;
          border-radius: 20px;
      }
      div.pager span.active {
       /* transform: translate(0%,-200%);*/
          background: #26b382;
          color:#191919;
        /*  font-weight:bold;*/
          text-align:center;
          border-radius: 20px;
      }
    </style>
    <link rel="stylesheet" media="all" href="../npm/bootstrap@3.4.1/dist/css/bootstrap_2.css"> 
    <link rel="stylesheet" media="all" href="style.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
  $( function() {
    $( "#datepickerdesde" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
    <script>
  $( function() {
    $( "#datepickerhasta" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
  <script>
$(".header").click(function () {
   $("[data-for="+this.id+"]").slideToggle("slow");
});
    </script>
    <script src="../modules/custom/tsa2/js/tsa2.js?v=2.x"></script>
  <!--    <script src="../npm/jquery-3.6.0.js"></script>  -->
    <script src="../npm/jquery.twbsPagination.js"></script>
    <script src="..npm/bootstrap@3.4.1/dist/js/bootstrap.js"></script> 
      <!--  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet"> -->
   <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap-paginator.min.js"></script>
    <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"tsa2","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"es"},"pluralDelimiter":"\u0003","google_analytics":{"trackOutbound":true,"trackMailto":true,"trackDownload":true,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip"},"data":{"extlink":{"extTarget":true,"extTargetNoOverride":false,"extNofollow":false,"extFollowNoOverride":false,"extClass":"0","extLabel":"(link is external)","extImgClass":false,"extSubdomains":false,"extExclude":"","extInclude":"","extCssExclude":".view-miembros, .footerArea, #block-bloquesumate","extCssExplicit":"","extAlert":false,"extAlertText":"This link will take you to an external web site. We are not responsible for their content.","mailtoClass":"mailto","mailtoLabel":"(link sends email)"}},"bootstrap":{"forms_has_error_value_toggle":1,"modal_animation":1,"modal_backdrop":"true","modal_focus_input":1,"modal_keyboard":1,"modal_select_text":1,"modal_show":1,"modal_size":"","popover_enabled":1,"popover_animation":1,"popover_auto_close":1,"popover_container":"body","popover_content":"","popover_delay":"0","popover_html":0,"popover_placement":"right","popover_selector":"","popover_title":"","popover_trigger":"click","tooltip_enabled":1,"tooltip_animation":1,"tooltip_container":"body","tooltip_delay":"0","tooltip_html":0,"tooltip_placement":"auto left","tooltip_selector":"","tooltip_trigger":"hover"},"tsa2":{"tsa2_api":"https:\/\/tsa2.buenosaires.gob.ar","lb00":" El archivo ","lb01":" fue enviado con \u00e9xito para ser sellado. Intent\u00e1 verificarlo en aproximadamente 2 minutos.","lb02":"Se ha producido un error al intentar sellar ","lb03":" se encuentra sellado por: ","lb04":" en el bloque ","lb05":"No se ha podido verificar el archivo ","lb06":"Volver a Sellar o Verificar","lb07":"Cargando","lb08":"Arrastr\u00e1 archivos aqu\u00ed\u003Cbr\u003E\u00f3","lb09":"Seleccion\u00e1 archivos \u003Cspan class=\u0022sr-only\u0022\u003Epara Sellar o Verificar\u003C\/span\u003E","lb10":"Nombre del archivo: ","lb11":"Hash del archivo: ","lb12":"Sellar","lb13":"Verificar","lb14":" Agregar archivos","lb15":" Copiar","lb16":"Enlace de verificaci\u00f3n","lb17":"Remover archivo","lb18":"Seleccionar otros archivos","lb19":" S\u00f3lo se pueden agregar ","lb20":" archivos por vez"},"user":{"uid":0,"permissionsHash":"f332b4d0a413d6e9e53534452c18d4ca6c0b415e145220e30821f1d37599e1a2"}}</script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url(../themes/images/texture-fondo-gris.jpg); background-size:cover; background-position:center;">
  </a>
  <nav style="background-color: transparent;" id="navbar" role="banner" class="navbar navbar-default navbar-fixed-top navbar-content">
    <div style="background-color: transparent;" class="container">
      <div style="background-color: transparent;" class="navbar-header">
        <div style="background-color: transparent;" class="region region-navigation">
        
          
        <div style="position: relative;" class="logo navbar-btn pull-left" href="index.php" rel="home">
            <img style="position: relative;" id="logo" src="../themes/images/LOGO_SVG_VerifiDoc.svg" alt="VerifyDoc">

</div>
  </div style="background-color: transparent;">
     <button type=" button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
        </div>
        <div style="background-color: transparent;" id="navbar-collapse" class="navbar-collapse collapse">
          <div style="background-color: transparent;" class="region region-navigation-collapsible">
            <nav  style="background-color: transparent;" role="navigation" aria-labelledby="block-bfa-main-menu-menu" id="block-bfa-main-menu">
              <h2 class="sr-only" id="block-bfa-main-menu-menu">Navegación Principal</h2>
              <ul class="menu nav navbar-nav navbar-right">
                <li>
                  <a class="nav" href="../documentacion/index.php" data-drupal-link-system-path="&lt;front&gt;">Documentación</a>
                </li>
                <li>
                  <a class="nav" href="../institucion/index.php" data-drupal-link-system-path="&lt;front&gt;">Institución</a>
                </li>
                <li>
                  <a class="nav" href="../alumnos/index.php" data-drupal-link-system-path="&lt;front&gt;">Alumnos</a>
                </li>
                <li>
                  <a class="nav" href="../reportes/index.php" data-drupal-link-system-path="&lt;front&gt;">Reportes</a>
                </li>
                <li>
                  <a class="nav" href="logout.php" data-drupal-link-system-path="&lt;front&gt;">Log Out</a>
                  <?php echo '<p style="color: grey; font-size:11px; text-align:center; padding-left: 20px;">Usuario Conectado: '.$_SESSION['usuario'].'</p>';?>
                </li>
                  </ul>
              </ul>
            </nav>
          
            <table>
<tbody>
<tr class="header">
<form method="POST">
<tr><th colspan="7"><h1>Filtros</h1><th></th></tr>
<tr>
<td ><input id="cajabuscar" style="font-family: FontAwesome;" name="txtbuscarna" type="text" placeholder="Nombre y Apellido" /></td>
<td ><input id="cajabuscar" style="font-family: FontAwesome;" name="txtbuscaremail" type="text" placeholder="E-MAIL" /></td>
<td ><input id="cajabuscar" style="font-family: FontAwesome;" name="txtbuscarinst" type="text" placeholder="institucion" /></td>
</tr>
<tr>
<td ><input id="cajabuscar" style="font-family: FontAwesome;" name="txtbuscardoc" type="text" placeholder="Documento" /></td>
<td ><input id="datepickerdesde" style="font-family: FontAwesome;" type="text" name="txtbuscarfechadesde" placeholder="Fecha de Alta Desde" /></td>
<!-- <td ><input id="datepickerhasta" style="font-family: FontAwesome;" type="text" name="txtbuscarfechahasta" placeholder="Fecha de Alta Hasta" /></td> -->
</tr>
<tr>
<!-- class="botondescargar2"  -->
<th colspan="8"><button class="botondescargar2" style="font-family: FontAwesome;" name="btnbuscar" type="input" placeholder=" Filtrar Búsqueda" />Filtrar</th>
</tr>
</form>
</th>
</tr>
</tbody>
</table>
<table class="paginated">
<tr>Agregar Nuevo Documento<input style='font-family: FontAwesome;' placeholder='&#xf0fe' class='botondescargar' onclick="abrirform()"></input></tr> 
<thead>
   			<tr><th colspan="9"><h1>Documentos</h1></th></tr>
			<tr>
		    <th scope="col" style='width:4%'>ID</th>
            <th scope="col" style='width:10%'>Nombre y Apellido</th>
            <th scope="col" style='width:15%'>E-Mail</th>
            <th scope="col" style='width:10%'>Institucción</th>
            <th scope="col" style='width:15%'>Documento</th>
            <th scope="col" style='width:8%'>Tipo de Documento</th>
            <th scope="col" style='width:7%'>Fecha de alta</th>
            <th scope="col" style='width:5%'>Descargar</th>
            <th scope="col" style='width:20%'>Acción</th>
			</tr>
</thead>
<tbody>
<?php
if(isset($_POST['btnbuscar']))
{
$buscarna = $_POST['txtbuscarna'];
$buscaremail = $_POST['txtbuscaremail'];
$buscarinst = $_POST['txtbuscarinst'];
$buscardoc = $_POST['txtbuscardoc'];
$buscardesde = $_POST['txtbuscarfechadesde'];
/*$buscarhasta = $_POST['txtbuscarfechahasta'];*/
/*$var = "SELECT doc.iddocumento, alu.nombreapellido, alu.email, inst.nombre, doc.iddocumento, doc.documento, tipodoc.descripcion as tipodoc, DATE_FORMAT(doc.fechaalta, '%Y-%m-%d') AS fechaalta, replace(doc.documento , ' ','') as nombredoc, doc.sellado, doc.archivo FROM alumnos as alu left join instituciones as inst ON alu.idinstitucion = inst.idinstitucion LEFT JOIN documentos AS doc ON alu.idalumno = doc.idalumno LEFT JOIN tipodocumento as tipodoc on doc.idtipo = tipodoc.idtipo where alu.nombreapellido like '".$buscarna."%' and alu.email like '".$buscaremail."%' and inst.nombre like '".$buscarinst."%' and doc.documento like '".$buscardoc."%' and doc.fechaalta >= ifnull('".$buscardesde."','1890-01-01') and doc.fechaalta < ifnull('".$buscarhasta."','2999-01-01') and doc.estado = 0 ORDER BY doc.iddocumento desc";*/
/*$queryusuarios = mysqli_query($conn, "SELECT doc.iddocumento, alu.nombreapellido, alu.email, inst.nombre, doc.iddocumento, doc.documento, tipodoc.descripcion as tipodoc, DATE_FORMAT(doc.fechaalta, '%Y-%m-%d') AS fechaalta, replace(doc.documento , ' ','') as nombredoc, doc.sellado, doc.archivo FROM alumnos as alu left join instituciones as inst ON alu.idinstitucion = inst.idinstitucion LEFT JOIN documentos AS doc ON alu.idalumno = doc.idalumno LEFT JOIN tipodocumento as tipodoc on doc.idtipo = tipodoc.idtipo where alu.nombreapellido like '".$buscarna."%' and alu.email like '".$buscaremail."%' and inst.nombre like '".$buscarinst."%' and doc.documento like '".$buscardoc."%' and doc.fechaalta >= ifnull('".$buscardesde."','1890-01-01') and doc.fechaalta < ifnull('".$buscarhasta."','2999-01-01') and doc.estado = 0 ORDER BY doc.iddocumento desc");*/
$queryusuarios = mysqli_query($conn, "SELECT doc.iddocumento, alu.nombreapellido, alu.email, inst.nombre, doc.iddocumento, doc.documento, tipodoc.descripcion as tipodoc, DATE_FORMAT(doc.fechaalta, '%Y-%m-%d') AS fechaalta, replace(doc.documento , ' ','') as nombredoc, doc.sellado, doc.archivo FROM alumnos as alu left join instituciones as inst ON alu.idinstitucion = inst.idinstitucion LEFT JOIN documentos AS doc ON alu.idalumno = doc.idalumno LEFT JOIN tipodocumento as tipodoc on doc.idtipo = tipodoc.idtipo where alu.nombreapellido like '".$buscarna."%' and alu.email like '".$buscaremail."%' and inst.nombre like '".$buscarinst."%' and doc.documento like '".$buscardoc."%' and doc.fechaalta >=  IFNULL(DATE_FORMAT('".$buscardesde."', '%Y-%m-%d'),'1890-01-01') and doc.estado = 0 ORDER BY doc.iddocumento desc");
/*$queryusuarios = mysqli_query($conn, "SELECT doc.iddocumento, alu.nombreapellido, alu.email, inst.nombre, doc.iddocumento, doc.documento, tipodoc.descripcion as tipodoc, DATE_FORMAT(doc.fechaalta, '%Y-%m-%d') AS fechaalta, replace(doc.documento , ' ','') as nombredoc, doc.sellado, doc.archivo FROM alumnos as alu left join instituciones as inst ON alu.idinstitucion = inst.idinstitucion LEFT JOIN documentos AS doc ON alu.idalumno = doc.idalumno LEFT JOIN tipodocumento as tipodoc on doc.idtipo = tipodoc.idtipo where alu.nombreapellido like '".$buscarna."%' and alu.email like '".$buscaremail."%' and inst.nombre like '".$buscarinst."%' and doc.documento like '".$buscardoc."%' and doc.estado = 0 ORDER BY doc.iddocumento desc");*/
/*echo "<td style='width:4%'>".$var."</td>";*/
}
else
{
$queryusuarios = mysqli_query($conn, "SELECT doc.iddocumento, alu.nombreapellido, alu.email, inst.nombre, doc.iddocumento, doc.documento, tipodoc.descripcion as tipodoc, DATE_FORMAT(doc.fechaalta, '%Y-%m-%d') AS fechaalta, replace(doc.documento , ' ','') as nombredoc, doc.sellado, doc.archivo FROM alumnos as alu left join instituciones as inst ON alu.idinstitucion = inst.idinstitucion LEFT JOIN documentos AS doc ON alu.idalumno = doc.idalumno LEFT JOIN tipodocumento as tipodoc on doc.idtipo = tipodoc.idtipo where doc.estado = 0 ORDER BY doc.iddocumento desc");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;    
            echo "<tr>";
            echo "<td style='width:4%'>".$mostrar['iddocumento']."</td>";
            echo "<td style='width:10%'>".$mostrar['nombreapellido']."</td>";
            echo "<td style='width:15%'>".$mostrar['email']."</td>";
            echo "<td style='width:10%'>".$mostrar['nombre']."</td>";
            echo "<td style='width:15%'>".$mostrar['documento']."</td>";
            echo "<td style='width:8%'>".$mostrar['tipodoc']."</td>";
            echo "<td style='width:7%'>".$mostrar['fechaalta']."</td>";
            echo "<td style='width:5%'><a class='botondescargar' href='data:application/octet-stream;base64,".$mostrar['archivo']."' download=".$mostrar['nombredoc']."><input style='font-family: FontAwesome;' placeholder='&#xf019'  class='botondescargar'></input></a></td>";
            echo "<td style='width:10%'><a class='botondescargar' href=\"agregardoc.php?cod=$mostrar[iddocumento]\"><input style='font-family: FontAwesome;' placeholder='&#xf093'  class='botondescargar'></input></a>
            <a class='botondescargar' href=\"editar.php?cod=$mostrar[iddocumento]\"><input style='font-family: FontAwesome;' placeholder='&#xf14b'  class='botondescargar'></input></a><a class='botondescargar' href=\"eliminar.php?cod=$mostrar[iddocumento]\" onClick=\"return confirm('¿Estás seguro de eliminar el documento: $mostrar[documento]?')\"><input style='font-family: FontAwesome;' placeholder='&#xf1f8'  class='botondescargar'></input></a></td>";
            echo "<tr>";
}
?>
</tbody>
</table>
<script>
function abrirform() {
  document.getElementById("formregistrar1").style.display = "block";
}
function finalizarform() {
  document.getElementById("formregistrar1").style.display = "none";
  window.location.reload(true);
}
</script>
<script>
document.getElementById('btnDownload').addEventListener('click', function(){
    var w = window.open('about:blank');
    var files = document.getElementById("btnDownload").value; 
    setTimeout(function(){ 
        w.document.body.appendChild(w.document.createElement('iframe'))
            .src = `data:application/octet-stream;base64, ${files}`;
    }, 0);
});
</script>
<script>
$('table.paginated').each(function() {
    var currentPage = 0;
    var numPerPage = 10;
    var $table = $(this);
    $table.bind('repaginate', function() {
        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
    });
    $table.trigger('repaginate');
    var numRows = $table.find('tbody tr').length;
    var numPages = Math.ceil(numRows / numPerPage);
    var $pager = $('<div class="pager"></div>');
    for (var page = 0; page < numPages; page++) {
        $('<span class="page-number"></span>').text(page + 1).bind('click', {
            newPage: page
        }, function(event) {
            currentPage = event.data['newPage'];
            $table.trigger('repaginate');
            $(this).addClass('active').siblings().removeClass('active');
        }).appendTo($pager).addClass('clickable');
    }
    $pager.insertAfter($table).find('span.page-number:first').addClass('active');
});
</script>
<div class="caja_popup" id="formregistrar1"> 
<form action="sellar.php" class="contenedor_popup" method="POST"> 
<table style="height: 417px; width: 800px;">
<tbody>
<tr style="height: 339px;">
<td style="height: 339px; width: 81px;">Sellar</td>
<!--Llamada a JS de Sellado-->
<td style="height: 339px; width: 378px;">
<!-- <iframe id="datos" style="width: 100%; height: 100%;" src="sellar.php" name="formularios"></iframe></td> -->
<iframe id="datos" style="width: 100%; height: 100%;" src="sellar.php" name="formularios"></iframe>
<input style="text-align: center;" class="btn_cerrar" type="input" value="cerrar" onclick="finalizarform()">
</td>
<!--Llamada a JS de Sellado-->
</tr>
</tr>

</form> 
</tbody>
</table>

</form>
</div>
</body>
<table class="footer" style="border:none;">
<tbody style="border:none;">
<tr style="border:none;">
<td style="border:none;">
<p style="text-align: left; color:white;">Verydoc</p>
</td>
<td style="border:none;">
<p style="text-align: right; color:white;">Version Alpha</p>
</td>
</tr>
</tbody>
</table>
</html>