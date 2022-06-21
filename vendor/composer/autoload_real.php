<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit78e18111b8ea3bae5c2d61f6cb9d5fd0
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit78e18111b8ea3bae5c2d61f6cb9d5fd0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit78e18111b8ea3bae5c2d61f6cb9d5fd0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit78e18111b8ea3bae5c2d61f6cb9d5fd0::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit78e18111b8ea3bae5c2d61f6cb9d5fd0::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire78e18111b8ea3bae5c2d61f6cb9d5fd0($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire78e18111b8ea3bae5c2d61f6cb9d5fd0($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
