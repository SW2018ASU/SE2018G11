<?php
	include_once('./controllers/common.php');
	include_once('./components/head_grades.php');
	include_once('./models/grade.php');
	include_once('./models/student.php');
	include_once('./models/course.php');
	Database::connect('students', 'root', '');
?>
<div style="padding: 10px 0px 10px 0px; vertical-align: text-bottom;">
	<span style="font-size: 125%;">Grades</span>
	<button class="button float-right add_grade" id="0">Add grade</button>
</div>

    <table class="table table-striped">
    	<thead>
	    	<tr>
	      		<th scope="col">Student name</th>
	      		<th scope="col">Course name</th>
            <th scope="col">degree</th>
            <th scope="col">Max degree</th>
						<th scope="col">Examine at</th>
	      		<th scope="col"></th>
	    	</tr>
	  	</thead>
	  	<tbody>
	  	<?php
				$grades = Grade::all(safeGet('keywords'));
				foreach ($grades as $grade) {
					$course=new Course($grade->course_id);
					$student=new Student($grade->student_id)
					?>
					<tr>
    			<td><?=$student->name?></td>
    			<td><?=$course->name?></td>
          <td><?=$grade->degree?></td>
          <td><?=$course->max_degree?></td>
					<td><?=$grade->examine_at?></td>
    			<td>
    				<button class="button edit_grade" id="<?=$grade->id?>">Edit</button>&nbsp;
						<button class="button delete_course" id="<?=$grade->id?>">Delete</button>
				</td>
    		</tr>
    		<?php } ?>
    	</tbody>
    </table>

<?php include_once('./components/tail.php') ?>

<script type="text/javascript">
	$(document).ready(function() {
		$('.edit_grade').click(function(event) {
			window.location.href = "editgrade.php?id="+$(this).attr('id');
		});
		$('.add_grade').click(function(event) {
			window.location.href = "addgrade.php?";
		});
		$('.delete_course').click(function(){
			var anchor = $(this);
			$.ajax({
				url: './controllers/deletegrade.php',
				type: 'GET',
				dataType: 'json',
				data: {id: anchor.attr('id')},
			})
			.done(function(reponse) {
				if(reponse.status==1) {
					anchor.closest('tr').fadeOut('slow', function() {
						$(this).remove();
					});
				}
			})
			.fail(function() {
				alert("Connection error.");
			})
		});
	});
</script>
