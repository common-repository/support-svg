<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7615909fdc8ef2e26207dda700b81d0c
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enshrined\\svgSanitize\\' => 22,
        ),
        'S' => 
        array (
            'Sayedulsayem\\SupportSvg\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enshrined\\svgSanitize\\' => 
        array (
            0 => __DIR__ . '/..' . '/enshrined/svg-sanitize/src',
        ),
        'Sayedulsayem\\SupportSvg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7615909fdc8ef2e26207dda700b81d0c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7615909fdc8ef2e26207dda700b81d0c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7615909fdc8ef2e26207dda700b81d0c::$classMap;

        }, null, ClassLoader::class);
    }
}
