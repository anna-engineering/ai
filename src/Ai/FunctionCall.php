<?php

namespace Ai;

class FunctionCall implements \JsonSerializable
{
    public function __construct(
        protected(set) string $name,
        protected(set) array $arguments = [],
    )
    {
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getArguments() : array
    {
        return $this->arguments;
    }

    public function getArgument($name, $default = null) : mixed
    {
        return $this->arguments[$name] ?? $default;
    }

    public function jsonSerialize() : array
    {
        return [
            'function' => [
                'name' => $this->name,
                ...(count($this->arguments) ? ['arguments' => $this->arguments] : []),
            ]
        ];
    }
}
