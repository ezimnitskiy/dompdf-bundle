<?php

/*
 * (c) EffectiveSoft <evgeniy.zimnitskiy@effective-soft.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ES\DompdfBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root('es_dompdf')->children();

        $rootNode
            ->scalarNode('webDir')->defaultValue('%kernel.root_dir%/../web')->end()
            ->arrayNode('defaults')
                ->useAttributeAsKey('name')
                ->prototype('scalar')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
