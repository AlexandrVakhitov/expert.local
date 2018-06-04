<?php 
/**
  *
  * Контроллер главной страницы
  *
*/
function testAction(){
	echo "IndexController.php > testAction";
}

/**
    Формирование главной страницы
 */
function indexAction($smarty){
    $smarty->assign('pageTitle', 'Главная страница сайта');

    loadTemplaye($smarty, 'index');
}

 ?>