<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7dc6277663b6b85329c9510d2b3f8d92
{
    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yellowheroes\\test\\root\\' => 23,
            'yellowheroes\\test\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yellowheroes\\test\\root\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'yellowheroes\\test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7dc6277663b6b85329c9510d2b3f8d92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7dc6277663b6b85329c9510d2b3f8d92::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
