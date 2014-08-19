<?php

for ($i=0;$i<40000000;$i++)
{
	//Manipulacao dos resultados do Banco de Dados
	if ($i%5000000 == 0)
		$acao = "OK";
}

print "DB query finished";
?>