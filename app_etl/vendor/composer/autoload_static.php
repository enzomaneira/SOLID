<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7724e26e2b8083930ab5c3717ccde09
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7724e26e2b8083930ab5c3717ccde09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7724e26e2b8083930ab5c3717ccde09::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf7724e26e2b8083930ab5c3717ccde09::$classMap;

        }, null, ClassLoader::class);
    }
}
