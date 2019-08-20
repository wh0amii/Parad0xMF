<?php
/**
* La configuration de base de votre installation WordPress.
*
* Ce fichier contient les réglages de configuration suivants : réglages MySQL,
* préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
* Vous pouvez en savoir plus à leur sujet en allant sur 
* {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
* wp-config.php}. C'est votre hébergeur qui doit vous donner vos
* codes MySQL.
*
* Ce fichier est utilisé par le script de création de wp-config.php pendant
* le processus d'installation. Vous n'avez pas à utiliser le site web, vous
* pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
* valeurs.
*
* @package WordPress
*/
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'tunisi90_1');
/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'tunisi90_2');
/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'midou2014');
/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');
/** Type de collation de la base de données. 
* N'y touchez que si vous savez ce que vous faites. 
*/
define('DB_COLLATE', '');
/**#@+
* Clefs uniques d'authentification et salage.
*
* Remplacez les valeurs par défaut par des phrases uniques !
* Vous pouvez générer des phrases aléatoires en utilisant 
* {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
* Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
* Cela forcera également tous les utilisateurs à se reconnecter.
*
* @since 2.6.0
*/
define('AUTH_KEY',         '5:q!k4rS*L]PHD.sQuK12M+3=*J%;Ew@BO(6EZs.2A@;X5q-P0N5s9MpsB`VvoFt');
define('SECURE_AUTH_KEY',  'D+U|Q;P~k0S12.dBB~kSrjU*=(u3$;a=6R+sT3>&.]aoRPmv4]vu)#)LQy6UM~i#');
define('LOGGED_IN_KEY',    'D+u)r{r(}(ys|D}5I^<(~;z;15sIIa8xXei+L^~7.bP&oqp@-4c?/:c:a5Z<5uy4');
define('NONCE_KEY',        '~<L`#`{)9HGZ)Z)3^y_VfED,oEy7YbznK@)1]m6NSlO1[fH>E>ug;,gA^-LK`15^');
define('AUTH_SALT',        ':U!]KK@G2hNqW#1h$48EI)ULU_R?EQnf(1K[i7XWjVY0k91u=Zm-yM*~jwq9z~`p');
define('SECURE_AUTH_SALT', '6nOCotE edv|AKzu:7.i4:!p#WjyU4E_aRi@}C]_?BK|tz7O*;14}4ZPvm4tnKO4');
define('LOGGED_IN_SALT',   'LwmnD#Qi[rc0AHb2PWlLjV+6o>K|scd(?$p=9-mvoRN;{1Wq;|LNpe)PDkp|t+cI');
define('NONCE_SALT',       'xPxF`SxQL7YZBMOs zN+{pQ1UFq#wKPoW;4eku VpBg01Sf qOt)oB0 wq)_DPl9');
/**#@-*/
/**
* Préfixe de base de données pour les tables de WordPress.
*
* Vous pouvez installer plusieurs WordPress sur une seule base de données
* si vous leur donnez chacune un préfixe unique. 
* N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
*/
$table_prefix  = 'en_';
/**
* Langue de localisation de WordPress, par défaut en Anglais.
*
* Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
* au langage choisi doit être installé dans le dossier wp-content/languages.
* Par exemple, pour mettre en place une traduction française, mettez le fichier
* fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
*/
define('WPLANG', 'fr_FR');
/** 
* Pour les développeurs : le mode deboguage de WordPress.
* 
* En passant la valeur suivante à "true", vous activez l'affichage des
* notifications d'erreurs pendant votre essais.
* Il est fortemment recommandé que les développeurs d'extensions et
* de thèmes se servent de WP_DEBUG dans leur environnement de 
* développement.
*/ 
define('WP_DEBUG', false); 
/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */
/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');
/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');