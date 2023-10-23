<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita887ca258e88fcab4cfbeff9727a5c51
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'L' => 
        array (
            'Laminas\\Escaper\\' => 16,
        ),
        'C' => 
        array (
            'CodeIgniter\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Laminas\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-escaper/src',
        ),
        'CodeIgniter\\' => 
        array (
            0 => __DIR__ . '/..' . '/codeigniter4/framework/system',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita887ca258e88fcab4cfbeff9727a5c51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita887ca258e88fcab4cfbeff9727a5c51::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita887ca258e88fcab4cfbeff9727a5c51::$classMap;

        }, null, ClassLoader::class);
    }
}
