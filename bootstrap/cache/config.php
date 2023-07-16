<?php return array (
  'app' => 
  array (
    'name' => 'Snipe-IT',
    'env' => 'production',
    'max_results' => '500',
    'debug' => false,
    'warn_debug' => true,
    'url' => 'http://localhost',
    'timezone' => 'UTC',
    'locales' => 'en',
    'fallback_locale' => 'en',
    'key' => '5a4447831d1461efe73f87f1d3ce2ba1',
    'cipher' => 'AES-256-CBC',
    'log' => 'single',
    'log_max_files' => '10',
    'log_level' => 'error',
    'private_uploads' => 'D:\\asset.binapertiwi.co.id\\storage/private_uploads',
    'allow_iframing' => false,
    'enable_hsts' => false,
    'referrer_policy' => 'same-origin',
    'enable_csp' => false,
    'lock_passwords' => false,
    'min_php' => '7.2.5',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Intervention\\Image\\ImageServiceProvider',
      23 => 'Collective\\Html\\HtmlServiceProvider',
      24 => 'Spatie\\Backup\\BackupServiceProvider',
      25 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
      26 => 'PragmaRX\\Google2FALaravel\\ServiceProvider',
      27 => 'Laravel\\Passport\\PassportServiceProvider',
      28 => 'Laravel\\Tinker\\TinkerServiceProvider',
      29 => 'Unicodeveloper\\DumbPassword\\DumbPasswordServiceProvider',
      30 => 'Tightenco\\Ziggy\\ZiggyServiceProvider',
      31 => 'Eduardokum\\LaravelMailAutoEmbed\\ServiceProvider',
      32 => 'App\\Providers\\AppServiceProvider',
      33 => 'App\\Providers\\AuthServiceProvider',
      34 => 'App\\Providers\\EventServiceProvider',
      35 => 'App\\Providers\\RouteServiceProvider',
      36 => 'App\\Providers\\SettingsServiceProvider',
      37 => 'App\\Providers\\ValidationServiceProvider',
      38 => 'App\\Providers\\MacroServiceProvider',
      39 => 'App\\Providers\\LdapServiceProvider',
      40 => 'App\\Providers\\SamlServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
      'Google2FA' => 'PragmaRX\\Google2FALaravel\\Facade',
      'Image' => 'Intervention\\Image\\ImageServiceProvider',
      'Carbon' => 'Carbon\\Carbon',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'passport',
        'provider' => 'users',
        'hash' => false,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'email' => 'auth.emails.password',
        'table' => 'password_resets',
        'expire' => '900',
        'throttle' => 
        array (
          'max_attempts' => '5',
          'lockout_duration' => '60',
        ),
      ),
    ),
    'password_timeout' => 10800,
  ),
  'backup' => 
  array (
    'backup' => 
    array (
      'name' => 'backups',
      'source' => 
      array (
        'files' => 
        array (
          'include' => 
          array (
            0 => 'D:\\asset.binapertiwi.co.id\\public/uploads',
            1 => 'D:\\asset.binapertiwi.co.id\\storage/private_uploads',
            2 => 'D:\\asset.binapertiwi.co.id\\storage/oauth-private.key',
            3 => 'D:\\asset.binapertiwi.co.id\\storage/oauth-public.key',
            4 => 'D:\\asset.binapertiwi.co.id\\.env',
          ),
          'exclude' => 
          array (
            0 => 'D:\\asset.binapertiwi.co.id\\vendor',
            1 => 'D:\\asset.binapertiwi.co.id\\config',
            2 => 'D:\\asset.binapertiwi.co.id\\node_modules',
          ),
          'follow_links' => false,
          'ignore_unreadable_directories' => false,
        ),
        'databases' => 
        array (
          0 => 'mysql',
        ),
      ),
      'database_dump_compressor' => NULL,
      'destination' => 
      array (
        'filename_prefix' => 'snipe-it-',
        'disks' => 
        array (
          0 => 'backup',
        ),
      ),
      'temporary_directory' => 'D:\\asset.binapertiwi.co.id\\storage\\app/backup-temp',
      'encryption' => NULL,
    ),
    'notifications' => 
    array (
      'notifications' => 
      array (
        'Spatie\\Backup\\Notifications\\Notifications\\BackupHasFailed' => 
        array (
          0 => NULL,
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFound' => 
        array (
          0 => NULL,
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailed' => 
        array (
          0 => NULL,
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\BackupWasSuccessful' => 
        array (
          0 => NULL,
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\HealthyBackupWasFound' => 
        array (
          0 => NULL,
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessful' => 
        array (
          0 => NULL,
        ),
      ),
      'notifiable' => 'Spatie\\Backup\\Notifications\\Notifiable',
      'mail' => 
      array (
        'to' => NULL,
      ),
      'slack' => 
      array (
        'webhook_url' => '',
        'channel' => NULL,
        'username' => NULL,
        'icon' => NULL,
      ),
    ),
    'monitor_backups' => 
    array (
      0 => 
      array (
        'name' => 'Snipe-IT',
        'disks' => 
        array (
          0 => 'local',
        ),
        'health_checks' => 
        array (
          'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays' => 1,
          'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumStorageInMegabytes' => 5000,
        ),
      ),
    ),
    'cleanup' => 
    array (
      'strategy' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
      'default_strategy' => 
      array (
        'keep_all_backups_for_days' => 7,
        'keep_daily_backups_for_days' => 16,
        'keep_weekly_backups_for_weeks' => 8,
        'keep_monthly_backups_for_months' => 4,
        'keep_yearly_backups_for_years' => 2,
        'delete_oldest_backups_when_using_more_megabytes_than' => 5000,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'pusher',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'D:\\asset.binapertiwi.co.id\\storage\\framework/cache',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'servers' => 
        array (
          0 => 
          array (
            'host' => NULL,
            'port' => NULL,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'snipeit',
  ),
  'compile' => 
  array (
    'files' => 
    array (
    ),
    'providers' => 
    array (
    ),
  ),
  'cors' => 
  array (
    'supportsCredentials' => false,
    'allowedOrigins' => 
    array (
    ),
    'allowedOriginsPatterns' => 
    array (
    ),
    'allowedHeaders' => 
    array (
      0 => '*',
    ),
    'allowedMethods' => 
    array (
      0 => 'GET',
      1 => 'POST',
      2 => 'PUT',
      3 => 'PATCH',
      4 => 'DELETE',
    ),
    'exposedHeaders' => 
    array (
    ),
    'maxAge' => 0,
  ),
  'database' => 
  array (
    'fetch' => 8,
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'D:\\asset.binapertiwi.co.id\\database\\database.sqlite',
        'prefix' => '',
      ),
      'sqlite_testing' => 
      array (
        'driver' => 'sqlite',
        'database' => ':memory:',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'binaper1_assetbp',
        'username' => 'root',
        'password' => NULL,
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => 'stet_',
        'strict' => false,
        'engine' => 'InnoDB',
        'unix_socket' => '',
        'dump' => 
        array (
          'dump_binary_path' => '/usr/bin',
          'use_single_transaction' => false,
          'timeout' => 300,
        ),
        'dump_command_timeout' => 300,
        'dump_using_single_transaction' => true,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'database' => 'binaper1_assetbp',
        'username' => 'root',
        'password' => NULL,
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '127.0.0.1',
        'database' => 'binaper1_assetbp',
        'username' => 'root',
        'password' => NULL,
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'cluster' => false,
      'default' => 
      array (
        'host' => NULL,
        'password' => NULL,
        'port' => NULL,
        'database' => 0,
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => 'D:\\asset.binapertiwi.co.id\\storage/debugbar',
      'connection' => NULL,
    ),
    'editor' => 'phpstorm',
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => true,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'laravel' => true,
      'events' => true,
      'default_request' => false,
      'symfony_request' => true,
      'mail' => true,
      'logs' => true,
      'files' => true,
      'config' => false,
      'auth' => true,
      'gate' => true,
      'session' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => false,
      ),
      'db' => 
      array (
        'with_params' => true,
        'timeline' => true,
        'backtrace' => true,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => true,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
    'theme' => 'auto',
    'debug_backtrace_limit' => 50,
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\asset.binapertiwi.co.id\\storage',
      ),
      'local_public' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\asset.binapertiwi.co.id\\public\\uploads',
        'url' => 'http://localhost/uploads',
        'visibility' => 'public',
      ),
      's3_public' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'root' => NULL,
        'visibility' => 'public',
      ),
      's3_private' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'root' => NULL,
        'visibility' => 'private',
      ),
      'rackspace' => 
      array (
        'driver' => 'rackspace',
        'username' => NULL,
        'key' => NULL,
        'container' => NULL,
        'endpoint' => 'https://identity.api.rackspacecloud.com/v2.0/',
        'region' => NULL,
        'url_type' => NULL,
      ),
      'backup' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\asset.binapertiwi.co.id\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\asset.binapertiwi.co.id\\public\\uploads',
        'url' => 'http://localhost/uploads',
        'visibility' => 'public',
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'D:\\asset.binapertiwi.co.id\\storage\\logs/laravel.log',
        'level' => 'error',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'D:\\asset.binapertiwi.co.id\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => '10',
      ),
      'rollbar' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Rollbar\\Laravel\\MonologHandler',
        'access_token' => NULL,
        'level' => 'debug',
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'stdout' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'with' => 
        array (
          'stream' => 'php://stdout',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'error',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'error',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'mail.binapertiwi.co.id',
    'port' => '465',
    'from' => 
    array (
      'address' => 'admin@asset.binapertiwi.co.id',
      'name' => 'Admin Asset Bina Pertiwi',
    ),
    'reply_to' => 
    array (
      'address' => 'yandih.id@gmail.com',
      'name' => 'Admin Asset Bina Pertiwi',
    ),
    'encryption' => 'ssl',
    'username' => 'bpdigital@binapertiwi.co.id',
    'password' => 'P@ssw0rdKu!!',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'D:\\asset.binapertiwi.co.id\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'mail-auto-embed' => 
  array (
    'enabled' => true,
    'method' => 'attachment',
  ),
  'passport' => 
  array (
    'private_key' => NULL,
    'public_key' => NULL,
    'client_uuids' => false,
    'personal_access_client' => 
    array (
      'id' => NULL,
      'secret' => NULL,
    ),
    'storage' => 
    array (
      'database' => 
      array (
        'connection' => 'mysql',
      ),
    ),
    'expiration_years' => '15',
  ),
  'permissions' => 
  array (
    'Global' => 
    array (
      0 => 
      array (
        'permission' => 'superuser',
        'label' => 'Super User',
        'note' => 'Determines whether the user has full access to all aspects of the admin. This setting overrides any more specific permissions throughout the system. ',
        'display' => true,
      ),
    ),
    'Admin' => 
    array (
      0 => 
      array (
        'permission' => 'admin',
        'label' => '',
        'note' => 'Determines whether the user has access to most aspects of the admin. ',
        'display' => true,
      ),
    ),
    'CSV Import' => 
    array (
      0 => 
      array (
        'permission' => 'import',
        'label' => '',
        'note' => 'This will allow users to import even if access to users, assets, etc is denied elsewhere.',
        'display' => true,
      ),
    ),
    'Reports' => 
    array (
      0 => 
      array (
        'permission' => 'reports.view',
        'label' => 'View',
        'note' => 'Determines whether the user has the ability to view reports.',
        'display' => true,
      ),
    ),
    'Assets' => 
    array (
      0 => 
      array (
        'permission' => 'assets.view',
        'label' => 'View ',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'assets.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'assets.edit',
        'label' => 'Edit  ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'assets.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
      4 => 
      array (
        'permission' => 'assets.checkout',
        'label' => 'Checkout ',
        'note' => '',
        'display' => false,
      ),
      5 => 
      array (
        'permission' => 'assets.checkin',
        'label' => 'Checkin ',
        'note' => '',
        'display' => true,
      ),
      6 => 
      array (
        'permission' => 'assets.checkout',
        'label' => 'Checkout ',
        'note' => '',
        'display' => true,
      ),
      7 => 
      array (
        'permission' => 'assets.audit',
        'label' => 'Audit ',
        'note' => 'Allows the user to mark an asset as physically inventoried.',
        'display' => true,
      ),
      8 => 
      array (
        'permission' => 'assets.view.requestable',
        'label' => 'View Requestable Assets',
        'note' => '',
        'display' => true,
      ),
    ),
    'Accessories' => 
    array (
      0 => 
      array (
        'permission' => 'accessories.view',
        'label' => 'View ',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'accessories.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'accessories.edit',
        'label' => 'Edit ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'accessories.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
      4 => 
      array (
        'permission' => 'accessories.checkout',
        'label' => 'Checkout ',
        'note' => '',
        'display' => true,
      ),
      5 => 
      array (
        'permission' => 'accessories.checkin',
        'label' => 'Checkin ',
        'note' => '',
        'display' => true,
      ),
    ),
    'Consumables' => 
    array (
      0 => 
      array (
        'permission' => 'consumables.view',
        'label' => 'View',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'consumables.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'consumables.edit',
        'label' => 'Edit ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'consumables.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
      4 => 
      array (
        'permission' => 'consumables.checkout',
        'label' => 'Checkout ',
        'note' => '',
        'display' => true,
      ),
    ),
    'Licenses' => 
    array (
      0 => 
      array (
        'permission' => 'licenses.view',
        'label' => 'View',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'licenses.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'licenses.edit',
        'label' => 'Edit ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'licenses.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
      4 => 
      array (
        'permission' => 'licenses.checkout',
        'label' => 'Checkout ',
        'note' => '',
        'display' => true,
      ),
      5 => 
      array (
        'permission' => 'licenses.keys',
        'label' => 'View License Keys',
        'note' => '',
        'display' => true,
      ),
      6 => 
      array (
        'permission' => 'licenses.files',
        'label' => 'View and Modify License Files',
        'note' => '',
        'display' => true,
      ),
    ),
    'Components' => 
    array (
      0 => 
      array (
        'permission' => 'components.view',
        'label' => 'View',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'components.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'components.edit',
        'label' => 'Edit ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'components.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
      4 => 
      array (
        'permission' => 'components.checkout',
        'label' => 'Checkout ',
        'note' => '',
        'display' => true,
      ),
      5 => 
      array (
        'permission' => 'components.checkin',
        'label' => 'Checkin ',
        'note' => '',
        'display' => true,
      ),
    ),
    'Kits' => 
    array (
      0 => 
      array (
        'permission' => 'kits.view',
        'label' => 'View ',
        'note' => 'These are predefined kits that can be used to quickly checkout assets, licenses, etc.',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'kits.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'kits.edit',
        'label' => 'Edit  ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'kits.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
      4 => 
      array (
        'permission' => 'kits.checkout',
        'label' => 'Checkout ',
        'note' => '',
        'display' => true,
      ),
    ),
    'Users' => 
    array (
      0 => 
      array (
        'permission' => 'users.view',
        'label' => 'View ',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'users.create',
        'label' => 'Create Users',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'users.edit',
        'label' => 'Edit Users',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'users.delete',
        'label' => 'Delete Users',
        'note' => '',
        'display' => true,
      ),
    ),
    'Models' => 
    array (
      0 => 
      array (
        'permission' => 'models.view',
        'label' => 'View ',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'models.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'models.edit',
        'label' => 'Edit  ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'models.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
    ),
    'Categories' => 
    array (
      0 => 
      array (
        'permission' => 'categories.view',
        'label' => 'View ',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'categories.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'categories.edit',
        'label' => 'Edit  ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'categories.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
    ),
    'Departments' => 
    array (
      0 => 
      array (
        'permission' => 'departments.view',
        'label' => 'View ',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'departments.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'departments.edit',
        'label' => 'Edit  ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'departments.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
    ),
    'Status Labels' => 
    array (
      0 => 
      array (
        'permission' => 'statuslabels.view',
        'label' => 'View ',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'statuslabels.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'statuslabels.edit',
        'label' => 'Edit  ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'statuslabels.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
    ),
    'Custom Fields' => 
    array (
      0 => 
      array (
        'permission' => 'customfields.view',
        'label' => 'View',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'customfields.create',
        'label' => 'Create',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'customfields.edit',
        'label' => 'Edit',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'customfields.delete',
        'label' => 'Delete',
        'note' => '',
        'display' => true,
      ),
    ),
    'Suppliers' => 
    array (
      0 => 
      array (
        'permission' => 'suppliers.view',
        'label' => 'View ',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'suppliers.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'suppliers.edit',
        'label' => 'Edit  ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'suppliers.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
    ),
    'Manufacturers' => 
    array (
      0 => 
      array (
        'permission' => 'manufacturers.view',
        'label' => 'View ',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'manufacturers.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'manufacturers.edit',
        'label' => 'Edit  ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'manufacturers.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
    ),
    'Depreciations' => 
    array (
      0 => 
      array (
        'permission' => 'depreciations.view',
        'label' => 'View ',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'depreciations.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'depreciations.edit',
        'label' => 'Edit  ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'depreciations.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
    ),
    'Locations' => 
    array (
      0 => 
      array (
        'permission' => 'locations.view',
        'label' => 'View ',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'locations.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'locations.edit',
        'label' => 'Edit  ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'locations.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
    ),
    'Companies' => 
    array (
      0 => 
      array (
        'permission' => 'companies.view',
        'label' => 'View ',
        'note' => '',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'companies.create',
        'label' => 'Create ',
        'note' => '',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'companies.edit',
        'label' => 'Edit  ',
        'note' => '',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'companies.delete',
        'label' => 'Delete ',
        'note' => '',
        'display' => true,
      ),
    ),
    'Self' => 
    array (
      0 => 
      array (
        'permission' => 'self.two_factor',
        'label' => 'Two-Factor Authentication',
        'note' => 'The user may disable/enable two-factor authentication themselves if two-factor is enabled and set to selective.',
        'display' => true,
      ),
      1 => 
      array (
        'permission' => 'self.api',
        'label' => 'Create API Keys',
        'note' => 'The user create personal API keys to utilize the REST API.',
        'display' => true,
      ),
      2 => 
      array (
        'permission' => 'self.edit_location',
        'label' => 'Profile Edit Location',
        'note' => 'The user may update their own location in their profile. Note that this is not affected by any additional Users permissions you grant to this user or group.',
        'display' => true,
      ),
      3 => 
      array (
        'permission' => 'self.checkout_assets',
        'label' => 'Self-Checkout',
        'note' => 'This user may check out assets that are marked for self-checkout.',
        'display' => true,
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'expire' => 60,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'ttr' => 60,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'expire' => 60,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'mandrill' => 
    array (
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
    'stunning' => 
    array (
      'enabled' => false,
      'app_key' => NULL,
      'stripe_id' => NULL,
    ),
    'google' => 
    array (
      'maps_api_key' => '',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '12000',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'D:\\asset.binapertiwi.co.id\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'snipeit_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
  ),
  'trustedproxy' => 
  array (
    'proxies' => 
    array (
      0 => '192.168.1.1',
      1 => '10.0.0.1',
    ),
    'headers' => 30,
  ),
  'version' => 
  array (
    'app_version' => 'v5.1.8',
    'full_app_version' => 'v5.1.8 - build 6148-g3ca3de9e4',
    'build_version' => '6148',
    'prerelease_version' => '',
    'hash_version' => 'g3ca3de9e4',
    'full_hash' => '5.1.8-8-g3ca3de9e4',
    'branch' => 'master',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'D:\\asset.binapertiwi.co.id\\resources\\views',
    ),
    'compiled' => 'D:\\asset.binapertiwi.co.id\\storage\\framework\\views',
  ),
  'google2fa' => 
  array (
    'enabled' => true,
    'lifetime' => 0,
    'keep_alive' => true,
    'auth' => 'auth',
    'guard' => '',
    'session_var' => 'google2fa',
    'otp_input' => 'one_time_password',
    'window' => 1,
    'forbid_old_passwords' => false,
    'otp_secret_column' => 'google2fa_secret',
    'view' => 'google2fa.index',
    'error_messages' => 
    array (
      'wrong_otp' => 'The \'One Time Password\' typed was wrong.',
      'cannot_be_empty' => 'One Time Password cannot be empty.',
      'unknown' => 'An unknown error has occurred. Please try again.',
    ),
    'throw_exceptions' => true,
    'qrcode_image_backend' => 'imagemagick',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
