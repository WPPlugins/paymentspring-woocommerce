<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita28898d87a7c143b1c1fa7dc58ad4955
{
    public static $files = array (
        '304b7f6ccbec123ba7d9e4c87396012b' => __DIR__ . '/..' . '/paymentspring/paymentspring-php/init.php',
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'H' => 
        array (
            'Handlebars' => 
            array (
                0 => __DIR__ . '/..' . '/xamin/handlebars.php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita28898d87a7c143b1c1fa7dc58ad4955::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
