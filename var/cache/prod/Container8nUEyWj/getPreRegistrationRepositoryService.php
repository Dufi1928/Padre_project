<?php

namespace Container8nUEyWj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPreRegistrationRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PreRegistrationRepository' shared autowired service.
     *
     * @return \App\Repository\PreRegistrationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PreRegistrationRepository'] = new \App\Repository\PreRegistrationRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}