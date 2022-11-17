<?php
    echo "OOP <br><br>";

    class User {
        // properties that belong to a class
        protected $name;
        public $email;
        public $age;
        public $password;
        // constructor: function that runs when an object is instantiated
        public function __construct($name, $email, $age, $password){
            echo 'New object is created <br>';
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
            $this->password = $password;
        }
        //method: a function that belongs to a class
        function set_name($name) {
            $this->name = $name;
        }
        // getter
        function get_name() {
            return $this->name;
        }
    }
    // init an object
    $user1 = new User('boo123',"boo@gmail.com",20,"boohandsome123");
    // $user1->name = 'boo123';
    // $user1->set_name('boo');
    // $user1->email = 'boo@gmail.com';
    // $user1->age = '20';
    // $user1->password = 'boohandsome123';
    // print_r($user1);

    // $user2 = new User();
    // $user2->set_name('tranlybuu');
    // echo $user2->get_name();

    

    // inheritance
    class Employee extends User {
        public function __construct($name,
                                    $email,
                                    $age,
                                    $password,
                                    $role) {
        parent::__construct($name, $email, $age, $password);
        $this->role = $role;
        }
        public function get_role() {
            return $this->role;
        }
    }

    $employee1 = new Employee('val',"val@gmail.com",20,"valawesomexyz","Sale Manager");
    echo $employee1->get_role();

?>