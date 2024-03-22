<?php

require_once('autoload.php');

interface LeadInterface
{
    public function lead();
}
interface ApplicationCreatorInterface
{
    public function applicationCreator();
}
interface WebinarSpeakerInterface
{
    public function webinarSpeaker();
}

abstract class Employee
{
    protected $position;
    protected $surname;
    protected $name;
    protected $salary;

    public function __construct($position, $surname, $name, $salary)
    {
        $this->position = $position;
        $this->surname = $surname;
        $this->name = $name;
        $this->salary = $salary;
    }
    public function salaryPosition()
    {
        return $this->salary;
    }
    abstract public function employee();
}


$employee[] = new Director('Директор', 'Иванова', 'Мария', 85000);
$employee[] = new Manager('Менеджер', 'Петров', 'Федор', 55000);
$employee[] = new Programmer('Программист', 'Кириенова', 'Сусана', 58000);
$employee[] = new Programmer('Программист', 'Рожкова', 'Елена', 50000);
$employee[] = new Programmer('Программист', 'Парожкин', 'Петр', 50000);
$employee[] = new Tester('Тестировщик', 'Горнов', 'Анатолий', 30000);
$employee[] = new Tester('Тестировщик', 'Пирогова', 'Светлана', 12900);
$employee[] = new Tester('Тестировщик', 'Сильвесторов', 'Роман', 12855);
$employee[] = new Tester('Тестировщик', 'Пирогов', 'Кирилл', 12850);


const VIEW_DIRECTOR = 1;
const VIEW_MANAGER = 2;
const VIEW_PROGRAMMER = 3;
const VIEW_TESTER = 4;
const VIEW_EMPLOYEES = 5;
const OPT_EXIT = 0;


$operations = [
    VIEW_DIRECTOR => 'Директора',
    VIEW_MANAGER => 'Менеджеров',
    VIEW_PROGRAMMER => 'Програмистов',
    VIEW_TESTER => 'Тестеров',
    VIEW_EMPLOYEES => 'Всех сотрудников',
    OPT_EXIT => 'завершить программу',

];


do {
    echo 'Сотрудники IT отдела: 
    1. Директор
    2. Менеджер
    3. Программист
    4. Тестер
    5. Всех сотрудников отдела IT
    0. Закрыть программу
    ';

    echo 'Выберите специальность, чтобы увидеть сотрудников: ';
    $init = trim(fgets(STDIN));
    $salary = [];

    echo "\n" . 'Просмотр: '  . $operations[$init] . "\n ----- \n";

    switch ($init) {
        case VIEW_DIRECTOR:
            foreach ($employee as $key => $item) {
                if ($item instanceof Director) {
                    $salary[] = $item->salaryPosition();
                    echo $item->employee() . PHP_EOL;
                }
            }
            echo  "\033[32m  Выделяемая заработная плата на Директора: "  . array_sum($salary) . ' (руб)' . "\033[0m"  . PHP_EOL;
            break;

        case VIEW_MANAGER:
            foreach ($employee as $key => $item) {
                if ($item instanceof Manager) {
                    $salary[] = $item->salaryPosition();
                    echo $item->employee() . PHP_EOL;
                }
            }
            echo  "\033[32m  Выделяемая заработная плата на Менеджера: "  . array_sum($salary) . ' (руб)' . "\033[0m"  . PHP_EOL;
            break;
        case VIEW_PROGRAMMER:
            foreach ($employee as $key => $item) {
                if ($item instanceof Programmer) {
                    echo $item->employee() . PHP_EOL;
                    $salary[] = $item->salaryPosition();
                }
            }
            echo  "\033[32m  Выделяемая заработная плата на Програмистов: "  . array_sum($salary) . ' (руб)' . "\033[0m"  . PHP_EOL;
            break;
        case VIEW_TESTER:
            foreach ($employee as $key => $item) {
                if ($item instanceof Tester) {
                    echo $item->employee() . PHP_EOL;
                    $salary[] = $item->salaryPosition();
                }
            }
            echo  "\033[32m  Выделяемая заработная плата на Тестеров: "  . array_sum($salary) . ' (руб)' . "\033[0m"  . PHP_EOL;
            break;
        case VIEW_EMPLOYEES:
            foreach ($employee as $key => $item) {
                if ($item instanceof Employee) {
                    echo $item->employee() . PHP_EOL;
                    $salary[] = $item->salaryPosition();
                }
            }
            echo  "\033[32m  Выделяемая заработная плата на Отдел IT: "  . array_sum($salary) . ' (руб)' . "\033[0m"  . PHP_EOL;
            break;
    }
} while ($init > 0);

echo "\033[31m Программа завершена \033[0m";

// echo "\033[31m красный \033[0m";
// echo "\033[32m зелёный \033[0m";