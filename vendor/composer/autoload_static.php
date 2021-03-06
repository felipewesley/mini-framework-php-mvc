<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitceee6a7c5b40c95ee9dd8bd7e072f52c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MiniFramework\\' => 14,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MiniFramework\\' => 
        array (
            0 => __DIR__ . '/..' . '/MiniFramework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitceee6a7c5b40c95ee9dd8bd7e072f52c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitceee6a7c5b40c95ee9dd8bd7e072f52c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
