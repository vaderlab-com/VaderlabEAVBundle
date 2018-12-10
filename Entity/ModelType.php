<?php
/**
 * Created by PhpStorm.
 * User: kost
 * Date: 2018-12-05
 * Time: 01:39
 */

namespace Vaderlab\EAV\Core\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Vaderlab\EAV\Core\Repository\ModelTypeRepository")
 * @ORM\Cache(usage="READ_WRITE", region="model_type_region")
 */
class ModelType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column( name="name", type="string", length=50, nullable=false, unique=true )
     */
    private $name;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany( targetEntity="Model", mappedBy="type", fetch="LAZY", cascade={"remove"} )
     */
    private $models;

    /**
     * @var Collection
     * @ORM\Cache("NONSTRICT_READ_WRITE")
     * @ORM\OneToMany( targetEntity="Vaderlab\EAV\Core\Entity\Attribute", mappedBy="modelType", fetch="EAGER", cascade={"remove", "persist", "merge"} )
     */
    private $attributes;

    /**
     * @var Collection
     * @ORM\OneToMany( targetEntity="Vaderlab\EAV\Core\Entity\Form", mappedBy="modelType", fetch="LAZY", cascade={"all"} )
     * @ORM\Cache("NONSTRICT_READ_WRITE")
     */
    private $forms;

    /**
     * ModelType constructor.
     */
    public function __construct()
    {
        $this->forms = new ArrayCollection();
        $this->models = new ArrayCollection();
        $this->attributes = new ArrayCollection();
    }

    /**
     * @return integer
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName( ?string $name )
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getModels(): Collection
    {
        return $this->models;
    }

    /**
     * @param Collection $models
     * @return $this
     */
    public function setModels(Collection $models): ModelType
    {
        $this->models = $models;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getAttributes(): Collection
    {
        return $this->attributes;
    }

    /**
     * @param Collection $attributes
     * @return $this
     */
    public function setAttributes(Collection $attributes): ModelType
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getForms(): Collection
    {
        return $this->forms;
    }

    /**
     * @param Collection $forms
     * @return ModelType
     */
    public function setForms(Collection $forms): ModelType
    {
        $this->forms = $forms;

        return $this;
    }
}