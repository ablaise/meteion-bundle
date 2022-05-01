<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Title.
 *
 * @ORM\Table(name="title")
 * @ORM\Entity
 */
class Title
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="title_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="masculine", type="string", length=255, nullable=true)
     */
    private $masculine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="feminine", type="string", length=255, nullable=true)
     */
    private $feminine;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_prefix", type="boolean", nullable=true)
     */
    private $isPrefix;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="bigint", nullable=true)
     */
    private $order;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMasculine(): ?string
    {
        return $this->masculine;
    }

    public function setMasculine(?string $masculine): self
    {
        $this->masculine = $masculine;

        return $this;
    }

    public function getFeminine(): ?string
    {
        return $this->feminine;
    }

    public function setFeminine(?string $feminine): self
    {
        $this->feminine = $feminine;

        return $this;
    }

    public function getIsPrefix(): ?bool
    {
        return $this->isPrefix;
    }

    public function setIsPrefix(?bool $isPrefix): self
    {
        $this->isPrefix = $isPrefix;

        return $this;
    }

    public function getOrder(): ?string
    {
        return $this->order;
    }

    public function setOrder(?string $order): self
    {
        $this->order = $order;

        return $this;
    }
}
