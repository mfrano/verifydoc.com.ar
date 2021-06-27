<html>
<div class="main" style="text-align: center; color:white;">
</div>
 <head>
<title>Gestión de Documentación</title>
		<meta charset="UTF-8">
    </style>
    <link rel="stylesheet" media="all" href="npm/bootstrap@3.4.1/dist/css/bootstrap_2.css"> 
    <link rel="stylesheet" media="all" href="style.css">
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
      ::placeholder{
        font-size: 1.5em;
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


  
<!--<table style="width:auto;	left: 50%; -webkit-transform: translateX(-50%); transform: translateX(-50%); margin-top: 45px; position:absolute; border-color:none;">
 <tbody>
<tr>
<td style="width: 100%;">
<h1 style="color: black; "height: 700px;"" class="centro" class="page-header">Contacto</h1>
              <p style="color: black; style="width: 100px;">Si tiene alguna Consulta, envianos un mensaje.</p> 
              <form action="mail.php" method="POST">
                <p style="text-align: left; color: black;">Nombre</p>  <input style="width: 200px; height: 40px" type="text" name="name" placeholder="Nombre">
                <p style="color: black;">E-mail</p> <input style="width: 200px; height: 40px" type="text" name="email" placeholder="E-Mail">

<p>                <label for="plan">Plan</label></p>
    <select style="width: 200px; height: 40px " id="plan" name="plan">
      <option value="premium">Standard</option>
      <option value="standard">Enterprise</option>
      <option value="trial">Trial</option>
      <option value="trial">Unlimited</option>
    </select>

                <p style="color: black;">Mensaje</p><textarea name="message" rows="6" cols="40" placeholder="Ingresar Mensaje..."></textarea><br />
                <input style="width: 100px; height: 30px; background-color:#26b382; color: white;" type="submit" value="ENVIAR">
                </form>
</td>
</tr>
</tbody>
</table>-->


<table style="width: auto; left: 50%; -webkit-transform: translateX(-50%); transform: translateX(-50%); margin-top: 45px; position: absolute; border-color: none;">
<tbody>
<tr>
<td style="width: 100%;">
<h1 class="centro" style="color: black;">Contacto</h1>
<p style="color: black;">Si tiene alguna Consulta, envianos un mensaje.</p>
<form action="mail.php" method="POST"><!-- --> <!-- --> 
<table style="border-collapse: collapse; width: 100%;" border="1">
<tbody>
<tr>
<td style="width: 50%;"><p style="text-align: left; color: black;">Nombre</p></td>
<td style="width: 50%;"> <input style="width: 200px; height: 40px;" name="name" type="text" placeholder="Nombre" /></td>
</tr>
<tr>
<td style="width: 50%;"><p style="text-align: left; color: black;">E-mail</p></td>
<td style="width: 50%;"><input style="width: 200px; height: 40px;" name="email" type="text" placeholder="E-Mail" /></td>
</tr>
<tr>
<td style="width: 50%;"><p for="plan" style="text-align: left; color: black;">Plan</p></td>
<td style="width: 50%;"><select id="plan" style="width: 200px; height: 40px;" name="plan">
<option value="premium">Standard</option>
<option value="standard">Enterprise</option>
<option value="trial">Trial</option>
<option value="trial">Unlimited</option>
</select></td>
</tr>
</tbody>
</table>
<!-- <p style="color: black;">Mensaje</p> -->
<textarea cols="40" name="message" rows="6" placeholder="Ingresar Mensaje..."></textarea><br /><p></p><input style="width: 100px; height: 30px; background-color: #26b382; color: white;" type="submit" value="ENVIAR" /></form></td>
</tr>
</tbody>
</table>


<!-- </table> -->
<!-- </center> -->
<table class="footer" style="border:none; border-color:none; border-collapse:none;">
<tbody style="border:none; border-color:none; border-collapse:none;">
<tr style="border:none; border-color:none; border-collapse:none;">
<td style="border:none; border-color:none; border-collapse:none;">
<input style='font-family: FontAwesome; font-size:1.5em' type="text" placeholder='&#xf16d' class='botondescargar2' onclick="location.href='https://www.instagram.com/verifydocar/';"></input>
<input style='font-family: FontAwesome; font-size:1.5em' type="text" placeholder='&#xf08c'  class='botondescargar2' onclick="location.href='https://www.linkedin.com/in/verifydoc-ar-b2a319215/';"></input>   
</td>
</tr>
<tr style="border:none; border-color:none; border-collapse:none;"><td style="border-color:none; border:none; border-collapse:none;">VerifyDoc - Copyright © Todos los derechos reservados</td></tr>
</tbody>
</table>
</html>