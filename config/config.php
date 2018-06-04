<?php
/**
  *
  * Файл настроек
  *
*/
//>Константы для обращения к контроллерам
define ('PathPrefix', '../controllers/');
define ('PathPostfix', 'Controller.php');
//<

//>Используемый шаблон
$template = 'default';

//Путь к файлам шаблонов (*.tpl)
define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');

//Путь к файлам шаблонов в веб пространстве
define('TemplateWebPath', "/templates/{$template}/");
//<

//>Инициализация шаблонизатора Smarty
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/smarty/configs');

$smarty->assing('templateWebPath', TemplateWebPath);





































