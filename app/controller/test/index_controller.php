<?php


namespace app\controller\test;


use app\controller\base_controller;

class index_controller extends base_controller
{

    public function main()
    {
        return [
//            'index/index',
            'layout',
            [
                'a' => 'sajfhgga fhjawf'
            ]
        ];
    }
}