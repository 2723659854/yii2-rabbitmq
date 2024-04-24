<?php
namespace Xiaosongshu\Rabbitmq;

require_once __DIR__.'/vendor/autoload.php';

class Demo extends \Xiaosongshu\Rabbitmq\Client{


    public static function handle(array $params): int
    {
        var_dump($params);
        return self::ACK;
    }
}

Demo::send(['name'=>'张三']);
Demo::consume();