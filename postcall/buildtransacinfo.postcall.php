<?php

	require_once($_SERVER['DOCUMENT_ROOT'] . "/class/Transaction.class.php");

	if(isset($_POST)){

		$Transaction = new Transaction();
		$Transaction->setNoTransaction($_POST['id']);
		$Transaction->setMagasin($_POST['magasin']);
		echo $Transaction->getPrintedModal();

	}

?>