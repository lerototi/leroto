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
define('DB_NAME', 'leroto');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         '=(9]yq3Lr`lE@/}<20alsf`RFpj9_:TiflJ}>r[/>FnDwG3 >o}[z|#8*HKf{AFW');
define('SECURE_AUTH_KEY',  'qL<-@I%5q;XQ[>`A@/8uSBaT|~995lNH*]eCz.N]*#*XgJ`#N[  jp=<3X9o8v#%');
define('LOGGED_IN_KEY',    'lCPWVXMQHUA%mLGq_L:Bjt^wb99UBr%VWK6.i0pJ5P;lrd z7D|tQ9}hIQ@.<9VC');
define('NONCE_KEY',        '+CCS~(]DaC_I=9QJL0{ON%NohI(POyRc{r{_.z?bte6C_=y;dvD-P{6t&$9ys>,+');
define('AUTH_SALT',        '@t#R:2`@A]LSWjvg1X@Z#.r#7)&i:X)rs@,l^bgNL!3JTnEFF+CP$Q@1N%_,NZ#P');
define('SECURE_AUTH_SALT', '-)l<&O*9N[npX/~qBO.5Cp[CC@p[m/G,vzLu,OzCKE7DVx6C.`$P;{;T}&_p8Ci+');
define('LOGGED_IN_SALT',   'FaVWF*!>f)C-4wjaG4H[ijXYz?/]|&y:o^SMll%|?wtKaPHeNrV(vtPNMvRe}YF,');
define('NONCE_SALT',       '7{64*)Kimhi2}M=vz(NLzg<b$P-0xnCd]q?O|1x4m4Hx,|78:$tywJi>T`MXU#DE');

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
