<?php

namespace Container41g00CH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereca28 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer36f3b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0c3b7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getConnection', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getMetadataFactory', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getExpressionBuilder', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'beginTransaction', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getCache', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getCache();
    }

    public function transactional($func)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'transactional', array('func' => $func), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->transactional($func);
    }

    public function commit()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'commit', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->commit();
    }

    public function rollback()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'rollback', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getClassMetadata', array('className' => $className), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'createQuery', array('dql' => $dql), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'createNamedQuery', array('name' => $name), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'createQueryBuilder', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'flush', array('entity' => $entity), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'clear', array('entityName' => $entityName), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->clear($entityName);
    }

    public function close()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'close', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->close();
    }

    public function persist($entity)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'persist', array('entity' => $entity), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'remove', array('entity' => $entity), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'refresh', array('entity' => $entity), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'detach', array('entity' => $entity), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'merge', array('entity' => $entity), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getRepository', array('entityName' => $entityName), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'contains', array('entity' => $entity), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getEventManager', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getConfiguration', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'isOpen', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getUnitOfWork', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getProxyFactory', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'initializeObject', array('obj' => $obj), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'getFilters', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'isFiltersStateClean', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'hasFilters', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return $this->valueHoldereca28->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer36f3b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldereca28) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereca28 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereca28->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, '__get', ['name' => $name], $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        if (isset(self::$publicProperties0c3b7[$name])) {
            return $this->valueHoldereca28->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereca28;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereca28;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereca28;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereca28;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, '__isset', array('name' => $name), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereca28;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereca28;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, '__unset', array('name' => $name), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereca28;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereca28;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, '__clone', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        $this->valueHoldereca28 = clone $this->valueHoldereca28;
    }

    public function __sleep()
    {
        $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, '__sleep', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;

        return array('valueHoldereca28');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer36f3b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer36f3b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer36f3b && ($this->initializer36f3b->__invoke($valueHoldereca28, $this, 'initializeProxy', array(), $this->initializer36f3b) || 1) && $this->valueHoldereca28 = $valueHoldereca28;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereca28;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereca28;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
