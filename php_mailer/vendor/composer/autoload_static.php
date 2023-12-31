<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb645c7e74032f90733e6e04a98cf814a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb645c7e74032f90733e6e04a98cf814a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb645c7e74032f90733e6e04a98cf814a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb645c7e74032f90733e6e04a98cf814a::$classMap;

        }, null, ClassLoader::class);
    }
}
