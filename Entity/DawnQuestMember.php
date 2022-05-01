<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DawnQuestMember.
 *
 * @ORM\Table(name="dawn_quest_member", indexes={@ORM\Index(name="idx_58112ed070e4fa78", columns={"member"}), @ORM\Index(name="idx_58112ed0ed4b199f", columns={"class"})})
 * @ORM\Entity
 */
class DawnQuestMember
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dawn_quest_member_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="big_image_old", type="integer", nullable=true)
     */
    private $bigImageOld;

    /**
     * @var int|null
     *
     * @ORM\Column(name="big_image_new", type="integer", nullable=true)
     */
    private $bigImageNew;

    /**
     * @var DawnMemberUiparam
     *
     * @ORM\ManyToOne(targetEntity="DawnMemberUiparam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class", referencedColumnName="pk")
     * })
     */
    private $class;

    /**
     * @var EnpcResident
     *
     * @ORM\ManyToOne(targetEntity="EnpcResident")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member", referencedColumnName="pk")
     * })
     */
    private $member;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getBigImageOld(): ?int
    {
        return $this->bigImageOld;
    }

    public function setBigImageOld(?int $bigImageOld): self
    {
        $this->bigImageOld = $bigImageOld;

        return $this;
    }

    public function getBigImageNew(): ?int
    {
        return $this->bigImageNew;
    }

    public function setBigImageNew(?int $bigImageNew): self
    {
        $this->bigImageNew = $bigImageNew;

        return $this;
    }

    public function getClass(): ?DawnMemberUiparam
    {
        return $this->class;
    }

    public function setClass(?DawnMemberUiparam $class): self
    {
        $this->class = $class;

        return $this;
    }

    public function getMember(): ?EnpcResident
    {
        return $this->member;
    }

    public function setMember(?EnpcResident $member): self
    {
        $this->member = $member;

        return $this;
    }
}
