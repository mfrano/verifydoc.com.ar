<?php
include_once("conexion.php");
?>
<?php
     $sql = "SELECT idalumno, nombreapellido FROM alumnos WHERE estado = 0";
     $query = mysqli_query($conn,$sql);
     while ($results[] = mysqli_fetch_array($query));
     array_pop ($results);
?>
<?php
     $sql = "SELECT idtipo, descripcion FROM tipodocumento order by descripcion asc";
     $query = mysqli_query($conn,$sql);
     while ($results2[] = mysqli_fetch_array($query));
     array_pop ($results2);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style_sellar.css">
<script type="text/javascript">
            function listAttributes() {
            var ptext = document.querySelectorAll("p")[0]; // nombre del archivo
            var ptext2 = (ptext.querySelector("b").innerHTML);
            document.getElementById("myText").value = ptext2;
            var ptext3 = document.querySelectorAll('input')[0].value; // ruta - hash
            var ptext4 = ptext3;
            document.getElementById("myText2").value = ptext4;
           /* var ptext5 = document.querySelectorAll("div")[0].value;
            var ptext6 = (ptext5.querySelector("input").innerHTML);
            document.getElementById("myText3").value = ptext6;*/
            
}
</script>
<script type="text/javascript">
            function cerrar() {
document.getElementById("formregistrar1").style.display = "none";
}
</script>
</head>
<body id="tsa">
    <main>
        <div>
            <section>
                <div>
                    <div  class="tsa2" >                       
                        <div id="app" apiurl="https://tsa2.buenosaires.gob.ar" lb_00=" El archivo "
                            lb_01=" fue enviado con éxito para ser sellado. Intentá verificarlo en aproximadamente 2 minutos."
                            lb_02="Se ha producido un error al intentar sellar " lb_03=" se encuentra sellado por: "
                            lb_04=" en el bloque " lb_05="No se ha podido verificar el archivo "
                            lb_06="Volver a Sellar o Verificar" lb_07="Cargando"
                            lb_08=""
                            lb_09="Seleccioná archivos para Sellar"
                            lb_10="Nombre del archivo: " lb_11="Hash del archivo: " 
                            lb_14=" Agregar archivos" lb_15=" Copiar" lb_16="Enlace de verificación"
                            lb_17="Remover archivo" lb_18="Seleccionar otros archivos" lb_19=" Sólo se pueden agregar "
                            lb_20=" archivos por vez"
                            lb_12="Sellar" lb_13="Verificar">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <form action="agregar.php" enctype="multipart/form-data" name="formulario" method="POST">
        <p>
            <tr> 
            <td>Alumno:</td>
                <td>
                    <select name="idalumno">
                    <?php foreach ($results as $option) : ?>
                        <option name="idalumno" value="<?php echo $option['idalumno']; ?>"><?php echo $option['nombreapellido']; ?></option>
                    <?php endforeach; ?>
                    </select>    
                </td>               
            </tr>
            <p>
            <tr> 
            <td>Tipo Documento:</td>
                <td>
                    <select name="idtipo">
                    <?php foreach ($results2 as $option) : ?>
                        <option name="idtipo" value="<?php echo $option['idtipo']; ?>"><?php echo $option['descripcion']; ?></option>
                    <?php endforeach; ?>
                    </select>    
                </td>               
            </tr>
            </p>
            </p>
            <p>
            <th>            
            <input class="btn_finalizar" type="submit" value="Procesar" onclick="listAttributes()">
                <input type="hidden" name="var1" id="myText" type="text">
                <input type="hidden" name="var2" id="myText2" type="text">
                <!--<input type="hidden" name="var3" id="myText3" type="text">-->
         </th>
     </p>   
    </form> 
<script src="../modules/custom/tsa2/js/tsa2.js?v=2.x"></script>  
</body>
</html>