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
define( 'DB_NAME', 'landing-wp2021' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'R~A@@lhy()MjKOyG)Kn=*{]qXp1 mNEU:y%8+#+,)2B?N!r K/_CuCN&=DjA?!BV' );
define( 'SECURE_AUTH_KEY',  'nR&O$gbhH.#yrvD>!E2*-Edyi!0,5eJ-kzrq%Z jqJ :bNGGih%yI.>5039HfZsd' );
define( 'LOGGED_IN_KEY',    '0+]Sp3a,fvVPSt2EiyxF9%4HuCHH DgBU=[w`7f;>(&6=I#bs!,@V)0$t1R/|(6|' );
define( 'NONCE_KEY',        'D9Q7Fs}]+1_RCLf/xP4ZJuzL-?@NlPwth}Jo<XH1J/h6~#-o.+J5w;pmFhGRJ*FI' );
define( 'AUTH_SALT',        'GuoZ#;G}LE9t^8^C2`i`*wjJCm3rU1/wV~^h:+[[^cvg<FP.$Su4lj)A4r=~MP:s' );
define( 'SECURE_AUTH_SALT', '90Q5hV4HnozNg8i,RlA55`eF< 7n`c%sCcSWIJgkit5`t!cu-rlu$LQ^AGbifl{Z' );
define( 'LOGGED_IN_SALT',   'R72uN;(9GS8B*Z@tPm L-y8}S&uMWa,R{IW7UBraPH9jtOQ?,pguHJrf~mf[KH%f' );
define( 'NONCE_SALT',       '7}y?uk<M_GuRxRX/ER<z~Z*rn)nE!D_7MW8Sa1V/YHU:/u%VKh<oby8e/_%VZ,U0' );

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
