<?php

namespace MeteionBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public const ALIAS = 'meteion';

    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder(self::ALIAS);

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('dbal_connection')->defaultValue('default')->end()
                ->scalarNode('rawexd_path')->defaultNull()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
