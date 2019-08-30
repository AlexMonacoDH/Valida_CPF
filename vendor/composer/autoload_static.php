<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2f3bc0e07ff688b1563bf3e245b4f8d
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bissolli\\ValidadorCpfCnpj\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bissolli\\ValidadorCpfCnpj\\' => 
        array (
            0 => __DIR__ . '/..' . '/bissolli/validador-cpf-cnpj/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2f3bc0e07ff688b1563bf3e245b4f8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2f3bc0e07ff688b1563bf3e245b4f8d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
