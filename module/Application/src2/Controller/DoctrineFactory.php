<?php

namespace Application\Controller;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

final class DoctrineFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return null === $options ?
            new $requestedName($container->get('doctrine.entitymanager.orm_default')) :
            new $requestedName($container->get('doctrine.entitymanager.orm_default'), $options);

    }
}
