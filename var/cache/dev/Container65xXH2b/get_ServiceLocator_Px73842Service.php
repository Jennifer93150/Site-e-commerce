<?php

namespace Container65xXH2b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Px73842Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Px73842' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Px73842'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cart' => ['privates', 'App\\Classe\\Cart', 'getCartService', true],
            'productRepo' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'cart' => 'App\\Classe\\Cart',
            'productRepo' => 'App\\Repository\\ProductRepository',
        ]);
    }
}