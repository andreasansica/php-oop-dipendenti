<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



</head>
<body>


  <?php

      class Persona {
          private $name;
          private $lastname;
          private $age;

          public function __construct($name, $lastname, $age) {
              $this -> setName($name);
              $this -> setLastname($lastname);
              $this -> setAge($age);
          }

          public function getName() {
              return $this -> name;
          }

          public function setName($name) {
              $this -> name = $name;
          }

          public function getLastname() {
              return $this -> lastname;
          }

          public function setLastname($lastname) {
              $this -> lastname =$lastname;
          }

          public function getAge() {
              return $this -> age;
          }

          public function setAge($age) {
              $this -> age = $age;
          }


          public function __toString() {
              return
                  'Nome: ' . $this -> getName() . '<br>' .
                  'Cognome: ' . $this -> getLastname() . '<br>' .
                  'Data di nascita: ' . $this -> getAge();
          }

      }


      $persona1 = new Persona("Andrea", "Sansica", "11-09-1999");
      echo $persona1 . '<br>' . '<br>';


      class Dipendente extends Persona
      {
            public $salary;
            public $job;

            function __construct($name, $lastname, $age, $salary, $job)
            {
              parent::__construct($name, $lastname, $age);
              $this -> setSalary($salary);
              $this -> setJob($job);
            }

          public function getSalary() {
             return $this -> salary;
         }
         public function setSalary($salary) {
             $this -> salary = $salary;
         }

         public function getJob() {
             return $this -> job;
         }
         public function setJob($job) {
             $this -> job = $job;
         }


         public function __toString() {
             return
                 parent::__toString() . '<br>' .
                 "Stipendio: " . $this -> getSalary() . '<br>' .
                 "Lavoro: " . $this -> getJob();
                }
      }
      

     $dipendente1 = new Dipendente("Mario", "Rossi", "11-09-1997",  "1200$", "Operaio");
     echo $dipendente1 . '<br>' . '<br>';



     class Boss extends Dipendente {
      private $iva;

      public function __construct($name, $lastname, $age, $salary, $job, $iva) {
          parent::__construct($name, $lastname, $age, $salary, $job);
          $this -> setIva($iva);
      }

      public function getIva() {
          return $this -> iva;
      }

      public function setIva($iva) {
          $this -> iva = $iva;
      }


      public function __toString() {
          return
              parent::__toString() . '<br>' .
              "Partita IVA: " . $this -> getIva();
      }
  }

  $boss = new Boss("Marco", "Bianchi", "21-12-1977",  "2200$", "Direttore", "19835298725");
  echo $boss;


  ?>

</body>
</html>
