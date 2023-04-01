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
define( 'DB_NAME', 'examen_2023_alshahoud' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'manager' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'MotdepasseduGestionnaire_2023' );

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
define( 'AUTH_KEY',         'er?=;8&6e;WU9_:>1y-Mn4}qRU8Y>nGyNO?ak P&s3]k4C4^Z?tn1)a&MlJD1=v8' );
define( 'SECURE_AUTH_KEY',  ':_Jux95/0X=WYG1OT{$vKdI~]|Q:$$y0:@+a@vd(9pA=-`NR:GXhndq,IDPSf:x-' );
define( 'LOGGED_IN_KEY',    'Hkw3U3BYqGrP>Gy^TU7P*w/If[l7U?@A;[^$9#M5zC++mOhkfjpcV@A/P# !^*)N' );
define( 'NONCE_KEY',        'E2RTsub;J_zqpb%xS ]a]k|q4~{h?w<B7d(Ay(auS9MUH7(dJea9SNKt$P89J.M ' );
define( 'AUTH_SALT',        'HH%=53v*B}Yq/rJ=Z)v5%1:p`fd#!@UmpEvQSRT`JTU->[G|<!,AJDVCGro1iKBT' );
define( 'SECURE_AUTH_SALT', ':pK]t;E5_(bzIeS-@*hFRcldBAEk[e1]|RCBDT@:,!WEGj=vA#(w;eXrlep97KE1' );
define( 'LOGGED_IN_SALT',   'snDi|%xssJEMN0}-W!33d1Jr3hTB>Kk0zND*uNF?@u$D=3w*M<355&b7m9puPQ` ' );
define( 'NONCE_SALT',       'f4-M?C;D(Q*=2<qS5Z9Rl9,ygcRxeW?7gM9.q0ajxu%W.j[8L%IcTY|}21N=@iz:' );
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
