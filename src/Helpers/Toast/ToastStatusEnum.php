<?php

namespace Cybertale\Definition\Helpers\Toast;

enum ToastStatusEnum: string
{
    case SUCCESS = "success";
    case ERROR = "error";
    case WARNING = "warning";
    case INFO = "info";
    case DEFAULT = "default";
}
