<?php
namespace root\yanglong;

require_once __DIR__.'/vendor/autoload.php';

class Queue extends \Xiaosongshu\Rabbitmq\Client{


    public static function handle(array $params): int
    {

        var_dump($params);
        return 1;
    }
}




Queue::send(['name'=>'张三']);
Queue::consume();






