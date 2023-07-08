<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link https://wordpress.org/support/article/editing-wp-config-php/ Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'bd_ptrainer' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '6ql7@IejG9=U2)[h77yurU9rCbPpuq>%wZbR6hHk!-T{Y+i@~q]7484frCWy3*)W' );
define( 'SECURE_AUTH_KEY', '<Ulv0h<b2jv7k:ac?!fV05.pn0QYE/x+lw)u-gWJH5pW$ybPyRYbE<)fX@V0|n-y' );
define( 'LOGGED_IN_KEY', '#1G_d:DrS[b&8GINx1TeC@8UcWI`b|Lj+`DV-WFk*2#p/AMCjjrykLtNZv%gSY)B' );
define( 'NONCE_KEY', 'CM+B4n1hD,Xc;WHRj+uuR}I,SU0n}0>F6{qH>6N<`t{k)6!`;!O>nEcoVtl;o_Ym' );
define( 'AUTH_SALT', 'U(F_8^Bl+5b|8 7N:u^dO3bDm@|y3 h1NFBiadSBR>+|3 -Pp x0(qu QaVlU%[`' );
define( 'SECURE_AUTH_SALT', 'U[I:1.gE.|s)k:*#GFu[,/K)JR/r8y{NfN/hVDa-d _j!=oTZD&(PtxnAk2J<y^n' );
define( 'LOGGED_IN_SALT', 'O&JThS&LJX6raN[; *T_t|-a6G6Y2npvA0SK:XZn<z-=Ym)Lk$DkOJ>8@Ddx:n~[' );
define( 'NONCE_SALT', 'e,+Hc]Nbyjo*]j&;]{PwyX4F3^LH{3z5=,(&qBEFflyY{;u&iYUQ5SQ3C;Bh/0rq' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once ABSPATH . 'wp-settings.php';
