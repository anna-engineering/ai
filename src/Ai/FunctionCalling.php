<?php

namespace Ai;

class FunctionCalling implements FunctionCallingInterface
{
    protected(set) array $parameters = [];

    protected(set) array $required = [];

    protected(set) bool $additionalProperties = false;

    protected(set) bool $strict = true;

    public function __construct(
        protected(set) string $name,
        protected(set) string $description,
        FunctionCallingParameterInterface ...$parameters
    )
    {
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function getParameters() : array
    {
        return $this->parameters;
    }

    public function getRequired() : array
    {
        return $this->required;
    }

    public function getAdditionalProperties() : bool
    {
        return $this->additionalProperties;
    }

    public function getStrict() : bool
    {
        return $this->strict;
    }
}
