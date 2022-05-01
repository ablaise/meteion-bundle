<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuidePage.
 *
 * @ORM\Table(name="guide_page")
 * @ORM\Entity
 */
class GuidePage
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="guide_page_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="key", type="integer", nullable=true)
     */
    private $key;

    /**
     * @var int|null
     *
     * @ORM\Column(name="output", type="integer", nullable=true)
     */
    private $output;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getKey(): ?int
    {
        return $this->key;
    }

    public function setKey(?int $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getOutput(): ?int
    {
        return $this->output;
    }

    public function setOutput(?int $output): self
    {
        $this->output = $output;

        return $this;
    }
}
