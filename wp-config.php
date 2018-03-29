<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp_stroi-invest.loc'); 

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'serii1981');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-ndoEkE9~[:s.jde(crLC`)G86~L0jn0yqg@b,5yb(8@L#md8^UGc<G>vup{AL3;');
define('SECURE_AUTH_KEY',  's{<3aj?}8@Mc_s<*X+]z]QH>.dd6~vCYAa<;sk,?7y#WKG,b_%nyoxJRLWM|??}F');
define('LOGGED_IN_KEY',    '8,Hh9Twts@L@fZ!=wV6U&wtrf-#*][ CIc#`v68YoW+8qN=+ $q]utT|V88]*xk3');
define('NONCE_KEY',        '?2%Yw6hXD_v:gFh`H]#U{Av8 jGt,Z}NL+/#aVEgA~kB(kn#rM%H`*~!CS-c|%YI');
define('AUTH_SALT',        'vSNF]QET,ni#{;0nHp2^Y@<ivWYj!|b9beT3R}V&sb76P}L/[B!)UTwH1MAw}%]p');
define('SECURE_AUTH_SALT', 'V m]YW+hWIa^%x:YV,B_#z1dDwlTWv&0mGT:[E-:-n/e(&Kgm]Q6Pc6r@BOFqA2c');
define('LOGGED_IN_SALT',   'Zb:A,m(%`)~-=ntm1:<`vGpJXNa~zMm;cmIrkOR8Eiu5R@6I-01xe0#:3xNqmen|');
define('NONCE_SALT',       '+k++N~R_q:fg)vchk:7aU]<2e)J+&yv|}A#1+FclZVTkp%2W3v=5Gja_0$a!h7*`');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
