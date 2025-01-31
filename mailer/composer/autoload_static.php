<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc470ebfee049a0b75cd179d68330379d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc470ebfee049a0b75cd179d68330379d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc470ebfee049a0b75cd179d68330379d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc470ebfee049a0b75cd179d68330379d::$classMap;

        }, null, ClassLoader::class);
    }
}
