<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EurekaMagiaAction.
 *
 * @ORM\Table(name="eureka_magia_action", indexes={@ORM\Index(name="idx_296052c747cc8c92", columns={"action"})})
 * @ORM\Entity
 */
class EurekaMagiaAction
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="eureka_magia_action_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_uses", type="integer", nullable=true)
     */
    private $maxUses;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action", referencedColumnName="pk")
     * })
     */
    private $action;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMaxUses(): ?int
    {
        return $this->maxUses;
    }

    public function setMaxUses(?int $maxUses): self
    {
        $this->maxUses = $maxUses;

        return $this;
    }

    public function getAction(): ?Action
    {
        return $this->action;
    }

    public function setAction(?Action $action): self
    {
        $this->action = $action;

        return $this;
    }
}
