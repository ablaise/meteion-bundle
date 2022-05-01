<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActionProcStatus.
 *
 * @ORM\Table(name="action_proc_status", indexes={@ORM\Index(name="idx_de2a8bb27b00651c", columns={"status"})})
 * @ORM\Entity
 */
class ActionProcStatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="action_proc_status_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status", referencedColumnName="pk")
     * })
     */
    private $status;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(?Status $status): self
    {
        $this->status = $status;

        return $this;
    }
}
