<?php

namespace Railken\LaraOre\RequestLogger\RequestLog\Attributes\Request\Exceptions;

use Railken\LaraOre\RequestLogger\RequestLog\Exceptions\RequestLogAttributeException;

class RequestLogRequestNotValidException extends RequestLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'request';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'REQUEST_LOG_REQUEST_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
