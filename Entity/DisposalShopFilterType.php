<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DisposalShopFilterType.
 *
 * @ORM\Table(name="disposal_shop_filter_type")
 * @ORM\Entity
 */
class DisposalShopFilterType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="disposal_shop_filter_type_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category", type="string", length=255, nullable=true)
     */
    private $category;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }
}
