<?php

require_once __DIR__.'/vendor/autoload.php';

class Demo extends \Xiaosongshu\Rabbitmq\Client
{

    /** 以下是rabbitmq配置 ，请填写您自己的配置 */
    /** @var string $host 服务器地址 */
    public static $host = "127.0.0.1";

    /** @var int $port 服务器端口 */
    public static $port = 5672;

    /** @var string $user 服务器登陆用户 */
    public static $user = "guest";

    /** @var string $pass 服务器登陆密码 */
    public static $pass = "guest";

    /**
     * 业务处理
     * @param array $params
     * @return int
     */
    public static function handle(array $params): int
    {
        //TODO 这里写你的业务逻辑
        // ...
        var_dump($params);
        return self::ACK;
        //return self::NACK;
    }
}

/** 投递普通消息 */
Demo::send(['name' => '张三']);
/** 开启消费，本函数是阻塞的 */
Demo::consume();
/** 关闭消费者 */
Demo::close();








