<?php

namespace App\Container;

use Exception;
use ReflectionClass;
use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    /**
     * @var array
     */
    private array $instances = [];

    /**
     * {@inheritdoc}
     * @throws Exception
     */
    public function get(string $id)
    {
        return $this->make($id);
    }

    /**
     *  {@inheritdoc}
     */
    public function has(string $id): bool
    {
        return isset($this->instances[$id]);
    }

    /**
     * Register a class/interface with the container.
     *
     * @param string $abstract
     * @param string|null $concrete
     */
    public function bind(string $abstract, string $concrete = NULL)
    {
        if (is_null($concrete)) {
            $concrete = $abstract;
        }
        $this->instances[$abstract] = $concrete;
    }

    /**
     * Get instance from Container
     *
     * @param string $abstract
     * @return object
     * @throws Exception
     */
    public function make(string $abstract): object
    {
        if (!$this->has($abstract)) {
            $this->bind($abstract);
        }

        return $this->resolve($this->instances[$abstract]);
    }

    /**
     * Resolve the given type from the container.
     *
     * @param string $concrete
     * @return object
     * @throws Exception
     */
    public function resolve(string $concrete): object
    {
        $classReflection = new ReflectionClass($concrete);
        if (!$classReflection->isInstantiable()) {
            throw new Exception("Class {$concrete} is not instantiable");
        }

        $constructor = $classReflection->getConstructor();
        if (is_null($constructor)) {
            return $classReflection->newInstance();
        }

        $constructorParams   = $constructor->getParameters();
        $dependencies = $this->getDependencies($constructorParams);
        return $classReflection->newInstanceArgs($dependencies);
    }

    /**
     * @param $constructorParams
     * @return array
     * @throws Exception
     */
    public function getDependencies($constructorParams): array
    {
        $dependencies = [];
        foreach ($constructorParams as $parameter) {
            $dependency = $parameter->getClass(); // Get the Type Hinting Class
            $dependencies[] = $this->make($dependency->name);
        }

        return $dependencies;
    }
}