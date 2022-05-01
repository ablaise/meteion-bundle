<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Credit.
 *
 * @ORM\Table(name="credit", indexes={@ORM\Index(name="idx_1cc16efeec40f89c", columns={"roles_2"}), @ORM\Index(name="idx_1cc16efeec2fc103", columns={"english_cast_2"}), @ORM\Index(name="idx_1cc16efe790bf608", columns={"german_cast_1"}), @ORM\Index(name="idx_1cc16efe7549a926", columns={"roles_1"}), @ORM\Index(name="idx_1cc16efe375a1e63", columns={"japanese_cast_1"}), @ORM\Index(name="idx_1cc16efe752690b9", columns={"english_cast_1"}), @ORM\Index(name="idx_1cc16efeae534fd9", columns={"japanese_cast_2"}), @ORM\Index(name="idx_1cc16efee002a7b2", columns={"german_cast_2"}), @ORM\Index(name="idx_1cc16efe587e60b4", columns={"french_cast_1"}), @ORM\Index(name="idx_1cc16efec177310e", columns={"french_cast_2"})})
 * @ORM\Entity
 */
class Credit
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="credit_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var CreditCast
     *
     * @ORM\ManyToOne(targetEntity="CreditCast")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="german_cast_2", referencedColumnName="pk")
     * })
     */
    private $germanCast2;

    /**
     * @var CreditCast
     *
     * @ORM\ManyToOne(targetEntity="CreditCast")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="french_cast_2", referencedColumnName="pk")
     * })
     */
    private $frenchCast2;

    /**
     * @var CreditCast
     *
     * @ORM\ManyToOne(targetEntity="CreditCast")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="english_cast_2", referencedColumnName="pk")
     * })
     */
    private $englishCast2;

    /**
     * @var CreditCast
     *
     * @ORM\ManyToOne(targetEntity="CreditCast")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="japanese_cast_2", referencedColumnName="pk")
     * })
     */
    private $japaneseCast2;

    /**
     * @var CreditCast
     *
     * @ORM\ManyToOne(targetEntity="CreditCast")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="roles_2", referencedColumnName="pk")
     * })
     */
    private $roles2;

    /**
     * @var CreditCast
     *
     * @ORM\ManyToOne(targetEntity="CreditCast")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="german_cast_1", referencedColumnName="pk")
     * })
     */
    private $germanCast1;

    /**
     * @var CreditCast
     *
     * @ORM\ManyToOne(targetEntity="CreditCast")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="french_cast_1", referencedColumnName="pk")
     * })
     */
    private $frenchCast1;

    /**
     * @var CreditCast
     *
     * @ORM\ManyToOne(targetEntity="CreditCast")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="english_cast_1", referencedColumnName="pk")
     * })
     */
    private $englishCast1;

    /**
     * @var CreditCast
     *
     * @ORM\ManyToOne(targetEntity="CreditCast")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="japanese_cast_1", referencedColumnName="pk")
     * })
     */
    private $japaneseCast1;

    /**
     * @var CreditCast
     *
     * @ORM\ManyToOne(targetEntity="CreditCast")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="roles_1", referencedColumnName="pk")
     * })
     */
    private $roles1;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getColumn1(): ?int
    {
        return $this->column1;
    }

    public function setColumn1(?int $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getGermanCast2(): ?CreditCast
    {
        return $this->germanCast2;
    }

    public function setGermanCast2(?CreditCast $germanCast2): self
    {
        $this->germanCast2 = $germanCast2;

        return $this;
    }

    public function getFrenchCast2(): ?CreditCast
    {
        return $this->frenchCast2;
    }

    public function setFrenchCast2(?CreditCast $frenchCast2): self
    {
        $this->frenchCast2 = $frenchCast2;

        return $this;
    }

    public function getEnglishCast2(): ?CreditCast
    {
        return $this->englishCast2;
    }

    public function setEnglishCast2(?CreditCast $englishCast2): self
    {
        $this->englishCast2 = $englishCast2;

        return $this;
    }

    public function getJapaneseCast2(): ?CreditCast
    {
        return $this->japaneseCast2;
    }

    public function setJapaneseCast2(?CreditCast $japaneseCast2): self
    {
        $this->japaneseCast2 = $japaneseCast2;

        return $this;
    }

    public function getRoles2(): ?CreditCast
    {
        return $this->roles2;
    }

    public function setRoles2(?CreditCast $roles2): self
    {
        $this->roles2 = $roles2;

        return $this;
    }

    public function getGermanCast1(): ?CreditCast
    {
        return $this->germanCast1;
    }

    public function setGermanCast1(?CreditCast $germanCast1): self
    {
        $this->germanCast1 = $germanCast1;

        return $this;
    }

    public function getFrenchCast1(): ?CreditCast
    {
        return $this->frenchCast1;
    }

    public function setFrenchCast1(?CreditCast $frenchCast1): self
    {
        $this->frenchCast1 = $frenchCast1;

        return $this;
    }

    public function getEnglishCast1(): ?CreditCast
    {
        return $this->englishCast1;
    }

    public function setEnglishCast1(?CreditCast $englishCast1): self
    {
        $this->englishCast1 = $englishCast1;

        return $this;
    }

    public function getJapaneseCast1(): ?CreditCast
    {
        return $this->japaneseCast1;
    }

    public function setJapaneseCast1(?CreditCast $japaneseCast1): self
    {
        $this->japaneseCast1 = $japaneseCast1;

        return $this;
    }

    public function getRoles1(): ?CreditCast
    {
        return $this->roles1;
    }

    public function setRoles1(?CreditCast $roles1): self
    {
        $this->roles1 = $roles1;

        return $this;
    }
}
