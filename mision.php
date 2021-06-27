<html>
<div class="main" style="text-align: center; color:white;">
</div>
 <head>
<title>Gestión de Documentación</title>
		<meta charset="UTF-8">
    </style>
    <link rel="stylesheet" media="all" href="npm/bootstrap@3.4.1/dist/css/bootstrap_2.css">  
    <link rel="stylesheet" media="all" href="style2.css"> 
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$(".header").click(function () {
   $("[data-for="+this.id+"]").slideToggle("slow");
});
    </script>
    <script src="npm/bootstrap@3.4.1/dist/js/bootstrap.js"></script> 
    <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"tsa2","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"es"},"pluralDelimiter":"\u0003","google_analytics":{"trackOutbound":true,"trackMailto":true,"trackDownload":true,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip"},"data":{"extlink":{"extTarget":true,"extTargetNoOverride":false,"extNofollow":false,"extFollowNoOverride":false,"extClass":"0","extLabel":"(link is external)","extImgClass":false,"extSubdomains":false,"extExclude":"","extInclude":"","extCssExclude":".view-miembros, .footerArea, #block-bloquesumate","extCssExplicit":"","extAlert":false,"extAlertText":"This link will take you to an external web site. We are not responsible for their content.","mailtoClass":"mailto","mailtoLabel":"(link sends email)"}},"bootstrap":{"forms_has_error_value_toggle":1,"modal_animation":1,"modal_backdrop":"true","modal_focus_input":1,"modal_keyboard":1,"modal_select_text":1,"modal_show":1,"modal_size":"","popover_enabled":1,"popover_animation":1,"popover_auto_close":1,"popover_container":"body","popover_content":"","popover_delay":"0","popover_html":0,"popover_placement":"right","popover_selector":"","popover_title":"","popover_trigger":"click","tooltip_enabled":1,"tooltip_animation":1,"tooltip_container":"body","tooltip_delay":"0","tooltip_html":0,"tooltip_placement":"auto left","tooltip_selector":"","tooltip_trigger":"hover"},"tsa2":{"tsa2_api":"https:\/\/tsa2.buenosaires.gob.ar","lb00":" El archivo ","lb01":" fue enviado con \u00e9xito para ser sellado. Intent\u00e1 verificarlo en aproximadamente 2 minutos.","lb02":"Se ha producido un error al intentar sellar ","lb03":" se encuentra sellado por: ","lb04":" en el bloque ","lb05":"No se ha podido verificar el archivo ","lb06":"Volver a Sellar o Verificar","lb07":"Cargando","lb08":"Arrastr\u00e1 archivos aqu\u00ed\u003Cbr\u003E\u00f3","lb09":"Seleccion\u00e1 archivos \u003Cspan class=\u0022sr-only\u0022\u003Epara Sellar o Verificar\u003C\/span\u003E","lb10":"Nombre del archivo: ","lb11":"Hash del archivo: ","lb12":"Sellar","lb13":"Verificar","lb14":" Agregar archivos","lb15":" Copiar","lb16":"Enlace de verificaci\u00f3n","lb17":"Remover archivo","lb18":"Seleccionar otros archivos","lb19":" S\u00f3lo se pueden agregar ","lb20":" archivos por vez"},"user":{"uid":0,"permissionsHash":"f332b4d0a413d6e9e53534452c18d4ca6c0b415e145220e30821f1d37599e1a2"}}</script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .botondescargar2
{
	width:40px;
	height:40px;
	background-color:#808080;
	padding: 0px;
	color:white;
	font-size:11px;
	text-align: center;
	margin: 00px;
	/*font-weight: lighter;*/
	border-radius:5px;
	border:none;
	cursor:pointer;
}
::placeholder {
	
	font-size: 3em;
  }
  </style>
</head>
<body>
  <table> 
    <tbody>
  <nav style="background-color: transparent;" id="navbar" role="banner" class="navbar navbar-default navbar-fixed-top navbar-content">
    <div style="background-color: transparent;" class="container">
      <div style="background-color: transparent;" class="navbar-header">
        <div style="background-color: transparent;" class="region region-navigation">
        <div style="position: relative;" class="logo navbar-btn pull-left" href="index.php" rel="home">
            <img style="position: relative;" id="logo" src="themes/images/LOGO_SVG_VerifiDoc.svg" alt="VerifyDoc" onclick="window.location='index.php'">
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
                  <a class="nav" href="quien.php" data-drupal-link-system-path="&lt;front&gt;">Quienes Somos</a>
                </li>
                <li>
                  <a class="nav" href="mision.php" data-drupal-link-system-path="&lt;front&gt;">Mision, Vision y Valor</a>
                </li>
                <li>
                  <a class="nav" href="precio.php" data-drupal-link-system-path="&lt;front&gt;">Precios</a>
                </li>
                <li>
                  <a class="nav" href="contacto.php" data-drupal-link-system-path="&lt;front&gt;">Contactenos</a>
                </li>
                <li>
                  <a class="nav" href="login/login.php" data-drupal-link-system-path="&lt;front&gt;">Ingresar</a>
                  
                </li>
                  </ul>
              </ul>
            </nav>
            </body>
            </tbody>
            </table>
            <table style="position:absolute;border:none;background-color: #26b382;width: 100%;left: 0;">
