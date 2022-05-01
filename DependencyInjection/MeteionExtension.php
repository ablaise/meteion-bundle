<?php

namespace MeteionBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class MeteionExtension extends Extension
{
    /**
     * @var array
     */
    public $configuration = null;

    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        foreach (['command', 'services'] as $resource) {
            $loader->load($resource.'.xml');
        }

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('meteion.dbal_connection', $config['dbal_connection'] ?? null);
        $container->setParameter('meteion.rawexd_path', $config['rawexd_path'] ?? null);
    }

    public function getAlias(): string
    {
        return Configuration::ALIAS;
    }
}
