<?php
	class Database {
		protected static $db = null;

		public static function connect() {
			if(!empty(Database::$db)) return;

			$dsn = "mysql:host=localhost;dbname=codeguide";

			try {
		   		Database::$db = new PDO($dsn,'root',"");
			} catch(PDOException $e){
		   		echo $e->getMessage();
			}
		}

		public function get($field) {
			if(isset($this->{$field}))
				return $this->{$field};
			return null;
		}
	}
?>
