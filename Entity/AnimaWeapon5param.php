<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnimaWeapon5param.
 *
 * @ORM\Table(name="anima_weapon5param", indexes={@ORM\Index(name="idx_639b407619d1ed5b", columns={"base_param"})})
 * @ORM\Entity
 */
class AnimaWeapon5param
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anima_weapon5param_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param", referencedColumnName="pk")
     * })
     */
    private $baseParam;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBaseParam(): ?BaseParam
    {
        return $this->baseParam;
    }

    public function setBaseParam(?BaseParam $baseParam): self
    {
        $this->baseParam = $baseParam;

        return $this;
    }
}
