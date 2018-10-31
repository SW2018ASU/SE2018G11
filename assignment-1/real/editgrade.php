<?php
	include_once("./controllers/common.php");
	include_once('./components/head_grades.php');
	include_once('./models/grade.php');
	$id = safeGet('id');
	Database::connect('students', 'root', '');
	$grade = new Grade($id);
?>

    <h2 class="mt-4">Edit grade</h2>

    <form action="controllers/updategrade.php" method="post">
    	<input type="hidden" name="id" value="<?=$grade->get('id')?>">
		<div class="card">
			<div class="card-body">
				<div class="form-group row gutters">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Grade</label>
					<div class="col-sm-10 mb-3">
						<input class="form-control" type="text" name="degree" value="<?=$grade->get('degree')?>" required>
					</div>
					<label for="inputEmail3" class="col-sm-2 col-form-label">Examine at</label>
					<div class="col-sm-10">
						<input class="form-control" type="date" name="date" value="<?=$grade->get('examine_at')?>" required>
					</div>
				</div>
		    	<div class="form-group">
		    		<button class="button float-right" type="submit">Update</button>
		    	</div>
		    </div>
		</div>
    </form>

<?php include_once('./components/tail.php') ?>
