<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe558d0add7f12a1b65e305cc6e0dcd5
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bonwe\\WebDriver\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bonwe\\WebDriver\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe558d0add7f12a1b65e305cc6e0dcd5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe558d0add7f12a1b65e305cc6e0dcd5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
