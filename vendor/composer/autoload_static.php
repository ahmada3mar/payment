<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d3222eef5377e61766bd5140540a8a6
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hyperpay\\Payment\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hyperpay\\Payment\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d3222eef5377e61766bd5140540a8a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d3222eef5377e61766bd5140540a8a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1d3222eef5377e61766bd5140540a8a6::$classMap;

        }, null, ClassLoader::class);
    }
}