<?php


namespace app\controller\test;


use app\controller\base_controller;

class home_controller extends base_controller
{

    public function main()
    {
        return [
            'test/home',
            [
                'a' => 'sajfhgga fhjawf'
            ]
        ];
    }
}