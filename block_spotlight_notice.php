<?php
defined('MOODLE_INTERNAL') || die();

class block_spotlight_notice extends block_base
{

    public function init()
    {
        $this->title = get_string('pluginname', 'block_spotlight_notice');
    }


    public function get_content()
    {
        global $OUTPUT;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->page->requires->css('/blocks/spotlight_notice/style.css');

        $this->content = new stdClass();

        // Leggi titolo e messaggio dalla config
        $title   = $this->config->title     ?? get_string('notice_title',   'block_spotlight_notice');

        if (!empty($this->config->message) && is_array($this->config->message)) {
            $message = format_text(
                $this->config->message['text'],
                $this->config->message['format']
            );
        } else {
            $message = '';
        }

        $bgcolor = !empty($this->config->bgcolor) ? $this->config->bgcolor : '#bbcdea';

        // format_text(…, FORMAT_HTML) renderizza i tag HTML in sicurezza
        $data = [
            'title'   => format_string($title),
            'message' => $message,
            'bgcolor' => $bgcolor
        ];

        $this->content->text   = $OUTPUT->render_from_template('block_spotlight_notice/spotlight_notice', $data);
        $this->content->footer = '';

        return $this->content;
    }

    public function applicable_formats()
    {
        return ['all' => true];
    }

    public function has_config()
    {
        return false;
    }

    public function instance_allow_multiple()
    {
        return true;
    }
}
