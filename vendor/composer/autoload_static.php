<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6b32adb8d86487a0b9d502e1137c0bf
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite6b32adb8d86487a0b9d502e1137c0bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6b32adb8d86487a0b9d502e1137c0bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite6b32adb8d86487a0b9d502e1137c0bf::$classMap;

        }, null, ClassLoader::class);
    }
}
