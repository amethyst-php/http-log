<?php

namespace Railken\LaraOre\RequestLogger\RequestLog\Attributes\Type\Exceptions;

use Railken\LaraOre\RequestLogger\RequestLog\Exceptions\RequestLogAttributeException;

class RequestLogTypeNotAuthorizedException extends RequestLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'type';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'REQUEST_LOG_TYPE_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
