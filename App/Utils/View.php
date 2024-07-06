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
	 * @param array $vars (string/numeric)
	 * @return string
	 */
	public static function render(string $view, array $vars = [])
	{
		//Conteúdo da view
		$contentView = self::getContentView($view);

		$keys = array_keys($vars);
		$keys = array_map(function ($values) {
			return "{{" . $values . "}}";
		}, $keys);

		//Retorna conteúdo renderizado
		return str_replace($keys, array_values($vars), $contentView);
	}
}
