<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ca3c30d51a347f1f82621574a891480
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ca3c30d51a347f1f82621574a891480::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ca3c30d51a347f1f82621574a891480::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}