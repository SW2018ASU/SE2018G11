<?php
	include_once('database.php');
	class Grade extends Database{
		function __construct($id) {
			$sql = "SELECT * FROM grades WHERE id = $id;";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$data = $statement->fetch(PDO::FETCH_ASSOC);
			if(empty($data)){return;}
			foreach ($data as $key => $value) {
				$this->{$key} = $value;
			}
		}

		public static function add($st_id,$cr_id,$degree,$examine_at) {
			$sql = "INSERT INTO grades (student_id,course_id,degree,examine_at) VALUES ('$st_id','$cr_id','$degree','$examine_at')";
			Database::$db->prepare($sql)->execute();
		}

		public function delete() {
			$sql = "DELETE FROM grades WHERE id = $this->id;";
			Database::$db->query($sql);
		}

		public function save() {
			$sql = "UPDATE grades SET degree = ?,examine_at= ? WHERE id = ?;";
			Database::$db->prepare($sql)->execute([$this->degree,$this->examine_at, $this->id]);
		}

		public static function all($keyword) {
			$keyword = str_replace(" ", "%", $keyword);
			$sql_gr = "SELECT grades.id,students.name AS stname,courses.name AS crname FROM grades
			JOIN students on students.id=grades.student_id
			JOIN courses on courses.id=grades.course_id
			WHERE students.name like ('%$keyword%') or courses.name like ('%$keyword%')
			ORDER BY students.name,courses.name;";
			$statement = Database::$db->prepare($sql_gr);
			$statement->execute();
			$grades = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
						$grades[] = new Grade($row['id']);
			}
			return $grades;
		}
	}
?>
