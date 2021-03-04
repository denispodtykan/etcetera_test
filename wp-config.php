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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'etcetera' );
//define( 'DB_NAME', 'buwlysgt_etcetera' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'etcetera' );
//define( 'DB_USER', 'buwlysgt_denis' );
/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'qwerty123' );
//define( 'DB_PASSWORD', '1o2d3t445p' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );


//define('WP_HOME','http://etcetera.sdf.shn-host.ru');
//define('WP_SITEURL','http://etcetera.sdf.shn-host.ru');

// define('WP_HOME','http://localhost:8888/etcetera');
// define('WP_SITEURL','http://localhost:8888/etcetera');


/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N{xqA6|3ZeYPXqvw.*W]hLX2x[|$hlpGiJ@j:GSw{IGah-(JAuG^z<+|+[+U.h9<' );
define( 'SECURE_AUTH_KEY',  'o(hjQQuci.<IQ<O=]%1hA4,#TovsSozPhA%1>0Xx8]9,4z/l25o[Ou=ZO+B82BnU' );
define( 'LOGGED_IN_KEY',    'BI /O(&YPM]2{0)T)U,arMl@rt9~P0_ZN_c0nXp1oNh*H^U %{fkl4Zq3ywVf%rU' );
define( 'NONCE_KEY',        '{=cli8r;M2SVX)zP]w=!>f#I7CQ8vz(NEK!;Xq0L#OXmmMhY|:8-?Q?MtU(pL5k4' );
define( 'AUTH_SALT',        's|xIRBX_X_b<VMS1e=*x{H(h)l{ zC:qOg$n5fTL$Bo2_UQkr2@@3^(_x*s!9v!!' );
define( 'SECURE_AUTH_SALT', '|s!mZjrg%I;CXYNfKm-p7)~`lMXf5o]A0%LEJZ*KaQQQ{hO#M<Bp,UO1#jcM`3=~' );
define( 'LOGGED_IN_SALT',   'n)c~s+{@)S]9xO&?ynU$74W^4JV!hPLh[#uO)lSh7`w}9@*S?1b?3VgueH.Bq+UJ' );
define( 'NONCE_SALT',       'U>#]OX3-l~W|aQ76XJ:<-&e)`M^B6wS{A*].>:2cG24*qRnw|kGH7kVfpJoW<<hv' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
