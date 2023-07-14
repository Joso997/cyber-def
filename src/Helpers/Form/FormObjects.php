<?php

namespace Cybertale\Definition\Helpers\Form;

use Cybertale\Definition\FormComponents\CheckBoxComponent;
use Cybertale\Definition\FormComponents\FieldComponent;
use Cybertale\Definition\FormComponents\MapPickerComponent;
use Cybertale\Definition\FormComponents\RadioComponent;
use Cybertale\Definition\FormComponents\SelectListComponent;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Services\CyberInterface\Helpers\Form\UploadFile;

class FormObjects
{

    public static function getObjectsForAttributes (): array
    {
        return [
            ['id' => ObjectsEnum::Field->value, 'name' => ObjectsEnum::Field->name],
            ['id' => ObjectsEnum::SelectList->value, 'name' => ObjectsEnum::SelectList->name],
            ['id' => ObjectsEnum::Radio->value, 'name' => ObjectsEnum::Radio->name],
            ['id' => ObjectsEnum::CheckBox->value, 'name' => ObjectsEnum::CheckBox->name],
            ['id' => ObjectsEnum::Text->value, 'name' => ObjectsEnum::Text->name],
            ['id' => ObjectsEnum::MapPicker->value, 'name' => ObjectsEnum::MapPicker->name],
            ['id' => ObjectsEnum::UploadFile->value, 'name' => ObjectsEnum::UploadFile->name],
        ];
    }

    public static function findFromAttribute($id): string
    {
        $arr = [
            ObjectsEnum::Field->value => FieldComponent::class,
            ObjectsEnum::Radio->value => RadioComponent::class,
            ObjectsEnum::CheckBox->value => CheckBoxComponent::class,
            ObjectsEnum::SelectList->value => SelectListComponent::class,
            ObjectsEnum::MapPicker->value => MapPickerComponent::class,
            ObjectsEnum::UploadFile->value => UploadFile::class
        ];
        return $arr[$id];
    }
}
