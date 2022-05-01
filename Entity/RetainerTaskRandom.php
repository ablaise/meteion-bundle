<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RetainerTaskRandom.
 *
 * @ORM\Table(name="retainer_task_random")
 * @ORM\Entity
 */
class RetainerTaskRandom
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="retainer_task_random_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="requirement", type="integer", nullable=true)
     */
    private $requirement;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRequirement(): ?int
    {
        return $this->requirement;
    }

    public function setRequirement(?int $requirement): self
    {
        $this->requirement = $requirement;

        return $this;
    }
}
