<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebGuidance.
 *
 * @ORM\Table(name="web_guidance", indexes={@ORM\Index(name="idx_e791cc4af47645ae", columns={"url"})})
 * @ORM\Entity
 */
class WebGuidance
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="web_guidance_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image", type="integer", nullable=true)
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=430, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_4", type="string", length=430, nullable=true)
     */
    private $column4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=430, nullable=true)
     */
    private $description;

    /**
     * @var WebUrl
     *
     * @ORM\ManyToOne(targetEntity="WebUrl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="url", referencedColumnName="pk")
     * })
     */
    private $url;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getImage(): ?int
    {
        return $this->image;
    }

    public function setImage(?int $image): self
    {
        $this->image = $image;

        return $this;
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

    public function getColumn4(): ?string
    {
        return $this->column4;
    }

    public function setColumn4(?string $column4): self
    {
        $this->column4 = $column4;

        return $this;
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

    public function getUrl(): ?WebUrl
    {
        return $this->url;
    }

    public function setUrl(?WebUrl $url): self
    {
        $this->url = $url;

        return $this;
    }
}
