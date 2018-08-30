<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'blog');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'GuoJinLi!1');

/** MySQL主机 */
define('DB_HOST', '127.0.0.1');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G&V8+0!Z7ixO)$b|kG9]@_&4!@Ii-A.1+=#za^zIpKnnD6.<7l)hHNr`eS<Z#LH&');
define('SECURE_AUTH_KEY',  'TuV12#$/f)ehl]r]mjy0T3YBhpZ3VD&D[Cnm*tJn%5&M3aw(1fca;4,&No!<a>B8');
define('LOGGED_IN_KEY',    'lWXUbEbw0$my3:&XGu@#d@^bs&4k& ,5^VV)]qdmsg7@yh6%jRslUb}g[3557Dm!');
define('NONCE_KEY',        'itK]?p-P1DFR!)#vq_feeNW&TQD&(/N)Sdnz+r:rOw:J &il`I<DUR%t *5Cc2Ok');
define('AUTH_SALT',        '<J_VP`?_l2_yg!w7%HE>u8!3bHrS1Iq/Y5NoJPlQ,$z#Nvu6J&5aLy0<L|9}gB1/');
define('SECURE_AUTH_SALT', 'z3yyNq(.@ooeQ^?w7?7!N}5pFpSR/@ 6]-d(a;5Jb>V~Hlh`UD-rLLSB$rj6S.E ');
define('LOGGED_IN_SALT',   'GAiRIOG1j)-v]X.Z~&7&FojPjEPVg|k[5xq3F`*&k=<RkC!9}3)oRuJ;DW*w%75W');
define('NONCE_SALT',       'A`vJ@6:wX!y)PLBcYQs@<2_PtDZiqJ/R?R0$.u&60sH}l}zEYK[7j;.qAK`N*22!');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');

