<?php

namespace Cybertale\Definition\Helpers;

enum ObjectsEnum: int
{
    case Row = 0;
    case Field = 1;
    case Button = 2;
    case Text = 3;
    case Output = 4;
    case Alert = 5;
    case CheckBox = 6;
    case DataList = 7;
    case SelectList = 8;
    case Radio = 9;
    case Column = 10;
    case ColumnButton = 11;
    case FieldButton = 12;
    case SelectButton = 13;
    case ListRow = 14;
    case ECabinetRow = 15;
    case ECabinetColumn = 16;
    case ModalRow = 17;
    case MapPicker = 18;
    case FieldCode = 19;
    case DataSelect = 20;
    case UploadFile = 21;
}
