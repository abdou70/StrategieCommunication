<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );
define ('FS_METHOD','direct');
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pvQ~F}tT]GV#3Z])-KuX7&^f//?MG4>mEb5R[m&)#O]a/;U/otn5K}hJu)aDUH_,' );
define( 'SECURE_AUTH_KEY',  'tLG*93J1HV<|G&n_);cH6vs!AFe %[CLd$}.%2m~b%u-UR(WW1vYGs=x^K]o>Fy8' );
define( 'LOGGED_IN_KEY',    'm&}kI_|Yph`~I%xL.c9jy bjo!^v;MNt#2v&6;X1wYz4/^JBLAMM(EKCG,g*S0!E' );
define( 'NONCE_KEY',        'U4Utmc7#T.U}3q)u?9QM4 lzDw2d]$v-_:dh;5QK`RYd=.Y&y01hWY?gb*ci[{Wp' );
define( 'AUTH_SALT',        'H^!e3N=NMplwKI-y{HHrz>Yh1WFyl^=[{c$(Z,rT.dgNNlA+q7f2J;Q=QydaSp%C' );
define( 'SECURE_AUTH_SALT', '8#,.MuOc0i_mt[O,Q^3&&=J{*l^dad5Crs$8ZIc/CQ=QCc Z8*)C4lnLv,!XVX8h' );
define( 'LOGGED_IN_SALT',   '`8j}u_&C5;-5/`yYeyp}%%{#$t;`~W*Fhvd)pY*j8^9OCE3Y<AsgqKci=*M`))Bs' );
define( 'NONCE_SALT',       '%g!%1w=fQeF];P5NG6B[!4ruNr>8w6wl#}sq8`d;(T{uXQ,(ktEAp?tuYVQqM+c_' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