<tbody style="border:none">
<tr style="border:none">
<td style="border:none">
</td>
</tr>
</tbody>
</table>  
<!-- <center>
-->
<table style="left: 50%; -webkit-transform: translateX(-50%); transform: translateX(-50%); margin-top: 45px; position:absolute;">
<tbody>
<!-- <tr>
<td style="width: 100%;">
<h1 style="color: black;" class="page-header">Mision</h1>

<div style="color: black; height: 900px;" class="centro">
 
 

 

  
    <p>Ofrecemos soluciones en desarrollo de tecnología de última generación para todos nuestros actuales y potenciales clientes que busquen un servicio de máxima excelencia.
      Para ello trabajamos en un ambiente de calidad total, donde el servicio ofrecido es un fiel reflejo de nuestra eficacia y eficiencia empresarial que busca satisfacer las necesidades de nuestros clientes y distribuidores en términos de tecnología, innovación, confiabilidad y cumplimiento de normas.
      
         
         
        </p>
     
<div>
<h1 style="color: black;" class="page-header">Vision</h1>

<div style="color: black; height: 00px;" class="centro">
 
 

 

  
    <p>Ser una empresa líder en desarrollo de tecnologías de última generación a nivel nacional e internacional adaptándonos a las cambiantes condiciones de mercado y a las demandas y necesidades de nuestros clientes.
         
         
        </p>
     
<div>

<h1 style="color: black;" class="page-header">Valor</h1>

<div style="color: black ; height: 00px;" class="centro">
 
 


  
    <p>1. Compromiso.</p>
    <p>2. Responsabilidad.</p>
    <p>3. Trabajo en Equipo.</p>
    <p>4. Búsqueda de mejora constante.</p>
    <p>5. Respeto por la Ecología.</p>
    <p>6. Lealtad a nuestros Proveedores.</p>
    <p>7. Honestidad.</p>

</td>
</tr>-->

<div class="deck">
  <div class="card-space">
    <div class="card">
      <div class="face front">
        <h1>Mision</h1>
      </div>
      <div class="face back">
        <p>Ofrecemos soluciones en desarrollo de tecnología de última generación para todos nuestros actuales y potenciales clientes que busquen un servicio de máxima excelencia.
      Para ello trabajamos en un ambiente de calidad total, donde el servicio ofrecido es un fiel reflejo de nuestra eficacia y eficiencia empresarial que busca satisfacer las necesidades de nuestros clientes y distribuidores en términos de tecnología, innovación, confiabilidad y cumplimiento de normas.</p>
      </div>
    </div>
  </div>
  <div class="card-space">
    <div class="card">
      <div class="face front">
        <h1>Vision</h1>
      </div>
      <div class="face back">
        <p>Ser una empresa líder en desarrollo de tecnologías de última generación a nivel nacional e internacional adaptándonos a las cambiantes condiciones de mercado y a las demandas y necesidades de nuestros clientes.</p>
      </div>
    </div>
  </div>
</div>

</tbody>
</table>
<!--
</center>--> 

         

</table>
<!-- </center> -->
<table class="footer" style="border:none; border-color:none; border-collapse:none;">
<tbody style="border:none; border-color:none; border-collapse:none;">
<tr style="border:none; border-color:none; border-collapse:none;">
<td style="border:none; border-color:none; border-collapse:none;">
<input style='font-family: FontAwesome;' type="text" placeholder='&#xf16d' class='botondescargar2' onclick="location.href='https://www.instagram.com/verifydocar/';"></input>
<input style='font-family: FontAwesome;' type="text" placeholder='&#xf08c'  class='botondescargar2' onclick="location.href='https://www.linkedin.com/in/verifydoc-ar-b2a319215/';"></input>   
</td>
</tr>
<tr style="border:none; border-color:none; border-collapse:none;"><td style="border-color:none; border:none; border-collapse:none;">VerifyDoc - Copyright © Todos los derechos reservados</td></tr>
</tbody>
</table>
</html>