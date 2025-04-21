<?php

namespace Ai;

interface FunctionCallingParameterInterface
{
    public function getName() : string;

    public function getType() : string;

    public function getDescription() : string;

    public function getValues() : array;

    public function getRequired() : bool;
}
