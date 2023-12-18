<?php

class persons { 
    public int $person_id;
    public string $person_name;
    public string $person_email;
    public string $person_phone;

    // Constructor
     function __construct($person_id, $person_name, $person_email, $person_phone) {
        $this->person_id = $person_id;
        $this->person_name = $person_name;
        $this->person_email = $person_email;
        $this->person_phone = $person_phone;
    }
    public function get_person_id() :int{
        return $this->person_id;

    } 
    public function set_person_id(int $person_id) :void {
        $this->person_id = $person_id;
    }
}