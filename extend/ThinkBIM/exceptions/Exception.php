<?php
declare(strict_types=1);

namespace ThinkBIM\exceptions;

use think\exception\HttpException;

abstract class Exception extends HttpException
{
    protected const HTTP_SUCCESS = 200;

    public function __construct(string $message = '', int $code = 0, \Exception $previous = null, array $headers = [], $statusCode = 0)
    {
        parent::__construct($statusCode, $message ? : $this->getMessage(), $previous, $headers, $code);
    }

    public function getStatusCode()
    {
        return self::HTTP_SUCCESS;
    }
}
