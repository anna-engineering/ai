<?php

namespace Ai;

interface FunctionCallingInterface
{
    public function getName() : string;

    public function getDescription() : string;

    /**
     * @return \Ai\FunctionCallingParameterInterface[]
     */
    public function getParameters() : array;

    public function getRequired() : array;

    public function getAdditionalProperties() : bool;

    public function getStrict() : bool;
}
