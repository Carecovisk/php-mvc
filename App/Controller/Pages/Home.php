<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Home
{
	/**
	 * Método responsável por retornar o conteúdo da (view) nossa home
	 * @return string 
	 */
	public static function getHome(): string
	{
		return View::render('pages/home', [
			"nome" => "João Victor",
			"description" => "Entre no site https://google.com",
			"link" => "https://google.com.br"
		]);
	}
}
