<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityFeedImages.
 *
 * @ORM\Table(name="activity_feed_images")
 * @ORM\Entity
 */
class ActivityFeedImages
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="activity_feed_images_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="expansion_image", type="string", length=255, nullable=true)
     */
    private $expansionImage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activity_feed_ja", type="string", length=255, nullable=true)
     */
    private $activityFeedJa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activity_feed_en", type="string", length=255, nullable=true)
     */
    private $activityFeedEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activity_feed_de", type="string", length=255, nullable=true)
     */
    private $activityFeedDe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activity_feed_fr", type="string", length=255, nullable=true)
     */
    private $activityFeedFr;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getExpansionImage(): ?string
    {
        return $this->expansionImage;
    }

    public function setExpansionImage(?string $expansionImage): self
    {
        $this->expansionImage = $expansionImage;

        return $this;
    }

    public function getActivityFeedJa(): ?string
    {
        return $this->activityFeedJa;
    }

    public function setActivityFeedJa(?string $activityFeedJa): self
    {
        $this->activityFeedJa = $activityFeedJa;

        return $this;
    }

    public function getActivityFeedEn(): ?string
    {
        return $this->activityFeedEn;
    }

    public function setActivityFeedEn(?string $activityFeedEn): self
    {
        $this->activityFeedEn = $activityFeedEn;

        return $this;
    }

    public function getActivityFeedDe(): ?string
    {
        return $this->activityFeedDe;
    }

    public function setActivityFeedDe(?string $activityFeedDe): self
    {
        $this->activityFeedDe = $activityFeedDe;

        return $this;
    }

    public function getActivityFeedFr(): ?string
    {
        return $this->activityFeedFr;
    }

    public function setActivityFeedFr(?string $activityFeedFr): self
    {
        $this->activityFeedFr = $activityFeedFr;

        return $this;
    }
}
