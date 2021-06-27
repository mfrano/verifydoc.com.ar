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
<html>
<div class="main" style="text-align: center; color:white;">
</div>
 <head>
<title>Gestión de Reportes</title>
		<meta charset="UTF-8">
     <link rel="stylesheet" media="all" href="../npm/bootstrap@3.4.1/dist/css/bootstrap_2.css"> 
    <link rel="stylesheet" media="all" href="style.css">
     <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  
    <script src="../npm/chart.js"></script> 
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$(".header").click(function () {
   $("[data-for="+this.id+"]").slideToggle("slow");
});
    </script>
    <script src="../modules/custom/tsa2/js/tsa2.js?v=2.x"></script>
    <script src="../npm/jquery.twbsPagination.js"></script>
    <script src="..npm/bootstrap@3.4.1/dist/js/bootstrap.js"></script> 
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
<script>
$.ajax({
    type: 'POST',
    url: 'alumnos.php ',
    datatype: 'json',
    success: function (result) {
        var ctx = document.getElementById("chart1").getContext("2d");
        
        var mychart = new Chart(ctx,
        {
         
            type: 'bar',
            data: JSON.parse(result),
           
            options: { 
              backgroundColor: 'rgba(90,128,225, 1)',
               hoverBackgroundColor: 'rgba(90, 212, 225, 0.75)',
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        })
    }
})
</script>
<script>
$.ajax({
    type: 'POST',
    url: 'documentos.php ',
    datatype: 'json',
    success: function (result) {
        var ctx = document.getElementById("chart2").getContext("2d");
        
        var mychart = new Chart(ctx,
        {
            type: 'bar',
            data: JSON.parse(result),
            options: {
              backgroundColor: 'rgba(90,128,225, 1)',
               hoverBackgroundColor: 'rgba(90, 212, 225, 0.75)',
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        })
    }
})
</script>
<script>
$.ajax({
    type: 'POST',
    url: 'tipodocumentos.php ',
    datatype: 'json',
    success: function (result) {
        var ctx = document.getElementById("chart3").getContext("2d");
        
        var mychart = new Chart(ctx,
        {
            type: 'bar',
            data: JSON.parse(result),
            options: {
              backgroundColor: 'rgba(90,128,225, 1)',
               hoverBackgroundColor: 'rgba(90, 212, 225, 0.75)',
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        })
    }
})
</script>
<table>
<th style="background-color: transparent">
<div class="chart-container" style="position: relative; height:40vh; width:40vw">
    <canvas id="chart1"></canvas>
</div>
</th>
<th style="background-color: transparent">
<div class="chart-container" style="position: relative; height:40vh; width:40vw">
    <canvas id="chart2"></canvas>
</div>
</th>
</table>
<table>
<th style="background-color: transparent">
<div class="chart-container" style="position: relative; height:40vh; width:40vw">
    <canvas id="chart3"></canvas>
</div>
</th>
</table>
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