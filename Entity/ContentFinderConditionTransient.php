<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentFinderConditionTransient.
 *
 * @ORM\Table(name="content_finder_condition_transient")
 * @ORM\Entity
 */
class ContentFinderConditionTransient
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_finder_condition_transient_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=1141, nullable=true)
     */
    private $description;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
