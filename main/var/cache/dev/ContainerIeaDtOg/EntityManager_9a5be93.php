<?php

namespace ContainerIeaDtOg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3a27c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf2d1c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9dd65 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getConnection', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getMetadataFactory', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getExpressionBuilder', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'beginTransaction', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getCache', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'transactional', array('func' => $func), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'commit', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->commit();
    }

    public function rollback()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'rollback', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getClassMetadata', array('className' => $className), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'createQuery', array('dql' => $dql), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'createNamedQuery', array('name' => $name), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'createQueryBuilder', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'flush', array('entity' => $entity), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'clear', array('entityName' => $entityName), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->clear($entityName);
    }

    public function close()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'close', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->close();
    }

    public function persist($entity)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'persist', array('entity' => $entity), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'remove', array('entity' => $entity), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'refresh', array('entity' => $entity), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'detach', array('entity' => $entity), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'merge', array('entity' => $entity), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'contains', array('entity' => $entity), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getEventManager', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getConfiguration', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'isOpen', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getUnitOfWork', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getProxyFactory', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'initializeObject', array('obj' => $obj), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'getFilters', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'isFiltersStateClean', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'hasFilters', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return $this->valueHolder3a27c->hasFilters();
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

        $instance->initializerf2d1c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3a27c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3a27c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3a27c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, '__get', ['name' => $name], $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        if (isset(self::$publicProperties9dd65[$name])) {
            return $this->valueHolder3a27c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a27c;

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

        $targetObject = $this->valueHolder3a27c;
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
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a27c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3a27c;
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
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, '__isset', array('name' => $name), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a27c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3a27c;
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
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, '__unset', array('name' => $name), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a27c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3a27c;
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
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, '__clone', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        $this->valueHolder3a27c = clone $this->valueHolder3a27c;
    }

    public function __sleep()
    {
        $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, '__sleep', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;

        return array('valueHolder3a27c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf2d1c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf2d1c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf2d1c && ($this->initializerf2d1c->__invoke($valueHolder3a27c, $this, 'initializeProxy', array(), $this->initializerf2d1c) || 1) && $this->valueHolder3a27c = $valueHolder3a27c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3a27c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3a27c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
