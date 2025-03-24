<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2dc5f289d4f7cd17bc210cd38fdd5ef1
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Combodo\\iTop\\AuthentToken\\Test\\' => 31,
            'Combodo\\iTop\\AuthentToken\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Combodo\\iTop\\AuthentToken\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test',
        ),
        'Combodo\\iTop\\AuthentToken\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Combodo\\iTop\\AuthentToken\\Controller\\MyAccountController' => __DIR__ . '/../..' . '/src/Controller/MyAccountController.php',
        'Combodo\\iTop\\AuthentToken\\Exception\\TokenAuthException' => __DIR__ . '/../..' . '/src/Exception/TokenAuthException.php',
        'Combodo\\iTop\\AuthentToken\\Helper\\TokenAuthConfig' => __DIR__ . '/../..' . '/src/Helper/TokenAuthConfig.php',
        'Combodo\\iTop\\AuthentToken\\Helper\\TokenAuthHelper' => __DIR__ . '/../..' . '/src/Helper/TokenAuthHelper.php',
        'Combodo\\iTop\\AuthentToken\\Helper\\TokenAuthLog' => __DIR__ . '/../..' . '/src/Helper/TokenAuthLog.php',
        'Combodo\\iTop\\AuthentToken\\Hook\\LegacyTokenLoginExtension' => __DIR__ . '/../..' . '/src/Hook/LegacyTokenLoginExtension.php',
        'Combodo\\iTop\\AuthentToken\\Hook\\MyAccountPopupMenuExtension' => __DIR__ . '/../..' . '/src/Hook/MyAccountPopupMenuExtension.php',
        'Combodo\\iTop\\AuthentToken\\Hook\\TokenLoginExtension' => __DIR__ . '/../..' . '/src/Hook/TokenLoginExtension.php',
        'Combodo\\iTop\\AuthentToken\\Model\\PersonalTokenMenu' => __DIR__ . '/../..' . '/src/Model/PersonalTokenMenu.php',
        'Combodo\\iTop\\AuthentToken\\Model\\iToken' => __DIR__ . '/../..' . '/src/Model/iToken.php',
        'Combodo\\iTop\\AuthentToken\\Service\\AuthentTokenService' => __DIR__ . '/../..' . '/src/Service/AuthentTokenService.php',
        'Combodo\\iTop\\AuthentToken\\Service\\MetaModelService' => __DIR__ . '/../..' . '/src/Service/MetaModelService.php',
        'Combodo\\iTop\\AuthentToken\\Test\\AbstractRestTest' => __DIR__ . '/../..' . '/test/AbstractRestTest.php',
        'Combodo\\iTop\\AuthentToken\\Test\\AbstractTokenRestTest' => __DIR__ . '/../..' . '/test/AbstractTokenRestTest.php',
        'Combodo\\iTop\\AuthentToken\\Test\\ApplicationTokenRestTest' => __DIR__ . '/../..' . '/test/ApplicationTokenRestTest.php',
        'Combodo\\iTop\\AuthentToken\\Test\\AuthentTokenServiceTest' => __DIR__ . '/../..' . '/test/AuthentTokenServiceTest.php',
        'Combodo\\iTop\\AuthentToken\\Test\\MyAccountControllerTest' => __DIR__ . '/../..' . '/test/MyAccountControllerTest.php',
        'Combodo\\iTop\\AuthentToken\\Test\\PersonalTokenRestTest' => __DIR__ . '/../..' . '/test/PersonalTokenRestTest.php',
        'Combodo\\iTop\\AuthentToken\\Test\\RestTest' => __DIR__ . '/../..' . '/test/RestTest.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2dc5f289d4f7cd17bc210cd38fdd5ef1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2dc5f289d4f7cd17bc210cd38fdd5ef1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2dc5f289d4f7cd17bc210cd38fdd5ef1::$classMap;

        }, null, ClassLoader::class);
    }
}
