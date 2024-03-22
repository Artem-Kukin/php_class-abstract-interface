<?php


class Programmer extends Employee implements ApplicationCreatorInterface
{

  public static  $applicationCreator = 'может заниматься разработкой приложения.';
  public function employee()
  {
    return $this->surname . ' ' . $this->name .  ' позиция: ' . $this->position . ', зарплата: ' . $this->salary . ' (руб)' . ', ' . Programmer::viewDiscription();
  }

  public  function applicationCreator()
  {
    return self::$applicationCreator;
  }


  public function viewDiscription()
  {
    return Programmer::applicationCreator();
  }
}
