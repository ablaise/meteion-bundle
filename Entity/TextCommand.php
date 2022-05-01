<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TextCommand.
 *
 * @ORM\Table(name="text_command", indexes={@ORM\Index(name="idx_aa6bc5eba4fa7c89", columns={"param"})})
 * @ORM\Entity
 */
class TextCommand
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="text_command_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

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
     * @var string|null
     *
     * @ORM\Column(name="command", type="string", length=3976, nullable=true)
     */
    private $command;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_command", type="string", length=3976, nullable=true)
     */
    private $shortCommand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=3976, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alias", type="string", length=3976, nullable=true)
     */
    private $alias;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_alias", type="string", length=3976, nullable=true)
     */
    private $shortAlias;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_12", type="bigint", nullable=true)
     */
    private $column12;

    /**
     * @var TextCommandParam
     *
     * @ORM\ManyToOne(targetEntity="TextCommandParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="param", referencedColumnName="pk")
     * })
     */
    private $param;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?int
    {
        return $this->column1;
    }

    public function setColumn1(?int $column1): self
    {
        $this->column1 = $column1;

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

    public function getCommand(): ?string
    {
        return $this->command;
    }

    public function setCommand(?string $command): self
    {
        $this->command = $command;

        return $this;
    }

    public function getShortCommand(): ?string
    {
        return $this->shortCommand;
    }

    public function setShortCommand(?string $shortCommand): self
    {
        $this->shortCommand = $shortCommand;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    public function getShortAlias(): ?string
    {
        return $this->shortAlias;
    }

    public function setShortAlias(?string $shortAlias): self
    {
        $this->shortAlias = $shortAlias;

        return $this;
    }

    public function getColumn12(): ?string
    {
        return $this->column12;
    }

    public function setColumn12(?string $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getParam(): ?TextCommandParam
    {
        return $this->param;
    }

    public function setParam(?TextCommandParam $param): self
    {
        $this->param = $param;

        return $this;
    }
}
