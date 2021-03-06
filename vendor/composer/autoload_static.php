<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8dec82683ac6afb999a7444d5508deda
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8dec82683ac6afb999a7444d5508deda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8dec82683ac6afb999a7444d5508deda::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8dec82683ac6afb999a7444d5508deda::$classMap;

        }, null, ClassLoader::class);
    }
}
