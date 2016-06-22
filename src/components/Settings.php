<?php

namespace iproger\yii2\settings\components;

/**
 * This is controller of settings
 */
class Settings extends Node
{
    public function __set($key, $value)
    {
        // update db

        parent::__set($key, $value);
    }

    public function __get($key)
    {
        // update db

        parent::__get($key);
    }
}
