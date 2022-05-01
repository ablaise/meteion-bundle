<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExVersion.
 *
 * @ORM\Table(name="ex_version", indexes={@ORM\Index(name="idx_31492b582fbdd4a4", columns={"accept_jingle"}), @ORM\Index(name="idx_31492b58e129970c", columns={"complete_jingle"})})
 * @ORM\Entity
 */
class ExVersion
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ex_version_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var ScreenImage
     *
     * @ORM\ManyToOne(targetEntity="ScreenImage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="complete_jingle", referencedColumnName="pk")
     * })
     */
    private $completeJingle;

    /**
     * @var ScreenImage
     *
     * @ORM\ManyToOne(targetEntity="ScreenImage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="accept_jingle", referencedColumnName="pk")
     * })
     */
    private $acceptJingle;

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

    public function getCompleteJingle(): ?ScreenImage
    {
        return $this->completeJingle;
    }

    public function setCompleteJingle(?ScreenImage $completeJingle): self
    {
        $this->completeJingle = $completeJingle;

        return $this;
    }

    public function getAcceptJingle(): ?ScreenImage
    {
        return $this->acceptJingle;
    }

    public function setAcceptJingle(?ScreenImage $acceptJingle): self
    {
        $this->acceptJingle = $acceptJingle;

        return $this;
    }
}
