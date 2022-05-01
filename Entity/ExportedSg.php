<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExportedSg.
 *
 * @ORM\Table(name="exported_sg")
 * @ORM\Entity
 */
class ExportedSg
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="exported_sg_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sgb_path", type="string", length=255, nullable=true)
     */
    private $sgbPath;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSgbPath(): ?string
    {
        return $this->sgbPath;
    }

    public function setSgbPath(?string $sgbPath): self
    {
        $this->sgbPath = $sgbPath;

        return $this;
    }
}
