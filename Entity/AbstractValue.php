<?php
/**
 * Created by PhpStorm.
 * User: kost
 * Date: 2018-12-06
 * Time: 16:33
 */

namespace Vaderlab\EAV\Entity;


use Doctrine\ORM\Mapping as ORM;
use Vaderlab\EAV\Entity\Model;

/**
 * Class AbstractValue
 * @package Vaderlab\EAV\Entity\ValueType
 *
 * @ORM\MappedSuperclass()
 */
abstract class AbstractValue implements ValueInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var Model
     * @ORM\ManyToOne( targetEntity="Model", fetch="EXTRA_LAZY", cascade={"persist", "merge"} )
     */
    private $model;

    /**
     * @var mixed
     */
    protected $value;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value
     * @return ValueInterface
     */
    public function setValue($value): ValueInterface
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return Model
     */
    public function getModel(): ?Model
    {
        return $this->model;
    }

    /**
     * @param Model $model
     * @return ValueInterface
     */
    public function setModel(Model $model): ValueInterface
    {
        $this->model = $model;

        return $this;
    }


}