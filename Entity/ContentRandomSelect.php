<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentRandomSelect.
 *
 * @ORM\Table(name="content_random_select", indexes={@ORM\Index(name="idx_c6b92d5e237e06", columns={"name"})})
 * @ORM\Entity
 */
class ContentRandomSelect
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_random_select_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="name", referencedColumnName="pk")
     * })
     */
    private $name;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getName(): ?ContentFinderCondition
    {
        return $this->name;
    }

    public function setName(?ContentFinderCondition $name): self
    {
        $this->name = $name;

        return $this;
    }
}
