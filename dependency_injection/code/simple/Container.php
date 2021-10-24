<?php

class Container
{
    /**
     * @var array
     */
    private array $instances = [];

    /**
     * @param $concrete
     */
    public function bind($concrete)
    {
        $this->instances[$concrete] = $concrete;
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

        $constructorParams = $classReflection->getConstructor()->getParameters();
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