<?php

class Manager extends Employee implements LeadInterface, WebinarSpeakerInterface
{

  public static  $lead = 'может управлять или руководить,';
  public static  $webinarSpeaker = ' может вести вебинар для коллег.';
  public function employee()
  {
    return $this->surname . ' ' . $this->name .  ' позиция: ' . $this->position . ', зарплата: ' . $this->salary . ' (руб)' . ', ' . Manager::viewDiscription();
  }

  public function lead()
  {
    return self::$lead;
  }

  public function webinarSpeaker()
  {
    return self::$webinarSpeaker;
  }

  public function viewDiscription()
  {
    return Manager::lead() . Manager::webinarSpeaker();
  }
}
