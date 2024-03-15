<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f10413d0163e4d1c13bb47abddeedb5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sschonss\\PhpHexagonalBasic\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sschonss\\PhpHexagonalBasic\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f10413d0163e4d1c13bb47abddeedb5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f10413d0163e4d1c13bb47abddeedb5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f10413d0163e4d1c13bb47abddeedb5::$classMap;

        }, null, ClassLoader::class);
    }
}
