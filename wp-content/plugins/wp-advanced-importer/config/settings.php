<?php
/******************************
 * filename:    settings.php
 * description: Project settings. 
 *              To edit, change the values on right side of the name-value pairs.
 */
global $wpdb;
DEFINE('WP_DBNAME_XMLIMPORTER', $wpdb->dbname);
DEFINE('WP_DBHOST_XMLIMPORTER', $wpdb->dbhost);
DEFINE('WP_DBUSER_XMLIMPORTER', $wpdb->dbuser);
DEFINE('WP_DBPASSWORD_XMLIMPORTER', $wpdb->dbpassword);

class SkinnySettings { public static $CONFIG = array(


"project name"    => WP_CONST_ADVANCED_XML_IMP_NAME,
"debug"           => false,
"preload model"   => true,  //true = all model classes will be loaded with each request;
                            //false = model classes will be loaded only if explicitly required (use require_once)

"session persistency" => false, //tmp in your project dir must be writeable by the server!
"session timeout" => 1800, //in seconds!

"unauthenticated default module" => "default", //set this to where you want unauthenticated users redirected.
"unauthenticated default action" => "index",

"dbdriver"        => "mysql",
"dbname"          => "WP_DBNAME_XMLIMPORTER",
"dbhost"          => "WP_DBHOST_XMLIMPORTER",
"dbuser"          => "WP_DBUSER_XMLIMPORTER",
"dbpassword"      => "WP_DBPASSWORD_XMLIMPORTER",

// To use multiple databases, keep the code above with default values
// and add a new setting like this:
//   "dbs" => array(
//                   "database1"=> array(
//                                       "dbdriver"   => "mysql",
//                                       "dbname"     => "db",
//                                       "dbhost"     => "127.0.0.1",
//                                       "dbuser"     => "user",
//                                       "dbpassword" => "password",
//                                      ),
//                   "database2"=> array(
//                                       "dbdriver"   => "mysql",
//                                       "dbname"     => "db",
//                                       "dbhost"     => "127.0.0.1",
//                                       "dbuser"     => "user",
//                                       "dbpassword" => "password",
//                                      ),
//                ),
//
 

);}
    
