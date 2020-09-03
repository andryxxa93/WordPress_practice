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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Esw-4kH-GKg-Q7q' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L 1{2^;%F67Ua{s UP6jk=9s#Rtbg>6N:A(7ra:F~ac/uOa9ee<;zRQ;I$J;l40o' );
define( 'SECURE_AUTH_KEY',  'inkK}|o,($GBH0K=N?^DGqE-UJFHnkWDOH:6De1$*bf:0&>/|muDvklT6m7>OI[[' );
define( 'LOGGED_IN_KEY',    'u5U[+R_5upEYahR%IkV:*XjLYG$FU(?&6Y??${[m1`L3|b=GcTAQt qVA^%EtfQ6' );
define( 'NONCE_KEY',        'Uy%h@iX]<pN%CY[)@DQLM>4Rh|zDY<?tmCWFacqS60i/m#54fE4{!?TLup3wf80?' );
define( 'AUTH_SALT',        'D>g=&E]e%hy6ioxHN|&mE^:Q/9X<x:iwat/f6O((]ff^eHJ8>BLB%-Iju/V-YJ?O' );
define( 'SECURE_AUTH_SALT', '`2p}KkL9&M8{JB=6=L+ <K&mTE`&N`60g@=s7!p yM<#GE;5t7Dv^v}okjjH8g}A' );
define( 'LOGGED_IN_SALT',   'nXlc6/=%)T_}ddNco3g)3{:lK`D{aAMFhO{u&z&[NP`(S1N}+FU##F%~+D>-?$WJ' );
define( 'NONCE_SALT',       '1_Ry9ZDAcTLgjLe{U9%[qA2ki6(9=K3C;cBbW05s-1EJ8}>4h8heh&6BgV?ojSnH' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
