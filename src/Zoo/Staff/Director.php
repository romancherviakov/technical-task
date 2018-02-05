<?php

namespace Zoo\Staff;

use Zoo\Animals\Factories\AnimalFactoryInterface;
use Zoo\Staff\Exceptions\AnimalIsNotSupportedException;
use Zoo\Staff\Exceptions\WrongMethodNameException;

class Director extends AbstractHuman
{
    /**
     * @param $methodName
     * @param $arguments
     * @return \Zoo\Animals\Entities\AnimalInterface
     * @throws AnimalIsNotSupportedException
     * @throws WrongMethodNameException
     */
    public function __call($methodName, $arguments) {
        return $this->buyAnimal($methodName, $arguments);
    }


    /**
     * @param $methodName
     * @param $arguments
     * @return \Zoo\Animals\Entities\AnimalInterface
     * @throws AnimalIsNotSupportedException
     * @throws WrongMethodNameException
     */
    protected function buyAnimal($methodName, $arguments)
    {
        if($this->isValidMethodName($methodName)) {

            $className = substr($methodName, 3);
            $classNamespace = "Zoo\\Animals\\Factories\\";

            $factoryClass = $classNamespace . $className . 'Factory';

            if(class_exists($factoryClass)) {
                /**
                 * @var AnimalFactoryInterface $factory
                 */
                $factory = new $factoryClass;
                return $factory->createEntity();

            } else {
                throw new AnimalIsNotSupportedException("Animal {$className} is not supported");
            }

        } else {
            throw new WrongMethodNameException("Method {$methodName} is not available");
        }
    }

    /**
     * Verify correct method name
     * @param $methodName
     * @return bool
     */
    protected static function isValidMethodName($methodName)
    {
        $prefixPosition = strpos($methodName, 'buy');

        return $prefixPosition !== false && $prefixPosition === 0;
    }
}