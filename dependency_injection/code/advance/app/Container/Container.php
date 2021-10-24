<?php

namespace App\Container;

use Exception;
use ReflectionClass;

class Container
{
    /**
     * @var array
     */
    private array $instances = [];

    /**
     * Đăng ký một class hay interface với Container
     *
     * @param $abstract
     * @param null $concrete
     */
    public function bind($abstract, $concrete = NULL)
    {
        if (is_null($concrete)) {
            $concrete = $abstract;
        }
        $this->instances[$abstract] = $concrete;
    }

    /**
     * @throws Exception
     */
    public function make($concrete): object
    {
        if (!isset($this->instances[$concrete])) {
            $this->bind($concrete);
        }

        return $this->resolve($this->instances[$concrete]);
    }

    /**
     * @throws Exception
     */
    public function resolve($concrete): object
    {
        $classReflection = new ReflectionClass($concrete);

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