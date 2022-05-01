<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrchestrionUiparam.
 *
 * @ORM\Table(name="orchestrion_uiparam", indexes={@ORM\Index(name="idx_e1a0260dc2a2ecaa", columns={"orchestrion_category"})})
 * @ORM\Entity
 */
class OrchestrionUiparam
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="orchestrion_uiparam_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="bigint", nullable=true)
     */
    private $order;

    /**
     * @var OrchestrionCategory
     *
     * @ORM\ManyToOne(targetEntity="OrchestrionCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orchestrion_category", referencedColumnName="pk")
     * })
     */
    private $orchestrionCategory;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getOrchestrionCategory(): ?OrchestrionCategory
    {
        return $this->orchestrionCategory;
    }

    public function setOrchestrionCategory(?OrchestrionCategory $orchestrionCategory): self
    {
        $this->orchestrionCategory = $orchestrionCategory;

        return $this;
    }
}
