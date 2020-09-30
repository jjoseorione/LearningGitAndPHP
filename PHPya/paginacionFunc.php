<?php
function paginacionIni()
{
  if(isset($_GET['pagina']) && $_GET['pagina']>0)
  {
    $paginacion['pagActual'] = $_GET['pagina'];
    $paginacion['salto'] = ($paginacion['pagActual'] - 1) * REGISTROS_X_PAG;
  }
  else
  {
    $paginacion['pagActual'] = 1;
    $paginacion['salto'] = 0;
  }
  return $paginacion;
}

function muestraPaginacion($paginaActual, $totalRegistros)
{
  $totalPaginas = intdiv(($totalRegistros + REGISTROS_X_PAG - 1), REGISTROS_X_PAG);
  if($totalPaginas<=1)
  	return;

  echo "<div class=\"divPaginacion\">";
  for($i=1; $i<=$totalPaginas; $i++)
  {
  	if($i==$paginaActual)
  		echo "<a href=\"./paginacionExe.php?pagina=$i\" class=\"paginaAct\">";
  	else
  		echo "<a href=\"./paginacionExe.php?pagina=$i\" class=\"pagina\">";
  	echo "$i</a>";
  }
  echo "</div>";
}


?>