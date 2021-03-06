<?php
/**
 * Created by PhpStorm.
 * User: terainfor
 * Date: 19/10/16
 * Time: 15:22
 */

namespace Allugator\V1\Rest\Busca;


use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class BuscaTableGatewayFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dbadpter = $serviceLocator->get('dbadapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new BuscaEntity());
        $tablegateway = new TableGateway('produto', $dbadpter, null, $hydrator);
        return $tablegateway;
    }

    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when
     *     creating a service.
     * @throws ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // TODO: Implement __invoke() method.
    }
}