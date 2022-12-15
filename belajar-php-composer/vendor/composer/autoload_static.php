<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16ffa3f8f4804f8c807115d2046acc7b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'K' => 
        array (
            'KhoirulMustofa\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'KhoirulMustofa\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit16ffa3f8f4804f8c807115d2046acc7b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16ffa3f8f4804f8c807115d2046acc7b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16ffa3f8f4804f8c807115d2046acc7b::$classMap;

        }, null, ClassLoader::class);
    }
}