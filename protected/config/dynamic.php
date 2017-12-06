<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=localhost;dbname=360mednet',
      'username' => 'root',
      'password' => 'root',
      'charset' => 'utf8',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.gmail.com',
        'username' => 'info.360mednet@gmail.com',
        'password' => 'tcdihuqoovbzgkxm',
        'encryption' => 'tls',
        'port' => '587',
      ),
      'view' => 
      array (
        'theme' => 
        array (
          'name' => '360MedNet',
          'basePath' => '/Applications/MAMP/htdocs/360mednet/themes/360MedNet',
          'publishResources' => false,
        ),
      ),
    ),
    'cache' => 
    array (
      'class' => 'yii\\caching\\FileCache',
      'keyPrefix' => 'humhub',
    ),
    'view' => 
    array (
      'theme' => 
      array (
        'name' => '360MedNet',
        'basePath' => '/Applications/MAMP/htdocs/360mednet/themes/360MedNet',
        'publishResources' => false,
      ),
    ),
    'formatter' => 
    array (
      'defaultTimeZone' => 'Africa/Kampala',
    ),
    'formatterApp' => 
    array (
      'defaultTimeZone' => 'Africa/Kampala',
      'timeZone' => 'Africa/Kampala',
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'localhost',
        'installer_database' => '360mednet',
      ),
    ),
    'config_created_at' => 1512591058,
    'horImageScrollOnMobile' => '1',
    'databaseInstalled' => true,
    'installed' => true,
  ),
  'name' => '360MedNet',
  'language' => 'en',
  'timeZone' => 'Africa/Kampala',
); ?>