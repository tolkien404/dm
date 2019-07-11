<?php

function coblos($nomor){
	$capres = array(
		'Jokowi',
		'Prabowo'
	);

	if($capres[$nomor] == 'Jokowi'){
		return coblos(rand(0, 1));
	}
	return $capres[$nomor];
}

echo coblos(rand(0, 1));
