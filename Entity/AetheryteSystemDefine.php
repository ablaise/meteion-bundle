<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AetheryteSystemDefine.
 *
 * @ORM\Table(name="aetheryte_system_define")
 * @ORM\Entity
 */
class AetheryteSystemDefine
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aetheryte_system_define_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @var int|null
     *
     * @ORM\Column(name="define_value", type="bigint", nullable=true)
     */
    private $defineValue;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getDefineValue(): ?string
    {
        return $this->defineValue;
    }

    public function setDefineValue(?string $defineValue): self
    {
        $this->defineValue = $defineValue;

        return $this;
    }
}
