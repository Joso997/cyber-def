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
    case ColumnButton = 11; //ColumnGroup
    case InputGroup = 12;
    case ECabinetRow = 13;
    case ECabinetColumn = 14;
    case ModalForm = 15;
    case MapPicker = 16;
    case MultiMedia = 17;
    case UploadFile = 18;
    case Label = 19;
}
