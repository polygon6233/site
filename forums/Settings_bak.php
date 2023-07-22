<?php

########## Maintenance ##########
/**
 * The maintenance "mode"
 * Set to 1 to enable Maintenance Mode, 2 to make the forum untouchable. (you'll have to make it 0 again manually!)
 * 0 is default and disables maintenance mode.
 * @var int 0, 1, 2
 * @global int $maintenance
 */
$maintenance = 0;

/**
 * Title for the Maintenance Mode message.
 * @var string
 * @global string $mtitle
 */
$mtitle = 'Maintenance Mode';

/**
 * Description of why the forum is in maintenance mode.
 * @var string
 * @global string $mmessage
 */
$mmessage = 'The Forum is currently under Maintenance Mode. Please be patient.&lt;br /&gt;We will post news and possible Changelogs once the Forum is back online.&lt;br /&gt;&lt;br /&gt;Thank you.';

########## Forum Info ##########
/**
 * The name of your forum.
 * @var string
 */
$mbname = 'DripBot Community';

/**
 * The default language file set for the forum.
 * @var string
 */
$language = '';

/**
 * URL to your forum's folder. (without the trailing /!)
 * @var string
 */
$boardurl = 'https://dripbot.tk/forums';

/**
 * Email address to send emails from. (like noreply@yourdomain.com.)
 * @var string
 */
$webmaster_email = 'dripstone@gmx.net';

/**
 * Name of the cookie to set for authentication.
 * @var string
 */
$cookiename = 'ElkArteCookie957';

########## Database Info ##########
/**
 * The database type
 * Default options: mysql, sqlite, postgresql
 * @var string
 */
$db_type = 'mysqli';

/**
 * The server to connect to (or a Unix socket)
 * @var string
 */
$db_server = 'localhost';

/**
 * The port for the database server
 * @var string
 */
$db_port = '';

/**
 * The database name
 * @var string
 */
$db_name = 'dripstone_forum';

/**
 * Database username
 * @var string
 */
$db_user = 'dripstone_forum';

/**
 * Database password
 * @var string
 */
$db_passwd = 'Forum.7554';

/**
 * Database user for when connecting with SSI
 * @var string
 */
$ssi_db_user = '';

/**
 * Database password for when connecting with SSI
 * @var string
 */
$ssi_db_passwd = '';

/**
 * A prefix to put in front of your table names.
 * This helps to prevent conflicts
 * @var string
 */
$db_prefix = 'dripstone_forum_';

/**
 * Use a persistent database connection
 * @var int|bool
 */
$db_persist = 0;

/**
 *
 * @var int|bool
 */
$db_error_send = 0;

########## Cache Info ##########
/**
 * Select a cache system. You want to leave this up to the cache area of the admin panel for
 * proper detection of apc, eaccelerator, memcache, mmcache, output_cache, xcache or filesystem-based
 * (you can add more with a mod).
 * @var string
 */
$cache_accelerator = '';

/**
 * The level at which you would like to cache. Between 0 (off) through 3 (cache a lot).
 * @var int
 */
$cache_enable = 0;

/**
 * This is only used for memcache / memcached. Should be a string of 'server:port,server:port'
 * @var array
 */
$cache_memcached = '';

/**
 * This is only for the 'filebased' cache system. It is the path to the cache directory.
 * It is also recommended that you place this in /tmp/ if you are going to use this.
 * @var string
 */
$cachedir = '/home/dripstone/domains/dripbot.tk/public_html/forums/cache';

########## Directories/Files ##########
# Note: These directories do not have to be changed unless you move things.
/**
 * The absolute path to the forum's folder. (not just '.'!)
 * @var string
 */
$boarddir = '/home/dripstone/domains/dripbot.tk/public_html/forums';

/**
 * Path to the sources directory.
 * @var string
 */
$sourcedir = '/home/dripstone/domains/dripbot.tk/public_html/forums/sources';

/**
 * Path to the external resources directory.
 * @var string
 */
$extdir = '/home/dripstone/domains/dripbot.tk/public_html/forums/sources/ext';

/**
 * Path to the languages directory.
 * @var string
 */
$languagedir = __DIR__ . '/sources/ElkArte/Languages';

$db_character_set = 'utf8';

$install_time = '1660309258';

$upgradeData = 'eyJpZCI6IjEiLCJuYW1lIjoicG9seWdvbl9hZG1pbiIsInBhc3MiOjMxNjgwLCJzdGFydGVkIjoxNjYwMzA5Mjg4LCJ1cGRhdGVkIjoxNjYwMzEwMzc5LCJ2ZXJzaW9uIjoiMi4wIGRldiIsInN0ZXAiOjQsInN1YnN0ZXAiOjAsIm1haW4iOiIyIn0=';
$url_format = 'standard';