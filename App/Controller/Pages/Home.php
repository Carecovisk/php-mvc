<?php

namespace App\Controller\Pages;

use App\Model\Entity\Organization;
use App\Utils\View;

class Home extends Page
{
	/**
	 * Método responsável por retornar o conteúdo da (view) nossa home
	 * @return string 
	 */
	public static function getHome(): string
	{
		$organization = new Organization;
		$content = View::render('pages/home', [
			"name" => $organization->name,
			"description" => $organization->description,
			"link" => $organization->site
		]);

		return parent::getPage('Essa é a home!', $content);
	}
}
