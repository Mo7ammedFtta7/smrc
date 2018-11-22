<?php return array (
  'barryvdh/laravel-debugbar' => 
  array (
    'providers' => 
    array (
      0 => 'Barryvdh\\Debugbar\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'Debugbar' => 'Barryvdh\\Debugbar\\Facade',
    ),
  ),
  'lavalite/framework' => 
  array (
    'dont-discover' => 
    array (
      0 => 'rachidlaasri/laravel-installer',
      1 => 'intervention/imagecache',
      2 => 'spatie/laravel-backup',
    ),
  ),
  'litecms/block' => 
  array (
    'providers' => 
    array (
      0 => 'Litecms\\Block\\BlockServiceProvider',
    ),
    'aliases' => 
    array (
      'Block' => 'Litecms\\Block\\Facades\\Block',
    ),
  ),
  'litecms/blog' => 
  array (
    'providers' => 
    array (
      0 => 'Litecms\\Blog\\Providers\\BlogServiceProvider',
    ),
    'aliases' => 
    array (
      'Blog' => 'Litecms\\Blog\\Facades\\Blog',
    ),
  ),
  'litecms/contact' => 
  array (
    'providers' => 
    array (
      0 => 'Litecms\\Contact\\ContactServiceProvider',
    ),
    'aliases' => 
    array (
      'Contact' => 'Litecms\\Contact\\Facades\\Contact',
    ),
  ),
  'litecms/page' => 
  array (
    'providers' => 
    array (
      0 => 'Litecms\\Page\\PageServiceProvider',
    ),
    'aliases' => 
    array (
      'Page' => 'Litecms\\Page\\Facades\\Page',
    ),
  ),
  'litecms/slider' => 
  array (
    'providers' => 
    array (
      0 => 'Litecms\\Slider\\Providers\\SliderServiceProvider',
    ),
    'aliases' => 
    array (
      'Slider' => 'Litecms\\Slider\\Facades\\Slider',
    ),
  ),
  'mpociot/teamwork' => 
  array (
    'providers' => 
    array (
      0 => 'Mpociot\\Teamwork\\TeamworkServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
);