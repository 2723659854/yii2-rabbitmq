<?php
namespace root\yanglong;

require_once __DIR__.'/vendor/autoload.php';

class Queued1 extends \Xiaosongshu\Rabbitmq\Client{


    public static function handle(array $params): int
    {
        var_dump($params);
        return self::ACK;
    }
}

Queued1::send(['name'=>'张三']);
Queued1::consume();




