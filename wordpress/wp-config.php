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
define('DB_NAME', 'mi_primer_tema');

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
define('AUTH_KEY', 'x{C )nt+2pu)A*O =s~JSfwx{O?+vz>~)nwN%Q<aKClGB^pRPX45&5^>#So.BMs8');
define('SECURE_AUTH_KEY', ':yR0E)a1Hnqk*?fztl*l^|j:AyQCMo/!8a*+9lwtdFu=/2mhZ#bo>!pKrmqF]Ra|');
define('LOGGED_IN_KEY', 'y9;_Wnlz,kP9CH87b0HIqfR`AQ5,x<tqQYGe&5#J]=TzQ-jYJR/i5fnfM_R9#vrB');
define('NONCE_KEY', '1x(UG. cCk/y@`ma,]P)K}r8t(ou:~`{./4cKaoz#lOyWdC#p~C|gpV!r4+7MM57');
define('AUTH_SALT', 'b*:6LqL AnH7+I+xqtnPXcujDFCH56U&7}Pa$,t[6aYS%,@>Q~703^KJ_&$wMLMa');
define('SECURE_AUTH_SALT', '!_IMRic 9FR(-44H/>A= Ql-m`sT-T(>|dkkB%@QSZS6IsmR)[VTMz$5/FyVIN!C');
define('LOGGED_IN_SALT', 'x]PKV1!4OOyA0KU0}Ovc*xrzKLEFi*<b=lo+RRCJ2.KEVuX*au&MnBR] o+rQw[7');
define('NONCE_SALT', 'Qq<=Bmgs+k8y4KImv8yJ_ m=V8_8fto@0 hk9yLKf@+0U/TX1b1d<T`+ZRQ&x._7');

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
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

