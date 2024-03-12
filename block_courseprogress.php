<?php
class block_courseprogress extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_courseprogress');
    }

    public function get_content() {
        global $USER, $COURSE;

        if ($this->content !== null) {
            return $this->content;
        }

        // Include the locallib.php file
        require_once(__DIR__ . '/locallib.php');

        $this->content = new stdClass();
        $this->content->text = local_courseprogress_render_progress_bar($COURSE->id, $USER->id);

        return $this->content;
    }
}
