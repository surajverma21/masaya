<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit57eccfa2fe65ceea1ad72e4862b5fbb6
=======
class ComposerAutoloaderInit751128b643d508f9f78687ab14cd989e
>>>>>>> ed06b808827924d4851a902b2f0428299ee824bd
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit57eccfa2fe65ceea1ad72e4862b5fbb6', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit57eccfa2fe65ceea1ad72e4862b5fbb6', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit751128b643d508f9f78687ab14cd989e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit751128b643d508f9f78687ab14cd989e', 'loadClassLoader'));
>>>>>>> ed06b808827924d4851a902b2f0428299ee824bd

        $includePaths = require __DIR__ . '/include_paths.php';
        array_push($includePaths, get_include_path());
        set_include_path(join(PATH_SEPARATOR, $includePaths));

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
        foreach ($includeFiles as $file) {
<<<<<<< HEAD
            composerRequire57eccfa2fe65ceea1ad72e4862b5fbb6($file);
=======
            composerRequire751128b643d508f9f78687ab14cd989e($file);
>>>>>>> ed06b808827924d4851a902b2f0428299ee824bd
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequire57eccfa2fe65ceea1ad72e4862b5fbb6($file)
=======
function composerRequire751128b643d508f9f78687ab14cd989e($file)
>>>>>>> ed06b808827924d4851a902b2f0428299ee824bd
{
    require $file;
}
