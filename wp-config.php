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
define( 'DB_NAME', 'test-wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'cMFEuAE,9>#1GL6=[+# |20$qWOXY+ G1-4FL0mhV0F!0:v+C],>SpqGP@ q.n#j' );
define( 'SECURE_AUTH_KEY',  'DT7egW.ftur:#dDtq%/Wl5|4Uiu#/_XywcpaWl-XzFbi1abeDL71T,V>N.]a=|hD' );
define( 'LOGGED_IN_KEY',    'rcBFCpy!]F=TTZxG=P9#jr0F6N(_CTT#r)+2F#nD1Vm_:xelXYbcPdmldb$%(uUs' );
define( 'NONCE_KEY',        '+v,y3;LbePP0vXKE(uF!`[TKRj{94D8qdf&0>9AC|v`(w[dF,_pxAkfbF{l#u88L' );
define( 'AUTH_SALT',        '=~E)f*lLkh< cI}tH__ Ah$q?ljS0(&15Sltp[_*x[FTx)vL n)gJ_aX,dtpd70t' );
define( 'SECURE_AUTH_SALT', ' _u3GkzV^mw<hIl7[#ab_5%i$b6q`k[cN-WYyt}FI6cb/jc;o(+S~mI:u;O4W_PU' );
define( 'LOGGED_IN_SALT',   '[8H:}?XMKN;fuR7,F67LN3wy81LZcJ<JkEX/}U4LYD:#FODqDpuD0GLhW[:+WFLO' );
define( 'NONCE_SALT',       '4)U,LveT;}+9OgeZhUP5r|VX/ZWUa|Oi}wp,9V}pmQs^tTw6x#nh;dtah!2pV.BP' );
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
