<?php

declare(strict_types=1);

namespace Brizy\Bundle\CloudEntitiesBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder( BrizyCloudEntitiesBundleExtension::ALIAS_NAME );
        $rootNode = $treeBuilder->getRootNode();

        $rootNode->append($this->createPersistenceNode());

        return $treeBuilder;
    }

    private function createPersistenceNode(): NodeDefinition
    {
        $treeBuilder = new TreeBuilder('persistence');
        $node = $treeBuilder->getRootNode();

        $node
            ->performNoDeepMerging()
            ->children()
            // Doctrine persistence
                ->arrayNode('doctrine')
                    ->children()
                        ->arrayNode('entity_manager')
                            ->children()
                                ->scalarNode('name')
                                    ->isRequired()
                                    ->info('Entity manager name used for Brizy Api Entities')
                                    ->cannotBeEmpty()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $node;
    }

}
