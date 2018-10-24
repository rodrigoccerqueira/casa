<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'casa');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z[3 bf!>ii]*tc9u^w@Yv8Ri6Q2gh(W;6ON6)7*uGnX-t+#@_JQ]M4#Y=r&_)+lc');
define('SECURE_AUTH_KEY',  '![,gKLs{WaWts_B(kocx)>A8n32J)h9Us%~mH[cMy)t+Wxmfs$oHRt4.vZLNnw}~');
define('LOGGED_IN_KEY',    'AP@<I8Z|.XT4=z<i64u9|4N^3U14X m,~:+3Xj^#Yqf>,WQ63js?:f=xqc}6(aG>');
define('NONCE_KEY',        '8&)MFVgE^iRGGh*69_YMA{0h5cy@+nk0E{LvSmZv1$+fAjU@<t*/0ntF[hC`?UWk');
define('AUTH_SALT',        'cVDQ[WyK3[A}`ykZH#fhqu3P0K1L5KO<#sY`H%YV*W.rq`l@.Y[|o!HO2@tI[R39');
define('SECURE_AUTH_SALT', 'bydU)hM&Mo8VnR]OMhaoLS#1|OpCu&r?2rFAvqII`7)G,2sFmrP:7BSc::K`iAm@');
define('LOGGED_IN_SALT',   'StzKh-e;l~7_hJYi{q,9}UazSN^fV:|{o_DM>9~D!whcCYW(aizB|Ff.yj2,z#h7');
define('NONCE_SALT',       '.|DOzK{d_%zXQpgmF/Ewg~(!,x1ymv0hFou}/d}BvdUwXdD&2t8~36@|9`XnPIFE');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
