<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/xiqing-portal-config/src/SmartyConfig/Xq',
            S_ROOT.'vendor/qixinyun/xiqing-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/xiqing-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
