<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BgmsystemDefine.
 *
 * @ORM\Table(name="bgmsystem_define")
 * @ORM\Entity
 */
class BgmsystemDefine
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bgmsystem_define_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="define", type="string", length=255, nullable=true)
     */
    private $define;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getDefine(): ?string
    {
        return $this->define;
    }

    public function setDefine(?string $define): self
    {
        $this->define = $define;

        return $this;
    }
}
