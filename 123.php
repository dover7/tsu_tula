<html><head><meta charset=\"utf-8\"></head>
<?php //echo 'Привет';?>
<form method="post">
    <input type="image" src="111.jpg">
    <input type="image" name='picture' src="111.jpg">
</form>
<form method="post">
    <select name="test_select[]" multiple>
        <option value="1">11</option>
        <option value="2">22</option>
        <option>334</option>
    </select>
    <input type="submit" value="Test">
</form>
<?php
if (isset($_POST['x'])){
echo 'позиция x = '.$_POST['x'].'<br>';
echo 'позиция y = '.$_POST['y'];
} elseif (isset($_POST['picture_x'])){
    echo 'позиция х именованой картинки = '.$_POST['picture_x'].'<br>';
    echo 'позиция y именованой картинки = '.$_POST['picture_y'];
}
//var_dump($_POST);
//var_dump();
$aa = '765';
echo '$aa';  //выведет $aa
echo "$aa";  //выведет 765
echo '<BR><BR>';
$a = 1.7e308;
$b = 1.2e-3;
$c = 7E-14;
$dd =& $b;unset($b);
var_dump($dd);
echo '<BR><BR>';

class SomeClass{
    private $x = 140;
}
$nn = new SomeClass();
var_export($nn);

echo '<BR><BR>';

$s = 9; $b = -6;
echo str_pad(decbin($s),10,'0', STR_PAD_LEFT).'<br>';
//printf("[%10s]", $b);echo '<br>';
echo str_pad(decbin($b),10,'0', STR_PAD_LEFT).'<br>';
if ('' == 0) echo 'Да<br>';

$foo = array(2 => 'a', 'foo' => 'foo', 0 => 'c');
$foo[1] = 'd';
[$x, $y, $z] = $foo;
//var_dump($foo, $x, $y, $z);
//echo $zzz ?? '45';

function gen_one_to_three() {
    for ($i = 1; $i <= 5; $i++) {
        // Обратите внимание, что $i сохраняет свое значение между вызовами.
        if ($i == 3) continue;
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
    echo "$value\n";
}

function nums() {
    echo "<p>Выполнение операций до возврата результата</p>\n";
    for ($i = 0; $i < 5; ++$i) {
        yield $i;
        echo "<p>Возвращаем результат итерации: $i</p>\n";
    }
    echo "<p>Генератор заканчивает работу</p>\n";
    return 555;// Обратите внимание генератор не возвращает результата по return
    echo "<p>И ещё одна строчка после вызова return</p>\n";
}
foreach (nums() as $v) {echo "<p>Считываем результат за пределами генератора: $v</p>";}

function nums1() {

    echo "The generator has startedn";

    for ($i = 0; $i < 5; ++$i) {

        $res = yield $k=$i => $r=$i+10;

        echo "<br>Yielded $k =>$r";
        if ($res=='stop') {echo "<br>The generator has endedn before return";
            return;}
    }

    echo "<br>The generator has endedn";
}

$rrr=nums1();

foreach ($rrr as $v){
    if ($v==13) $rrr->send('stop');
};
?>
<!--Добавили изменения в файл 
//Добавили изменения в файл222222222222222-->
</body></html>
