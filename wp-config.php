<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'mystore');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iqcP9/r`-rZNtCv*:Y8Bro?PsO[M?,oUW0?WPe$y?T7x~=1,8(u^}6o6FCDrz<:^');
define('SECURE_AUTH_KEY',  ' 452!65{XngCG@6>iY~msqWY nLgT5}lA<IrTi?s+yO9/I*dqBFH|~gtCjYI:P [');
define('LOGGED_IN_KEY',    'Ba=+dSU=Fr!mp+<+IcqCXP7]zlsN;;R6dH5~~pF%%!qqsS}(:zRl,~O.m*_7Y$NI');
define('NONCE_KEY',        '7LZ5:f%&gq):c#}!Uqck:FlM>4#+W=HL1Y7h~?HNi~~z)u1qB[<}?eox1EFd=pLt');
define('AUTH_SALT',        'pc:tz/dC@.u9!$783_%HSg:{%7k?68ipl}hd!mIuGp6#]u~K4t>[e[&VLo*?gbKv');
define('SECURE_AUTH_SALT', 'GU#!,DdiM2je1~tFv1DT7Y70.ne;.Gz[s/qWGV5K/qU1_p>AL16sED(;`>(S8xTO');
define('LOGGED_IN_SALT',   'wLB);k}>-K-1 r#|!$r*Xc.(xwi)T-YQIp+Y-MXB&j03,tAn=<&!1j]<GVXDaR+G');
define('NONCE_SALT',       '+,En(Qcl6vuh<cmy^J8zXE%:=u({%IlHw;n##vP})cqG{xWJ}zZIWpM6H2lskazX');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
