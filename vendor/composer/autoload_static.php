<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit018bd7d99e5a3a4bb74907a8a4daeed7
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit018bd7d99e5a3a4bb74907a8a4daeed7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit018bd7d99e5a3a4bb74907a8a4daeed7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit018bd7d99e5a3a4bb74907a8a4daeed7::$classMap;

        }, null, ClassLoader::class);
    }
}
