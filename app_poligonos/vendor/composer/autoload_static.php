<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3199ff9f2a06c5bb95e8c3b802f882e6
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3199ff9f2a06c5bb95e8c3b802f882e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3199ff9f2a06c5bb95e8c3b802f882e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3199ff9f2a06c5bb95e8c3b802f882e6::$classMap;

        }, null, ClassLoader::class);
    }
}
