<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit650bd590ba67fe03ea264d3ddf880b7f
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Egulias\\EmailValidator\\' => 23,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Egulias\\EmailValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit650bd590ba67fe03ea264d3ddf880b7f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit650bd590ba67fe03ea264d3ddf880b7f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit650bd590ba67fe03ea264d3ddf880b7f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
