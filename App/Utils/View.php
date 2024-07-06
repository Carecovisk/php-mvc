<?php

namespace App\Utils;

class View
{
	/**
	 * Método responsavél por retornar o conteúdo de uma view
	 * @param string $view
	 * @return string
	 */
	private static function getContentView($view)
	{
		$file = __DIR__ . "/../../resources/view/$view.html";
		return file_exists($file) ? file_get_contents($file) : '';
	}

	/**
	 * Método responsavél por retornar o conteúdo renderizado de uma view
	 * @param string $view
	 * @return string
	 */
	public static function render(string $view)
	{
		//Conteúdo da view
		$contentView = self::getContentView($view);

		//Retorna conteúdo renderizado
		return $contentView;
	}
}
