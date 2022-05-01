<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BnpcAnnounceIcon.
 *
 * @ORM\Table(name="bnpc_announce_icon")
 * @ORM\Entity
 */
class BnpcAnnounceIcon
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bnpc_announce_icon_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }
}
