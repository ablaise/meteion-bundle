<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InstanceContentGuide.
 *
 * @ORM\Table(name="instance_content_guide", indexes={@ORM\Index(name="idx_16625a14230b1de", columns={"instance"})})
 * @ORM\Entity
 */
class InstanceContentGuide
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="instance_content_guide_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="bigint", nullable=true)
     */
    private $column2;

    /**
     * @var InstanceContent
     *
     * @ORM\ManyToOne(targetEntity="InstanceContent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance", referencedColumnName="pk")
     * })
     */
    private $instance;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn2(): ?string
    {
        return $this->column2;
    }

    public function setColumn2(?string $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getInstance(): ?InstanceContent
    {
        return $this->instance;
    }

    public function setInstance(?InstanceContent $instance): self
    {
        $this->instance = $instance;

        return $this;
    }
}
