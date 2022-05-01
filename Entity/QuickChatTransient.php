<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuickChatTransient.
 *
 * @ORM\Table(name="quick_chat_transient")
 * @ORM\Entity
 */
class QuickChatTransient
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quick_chat_transient_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_output", type="string", length=262, nullable=true)
     */
    private $textOutput;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getTextOutput(): ?string
    {
        return $this->textOutput;
    }

    public function setTextOutput(?string $textOutput): self
    {
        $this->textOutput = $textOutput;

        return $this;
    }
}
