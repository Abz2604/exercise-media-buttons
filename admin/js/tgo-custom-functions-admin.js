(function( $ ) {
	'use strict';

	jQuery( document ).ready(function() {

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	/*
	jQuery('#ExerciseTable').DataTable({
		"paging":   false,
		"ordering": false,
		"info":     false
	});
	*/
		jQuery('#ExerciseTable').DataTable({
			"paging":   false,
			"ordering": false,
			"info":     false
		});
	});

})( jQuery );

function insert_exercise_link(title,post_content,exercises_video_url){
	var active_ed = tinymce.activeEditor;
	active_ed.execCommand('mceInsertContent', false, '<h3>' + title + '</h3><p>'+post_content+'</p><br>'+exercises_video_url+'<p>______</p><p> </p>');
	// active_ed.execCommand("mceRepaint");

    setTimeout(function() { active_ed.hide(); }, 1);
    setTimeout(function() { active_ed.show(); }, 10);
}
