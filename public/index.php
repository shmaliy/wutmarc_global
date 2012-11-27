<?php
error_reporting(0);
//session_start();


/* Корневой каталог */
if (!defined('ROOT_PATH')) {
	define('ROOT_PATH', realpath(dirname(dirname(__FILE__))));
}

//echo ROOT_PATH;

/* Каталог приложения */
if (!defined('APPLICATION_PATH')) {
	define('APPLICATION_PATH', ROOT_PATH . '/application');
}

/* Каталог библиотек ZEND */
if (!defined('LIBRARY_PATH')) {
	if ($_SERVER['HTTP_HOST'] == 'public.wutmarc_global') {
		if (file_exists(realpath(ROOT_PATH . '/../..') . '/phpLibs')) {
			define('LIBRARY_PATH', realpath(ROOT_PATH . '/../..' . '/phpLibs'));
		} else {
			define('LIBRARY_PATH', realpath(ROOT_PATH . '/library'));
		}
	} else {
		if (file_exists(realpath(ROOT_PATH) . '/phpLibs')) {
			define('LIBRARY_PATH', realpath(ROOT_PATH . '/phpLibs'));
		} else {
			define('LIBRARY_PATH', realpath(ROOT_PATH . '/library'));
		}
	}
}



/* Каталог публично доступных файлов */
if (!defined('PUBLIC_PATH')) {
	if ($_SERVER['HTTP_HOST'] == 'public.wutmarc_global') {
		define('PUBLIC_PATH', ROOT_PATH . '/public');
	} else {
		define('PUBLIC_PATH', ROOT_PATH . '/public_html');
	}
}


/* Установка среды */
if (!defined('APPLICATION_ENV')) {
    define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));
}

// Подключение файла настроек
require_once APPLICATION_PATH . '/configs/config.php';

//Установка в include_path папки библиотек
if ($_SERVER['HTTP_HOST'] == 'public.wutmarc_global') {
	set_include_path(implode(PATH_SEPARATOR, array(
	    LIBRARY_PATH,
	    get_include_path(), 
	    APPLICATION_PATH . '/../public/classes'
	)));
} else {
	set_include_path(implode(PATH_SEPARATOR, array(
	LIBRARY_PATH,
		get_include_path(),
		PUBLIC_PATH . '/classes'
	)));
}



include('my_helpers.php');
include('renamer.php');

/** Подключение Zend_Application */
require_once 'Zend/Application.php';

// Создание обьекта приложения и запуск
$application = new Zend_Application(
    APPLICATION_ENV,
    $config
);
$application->bootstrap()->run();