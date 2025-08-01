<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1fde787579cd65dad4953c8a7ce1253b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'B' => 
        array (
            'Barry\\Portfolio\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Barry\\Portfolio\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1fde787579cd65dad4953c8a7ce1253b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1fde787579cd65dad4953c8a7ce1253b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1fde787579cd65dad4953c8a7ce1253b::$classMap;

        }, null, ClassLoader::class);
    }
}
