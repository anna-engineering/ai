<?php

namespace Ai;

class FunctionCallingParameter implements FunctionCallingParameterInterface
{
    public function __construct(
        protected(set) string $name,
        protected(set) FunctionCallingParameterType $type,
        protected(set) string $description,
        protected(set) array $values = [],
        protected(set) bool $required = false,
    )
    {
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getType() : string
    {
        return $this->type->value;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function getValues() : array
    {
        return $this->values;
    }

    public function getRequired() : bool
    {
        return $this->required;
    }
}
