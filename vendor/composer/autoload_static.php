<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2ee77653514b850d22f948add3a9878
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'C' => 
        array (
            'Core\\router\\' => 12,
            'Core\\Template\\' => 14,
            'Core\\Exceptions\\' => 16,
            'Core\\DB\\' => 8,
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'Auryn\\' => 6,
            'App\\Models\\' => 11,
            'App\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Core\\router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/router',
        ),
        'Core\\Template\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/template',
        ),
        'Core\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/exceptions',
        ),
        'Core\\DB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/db',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Auryn\\' => 
        array (
            0 => __DIR__ . '/..' . '/rdlowrey/auryn/lib',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2ee77653514b850d22f948add3a9878::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2ee77653514b850d22f948add3a9878::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2ee77653514b850d22f948add3a9878::$classMap;

        }, null, ClassLoader::class);
    }
}
