<?php
/**
  *
  * Основные функции
  *
*/
/**
  * Формирование запрашиваемой страницы
  *
  * @param string $controllerName - название контролера
  * @param string $actionName - название функции обработки страницы
  *
*/
function loadPage($smarty, $controllerName, $actionName = "index"){
	include_once PathPrefix . $controllerName . PathPostfix;

	$function = $actionName . "Action";
	$function($smarty);
}

/**
    Загрузка шаблона
 */
function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TemplatePostfix);
}