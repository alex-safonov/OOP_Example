<?php 

	interface Say {
		public function say();
	}

	abstract class Human implements Say {
		private $name;

		public function __construct($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}

	}


	class Man extends Human {

		public function __construct($name) {
			parent::__construct($name);
		}

		public function beard() {
			echo "у меня растет борода";
		}

		public function say() {
			echo "У меня мужской голос, меня зовут ".$this->getName()." и ";
		}


	}

	class Woman extends Human {

		public function __construct($name) {
			parent::__construct($name);
		}

		public function bornChildren() {
			echo "я рожаю детей";
		}

		public function say() {
			echo "У меня женский голос, меня зовут ".$this->getName()." и ";
		}



	}


	$man = new Man("Александр");
	$man->say();
	$man->beard();

	echo "<br>";

	$woman = new Woman("Мария");
	$woman->say();
	$woman->bornChildren();


?>
