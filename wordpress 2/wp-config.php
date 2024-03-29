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
define( 'DB_NAME', 'projetrobert' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '+^{^P4)ugGS1tK@Sz?>2w~yuOAJG<N:+|~LR)/67Fkj%/;f/r+ke,o2X2hm54-_&' );
define( 'SECURE_AUTH_KEY',  ']0ZfAy*_i%VMl;J<P9u>@hMXD/W+CO:MFKN(/^e?_duzZ#+AC MWM,PV]bi~sp}_' );
define( 'LOGGED_IN_KEY',    '!x&b&^j#<y6PQ&0U;qvNI}8~~3jhq-2oScd0Ee@UDwz !v/8iYTuzM|dBp[ayVl~' );
define( 'NONCE_KEY',        't!qprRC4j18h{ZQ+OhlnhLA+qj3~/KH;/qTVyl T@&3g6Ef $N=[~qPQ*E#SF<I6' );
define( 'AUTH_SALT',        '|dZD7e@Ui>21c*<u>w6eHe)K*(Y>N(bHf&@ 7k|S|.Ey}n?oJ7?*+5QIR[Fu 8@,' );
define( 'SECURE_AUTH_SALT', '%Kl<ehl`HGZHF+<P9CU1+ElQ&9VYol3G#pk3)C3uMHqf6Wdy``HtG4d.2{r@5(b}' );
define( 'LOGGED_IN_SALT',   '&-?`py_tG35>~bvZ_n.u#>F6uv*^HH26`h8Ir1V!(c5]{N~pZQsiyXH-?8b!dk6X' );
define( 'NONCE_SALT',       'E.HrtYQX5fz0A0<0,A+L~11NeVRK@:cC&ys`x}eaL22VQ_9y~,f^o{#|Hl;<e3vs' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'PR_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
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
