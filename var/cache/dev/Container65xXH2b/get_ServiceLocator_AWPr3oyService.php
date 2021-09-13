<?php

namespace Container65xXH2b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AWPr3oyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AWPr3oy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AWPr3oy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'batchActionDto' => ['privates', '.errored..service_locator.AWPr3oy.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto', NULL, 'Cannot autowire service ".service_locator.AWPr3oy": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto" but no such service exists.'],
            'context' => ['privates', '.errored..service_locator.AWPr3oy.EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext', NULL, 'Cannot autowire service ".service_locator.AWPr3oy": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.'],
        ], [
            'batchActionDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto',
            'context' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext',
        ]);
    }
}
