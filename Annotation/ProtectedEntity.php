<?php


namespace Vaderlab\EAV\Core\Annotation;

use Doctrine\ORM\Mapping\Annotation;

/**
 * Class Entity
 * @package Vaderlab\EAV\Core\Annotation
 *
 * @Annotation
 * @Target({"CLASS"})
 */
class ProtectedEntity implements Annotation
{
    /**
     */
    public $name;

    public function __toString(): string
    {
        return $this->name;
    }
}