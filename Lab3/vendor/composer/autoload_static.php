<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite68a0ec77a734b2abb6e006bc3e310a0
{
    public static $files = array (
        'cfe4039aa2a78ca88e07dadb7b1c6126' => __DIR__ . '/../..' . '/config.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Counter' => __DIR__ . '/../..' . '/model/Counter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite68a0ec77a734b2abb6e006bc3e310a0::$classMap;

        }, null, ClassLoader::class);
    }
}