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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/moscow-n/clean13.ru/docs/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'moscow-n_SalfetKirm');

/** Имя пользователя MySQL */
define('DB_USER', 'moscow-n_kondei');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '+qXjW9VP');

/** Имя сервера MySQL */
define('DB_HOST', 'moscow-n.mysql');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '%G;V<l[+qE!?J2pY-`&@3epUIN[](mYTgHRL;pvKk~K]Tw6oy.*`oC4O-3iZ>,z]');
define('SECURE_AUTH_KEY',  '28ZXn.*vTt<H =@3ouf{_R?*n{O9qUyOq/~bUB>q}-Oli9N^Fx?W_J,uP!3,5`g!');
define('LOGGED_IN_KEY',    '_|@ly1jFmrC|6CQE$.1Cpsz=8PpgDpP>Px+fV^>~ ex6SLRr-[,Cr(fIh.!XJJ-w');
define('NONCE_KEY',        'gRJ=m!{Ok#!J0zcz;sJzf^yZzn8VE.;@j/Vtr9+E2}C;Ys&oMc|kY:1+Oj2C[M2`');
define('AUTH_SALT',        'c(f.Wx[]fd,qNQTY5<E=9)|%gaHKTqhW5?_{cuLR_%nTZifazv%8x7%=-`^^j]3F');
define('SECURE_AUTH_SALT', 'a+K|9K84/@KfD-? t88DYP`o&x~(0.fIUldn_lvC&56+QF8Dkq^O[.1GNV5k*J|b');
define('LOGGED_IN_SALT',   '9fxc]:y|;02!a%<(Fb,sJ1b}%Fv0qE}^!1agS<%2L!(u{c<.&#!;lZO_?J$JpE$n');
define('NONCE_SALT',       '%8>9zwYWNd`%M7m*u=wur_.J[K>)dW?-+I4U1_a}ZG/1F,d!+=hXW6Ur,vU=I?xP');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'TrdBsmFtT_';

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
