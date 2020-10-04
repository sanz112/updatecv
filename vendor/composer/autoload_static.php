<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0bc37fa941b2c7de930e6335d84258d
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'Phug\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Phug\\' => 
        array (
            0 => __DIR__ . '/..' . '/phug/phug/src/Phug/Ast',
            1 => __DIR__ . '/..' . '/phug/phug/src/Phug/Compiler',
            2 => __DIR__ . '/..' . '/phug/phug/src/Phug/DependencyInjection',
            3 => __DIR__ . '/..' . '/phug/phug/src/Phug/Event',
            4 => __DIR__ . '/..' . '/phug/phug/src/Phug/Formatter',
            5 => __DIR__ . '/..' . '/phug/phug/src/Phug/Invoker',
            6 => __DIR__ . '/..' . '/phug/phug/src/Phug/Lexer',
            7 => __DIR__ . '/..' . '/phug/phug/src/Phug/Parser',
            8 => __DIR__ . '/..' . '/phug/phug/src/Phug/Reader',
            9 => __DIR__ . '/..' . '/phug/phug/src/Phug/Renderer',
            10 => __DIR__ . '/..' . '/phug/phug/src/Phug/Util',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/js-transformer/js-transformer/src',
        1 => __DIR__ . '/..' . '/pug-php/pug/src',
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pug\\' => 
            array (
                0 => __DIR__ . '/..' . '/pug-php/pug/src',
            ),
            'Phug\\' => 
            array (
                0 => __DIR__ . '/..' . '/phug/js-transformer-filter/src',
            ),
        ),
        'N' => 
        array (
            'NodejsPhpFallback\\' => 
            array (
                0 => __DIR__ . '/..' . '/nodejs-php-fallback/nodejs-php-fallback/src',
            ),
        ),
        'J' => 
        array (
            'JsPhpize' => 
            array (
                0 => __DIR__ . '/..' . '/js-phpize/js-phpize/src',
                1 => __DIR__ . '/..' . '/js-phpize/js-phpize-phug/src',
            ),
            'Jade\\' => 
            array (
                0 => __DIR__ . '/..' . '/pug-php/pug/src',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/phug/phug/src/Phug/Phug',
    );

    public static $classMap = array (
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0bc37fa941b2c7de930e6335d84258d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0bc37fa941b2c7de930e6335d84258d::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitb0bc37fa941b2c7de930e6335d84258d::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb0bc37fa941b2c7de930e6335d84258d::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInitb0bc37fa941b2c7de930e6335d84258d::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInitb0bc37fa941b2c7de930e6335d84258d::$classMap;

        }, null, ClassLoader::class);
    }
}
