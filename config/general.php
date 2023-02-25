<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\helpers\App;

$isDev = App::env('ENVIRONMENT') === 'dev';
$isProd = App::env('ENVIRONMENT') === 'production';

return [
  // Global settings
  '*' => [
      // Default Week Start Day (0 = Sunday, 1 = Monday...)
      'defaultWeekStartDay' => 1,

      // Whether generated URLs should omit "index.php"
      'omitScriptNameInUrls' => true,

      // The secure key Craft will use for hashing and encrypting data
      'securityKey' => App::env('CRAFT_SECURITY_KEY'),

      // Default config
      'cpTrigger' => 'admin',
      'devMode' => true,
      'disallowRobots' => true,
      'allowAdminChanges' => true,
      'enableGql' => false,

      // Base site URL
      'addTrailingSlashesToUrls' => true,
      'slugWordSeparator' => '-',
      'privateTemplateTrigger' => "_",
      'allowSimilarTags' => false,
      // 'disableDevmodeMinifying' => true,
      'cacheDuration' => false,
      'setPasswordPath' => 'setpassword',
      'setPasswordSuccessPath' => 'login',
      'useEmailAsUsername' => true, // simplify user management

      // Aliases
      'aliases' => array(
        'environment' => App::env('ENVIRONMENT'),
        'basePath' => App::env('SITE_PATH'),
        'baseUrl'  => App::env('DEFAULT_SITE_URL'),
        // '@rootUrl' =>App::env('DEFAULT_SITE_URL'),
        // '@rootPath' =>App::env('SITE_PATH'),
        // '@web' => getenv('CRAFT_SITE_URL'), > ?
        // '@webroot' => dirname(__DIR__) . '/web/', > ?
    ),
  ],

  // Dev environment settings
  'dev' => [
      // Dev Mode (see https://craftcms.com/guides/what-dev-mode-does)
      'devMode' => true,
      'allowAdminChanges' => true,
      'disallowRobots' => true,
  ],

  // Staging environment settings
  // 'staging' => [
  //     'devMode' => false,
  //     'allowAdminChanges' => false,
  // ],

  // Production environment settings
  'production' => [
      'devMode' => false,
      'allowAdminChanges' => false,
      'disallowRobots' => false,
      'cpTrigger' => 'NIMDA',
  ],
];
