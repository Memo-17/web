<?php

class Layout
{
    public static function header(array $options = [
        'stylesheets' => [],
    ])
    {
        return include_once 'views/templates/header.php';
    }

    public static function footer(array $options = [
        'scripts' => [],
    ])
    {
        return include_once 'views/templates/footer.php';
    }
}