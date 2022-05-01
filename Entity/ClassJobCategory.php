<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClassJobCategory.
 *
 * @ORM\Table(name="class_job_category")
 * @ORM\Entity
 */
class ClassJobCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="class_job_category_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="adv", type="boolean", nullable=true)
     */
    private $adv;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="gla", type="boolean", nullable=true)
     */
    private $gla;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pgl", type="boolean", nullable=true)
     */
    private $pgl;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mrd", type="boolean", nullable=true)
     */
    private $mrd;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lnc", type="boolean", nullable=true)
     */
    private $lnc;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="arc", type="boolean", nullable=true)
     */
    private $arc;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cnj", type="boolean", nullable=true)
     */
    private $cnj;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="thm", type="boolean", nullable=true)
     */
    private $thm;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="crp", type="boolean", nullable=true)
     */
    private $crp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="bsm", type="boolean", nullable=true)
     */
    private $bsm;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="arm", type="boolean", nullable=true)
     */
    private $arm;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="gsm", type="boolean", nullable=true)
     */
    private $gsm;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ltw", type="boolean", nullable=true)
     */
    private $ltw;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="wvr", type="boolean", nullable=true)
     */
    private $wvr;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="alc", type="boolean", nullable=true)
     */
    private $alc;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cul", type="boolean", nullable=true)
     */
    private $cul;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="min", type="boolean", nullable=true)
     */
    private $min;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="btn", type="boolean", nullable=true)
     */
    private $btn;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="fsh", type="boolean", nullable=true)
     */
    private $fsh;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pld", type="boolean", nullable=true)
     */
    private $pld;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mnk", type="boolean", nullable=true)
     */
    private $mnk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="war", type="boolean", nullable=true)
     */
    private $war;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="drg", type="boolean", nullable=true)
     */
    private $drg;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="brd", type="boolean", nullable=true)
     */
    private $brd;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="whm", type="boolean", nullable=true)
     */
    private $whm;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="blm", type="boolean", nullable=true)
     */
    private $blm;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="acn", type="boolean", nullable=true)
     */
    private $acn;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="smn", type="boolean", nullable=true)
     */
    private $smn;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sch", type="boolean", nullable=true)
     */
    private $sch;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="rog", type="boolean", nullable=true)
     */
    private $rog;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="nin", type="boolean", nullable=true)
     */
    private $nin;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mch", type="boolean", nullable=true)
     */
    private $mch;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="drk", type="boolean", nullable=true)
     */
    private $drk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ast", type="boolean", nullable=true)
     */
    private $ast;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sam", type="boolean", nullable=true)
     */
    private $sam;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="rdm", type="boolean", nullable=true)
     */
    private $rdm;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="blu", type="boolean", nullable=true)
     */
    private $blu;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="gnb", type="boolean", nullable=true)
     */
    private $gnb;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="dnc", type="boolean", nullable=true)
     */
    private $dnc;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="rpr", type="boolean", nullable=true)
     */
    private $rpr;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sge", type="boolean", nullable=true)
     */
    private $sge;

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

    public function getAdv(): ?bool
    {
        return $this->adv;
    }

    public function setAdv(?bool $adv): self
    {
        $this->adv = $adv;

        return $this;
    }

    public function getGla(): ?bool
    {
        return $this->gla;
    }

    public function setGla(?bool $gla): self
    {
        $this->gla = $gla;

        return $this;
    }

    public function getPgl(): ?bool
    {
        return $this->pgl;
    }

    public function setPgl(?bool $pgl): self
    {
        $this->pgl = $pgl;

        return $this;
    }

    public function getMrd(): ?bool
    {
        return $this->mrd;
    }

    public function setMrd(?bool $mrd): self
    {
        $this->mrd = $mrd;

        return $this;
    }

    public function getLnc(): ?bool
    {
        return $this->lnc;
    }

    public function setLnc(?bool $lnc): self
    {
        $this->lnc = $lnc;

        return $this;
    }

    public function getArc(): ?bool
    {
        return $this->arc;
    }

    public function setArc(?bool $arc): self
    {
        $this->arc = $arc;

        return $this;
    }

    public function getCnj(): ?bool
    {
        return $this->cnj;
    }

    public function setCnj(?bool $cnj): self
    {
        $this->cnj = $cnj;

        return $this;
    }

    public function getThm(): ?bool
    {
        return $this->thm;
    }

    public function setThm(?bool $thm): self
    {
        $this->thm = $thm;

        return $this;
    }

    public function getCrp(): ?bool
    {
        return $this->crp;
    }

    public function setCrp(?bool $crp): self
    {
        $this->crp = $crp;

        return $this;
    }

    public function getBsm(): ?bool
    {
        return $this->bsm;
    }

    public function setBsm(?bool $bsm): self
    {
        $this->bsm = $bsm;

        return $this;
    }

    public function getArm(): ?bool
    {
        return $this->arm;
    }

    public function setArm(?bool $arm): self
    {
        $this->arm = $arm;

        return $this;
    }

    public function getGsm(): ?bool
    {
        return $this->gsm;
    }

    public function setGsm(?bool $gsm): self
    {
        $this->gsm = $gsm;

        return $this;
    }

    public function getLtw(): ?bool
    {
        return $this->ltw;
    }

    public function setLtw(?bool $ltw): self
    {
        $this->ltw = $ltw;

        return $this;
    }

    public function getWvr(): ?bool
    {
        return $this->wvr;
    }

    public function setWvr(?bool $wvr): self
    {
        $this->wvr = $wvr;

        return $this;
    }

    public function getAlc(): ?bool
    {
        return $this->alc;
    }

    public function setAlc(?bool $alc): self
    {
        $this->alc = $alc;

        return $this;
    }

    public function getCul(): ?bool
    {
        return $this->cul;
    }

    public function setCul(?bool $cul): self
    {
        $this->cul = $cul;

        return $this;
    }

    public function getMin(): ?bool
    {
        return $this->min;
    }

    public function setMin(?bool $min): self
    {
        $this->min = $min;

        return $this;
    }

    public function getBtn(): ?bool
    {
        return $this->btn;
    }

    public function setBtn(?bool $btn): self
    {
        $this->btn = $btn;

        return $this;
    }

    public function getFsh(): ?bool
    {
        return $this->fsh;
    }

    public function setFsh(?bool $fsh): self
    {
        $this->fsh = $fsh;

        return $this;
    }

    public function getPld(): ?bool
    {
        return $this->pld;
    }

    public function setPld(?bool $pld): self
    {
        $this->pld = $pld;

        return $this;
    }

    public function getMnk(): ?bool
    {
        return $this->mnk;
    }

    public function setMnk(?bool $mnk): self
    {
        $this->mnk = $mnk;

        return $this;
    }

    public function getWar(): ?bool
    {
        return $this->war;
    }

    public function setWar(?bool $war): self
    {
        $this->war = $war;

        return $this;
    }

    public function getDrg(): ?bool
    {
        return $this->drg;
    }

    public function setDrg(?bool $drg): self
    {
        $this->drg = $drg;

        return $this;
    }

    public function getBrd(): ?bool
    {
        return $this->brd;
    }

    public function setBrd(?bool $brd): self
    {
        $this->brd = $brd;

        return $this;
    }

    public function getWhm(): ?bool
    {
        return $this->whm;
    }

    public function setWhm(?bool $whm): self
    {
        $this->whm = $whm;

        return $this;
    }

    public function getBlm(): ?bool
    {
        return $this->blm;
    }

    public function setBlm(?bool $blm): self
    {
        $this->blm = $blm;

        return $this;
    }

    public function getAcn(): ?bool
    {
        return $this->acn;
    }

    public function setAcn(?bool $acn): self
    {
        $this->acn = $acn;

        return $this;
    }

    public function getSmn(): ?bool
    {
        return $this->smn;
    }

    public function setSmn(?bool $smn): self
    {
        $this->smn = $smn;

        return $this;
    }

    public function getSch(): ?bool
    {
        return $this->sch;
    }

    public function setSch(?bool $sch): self
    {
        $this->sch = $sch;

        return $this;
    }

    public function getRog(): ?bool
    {
        return $this->rog;
    }

    public function setRog(?bool $rog): self
    {
        $this->rog = $rog;

        return $this;
    }

    public function getNin(): ?bool
    {
        return $this->nin;
    }

    public function setNin(?bool $nin): self
    {
        $this->nin = $nin;

        return $this;
    }

    public function getMch(): ?bool
    {
        return $this->mch;
    }

    public function setMch(?bool $mch): self
    {
        $this->mch = $mch;

        return $this;
    }

    public function getDrk(): ?bool
    {
        return $this->drk;
    }

    public function setDrk(?bool $drk): self
    {
        $this->drk = $drk;

        return $this;
    }

    public function getAst(): ?bool
    {
        return $this->ast;
    }

    public function setAst(?bool $ast): self
    {
        $this->ast = $ast;

        return $this;
    }

    public function getSam(): ?bool
    {
        return $this->sam;
    }

    public function setSam(?bool $sam): self
    {
        $this->sam = $sam;

        return $this;
    }

    public function getRdm(): ?bool
    {
        return $this->rdm;
    }

    public function setRdm(?bool $rdm): self
    {
        $this->rdm = $rdm;

        return $this;
    }

    public function getBlu(): ?bool
    {
        return $this->blu;
    }

    public function setBlu(?bool $blu): self
    {
        $this->blu = $blu;

        return $this;
    }

    public function getGnb(): ?bool
    {
        return $this->gnb;
    }

    public function setGnb(?bool $gnb): self
    {
        $this->gnb = $gnb;

        return $this;
    }

    public function getDnc(): ?bool
    {
        return $this->dnc;
    }

    public function setDnc(?bool $dnc): self
    {
        $this->dnc = $dnc;

        return $this;
    }

    public function getRpr(): ?bool
    {
        return $this->rpr;
    }

    public function setRpr(?bool $rpr): self
    {
        $this->rpr = $rpr;

        return $this;
    }

    public function getSge(): ?bool
    {
        return $this->sge;
    }

    public function setSge(?bool $sge): self
    {
        $this->sge = $sge;

        return $this;
    }
}
