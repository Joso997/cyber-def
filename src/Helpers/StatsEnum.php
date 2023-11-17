<?php

namespace Cybertale\Definition\Helpers;

enum StatsEnum: int
{
    case Label = 0;
    case Value = 1;
    case Design = 2;
    case Tag = 3;
    case Id = 4;
    case ElementType = 5;
    case Placeholder = 6;
    case ItemList = 7;
    case Tooltip = 8;
    case Required = 9;
    case Disabled = 10;
    case AutoComplete = 11;
    case BelongsTo = 12;
    case ErrorMessage = 13;
    case IsValid = 14;
    case Order = 15;
    case DependsOn = 16;
}


