<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'evaluationwordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '0000' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9&Y8_EW&m?,l>/E!+y/6Afv-,,t]KM!-{SC%rIi7HJq*`yR(MTK:kdr-&uUWa<Vf' );
define( 'SECURE_AUTH_KEY',  'O#s/1OTQl1qKYy!q5b-no|>xM)#PuzG-:<(voGbuAHnNWeylz!6DTFB9NN><nTp:' );
define( 'LOGGED_IN_KEY',    'P Ob)aiD%gWz03SDB]w_,6;+Vp~:9;GL:8*M,FjmoTtS0(?$*e|4_MjVCwXO]e+,' );
define( 'NONCE_KEY',        '*}=ca^d+FX2M@R6j7+.3Ay_6u4k_0Rno{cqT&c^y{ qI7+_PgCCSz 3/G=L!k!aP' );
define( 'AUTH_SALT',        '++<*uPSL]0vy>!d.8y6x;H_[_{pZHN..1z.kwjb61CmKHx;X^ZRq9r^bQ|p m{*{' );
define( 'SECURE_AUTH_SALT', '4}`]]nn-J/&-1q.$0mW TcHG2{Mmj*3%3+k6s~`jcU84EPAI2J-3XfKri{m6|=@a' );
define( 'LOGGED_IN_SALT',   'YaM%30P~Eyk5)8++S$-,Z:Q2^_HH(ERYGd<o=TXr!yaQE43Bt5e}GFas](bptg*J' );
define( 'NONCE_SALT',       '3Fdh::+)=BMkf+$(2V+_QXc/MTx4K:M8QD0d!]+lN6g|vlx5}=5faam4eL(Flck|' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
