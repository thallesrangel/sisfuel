<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41a765ddb89ca9a3200217a4c2f8c4e9
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41a765ddb89ca9a3200217a4c2f8c4e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41a765ddb89ca9a3200217a4c2f8c4e9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
