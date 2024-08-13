<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff7ae41561c663e6b9123ae57073ab17
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitff7ae41561c663e6b9123ae57073ab17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff7ae41561c663e6b9123ae57073ab17::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitff7ae41561c663e6b9123ae57073ab17::$classMap;

        }, null, ClassLoader::class);
    }
}
