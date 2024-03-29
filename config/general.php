<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

return [
    // Global settings
    '*' => [
        // Default Week Start Day (0 = Sunday, 1 = Monday...)
        'defaultWeekStartDay' => 1,

        // Whether generated URLs should omit "index.php"
        'omitScriptNameInUrls' => true,

        // Control Panel trigger word
        'cpTrigger' => 'admin',

        // The secure key Craft will use for hashing and encrypting data
        'securityKey' => getenv('SECURITY_KEY'),

        // Whether to save the project config out to config/project.yaml
        // (see https://docs.craftcms.com/v3/project-config.html)
        'useProjectConfigFile' => true,

        'limitAutoSlugsToAscii' => true,
        'errorTemplatePrefix' => '_errors/',

        //'siteUrl' => getenv('CRAFTENV_SITE_URL'),

        // Staging environment settings
        'staging' => [
            // Set this to `false` to prevent administrative changes from being made on staging
            'allowAdminChanges' => true,
        ],

        // Production environment settings
        'production' => [
            // Set this to `false` to prevent administrative changes from being made on production
            'allowAdminChanges' => false,
        ],
    ],

    'craftcms.local' => [
        'isSystemLive' => true,
        'devMode' => true,
        'enableTemplateCaching' => false,
        'allowUpdates' => true,
        'disableDevmodeMinifying' => true,
    ],

    'prestaclub.ru' => [
        'isSystemLive' => true,
        'devMode' => false,
        'enableTemplateCaching' => false,
        'allowUpdates' => false,
    ],
];
