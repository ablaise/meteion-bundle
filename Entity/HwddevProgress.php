<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HwddevProgress.
 *
 * @ORM\Table(name="hwddev_progress")
 * @ORM\Entity
 */
class HwddevProgress
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hwddev_progress_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_go_next", type="boolean", nullable=true)
     */
    private $canGoNext;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCanGoNext(): ?bool
    {
        return $this->canGoNext;
    }

    public function setCanGoNext(?bool $canGoNext): self
    {
        $this->canGoNext = $canGoNext;

        return $this;
    }
}
