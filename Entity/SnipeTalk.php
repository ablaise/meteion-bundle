<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SnipeTalk.
 *
 * @ORM\Table(name="snipe_talk", indexes={@ORM\Index(name="idx_1583ab345e237e06", columns={"name"})})
 * @ORM\Entity
 */
class SnipeTalk
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="snipe_talk_pk_seq", allocationSize=1, initialValue=1)
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
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=355, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_5", type="string", length=355, nullable=true)
     */
    private $column5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_6", type="string", length=355, nullable=true)
     */
    private $column6;

    /**
     * @var SnipeTalkName
     *
     * @ORM\ManyToOne(targetEntity="SnipeTalkName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="name", referencedColumnName="pk")
     * })
     */
    private $name;

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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getColumn5(): ?string
    {
        return $this->column5;
    }

    public function setColumn5(?string $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getColumn6(): ?string
    {
        return $this->column6;
    }

    public function setColumn6(?string $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getName(): ?SnipeTalkName
    {
        return $this->name;
    }

    public function setName(?SnipeTalkName $name): self
    {
        $this->name = $name;

        return $this;
    }
}
