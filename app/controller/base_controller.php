<?php

namespace app\controller;


abstract class base_controller
{
    abstract function main();
    final function handle()
    {
        $this->beforeHandle();
        $this->main();
        $this->afterHandle();
    }

    final function beforeHandle()
    {

    }

    final function afterHandle()
    {

    }
}