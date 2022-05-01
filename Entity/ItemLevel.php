<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemLevel.
 *
 * @ORM\Table(name="item_level")
 * @ORM\Entity
 */
class ItemLevel
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="item_level_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="strength", type="bigint", nullable=true)
     */
    private $strength;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dexterity", type="bigint", nullable=true)
     */
    private $dexterity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="vitality", type="bigint", nullable=true)
     */
    private $vitality;

    /**
     * @var int|null
     *
     * @ORM\Column(name="intelligence", type="bigint", nullable=true)
     */
    private $intelligence;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mind", type="bigint", nullable=true)
     */
    private $mind;

    /**
     * @var int|null
     *
     * @ORM\Column(name="piety", type="bigint", nullable=true)
     */
    private $piety;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hp", type="bigint", nullable=true)
     */
    private $hp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mp", type="bigint", nullable=true)
     */
    private $mp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tp", type="bigint", nullable=true)
     */
    private $tp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gp", type="bigint", nullable=true)
     */
    private $gp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cp", type="bigint", nullable=true)
     */
    private $cp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_damage", type="bigint", nullable=true)
     */
    private $physicalDamage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magical_damage", type="bigint", nullable=true)
     */
    private $magicalDamage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="delay", type="bigint", nullable=true)
     */
    private $delay;

    /**
     * @var int|null
     *
     * @ORM\Column(name="additional_effect", type="bigint", nullable=true)
     */
    private $additionalEffect;

    /**
     * @var int|null
     *
     * @ORM\Column(name="attack_speed", type="bigint", nullable=true)
     */
    private $attackSpeed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="block_rate", type="bigint", nullable=true)
     */
    private $blockRate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="block_strength", type="bigint", nullable=true)
     */
    private $blockStrength;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tenacity", type="bigint", nullable=true)
     */
    private $tenacity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="attack_power", type="bigint", nullable=true)
     */
    private $attackPower;

    /**
     * @var int|null
     *
     * @ORM\Column(name="defense", type="bigint", nullable=true)
     */
    private $defense;

    /**
     * @var int|null
     *
     * @ORM\Column(name="direct_hit_rate", type="bigint", nullable=true)
     */
    private $directHitRate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="evasion", type="bigint", nullable=true)
     */
    private $evasion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magic_defense", type="bigint", nullable=true)
     */
    private $magicDefense;

    /**
     * @var int|null
     *
     * @ORM\Column(name="critical_hit_power", type="bigint", nullable=true)
     */
    private $criticalHitPower;

    /**
     * @var int|null
     *
     * @ORM\Column(name="critical_hit_resilience", type="bigint", nullable=true)
     */
    private $criticalHitResilience;

    /**
     * @var int|null
     *
     * @ORM\Column(name="critical_hit", type="bigint", nullable=true)
     */
    private $criticalHit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="critical_hit_evasion", type="bigint", nullable=true)
     */
    private $criticalHitEvasion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="slashing_resistance", type="bigint", nullable=true)
     */
    private $slashingResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="piercing_resistance", type="bigint", nullable=true)
     */
    private $piercingResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="blunt_resistance", type="bigint", nullable=true)
     */
    private $bluntResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="projectile_resistance", type="bigint", nullable=true)
     */
    private $projectileResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="attack_magic_potency", type="bigint", nullable=true)
     */
    private $attackMagicPotency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="healing_magic_potency", type="bigint", nullable=true)
     */
    private $healingMagicPotency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enhancement_magic_potency", type="bigint", nullable=true)
     */
    private $enhancementMagicPotency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enfeebling_magic_potency", type="bigint", nullable=true)
     */
    private $enfeeblingMagicPotency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fire_resistance", type="bigint", nullable=true)
     */
    private $fireResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ice_resistance", type="bigint", nullable=true)
     */
    private $iceResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="wind_resistance", type="bigint", nullable=true)
     */
    private $windResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="earth_resistance", type="bigint", nullable=true)
     */
    private $earthResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lightning_resistance", type="bigint", nullable=true)
     */
    private $lightningResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="water_resistance", type="bigint", nullable=true)
     */
    private $waterResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magic_resistance", type="bigint", nullable=true)
     */
    private $magicResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="determination", type="bigint", nullable=true)
     */
    private $determination;

    /**
     * @var int|null
     *
     * @ORM\Column(name="skill_speed", type="bigint", nullable=true)
     */
    private $skillSpeed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="spell_speed", type="bigint", nullable=true)
     */
    private $spellSpeed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="haste", type="bigint", nullable=true)
     */
    private $haste;

    /**
     * @var int|null
     *
     * @ORM\Column(name="morale", type="bigint", nullable=true)
     */
    private $morale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enmity", type="bigint", nullable=true)
     */
    private $enmity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enmity_reduction", type="bigint", nullable=true)
     */
    private $enmityReduction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="careful_desynthesis", type="bigint", nullable=true)
     */
    private $carefulDesynthesis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="expbonus", type="bigint", nullable=true)
     */
    private $expbonus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="regen", type="bigint", nullable=true)
     */
    private $regen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="refresh", type="bigint", nullable=true)
     */
    private $refresh;

    /**
     * @var int|null
     *
     * @ORM\Column(name="movement_speed", type="bigint", nullable=true)
     */
    private $movementSpeed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="spikes", type="bigint", nullable=true)
     */
    private $spikes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="slow_resistance", type="bigint", nullable=true)
     */
    private $slowResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="petrification_resistance", type="bigint", nullable=true)
     */
    private $petrificationResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="paralysis_resistance", type="bigint", nullable=true)
     */
    private $paralysisResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="silence_resistance", type="bigint", nullable=true)
     */
    private $silenceResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="blind_resistance", type="bigint", nullable=true)
     */
    private $blindResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="poison_resistance", type="bigint", nullable=true)
     */
    private $poisonResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stun_resistance", type="bigint", nullable=true)
     */
    private $stunResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sleep_resistance", type="bigint", nullable=true)
     */
    private $sleepResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bind_resistance", type="bigint", nullable=true)
     */
    private $bindResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="heavy_resistance", type="bigint", nullable=true)
     */
    private $heavyResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="doom_resistance", type="bigint", nullable=true)
     */
    private $doomResistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reduced_durability_loss", type="bigint", nullable=true)
     */
    private $reducedDurabilityLoss;

    /**
     * @var int|null
     *
     * @ORM\Column(name="increased_spiritbond_gain", type="bigint", nullable=true)
     */
    private $increasedSpiritbondGain;

    /**
     * @var int|null
     *
     * @ORM\Column(name="craftsmanship", type="bigint", nullable=true)
     */
    private $craftsmanship;

    /**
     * @var int|null
     *
     * @ORM\Column(name="control", type="bigint", nullable=true)
     */
    private $control;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gathering", type="bigint", nullable=true)
     */
    private $gathering;

    /**
     * @var int|null
     *
     * @ORM\Column(name="perception", type="bigint", nullable=true)
     */
    private $perception;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_74", type="bigint", nullable=true)
     */
    private $column74;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getStrength(): ?string
    {
        return $this->strength;
    }

    public function setStrength(?string $strength): self
    {
        $this->strength = $strength;

        return $this;
    }

    public function getDexterity(): ?string
    {
        return $this->dexterity;
    }

    public function setDexterity(?string $dexterity): self
    {
        $this->dexterity = $dexterity;

        return $this;
    }

    public function getVitality(): ?string
    {
        return $this->vitality;
    }

    public function setVitality(?string $vitality): self
    {
        $this->vitality = $vitality;

        return $this;
    }

    public function getIntelligence(): ?string
    {
        return $this->intelligence;
    }

    public function setIntelligence(?string $intelligence): self
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    public function getMind(): ?string
    {
        return $this->mind;
    }

    public function setMind(?string $mind): self
    {
        $this->mind = $mind;

        return $this;
    }

    public function getPiety(): ?string
    {
        return $this->piety;
    }

    public function setPiety(?string $piety): self
    {
        $this->piety = $piety;

        return $this;
    }

    public function getHp(): ?string
    {
        return $this->hp;
    }

    public function setHp(?string $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getMp(): ?string
    {
        return $this->mp;
    }

    public function setMp(?string $mp): self
    {
        $this->mp = $mp;

        return $this;
    }

    public function getTp(): ?string
    {
        return $this->tp;
    }

    public function setTp(?string $tp): self
    {
        $this->tp = $tp;

        return $this;
    }

    public function getGp(): ?string
    {
        return $this->gp;
    }

    public function setGp(?string $gp): self
    {
        $this->gp = $gp;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(?string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getPhysicalDamage(): ?string
    {
        return $this->physicalDamage;
    }

    public function setPhysicalDamage(?string $physicalDamage): self
    {
        $this->physicalDamage = $physicalDamage;

        return $this;
    }

    public function getMagicalDamage(): ?string
    {
        return $this->magicalDamage;
    }

    public function setMagicalDamage(?string $magicalDamage): self
    {
        $this->magicalDamage = $magicalDamage;

        return $this;
    }

    public function getDelay(): ?string
    {
        return $this->delay;
    }

    public function setDelay(?string $delay): self
    {
        $this->delay = $delay;

        return $this;
    }

    public function getAdditionalEffect(): ?string
    {
        return $this->additionalEffect;
    }

    public function setAdditionalEffect(?string $additionalEffect): self
    {
        $this->additionalEffect = $additionalEffect;

        return $this;
    }

    public function getAttackSpeed(): ?string
    {
        return $this->attackSpeed;
    }

    public function setAttackSpeed(?string $attackSpeed): self
    {
        $this->attackSpeed = $attackSpeed;

        return $this;
    }

    public function getBlockRate(): ?string
    {
        return $this->blockRate;
    }

    public function setBlockRate(?string $blockRate): self
    {
        $this->blockRate = $blockRate;

        return $this;
    }

    public function getBlockStrength(): ?string
    {
        return $this->blockStrength;
    }

    public function setBlockStrength(?string $blockStrength): self
    {
        $this->blockStrength = $blockStrength;

        return $this;
    }

    public function getTenacity(): ?string
    {
        return $this->tenacity;
    }

    public function setTenacity(?string $tenacity): self
    {
        $this->tenacity = $tenacity;

        return $this;
    }

    public function getAttackPower(): ?string
    {
        return $this->attackPower;
    }

    public function setAttackPower(?string $attackPower): self
    {
        $this->attackPower = $attackPower;

        return $this;
    }

    public function getDefense(): ?string
    {
        return $this->defense;
    }

    public function setDefense(?string $defense): self
    {
        $this->defense = $defense;

        return $this;
    }

    public function getDirectHitRate(): ?string
    {
        return $this->directHitRate;
    }

    public function setDirectHitRate(?string $directHitRate): self
    {
        $this->directHitRate = $directHitRate;

        return $this;
    }

    public function getEvasion(): ?string
    {
        return $this->evasion;
    }

    public function setEvasion(?string $evasion): self
    {
        $this->evasion = $evasion;

        return $this;
    }

    public function getMagicDefense(): ?string
    {
        return $this->magicDefense;
    }

    public function setMagicDefense(?string $magicDefense): self
    {
        $this->magicDefense = $magicDefense;

        return $this;
    }

    public function getCriticalHitPower(): ?string
    {
        return $this->criticalHitPower;
    }

    public function setCriticalHitPower(?string $criticalHitPower): self
    {
        $this->criticalHitPower = $criticalHitPower;

        return $this;
    }

    public function getCriticalHitResilience(): ?string
    {
        return $this->criticalHitResilience;
    }

    public function setCriticalHitResilience(?string $criticalHitResilience): self
    {
        $this->criticalHitResilience = $criticalHitResilience;

        return $this;
    }

    public function getCriticalHit(): ?string
    {
        return $this->criticalHit;
    }

    public function setCriticalHit(?string $criticalHit): self
    {
        $this->criticalHit = $criticalHit;

        return $this;
    }

    public function getCriticalHitEvasion(): ?string
    {
        return $this->criticalHitEvasion;
    }

    public function setCriticalHitEvasion(?string $criticalHitEvasion): self
    {
        $this->criticalHitEvasion = $criticalHitEvasion;

        return $this;
    }

    public function getSlashingResistance(): ?string
    {
        return $this->slashingResistance;
    }

    public function setSlashingResistance(?string $slashingResistance): self
    {
        $this->slashingResistance = $slashingResistance;

        return $this;
    }

    public function getPiercingResistance(): ?string
    {
        return $this->piercingResistance;
    }

    public function setPiercingResistance(?string $piercingResistance): self
    {
        $this->piercingResistance = $piercingResistance;

        return $this;
    }

    public function getBluntResistance(): ?string
    {
        return $this->bluntResistance;
    }

    public function setBluntResistance(?string $bluntResistance): self
    {
        $this->bluntResistance = $bluntResistance;

        return $this;
    }

    public function getProjectileResistance(): ?string
    {
        return $this->projectileResistance;
    }

    public function setProjectileResistance(?string $projectileResistance): self
    {
        $this->projectileResistance = $projectileResistance;

        return $this;
    }

    public function getAttackMagicPotency(): ?string
    {
        return $this->attackMagicPotency;
    }

    public function setAttackMagicPotency(?string $attackMagicPotency): self
    {
        $this->attackMagicPotency = $attackMagicPotency;

        return $this;
    }

    public function getHealingMagicPotency(): ?string
    {
        return $this->healingMagicPotency;
    }

    public function setHealingMagicPotency(?string $healingMagicPotency): self
    {
        $this->healingMagicPotency = $healingMagicPotency;

        return $this;
    }

    public function getEnhancementMagicPotency(): ?string
    {
        return $this->enhancementMagicPotency;
    }

    public function setEnhancementMagicPotency(?string $enhancementMagicPotency): self
    {
        $this->enhancementMagicPotency = $enhancementMagicPotency;

        return $this;
    }

    public function getEnfeeblingMagicPotency(): ?string
    {
        return $this->enfeeblingMagicPotency;
    }

    public function setEnfeeblingMagicPotency(?string $enfeeblingMagicPotency): self
    {
        $this->enfeeblingMagicPotency = $enfeeblingMagicPotency;

        return $this;
    }

    public function getFireResistance(): ?string
    {
        return $this->fireResistance;
    }

    public function setFireResistance(?string $fireResistance): self
    {
        $this->fireResistance = $fireResistance;

        return $this;
    }

    public function getIceResistance(): ?string
    {
        return $this->iceResistance;
    }

    public function setIceResistance(?string $iceResistance): self
    {
        $this->iceResistance = $iceResistance;

        return $this;
    }

    public function getWindResistance(): ?string
    {
        return $this->windResistance;
    }

    public function setWindResistance(?string $windResistance): self
    {
        $this->windResistance = $windResistance;

        return $this;
    }

    public function getEarthResistance(): ?string
    {
        return $this->earthResistance;
    }

    public function setEarthResistance(?string $earthResistance): self
    {
        $this->earthResistance = $earthResistance;

        return $this;
    }

    public function getLightningResistance(): ?string
    {
        return $this->lightningResistance;
    }

    public function setLightningResistance(?string $lightningResistance): self
    {
        $this->lightningResistance = $lightningResistance;

        return $this;
    }

    public function getWaterResistance(): ?string
    {
        return $this->waterResistance;
    }

    public function setWaterResistance(?string $waterResistance): self
    {
        $this->waterResistance = $waterResistance;

        return $this;
    }

    public function getMagicResistance(): ?string
    {
        return $this->magicResistance;
    }

    public function setMagicResistance(?string $magicResistance): self
    {
        $this->magicResistance = $magicResistance;

        return $this;
    }

    public function getDetermination(): ?string
    {
        return $this->determination;
    }

    public function setDetermination(?string $determination): self
    {
        $this->determination = $determination;

        return $this;
    }

    public function getSkillSpeed(): ?string
    {
        return $this->skillSpeed;
    }

    public function setSkillSpeed(?string $skillSpeed): self
    {
        $this->skillSpeed = $skillSpeed;

        return $this;
    }

    public function getSpellSpeed(): ?string
    {
        return $this->spellSpeed;
    }

    public function setSpellSpeed(?string $spellSpeed): self
    {
        $this->spellSpeed = $spellSpeed;

        return $this;
    }

    public function getHaste(): ?string
    {
        return $this->haste;
    }

    public function setHaste(?string $haste): self
    {
        $this->haste = $haste;

        return $this;
    }

    public function getMorale(): ?string
    {
        return $this->morale;
    }

    public function setMorale(?string $morale): self
    {
        $this->morale = $morale;

        return $this;
    }

    public function getEnmity(): ?string
    {
        return $this->enmity;
    }

    public function setEnmity(?string $enmity): self
    {
        $this->enmity = $enmity;

        return $this;
    }

    public function getEnmityReduction(): ?string
    {
        return $this->enmityReduction;
    }

    public function setEnmityReduction(?string $enmityReduction): self
    {
        $this->enmityReduction = $enmityReduction;

        return $this;
    }

    public function getCarefulDesynthesis(): ?string
    {
        return $this->carefulDesynthesis;
    }

    public function setCarefulDesynthesis(?string $carefulDesynthesis): self
    {
        $this->carefulDesynthesis = $carefulDesynthesis;

        return $this;
    }

    public function getExpbonus(): ?string
    {
        return $this->expbonus;
    }

    public function setExpbonus(?string $expbonus): self
    {
        $this->expbonus = $expbonus;

        return $this;
    }

    public function getRegen(): ?string
    {
        return $this->regen;
    }

    public function setRegen(?string $regen): self
    {
        $this->regen = $regen;

        return $this;
    }

    public function getRefresh(): ?string
    {
        return $this->refresh;
    }

    public function setRefresh(?string $refresh): self
    {
        $this->refresh = $refresh;

        return $this;
    }

    public function getMovementSpeed(): ?string
    {
        return $this->movementSpeed;
    }

    public function setMovementSpeed(?string $movementSpeed): self
    {
        $this->movementSpeed = $movementSpeed;

        return $this;
    }

    public function getSpikes(): ?string
    {
        return $this->spikes;
    }

    public function setSpikes(?string $spikes): self
    {
        $this->spikes = $spikes;

        return $this;
    }

    public function getSlowResistance(): ?string
    {
        return $this->slowResistance;
    }

    public function setSlowResistance(?string $slowResistance): self
    {
        $this->slowResistance = $slowResistance;

        return $this;
    }

    public function getPetrificationResistance(): ?string
    {
        return $this->petrificationResistance;
    }

    public function setPetrificationResistance(?string $petrificationResistance): self
    {
        $this->petrificationResistance = $petrificationResistance;

        return $this;
    }

    public function getParalysisResistance(): ?string
    {
        return $this->paralysisResistance;
    }

    public function setParalysisResistance(?string $paralysisResistance): self
    {
        $this->paralysisResistance = $paralysisResistance;

        return $this;
    }

    public function getSilenceResistance(): ?string
    {
        return $this->silenceResistance;
    }

    public function setSilenceResistance(?string $silenceResistance): self
    {
        $this->silenceResistance = $silenceResistance;

        return $this;
    }

    public function getBlindResistance(): ?string
    {
        return $this->blindResistance;
    }

    public function setBlindResistance(?string $blindResistance): self
    {
        $this->blindResistance = $blindResistance;

        return $this;
    }

    public function getPoisonResistance(): ?string
    {
        return $this->poisonResistance;
    }

    public function setPoisonResistance(?string $poisonResistance): self
    {
        $this->poisonResistance = $poisonResistance;

        return $this;
    }

    public function getStunResistance(): ?string
    {
        return $this->stunResistance;
    }

    public function setStunResistance(?string $stunResistance): self
    {
        $this->stunResistance = $stunResistance;

        return $this;
    }

    public function getSleepResistance(): ?string
    {
        return $this->sleepResistance;
    }

    public function setSleepResistance(?string $sleepResistance): self
    {
        $this->sleepResistance = $sleepResistance;

        return $this;
    }

    public function getBindResistance(): ?string
    {
        return $this->bindResistance;
    }

    public function setBindResistance(?string $bindResistance): self
    {
        $this->bindResistance = $bindResistance;

        return $this;
    }

    public function getHeavyResistance(): ?string
    {
        return $this->heavyResistance;
    }

    public function setHeavyResistance(?string $heavyResistance): self
    {
        $this->heavyResistance = $heavyResistance;

        return $this;
    }

    public function getDoomResistance(): ?string
    {
        return $this->doomResistance;
    }

    public function setDoomResistance(?string $doomResistance): self
    {
        $this->doomResistance = $doomResistance;

        return $this;
    }

    public function getReducedDurabilityLoss(): ?string
    {
        return $this->reducedDurabilityLoss;
    }

    public function setReducedDurabilityLoss(?string $reducedDurabilityLoss): self
    {
        $this->reducedDurabilityLoss = $reducedDurabilityLoss;

        return $this;
    }

    public function getIncreasedSpiritbondGain(): ?string
    {
        return $this->increasedSpiritbondGain;
    }

    public function setIncreasedSpiritbondGain(?string $increasedSpiritbondGain): self
    {
        $this->increasedSpiritbondGain = $increasedSpiritbondGain;

        return $this;
    }

    public function getCraftsmanship(): ?string
    {
        return $this->craftsmanship;
    }

    public function setCraftsmanship(?string $craftsmanship): self
    {
        $this->craftsmanship = $craftsmanship;

        return $this;
    }

    public function getControl(): ?string
    {
        return $this->control;
    }

    public function setControl(?string $control): self
    {
        $this->control = $control;

        return $this;
    }

    public function getGathering(): ?string
    {
        return $this->gathering;
    }

    public function setGathering(?string $gathering): self
    {
        $this->gathering = $gathering;

        return $this;
    }

    public function getPerception(): ?string
    {
        return $this->perception;
    }

    public function setPerception(?string $perception): self
    {
        $this->perception = $perception;

        return $this;
    }

    public function getColumn74(): ?string
    {
        return $this->column74;
    }

    public function setColumn74(?string $column74): self
    {
        $this->column74 = $column74;

        return $this;
    }
}
