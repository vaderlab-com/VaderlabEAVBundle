<?php


namespace Vaderlab\EAV\Core\Exception\Service\Reflection;


use Throwable;

class EntityClassNotExistsException extends ReflectionException
{
    public function __construct(string $class, $code = 0, Throwable $previous = null)
    {
        $message = 'Entity class "%s" is not exists';

        parent::__construct(sprintf($message, $class), $code, $previous);
    }
}