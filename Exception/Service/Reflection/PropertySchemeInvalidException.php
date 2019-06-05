<?php


namespace Vaderlab\EAV\Core\Exception\Service\Reflection;


use Throwable;

class PropertySchemeInvalidException extends ReflectionException
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}