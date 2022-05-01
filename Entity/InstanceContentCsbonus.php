<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InstanceContentCsbonus.
 *
 * @ORM\Table(name="instance_content_csbonus", indexes={@ORM\Index(name="idx_a81779bc4230b1de", columns={"instance"}), @ORM\Index(name="idx_a81779bc1f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class InstanceContentCsbonus
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="instance_content_csbonus_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

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

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

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

    public function getColumn5(): ?int
    {
        return $this->column5;
    }

    public function setColumn5(?int $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

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
