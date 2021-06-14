<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8" async defer></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

<div id="exercise_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!-- <h4 class="modal-title">Modal Header</h4> -->
      </div>
      <div class="modal-body">
      <!-- <div class="card"> -->
        <!-- <div class="card-header">Exercises<i class="close pull-right">X</i></div> -->
        <table id="ExerciseTable" class="display" style="width:100%;border-top: 1px solid;">
					 <thead>
			            <tr>
			                <th>Title</th>
			            </tr>
			        </thead>
					<tbody>
						<?php
						$exercises = get_posts(array('numberposts'=> -1,'post_type'=>'exercises'));
                        // var_dump($exercises);
						foreach ($exercises as $exercises_value) {
							$exercises_value->ID;
							$post_content=$exercises_value->post_content;
							$exercises_value->post_title;
							// $exercises_post_link=get_permalink($exercises_value->ID);
							$metadata_exercise=get_post_meta( $exercises_value->ID, 'exercise-link', true );
							// var_dump($metadata_exercise);
							if ($metadata_exercise) {
								$meta_exercises_video=$metadata_exercise;	
							}else{
								$meta_exercises_video='';
							}
								
								?>
								<tr>
									<td>
										<div data-dismiss="modal" onclick="insert_exercise_link('<?php echo $exercises_value->post_title; ?>',`<?php echo $post_content; ?>`,'<?php echo $meta_exercises_video; ?>')" class="ins_ex_link">
											<?php
												if ($exercises_value->post_title) {
													echo $exercises_value->post_title;	
												}else{
													echo "(no title)";
												}
										  	?>
										</div>
										
									  </td>
								</tr>
								<?php
							}
						?>
						
					</tbody>
				</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      <!-- </div> -->
    </div>

  </div>
</div>