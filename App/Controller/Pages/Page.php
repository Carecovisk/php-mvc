<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page
{
	/**
	 * Método responsavel por retornar o topo da página
	 * @return string
	 */
	private static function getHeader()
	{
		return View::render('pages/header');
	}

	/**
	 * Método responsavel por retornar o rodapé da página
	 * @return string
	 */
	private static function getFooter()
	{
		return View::render('pages/footer');
	}


	/**
	 * Método responsável por retornar o conteúdo da (view) nossa página genérica
	 * @return string 
	 */
	public static function getPage($title, $content): string
	{
		return View::render('pages/page', [
			'title' => $title,
			'header' => self::getHeader(),
			'content' => $content,
			'footer' => self::getFooter(),
		]);
	}
}
