<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'ai' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3O4{Z6)&m0nyyiQN~}is77G*.pgX>fX&je 17giD2e-p*=9YZr):x~j_ <hm$N-u' );
define( 'SECURE_AUTH_KEY',  'lVC(>kWW<_fpdh^HLOq x9xL|[h8{U8x:qk<&mW.;Mg28S.CzLdJ Su:1[bj<Atm' );
define( 'LOGGED_IN_KEY',    'PYl]0Xg!U A|uY.8L6mE{AUG2gh-n7-clckZ5$C8s}KOYqeH /*3J[P^gUBIs]jI' );
define( 'NONCE_KEY',        'l4~(, fA}QJJy6$3Ilu32 UCnR>#iFd#F~@gz/V{k4SuD(:sDF:L6ar:oTaA:GIb' );
define( 'AUTH_SALT',        'XYW2FCi96sd~4.er7yd1G+38jp!(9X!UyC`?h[+gVV!1v?Q_Kl(R]jJ5WafVY[(5' );
define( 'SECURE_AUTH_SALT', 'qLYVw_Ujzah[0i(_tf%|,ha2@w/ZF!Hr|:m?t2=.n&wjjwDFn7`@w4%D/@J)4jU[' );
define( 'LOGGED_IN_SALT',   'R6ziOJ^>Z*NeXSLvgpTYwF*/h<U[n9CGHO405yMdZZ/84FR`{/+(tF8z[6+uUEpE' );
define( 'NONCE_SALT',       'bGUr[?/ccf(8;3f8o%dYlt1cySg%%dF4lgwiL<Vu%dub#;Au7<3aZd>1J[}0}z<v' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ai_';

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
