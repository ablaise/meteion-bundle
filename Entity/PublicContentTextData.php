<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicContentTextData.
 *
 * @ORM\Table(name="public_content_text_data")
 * @ORM\Entity
 */
class PublicContentTextData
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="public_content_text_data_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_data", type="string", length=533, nullable=true)
     */
    private $textData;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getTextData(): ?string
    {
        return $this->textData;
    }

    public function setTextData(?string $textData): self
    {
        $this->textData = $textData;

        return $this;
    }
}
