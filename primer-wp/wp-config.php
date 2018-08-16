<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'primer-wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'TnlK@5|_ko;h{ &4Qf^._L zRJpaDGJzSoLe-i|tC)*c@Ne&5?d|R<xD}S7a$~K;');
define('SECURE_AUTH_KEY', '%b5@T pLh$Xy<{.nnh{o9bgxZ^dwEY<7MO%H$jhlQ8}jxdBgtD([#{u8$@d=ztDo');
define('LOGGED_IN_KEY', '6Z/*m~Gwzy#+-G,iL#+Izegov[qJ:0<:kNMmx>R25O(Dlu{uPp^3vkXd9YhdY?db');
define('NONCE_KEY', 'B%L0hZ[&U_^pbamwr.{Un]RSAw{iX+a9(RLbqg_4>a6WF&?s6E<E+1y7/r2nJ]R%');
define('AUTH_SALT', ' V{78|BSyt}N}.{g+Cc=:eEUDr)s+Q$K38z7HjFB5FmVWH@9h-Ft<aZj/bz$3PoG');
define('SECURE_AUTH_SALT', 'Z:G(=T*lZA~KbPE/=QXx*Bnm4DFO9sJ5.DQQlGnfN21,Ntvy8$fT=<zxWR!}2:AG');
define('LOGGED_IN_SALT', '^_azPF 119;R2(v;p>yZ#^=U=pR##NA(`B{G($]wqXXZ3pt52t;!.L|^rvoK1 :Z');
define('NONCE_SALT', 'Fmx{PV)qACf$I4bU>1k<~;pL{d-wJ9`F_LHs`GcLD)YKzKl3sSCE5m+z1A(m^zJ?');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

