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
define( 'DB_NAME', 'justinpageaud_cours_wordpress_2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', '294538' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Cours-formation-wordpress-module-2!!' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mysql-justinpageaud.alwaysdata.net' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'i=cIyG|;10$&YvKwWA!QT<;VpYEl8=Oyc4gFO#;=Q}?ci2C8L-U:}%bq?EhJ6c@|');
define('SECURE_AUTH_KEY',  'ty<m^-w3)r|S fK2wR]XK:b2Upy6lA]0>t||k{{QB-j-uM?8~>+|Q*ZeF{4Z+O#5');
define('LOGGED_IN_KEY',    'lPE>wz#x--Zstuh=axyUV%q|X.tTw+ZJz_s|F&|g]>M9Eve=:,0u|^5CNE3AFlwM');
define('NONCE_KEY',        'tqjn0ReAVH09+|.Hx|Na2>e,l-uJ#jZ;0l2QSL%-@B#Epa8ug!41sdHXr%>Hq|cd');
define('AUTH_SALT',        ']Q-r`+1*j>+4ms:FA]=2n7,{V1GJpDRu<~EEmFkwqAlI6~&t_W CkMTb|Vv`xmwt');
define('SECURE_AUTH_SALT', '0y!+Q4M<Y>G&b5DxT&?#^2(lkv4>N[wC/WCB;P(UX)GxVQI?3}74sawN-A6V!km~');
define('LOGGED_IN_SALT',   'Xqlsfem/<B`skTT42:W5 *D|y,DQ$A@v(wQCdFObg~3SDxEJJUgOE-n.oukrn#:d');
define('NONCE_SALT',       'an8g$[tHh!{=l&Te^&5b:Q>Np4b>,,@7[_v]KO-!kLLi>X_A=EVA3Z^E9GImMk|`');
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
