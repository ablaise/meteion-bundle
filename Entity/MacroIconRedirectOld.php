<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MacroIconRedirectOld.
 *
 * @ORM\Table(name="macro_icon_redirect_old")
 * @ORM\Entity
 */
class MacroIconRedirectOld
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="macro_icon_redirect_old_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_old", type="integer", nullable=true)
     */
    private $iconOld;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_new", type="integer", nullable=true)
     */
    private $iconNew;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getIconOld(): ?int
    {
        return $this->iconOld;
    }

    public function setIconOld(?int $iconOld): self
    {
        $this->iconOld = $iconOld;

        return $this;
    }

    public function getIconNew(): ?int
    {
        return $this->iconNew;
    }

    public function setIconNew(?int $iconNew): self
    {
        $this->iconNew = $iconNew;

        return $this;
    }
}
