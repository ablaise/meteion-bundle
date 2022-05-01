<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActionComboRoute.
 *
 * @ORM\Table(name="action_combo_route", indexes={@ORM\Index(name="idx_82ad07938a5d3301", columns={"action_1"}), @ORM\Index(name="idx_82ad07936453522d", columns={"action_3"}), @ORM\Index(name="idx_82ad0793fd5a0397", columns={"action_0"}), @ORM\Index(name="idx_82ad0793135462bb", columns={"action_2"})})
 * @ORM\Entity
 */
class ActionComboRoute
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="action_combo_route_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="bigint", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="bigint", nullable=true)
     */
    private $column8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="bigint", nullable=true)
     */
    private $column9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_10", type="boolean", nullable=true)
     */
    private $column10;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_3", referencedColumnName="pk")
     * })
     */
    private $action3;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_2", referencedColumnName="pk")
     * })
     */
    private $action2;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_1", referencedColumnName="pk")
     * })
     */
    private $action1;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_0", referencedColumnName="pk")
     * })
     */
    private $action0;

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

    public function getColumn2(): ?int
    {
        return $this->column2;
    }

    public function setColumn2(?int $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getColumn7(): ?string
    {
        return $this->column7;
    }

    public function setColumn7(?string $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn8(): ?string
    {
        return $this->column8;
    }

    public function setColumn8(?string $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn9(): ?string
    {
        return $this->column9;
    }

    public function setColumn9(?string $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getColumn10(): ?bool
    {
        return $this->column10;
    }

    public function setColumn10(?bool $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getAction3(): ?Action
    {
        return $this->action3;
    }

    public function setAction3(?Action $action3): self
    {
        $this->action3 = $action3;

        return $this;
    }

    public function getAction2(): ?Action
    {
        return $this->action2;
    }

    public function setAction2(?Action $action2): self
    {
        $this->action2 = $action2;

        return $this;
    }

    public function getAction1(): ?Action
    {
        return $this->action1;
    }

    public function setAction1(?Action $action1): self
    {
        $this->action1 = $action1;

        return $this;
    }

    public function getAction0(): ?Action
    {
        return $this->action0;
    }

    public function setAction0(?Action $action0): self
    {
        $this->action0 = $action0;

        return $this;
    }
}
