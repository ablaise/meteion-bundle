<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IkdrouteTable.
 *
 * @ORM\Table(name="ikdroute_table", indexes={@ORM\Index(name="idx_318f37202c42079", columns={"route"})})
 * @ORM\Entity
 */
class IkdrouteTable
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ikdroute_table_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Ikdroute
     *
     * @ORM\ManyToOne(targetEntity="Ikdroute")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="route", referencedColumnName="pk")
     * })
     */
    private $route;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRoute(): ?Ikdroute
    {
        return $this->route;
    }

    public function setRoute(?Ikdroute $route): self
    {
        $this->route = $route;

        return $this;
    }
}
