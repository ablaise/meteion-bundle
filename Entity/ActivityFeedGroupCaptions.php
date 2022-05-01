<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityFeedGroupCaptions.
 *
 * @ORM\Table(name="activity_feed_group_captions")
 * @ORM\Entity
 */
class ActivityFeedGroupCaptions
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="activity_feed_group_captions_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ja", type="string", length=255, nullable=true)
     */
    private $ja;

    /**
     * @var string|null
     *
     * @ORM\Column(name="en", type="string", length=255, nullable=true)
     */
    private $en;

    /**
     * @var string|null
     *
     * @ORM\Column(name="de", type="string", length=255, nullable=true)
     */
    private $de;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fr", type="string", length=255, nullable=true)
     */
    private $fr;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getJa(): ?string
    {
        return $this->ja;
    }

    public function setJa(?string $ja): self
    {
        $this->ja = $ja;

        return $this;
    }

    public function getEn(): ?string
    {
        return $this->en;
    }

    public function setEn(?string $en): self
    {
        $this->en = $en;

        return $this;
    }

    public function getDe(): ?string
    {
        return $this->de;
    }

    public function setDe(?string $de): self
    {
        $this->de = $de;

        return $this;
    }

    public function getFr(): ?string
    {
        return $this->fr;
    }

    public function setFr(?string $fr): self
    {
        $this->fr = $fr;

        return $this;
    }
}
