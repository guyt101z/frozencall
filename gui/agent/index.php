<?php
/*
* Index page for agent.
*/

?>
<html>
<script type="text/javascript" src="../jquery-1.7.1.min.js"></script>

<script>

function linkCall(){
    $.ajax({
        dataType: "json",
        url: "../agi/linkCall.php",
        success: function (data){
        }
    });
}
</script>



<table width="1024" border="0">
<tr>
<td>
<div style="height:80px;border:1px solid blue;top:0">
[Logo Empresa]
</div>
</td>
<td>
<div style="height:80px;border:1px solid red;top:0">
Fecha: Hora:Segundos Dia/Mes/Anio
</div>
</td>
<td>
<div style="height:80px;border:1px solid blue;top:0">
Usuario: Foo / 1234<br>
Campania: Bar
<img style="align:rigth" src="../icons/logout.png"><br>
</div>
</td>
</tr>



<tr>


<td width="200" style="vertical-align:top">
<div style="height:80px;border:1px solid blue;top:0">
<img src="../icons/phone.png" onclick="linkCall();">
<br>
Automatic DIAL.
<br>
<br>
</div>
<div style="height:320px;border:1px solid red;margin-top:0">
[Teclado Telefono]
</div>
</td>



<td height="400">
<div style="height:400px;border:1px solid red;top:0">
<div>
Encuesta

</td>


<td width="200" style="vertical-align:top">
<div style="height:80px;border:1px solid blue;top:0">
<img src="../icons/call-start.png" onclick="foo();">
<br>
Call in Progress.
</div>
<div style="height:220px;border:1px solid red;margin-top:0">
[X]
</div>
<div style="height:100px;border:1px solid green;margin-top:0">
<img src="../icons/muted.png" onclick="Mute();">
<img src="../icons/up.png" onclick="up();">
<img src="../icons/down.png" onclick="down();">
<br>
Sound Panel.
</div>
</td>
</tr>
<tr>
</tr>
<tr>
<th width="30" colspan="3"  style="vertical-align:top">
<div style="height:30px;border:1px solid blue;top:0">
</div>
</th>
</tr>
</table>
</html>
