<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuidePageString.
 *
 * @ORM\Table(name="guide_page_string")
 * @ORM\Entity
 */
class GuidePageString
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="guide_page_string_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="string", type="string", length=2493, nullable=true)
     */
    private $string;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getString(): ?string
    {
        return $this->string;
    }

    public function setString(?string $string): self
    {
        $this->string = $string;

        return $this;
    }
}
