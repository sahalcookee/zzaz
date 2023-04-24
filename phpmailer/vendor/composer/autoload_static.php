<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac4c67a133855e58517e2111c6b3bd09
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitac4c67a133855e58517e2111c6b3bd09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac4c67a133855e58517e2111c6b3bd09::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitac4c67a133855e58517e2111c6b3bd09::$classMap;

        }, null, ClassLoader::class);
    }
}