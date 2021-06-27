
<?php

include_once("conexion.php"); 
//error_reporting(0);

?>
<html>
<head>    
		<title>Gestión de Documentación</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
        <script src="../modules/custom/tsa2/js/tsa2.js?v=2.x"></script>
        <script src="../core/misc/drupalSettingsLoader.js?v=8.7.8"></script>
        <script src="../core/misc/drupal.js?v=8.7.8"></script>
        <script src="../core/misc/drupal.init.js?v=8.7.8"></script>
        <script src="../themes/contrib/bootstrap/js/drupal.bootstrap.js?pzkvap"></script>
        <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"tsa2","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"es"},"pluralDelimiter":"\u0003","google_analytics":{"trackOutbound":true,"trackMailto":true,"trackDownload":true,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip"},"data":{"extlink":{"extTarget":true,"extTargetNoOverride":false,"extNofollow":false,"extFollowNoOverride":false,"extClass":"0","extLabel":"(link is external)","extImgClass":false,"extSubdomains":false,"extExclude":"","extInclude":"","extCssExclude":".view-miembros, .footerArea, #block-bloquesumate","extCssExplicit":"","extAlert":false,"extAlertText":"This link will take you to an external web site. We are not responsible for their content.","mailtoClass":"mailto","mailtoLabel":"(link sends email)"}},"bootstrap":{"forms_has_error_value_toggle":1,"modal_animation":1,"modal_backdrop":"true","modal_focus_input":1,"modal_keyboard":1,"modal_select_text":1,"modal_show":1,"modal_size":"","popover_enabled":1,"popover_animation":1,"popover_auto_close":1,"popover_container":"body","popover_content":"","popover_delay":"0","popover_html":0,"popover_placement":"right","popover_selector":"","popover_title":"","popover_trigger":"click","tooltip_enabled":1,"tooltip_animation":1,"tooltip_container":"body","tooltip_delay":"0","tooltip_html":0,"tooltip_placement":"auto left","tooltip_selector":"","tooltip_trigger":"hover"},"tsa2":{"tsa2_api":"https:\/\/tsa2.buenosaires.gob.ar","lb00":" El archivo ","lb01":" fue enviado con \u00e9xito para ser sellado. Intent\u00e1 verificarlo en aproximadamente 2 minutos.","lb02":"Se ha producido un error al intentar sellar ","lb03":" se encuentra sellado por: ","lb04":" en el bloque ","lb05":"No se ha podido verificar el archivo ","lb06":"Volver a Sellar o Verificar","lb07":"Cargando","lb08":"Arrastr\u00e1 archivos aqu\u00ed\u003Cbr\u003E\u00f3","lb09":"Seleccion\u00e1 archivos \u003Cspan class=\u0022sr-only\u0022\u003Epara Sellar o Verificar\u003C\/span\u003E","lb10":"Nombre del archivo: ","lb11":"Hash del archivo: ","lb12":"Sellar","lb13":"Verificar","lb14":" Agregar archivos","lb15":" Copiar","lb16":"Enlace de verificaci\u00f3n","lb17":"Remover archivo","lb18":"Seleccionar otros archivos","lb19":" S\u00f3lo se pueden agregar ","lb20":" archivos por vez"},"user":{"uid":0,"permissionsHash":"f332b4d0a413d6e9e53534452c18d4ca6c0b415e145220e30821f1d37599e1a2"}}</script>
</head>

<body>

<table>
<tr>
    <td colspan ="1"><img src="../themes/images/LOGO_SVG_VerifiDoc.svg" width="120" height="80"></th>
    <td colspan ="6"><h1>GESTION DE DOCUMENTACION</h1></th>
  </tr>
<td style="background: white;" colspan="7"> </td>  
<tr>
<th colspan="7" id="barrabuscar">
		<form method="POST">
		<input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Buscar">
		</form>
</th>
</tr>
		
			<tr><th colspan="6"><h1>DOCUMENTOS</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
			<tr>
		    <th>ID</th>
            <th>Nombre y Apellido</th>
            <th>E-Mail</th>
            <th>Institucción</th>
            <th>Documento</th>
            <th>¿Sellado?</th>
            <th>Acción</th>
			</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conn, "SELECT alu.idalumno, alu.nombreapellido, alu.email, inst.nombre, doc.documento, doc.sellado FROM alumnos as alu left join instituciones as inst ON alu.idinstitucion = inst.idinstitucion LEFT JOIN documentos AS doc ON alu.iddocumento = doc.idalumno where alu.nombreapellido like '".$buscar."%' and doc.eliminado = 0");
}
else
{
$queryusuarios = mysqli_query($conn, "SELECT alu.idalumno, alu.nombreapellido, alu.email, inst.nombre, doc.iddocumento, doc.documento, doc.sellado FROM alumnos as alu left join instituciones as inst ON alu.idinstitucion = inst.idinstitucion LEFT JOIN documentos AS doc ON alu.iddocumento = doc.idalumno where doc.eliminado = 0 ORDER BY alu.idalumno asc");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;    
            echo "<tr>";
            echo "<td>".$mostrar['idalumno']."</td>";
            echo "<td>".$mostrar['nombreapellido']."</td>";
            echo "<td>".$mostrar['email']."</td>";
            echo "<td>".$mostrar['nombre']."</td>";
            echo "<td>".$mostrar['documento']."</td>";
            echo "<td>".$mostrar['sellado']."</td>";
            echo "<td style='width:26%'><a href=\"editar.php?cod=$mostrar[iddocumento]\">Modificar</a> <a href=\"eliminar.php?cod=$mostrar[iddocumento]\" onClick=\"return confirm('¿Estás seguro de eliminar el documento: $mostrar[documento]?')\">Eliminar</a></td>";           
}
        ?>
    </table>

<script>
function abrirform() {
  document.getElementById("formregistrar").style.display = "none";
  
}

function finalizarform() {
  document.getElementById("formregistrar").style.display = "none";
}
</script>

<div class="caja_popup" id="formregistrar"> 
<!-- <form class="contenedor_popup"> -->
<table style="height: 417px; width: 800px;">
<tbody>
<tr style="height: 18px;">
<th style="height: 18px; width: 465px;" colspan="2">Nuevo Documento</th>
</tr>
<tr style="height: 339px;">
<td style="height: 339px; width: 81px;">Sellar</td>
<!--Llamada a JS de Sellado-->
<td style="height: 339px; width: 378px;"><iframe id="datos" style="width: 100%; height: 100%;" src="sellar.php" name="formularios"></iframe></td>
<!--Llamada a JS de Sellado-->
</tr>
<tr style="height: 24px;">
</tr>
</tbody>
</table>
<!-- </form> -->
</div>
</body>
</html>

