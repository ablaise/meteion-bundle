<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityFeedButtons.
 *
 * @ORM\Table(name="activity_feed_buttons")
 * @ORM\Entity
 */
class ActivityFeedButtons
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="activity_feed_buttons_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="banner_url", type="string", length=255, nullable=true)
     */
    private $bannerUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=true)
     */
    private $language;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picture_url", type="string", length=255, nullable=true)
     */
    private $pictureUrl;

    public function getPk(): ?int
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

    public function getBannerUrl(): ?string
    {
        return $this->bannerUrl;
    }

    public function setBannerUrl(?string $bannerUrl): self
    {
        $this->bannerUrl = $bannerUrl;

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

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getPictureUrl(): ?string
    {
        return $this->pictureUrl;
    }

    public function setPictureUrl(?string $pictureUrl): self
    {
        $this->pictureUrl = $pictureUrl;

        return $this;
    }
}
