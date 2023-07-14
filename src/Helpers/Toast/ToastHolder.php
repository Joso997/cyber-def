<?php

namespace Cybertale\Definition\Helpers\Toast;

class ToastHolder
{
    private ToastStatusEnum $status;
    private ?string $title = null;
    private ?string $info = null;

    public function __construct($status, $title, $info)
    {
        $this->status = $status;
        $this->title = $title;
        $this->info = $info;
    }

    public function get(): array
    {
        return [
            'status' => $this->status,
            'msg' => [
                'title' => $this->title,
                'info' => $this->info
            ]
        ];
    }

    public static function setAndGet(ToastStatusEnum $status, ?string $title, ?string $info): array{
        return [
            'status' => $status,
            'msg' => [
                'title' => $title,
                'info' => $info
            ]
        ];
    }

    public static function Success(string $info, string $title = null): array{
        return [
            'status' => ToastStatusEnum::SUCCESS,
            'msg' => [
                'title' => $title,
                'info' => $info
            ]
        ];
    }

    public static function Warning(string $title = 'Failed.', string $info = 'Try again or report an error.'): array{
        return [
            'status' => ToastStatusEnum::WARNING,
            'msg' => [
                'title' => $title,
                'info' => $info
            ]
        ];
    }

    public static function Error(\Exception $e, string $title = 'Error.'): array{
        return [
            'status' => ToastStatusEnum::ERROR,
            'msg' => [
                'title' => $title,
                'info' => $e->getMessage()
            ]
        ];
    }
}
