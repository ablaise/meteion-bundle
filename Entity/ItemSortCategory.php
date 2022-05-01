<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemSortCategory.
 *
 * @ORM\Table(name="item_sort_category")
 * @ORM\Entity
 */
class ItemSortCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="item_sort_category_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="param", type="integer", nullable=true)
     */
    private $param;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getParam(): ?int
    {
        return $this->param;
    }

    public function setParam(?int $param): self
    {
        $this->param = $param;

        return $this;
    }
}
