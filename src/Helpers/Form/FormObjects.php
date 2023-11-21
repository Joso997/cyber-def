<?php

namespace Cybertale\Definition\Helpers\Form;

use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\ObjectTypes\CheckBox;
use Cybertale\Definition\ObjectTypes\Field;
use Cybertale\Definition\ObjectTypes\MapPicker;
use Cybertale\Definition\ObjectTypes\Radio;
use Cybertale\Definition\ObjectTypes\SelectList;
use Cybertale\Definition\ObjectTypes\UploadFile;

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
            ObjectsEnum::Field->value => Field::class,
            ObjectsEnum::Radio->value => Radio::class,
            ObjectsEnum::CheckBox->value => CheckBox::class,
            ObjectsEnum::SelectList->value => SelectList::class,
            ObjectsEnum::MapPicker->value => MapPicker::class,
            ObjectsEnum::UploadFile->value => UploadFile::class
        ];
        return $arr[$id];
    }
}
