<?php

namespace MeteionBundle\Service;

use Doctrine\Persistence\ManagerRegistry;
use Meteion\Meteion;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;

class MeteionManager
{
    /**
     * @var Meteion
     */
    private $meteion;

    /**
     * @var ManagerRegistry
     */
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine, ContainerBagInterface $bag)
    {
        $this->doctrine = $doctrine;

        $dbal = $bag->get('meteion.dbal_connection');
        if (!array_key_exists($dbal, $this->doctrine->getConnectionNames())) {
            throw new \LogicException(sprintf('"%s" must be a valid dbal connection name.', $dbal));
        }

        $path = $bag->get('meteion.rawexd_path');
        if (false === is_readable($path)) {
            throw new \LogicException('"rawexd" must be a valid path.');
        }

        $this->meteion = new Meteion($path, $this->doctrine->getConnection($dbal)->getParams());
    }

    /**
     * Runs Meteion.
     */
    public function run()
    {
        $this->meteion->run();
    }
}
