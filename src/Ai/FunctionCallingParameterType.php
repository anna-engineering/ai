<?php

namespace Ai;

enum FunctionCallingParameterType : string
{
    case STRING  = 'string';
    case NUMBER  = 'number';
    case INTEGER = 'integer';
    case BOOLEAN = 'boolean';
    case OBJECT  = 'object';
    case ARRAY   = 'array';
    case ENUM    = 'enum';
    case ANYOF   = 'anyOf';
}
