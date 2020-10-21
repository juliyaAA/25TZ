<?php
/* Массивы - это упорядоченные наборы данных, представляющие собой список однотипных элементов.
Существует два типа массивов, различающиеся по способу идентификации элементов.
1. В массивах первого типа элемент определяется индексом в последовательности. Такие массивы называются простыми массивами.
2. Массивы второго типа имеют ассоциативную природу, и для обращения к элементам используются ключи, логически связанные со значениями. Такие массивы называют ассоциативными массивами. 
Удалить элемент массива можно с помощью функции unset(): 
in_array -- Проверяет присутствует ли в массиве значение.
array_combine — Создает новый массив, используя один массив в качестве ключей, а другой для его значений.
array_merge — Сливает один или большее количество массивов.
array_multisort — Сортирует несколько массивов или многомерные массивы.
array_pop — Извлекает последний элемент массива.
array_push — Добавляет один или несколько элементов в конец массива.
array_walk — Применяет заданную пользователем функцию к каждому элементу массива.*/

// Примеры циклов: 
// while
$x=0;
while ($x++<10) 
echo $x;
echo '<br>';
// do-while
$i = 0;
do {
    echo $i;
} while ($i > 0);
// foreach
$my_arr = array(1, 2, 3, 4, 5);
   
  foreach ($my_arr as $value) {
    echo $value, " ";
  }

$test = 82; 
if($test > 90)
{
    echo "Оценка 5";
    echo '<br>';
}
elseif ($test < 91 && $test > 80) 
{
    echo "Оценка 4";
    echo '<br>';
}
elseif ($test < 81 && $test > 70) 
{
    echo "Оценка 3";
    echo '<br>';
}
else
{
    echo "Пересдайте текст";
    echo '<br>';
}

/**
 * Добавляет привет к имени
*/
function getName($name)
{
    return $name . '-Привет';
}
var_dump (getName('Юля'));
echo '<br>';

class  Person
{
    private $age;
    private $children;

    public $name;
    public $lastname;
    public $city;

    public function  __construct($name, $lastname, $city, $age, $children)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->city = $city;
        $this->age = $age;
        $this->children = $children;
    }
    public function setChildren($setChildren){
        $this->children = $setChildren;
    }
    public function getChildren(){
        return $this->children;
    }
    public function setAge($setAge){
        $this->age = $setAge;
    }
    public function getAge(){
        return $this->age;
    }
    public function setCity($setcity){
        $this->city = $setcity;
    }
    public function getCity(){
        return $this->city;
    }
}

$names = new Person('Иван', 'Петров','Москва','32 года','2 детей');
var_dump($names);
echo '<br>';
$names ->setCity = 'Санкт-Петербург';
var_dump ($names);
echo '<br>';
$names ->setAge('33 года');
var_dump ($names);

?>  