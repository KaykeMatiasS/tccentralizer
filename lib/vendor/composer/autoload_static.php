<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd41f07b49e1897c4d833a9b1be6575c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd41f07b49e1897c4d833a9b1be6575c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd41f07b49e1897c4d833a9b1be6575c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd41f07b49e1897c4d833a9b1be6575c::$classMap;

        }, null, ClassLoader::class);
    }
}
