<?php


class Tester extends Employee implements ApplicationCreatorInterface, WebinarSpeakerInterface
{

  public static  $applicationCreator = 'может заниматься разработкой приложения,';
  public static  $webinarSpeaker = ' может вести вебинар для коллег.';
  public function employee()
  {
    return $this->surname . ' ' . $this->name .  ' позиция: ' . $this->position . ', зарплата: ' . $this->salary . ' (руб)' . ', ' . Tester::viewDiscription();
  }

  public  function applicationCreator()
  {
    return self::$applicationCreator;
  }

  public function webinarSpeaker()
  {
    return self::$webinarSpeaker;
  }
  public function viewDiscription()
  {
    return Tester::applicationCreator() . Tester::webinarSpeaker();
  }
}
