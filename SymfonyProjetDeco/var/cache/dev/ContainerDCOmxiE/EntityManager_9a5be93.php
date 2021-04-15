<?php

namespace ContainerDCOmxiE;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf4140 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraed5f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf93ea = [
        
    ];

    public function getConnection()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getConnection', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getMetadataFactory', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getExpressionBuilder', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'beginTransaction', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getCache', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'transactional', array('func' => $func), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->transactional($func);
    }

    public function commit()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'commit', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->commit();
    }

    public function rollback()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'rollback', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getClassMetadata', array('className' => $className), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'createQuery', array('dql' => $dql), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'createNamedQuery', array('name' => $name), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'createQueryBuilder', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'flush', array('entity' => $entity), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'clear', array('entityName' => $entityName), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->clear($entityName);
    }

    public function close()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'close', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->close();
    }

    public function persist($entity)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'persist', array('entity' => $entity), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'remove', array('entity' => $entity), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'refresh', array('entity' => $entity), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'detach', array('entity' => $entity), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'merge', array('entity' => $entity), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'contains', array('entity' => $entity), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getEventManager', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getConfiguration', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'isOpen', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getUnitOfWork', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getProxyFactory', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'initializeObject', array('obj' => $obj), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'getFilters', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'isFiltersStateClean', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'hasFilters', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return $this->valueHolderf4140->hasFilters();
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

        $instance->initializeraed5f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf4140) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf4140 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf4140->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, '__get', ['name' => $name], $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        if (isset(self::$publicPropertiesf93ea[$name])) {
            return $this->valueHolderf4140->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4140;

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

        $targetObject = $this->valueHolderf4140;
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
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4140;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf4140;
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
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, '__isset', array('name' => $name), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4140;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf4140;
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
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, '__unset', array('name' => $name), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4140;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf4140;
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
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, '__clone', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        $this->valueHolderf4140 = clone $this->valueHolderf4140;
    }

    public function __sleep()
    {
        $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, '__sleep', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;

        return array('valueHolderf4140');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraed5f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraed5f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraed5f && ($this->initializeraed5f->__invoke($valueHolderf4140, $this, 'initializeProxy', array(), $this->initializeraed5f) || 1) && $this->valueHolderf4140 = $valueHolderf4140;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf4140;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf4140;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
