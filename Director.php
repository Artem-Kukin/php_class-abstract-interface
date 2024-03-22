<?php

class Director extends Employee implements LeadInterface
{
  public static  $lead = 'может управлять или руководить.';
  public function employee()
  {
    return $this->surname . ' ' . $this->name .  ' позиция: ' . $this->position . ', зарплата: ' . $this->salary . ' (руб)' . ', ' . Director::viewDiscription();
  }


  public function lead()
  {
    return self::$lead;
  }

  public function viewDiscription()
  {
    return Director::lead();
  }
}
