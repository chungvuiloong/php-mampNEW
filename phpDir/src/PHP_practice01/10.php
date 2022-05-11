<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-xs-8">


    <?php

		/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

    Step 6: Call the method ShowAll
	*/

  class Dog {
    public $name;
    public $furColor;
    public $eyeColor;

    function get_name($name) {
      return $this->name = $name;
    }

    function get_eye_color($eyeColor) {
      return $this->eyeColor = $eyeColor;
    }

    function get_fur_color ($furColor) {
      return $this->furColor = $furColor;
    }

    public static function ShowAll($name, $furColor, $eyeColor) {
      return $name . $eyeColor . $furColor . "<br/>";
    }

  }

  $pitbull = new Dog();
  $pitbull->get_name('Pitbull');
  $pitbull->get_eye_color('Blue');
  $pitbull->get_fur_color('Green');
  
  echo $pitbull->name . $pitbull->furColor . $pitbull->eyeColor . "<br/>";

  echo Dog::ShowAll('Corgi', 'Brown', 'Yellow');
  echo Dog::ShowAll('Chihuahua', 'white', 'red');

		?>





  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>