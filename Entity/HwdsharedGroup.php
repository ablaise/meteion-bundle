<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HwdsharedGroup.
 *
 * @ORM\Table(name="hwdshared_group")
 * @ORM\Entity
 */
class HwdsharedGroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hwdshared_group_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_shared_group", type="bigint", nullable=true)
     */
    private $lgbSharedGroup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="param", type="integer", nullable=true)
     */
    private $param;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getLgbSharedGroup(): ?string
    {
        return $this->lgbSharedGroup;
    }

    public function setLgbSharedGroup(?string $lgbSharedGroup): self
    {
        $this->lgbSharedGroup = $lgbSharedGroup;

        return $this;
    }

    public function getParam(): ?int
    {
        return $this->param;
    }

    public function setParam(?int $param): self
    {
        $this->param = $param;

        return $this;
    }
}
