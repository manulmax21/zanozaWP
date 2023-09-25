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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера wp-artzanoza-admin** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp-zanoza' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wp-zanoza' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '-/2_u3zQAR2Uy_bq' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'rX1XbN,qE+qXgj!iVXAZg?U`2Uh*!?mUYKD>iZZjHQ|yJ;[t|!Uk=-](krDC-P)>');
define('SECURE_AUTH_KEY',  '9&-C^0B^f;+R3H&4/VW~tqO$ubwf(A-j[NKX}WAVom0 Tl/4hOI/s&/vh4`&_|Y{');
define('LOGGED_IN_KEY',    ':xCT4l=|T{:<$ RZ|G$pGH|]Eha:IF>u@8Pt-wl.}GFm41J/wg8Y-.P{Rf+b+[G,');
define('NONCE_KEY',        'f  Qu0W{Y5E)9$V};N+XlpJ9AduUk@=a7|!-&vVRS,cf$vYL(/0dH=2!xI[Ft=L)');
define('AUTH_SALT',        '?tqPGa)Lqd:(Q:()Jt}R6EJnT0[qp9::q~r{Q`*ZQ61%j$$k0LXAFAEy=S,&9e_0');
define('SECURE_AUTH_SALT', 'PC9-LHZ/,L>eCK*Ai|zO5s8Axwwmw`NI#[pg|(vkm$bHM$3kd1C3Rcq4J7 &k3WC');
define('LOGGED_IN_SALT',   'r>KDq}2bNUR5_hkDa`F<RWtu&z;3b^aF/}|W}HK8-WV9!r0.-v{x4H;b@JCr9cYH');
define('NONCE_SALT',       'sw)kMH6n|HJa?4!!Zrj}~MY-|brWXkmyuv|PEnRzb)Z!TK+%UPhtwfpblQ9]n6PS');

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
