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
define('DB_NAME', 'auto');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '%A y<<}Db}.@l/7]sM<&`FPhR1-c4KJb;uCcXtN^r[T.[v6B16cepE?2d$Nucy<v');
define('SECURE_AUTH_KEY',  '2r7z`%<7phXP{.:A}ny6(A}d(}wS@OBcVlp-%W>5X72mU/.5O~e$D]YwJ2$1;e9v');
define('LOGGED_IN_KEY',    'N0|}{9e|ikY3i$f)h}7rZU2;RD*};O/i-9apt_,Ru$H9/`1at=MqTjeKb}U^9K}H');
define('NONCE_KEY',        '{)j}tDDF3ZZ(|PZrS<fF}d3ZN>pT%0g4#DbH>lkEU9N%YLp@;VSM+.J^hghNRIls');
define('AUTH_SALT',        'bY!0$2lYKhQ~;;q2`,ZTLTFffSA?6oi]rUfEWb3>o-a~yxaCy%:kK)XTN%rNy.J ');
define('SECURE_AUTH_SALT', 'dx.J Ora(FxI <~>5$1te>JjWT~<5(+eS,Og47Uq07B`2Nx5.5B]1}(dt;c@e0vB');
define('LOGGED_IN_SALT',   'W@2&a[S?}^HL9lhg4eO*{#G@8=vgD/jEEHC;H!]9oW7ZV/Gwg8kqh^(Ww=#YzTa{');
define('NONCE_SALT',       '+Q.+{6Di<t|jURuh.1rB)[XtR=7Ed3JhZ;,c0si[EXisT:sPoNoNGsYM6*f+yG B');

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
