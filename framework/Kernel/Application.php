<?php


namespace App\Framework\Kernel;


use Psr\Http\Message\ServerRequestInterface;

final class Application
{
    /** @var self */
    protected static $app;
    protected $request;

    protected function __construct(ServerRequestInterface $request)
    {
        $this->request = $request;
    }

    public static function app(ServerRequestInterface $request = null)
    {
        if (self::$app) {
            return self::$app;
        }

        self::$app = new self($request);
        return self::$app;
    }
    /**
     * TODO: Должен вернуть Response для emit
     */
    function start()
    {
        echo "Я молодец!";
    }

    function request()
    {

    }
}