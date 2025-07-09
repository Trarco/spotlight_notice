<?php
defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/blocks/edit_form.php');

class block_spotlight_notice_edit_form extends block_edit_form
{
    protected function specific_definition($mform)
    {
        // intestazione standard
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

        // — Titolo
        $mform->addElement(
            'text',
            'config_title',
            get_string('form_title', 'block_spotlight_notice')
        );
        $mform->setType('config_title', PARAM_TEXT);
        $mform->setDefault(
            'config_title',
            get_string('notice_title', 'block_spotlight_notice')
        );

        // — Messaggio (editor WYSIWYG)
        $mform->addElement(
            'editor',
            'config_message',
            get_string('form_message', 'block_spotlight_notice'),
            null,
            [
                'maxfiles'    => 0,       
                'maxbytes'    => 0,
                'trusttext'   => true,    
                'context'     => $this->block->context
            ]
        );

        $mform->setType('config_message', PARAM_CLEANHTML);


        // — Colore di sfondo (campo text) e help button
        $mform->addElement(
            'text',
            'config_bgcolor',
            get_string('form_bgcolor', 'block_spotlight_notice'),
            ['size' => 20]
        );
        $mform->setType('config_bgcolor', PARAM_TEXT);
        $mform->setDefault('config_bgcolor', '#bbcdea');
        $mform->addHelpButton('config_bgcolor', 'form_bgcolor_help', 'block_spotlight_notice');

        // pulsanti Salva/Annulla
        $this->add_action_buttons();
    }
}
