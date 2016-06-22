<?php

namespace iproger\yii2\settings\components;

/**
 * This is node of settings
 */
class Node
{

    public function __set($key, $value)
    {
        $this->$key = $value;
    }

    public function __get($key)
    {
        if (!isset($this->$key)) {
            $this->$key = new Node;
        }

        return $this->$key;
    }

    public function delete()
    {
        // todo
    }
}
