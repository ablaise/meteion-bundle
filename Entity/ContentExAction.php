<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentExAction.
 *
 * @ORM\Table(name="content_ex_action", indexes={@ORM\Index(name="idx_9c3ca60c5e237e06", columns={"name"})})
 * @ORM\Entity
 */
class ContentExAction
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_ex_action_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="bigint", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="charges", type="integer", nullable=true)
     */
    private $charges;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="name", referencedColumnName="pk")
     * })
     */
    private $name;

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

    public function getCharges(): ?int
    {
        return $this->charges;
    }

    public function setCharges(?int $charges): self
    {
        $this->charges = $charges;

        return $this;
    }

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getName(): ?Action
    {
        return $this->name;
    }

    public function setName(?Action $name): self
    {
        $this->name = $name;

        return $this;
    }
}
