<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e69a6bfa5530ec17a008318add9851f
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\composer\\' => 13,
            'yii\\' => 4,
            'yidas\\yii2BowerAsset\\' => 21,
        ),
        'm' => 
        array (
            'mayankshukla2001\\modulename\\' => 28,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'yidas\\yii2BowerAsset\\' => 
        array (
            0 => __DIR__ . '/..' . '/yidas/yii2-bower-asset',
        ),
        'mayankshukla2001\\modulename\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e69a6bfa5530ec17a008318add9851f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e69a6bfa5530ec17a008318add9851f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0e69a6bfa5530ec17a008318add9851f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0e69a6bfa5530ec17a008318add9851f::$classMap;

        }, null, ClassLoader::class);
    }
}
