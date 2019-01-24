<?php

// Chargement des classes
require_once('model/RegisterManager.php');

function registerAdmin($pseudo, $pass)
{
	$addAdmin = new \Tp\Blog\Model\addAdmin();

	$dataAdmin = $addAdmin->addAdmin($pseudo, $pass);

    require('../view/backend/registerView.php');
}

function login()
{
	$getAdmin = new \Tp\Blog\Model\getAdmin();

	$gadmin = $getAdmin->getAdmin($_GET['id']);

	require('../view/backend/adminView.php');
}