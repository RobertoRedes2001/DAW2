<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteca953a03b03cde5350b31e7e2a4934a
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Roberto\\App\\View\\' => 17,
            'Roberto\\App\\Model\\' => 18,
            'Roberto\\App\\Core\\' => 17,
            'Roberto\\App\\Controller\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Roberto\\App\\View\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/view',
        ),
        'Roberto\\App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model',
        ),
        'Roberto\\App\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/core',
        ),
        'Roberto\\App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteca953a03b03cde5350b31e7e2a4934a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteca953a03b03cde5350b31e7e2a4934a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteca953a03b03cde5350b31e7e2a4934a::$classMap;

        }, null, ClassLoader::class);
    }
}
