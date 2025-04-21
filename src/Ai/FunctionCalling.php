<?php

namespace Ai;

class FunctionCalling implements FunctionCallingInterface, \JsonSerializable
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
        foreach ($parameters as $parameter)
        {
            $this->parameters[$parameter->getName()] = $parameter;
            if ($parameter->getRequired())
            {
                $this->required[] = $parameter->getName();
            }
        }
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

    public function jsonSerialize() : mixed
    {
        return [
            'type' => 'function',
            'function' => [
                'name'        => $this->name,
                'description' => $this->description,
                'parameters'  => [
                    'type'       => 'object',
                    'properties' => $this->parameters,
                    'required'   => $this->required,
                    'additionalProperties' => $this->additionalProperties,
                ],
                'strict' => $this->strict,
            ]
        ];
    }
}
