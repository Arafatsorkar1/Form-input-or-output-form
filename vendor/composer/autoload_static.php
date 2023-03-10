<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e82dabc8daa682ec2330545a54d6b35
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e82dabc8daa682ec2330545a54d6b35::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e82dabc8daa682ec2330545a54d6b35::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e82dabc8daa682ec2330545a54d6b35::$classMap;

        }, null, ClassLoader::class);
    }
}
