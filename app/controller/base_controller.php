<?php

namespace app\controller;


abstract class base_controller
{
    abstract function main();
    final function handle()
    {
        $this->beforeHandle();
        $result = $this->main();
        $this->afterHandle();
        return $result;
    }

    final function beforeHandle()
    {

    }

    final function afterHandle()
    {

    }

    public function layout($name = 'common')
    {
        return '';
    }

    public function style($styles)
    {
        return [];
    }

    public function javaScripts()
    {
        return [];
    }
}