<?php
defined('MOODLE_INTERNAL') || die();

function local_courseprogress_get_completion_percentage($courseid, $userid) {
    // Your logic to calculate completion percentage for the user in the given course
    // Example: $percentage = calculate_percentage($courseid, $userid);
    $percentage = 50; // Replace this with your actual calculation

    return $percentage;
}

function local_courseprogress_render_progress_bar($courseid, $userid) {
    $percentage = local_courseprogress_get_completion_percentage($courseid, $userid);
    $progress_bar = '<div class="course-progress">';
    $progress_bar .= get_string('progress', 'block_courseprogress') . $percentage . '% ';
    $progress_bar .= '<progress value="' . $percentage . '" max="100"></progress>';
    $progress_bar .= '</div>';

    return $progress_bar;
}
