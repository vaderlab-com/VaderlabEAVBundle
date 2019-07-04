<?php


namespace Vaderlab\EAV\Core\Entity\ValueType;


use Doctrine\ORM\Mapping as ORM;
use Vaderlab\EAV\Core\Entity\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ValueUrl
 * @package Vaderlab\EAV\Core\Entity\ValueType
 * @ORM\Entity()
 * @ORM\Cache(usage="NONSTRICT_READ_WRITE", region="eav")
 */
class ValueUrl extends AbstractValue
{
    /**
     * @var float
     * @ORM\Column( name="val", type="string", nullable=true, length=2048)
     * @Assert\Url(
     *      message = "The value '{{ value }}' is not a valid URL.",
     *      protocols = {"http", "https", "ftp"},
     *      relativeProtocol = true
     * )
     */
    protected $value;

    /**
     * @return string
     */
    public function getCastType(): string
    {
        return 'string';
    }
}