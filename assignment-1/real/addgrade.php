<?php
	include_once("./controllers/common.php");
	include_once('./components/head_grades.php');
  include_once('./models/student.php');
  include_once('./models/course.php');
	include_once('./models/grade.php');
	Database::connect('students', 'root', '');
?>

    <h2 class="mt-4">Add grade</h2>

    <form action="controllers/newgrade.php" method="post">

		<div class="card">
			<div class="card-body">
				<div class="form-group row gutters">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Select student</label>
            </div>
            <select class="custom-select" name="st_select" id="inputGroupSelect01">
              <option selected>Choose...</option>
            <?php
    				$students = Student::all(safeGet('keywords'));
    				foreach ($students as $student) {
      			?>
              <option value="<?=$student->id?>"><?=$student->name?></option>
            <?php } ?>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Select course</label>
            </div>
            <select class="custom-select" name="cr_select" id="inputGroupSelect01">
              <option selected>Choose...</option>
            <?php
    				$courses = Course::all(safeGet('keywords'));
    				foreach ($courses as $course) {
      			?>
              <option value="<?=$course->id?>"><?=$course->name?></option>
            <?php } ?>
            </select>
          </div>
					<label for="inputEmail3" class="col-sm-2 col-form-label">Grade</label>
					<div class="col-sm-10 mb-3">
						<input class="form-control" type="text" name="degree"  required>
					</div>
					<label for="inputEmail3" class="col-sm-2 col-form-label">Examine at</label>
					<div class="col-sm-10 mb-3">
						<input class="form-control" type="date" name="date"  required>
					</div>
				</div>
		    	<div class="form-group">
		    		<button class="button float-right" type="submit">Add</button>
		    	</div>
		    </div>
		</div>
    </form>
    <script type="text/javascript">
    	$(document).ready(function() {
    		$('.edit_grade').click(function(event) {
    			window.location.href = "editgrade.php?id="+$(this).attr('id');
    		});
    	});
    </script>
<?php include_once('./components/tail.php') ?>
