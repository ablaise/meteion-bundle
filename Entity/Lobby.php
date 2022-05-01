<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lobby.
 *
 * @ORM\Table(name="lobby")
 * @ORM\Entity
 */
class Lobby
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lobby_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="bigint", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="param", type="bigint", nullable=true)
     */
    private $param;

    /**
     * @var int|null
     *
     * @ORM\Column(name="link", type="bigint", nullable=true)
     */
    private $link;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=1477, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_5", type="string", length=1477, nullable=true)
     */
    private $column5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_6", type="string", length=1477, nullable=true)
     */
    private $column6;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getParam(): ?string
    {
        return $this->param;
    }

    public function setParam(?string $param): self
    {
        $this->param = $param;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

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
}
