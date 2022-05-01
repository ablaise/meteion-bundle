<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemBarterCheck.
 *
 * @ORM\Table(name="item_barter_check", indexes={@ORM\Index(name="idx_5ac7c94c8fd3a344", columns={"confirm"}), @ORM\Index(name="idx_5ac7c94c64c19c1", columns={"category"})})
 * @ORM\Entity
 */
class ItemBarterCheck
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="item_barter_check_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="question", type="integer", nullable=true)
     */
    private $question;

    /**
     * @var Addon
     *
     * @ORM\ManyToOne(targetEntity="Addon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="confirm", referencedColumnName="pk")
     * })
     */
    private $confirm;

    /**
     * @var AddonTransient
     *
     * @ORM\ManyToOne(targetEntity="AddonTransient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category", referencedColumnName="pk")
     * })
     */
    private $category;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getQuestion(): ?int
    {
        return $this->question;
    }

    public function setQuestion(?int $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getConfirm(): ?Addon
    {
        return $this->confirm;
    }

    public function setConfirm(?Addon $confirm): self
    {
        $this->confirm = $confirm;

        return $this;
    }

    public function getCategory(): ?AddonTransient
    {
        return $this->category;
    }

    public function setCategory(?AddonTransient $category): self
    {
        $this->category = $category;

        return $this;
    }
}
