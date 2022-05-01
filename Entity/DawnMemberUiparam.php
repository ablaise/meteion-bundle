<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DawnMemberUiparam.
 *
 * @ORM\Table(name="dawn_member_uiparam")
 * @ORM\Entity
 */
class DawnMemberUiparam
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dawn_member_uiparam_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="class_singular", type="string", length=255, nullable=true)
     */
    private $classSingular;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_2", type="string", length=255, nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="voice_line", type="bigint", nullable=true)
     */
    private $voiceLine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="class_plural", type="string", length=255, nullable=true)
     */
    private $classPlural;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getClassSingular(): ?string
    {
        return $this->classSingular;
    }

    public function setClassSingular(?string $classSingular): self
    {
        $this->classSingular = $classSingular;

        return $this;
    }

    public function getColumn2(): ?string
    {
        return $this->column2;
    }

    public function setColumn2(?string $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getVoiceLine(): ?string
    {
        return $this->voiceLine;
    }

    public function setVoiceLine(?string $voiceLine): self
    {
        $this->voiceLine = $voiceLine;

        return $this;
    }

    public function getClassPlural(): ?string
    {
        return $this->classPlural;
    }

    public function setClassPlural(?string $classPlural): self
    {
        $this->classPlural = $classPlural;

        return $this;
    }
}
