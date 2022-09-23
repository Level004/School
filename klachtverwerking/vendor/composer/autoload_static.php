<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitecb1744260f24e48959c169cdfb7d4b5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'G' => 
        array (
            'Guilliano\\Klachtverwerking\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Guilliano\\Klachtverwerking\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitecb1744260f24e48959c169cdfb7d4b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitecb1744260f24e48959c169cdfb7d4b5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitecb1744260f24e48959c169cdfb7d4b5::$classMap;

        }, null, ClassLoader::class);
    }
}