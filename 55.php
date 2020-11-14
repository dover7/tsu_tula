<?php

class cls
{
    const NAME = "cls";
    public function method()
    {
        // echo $this->NAME; // Ошибочное обращение
        echo self::NAME;
        echo "<br />";
        echo cls::NAME;
        echo "<br />";
    }
}
$m = new cls;
if (defined("cls::NAME")) echo 'Yes';
else echo 'NO';
//Добавили изменения в файл
