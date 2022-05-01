<?php

namespace MeteionBundle;

use MeteionBundle\DependencyInjection\MeteionExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MeteionBundle extends Bundle
{
    /**
     * Overridden to allow for the custom extension alias.
     */
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            $this->extension = new MeteionExtension();
        }

        return $this->extension;
    }
}
