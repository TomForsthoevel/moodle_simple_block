<?php
class block_simplehtml extends block_base {
    public function init() {
        $this->title = get_string('simplehtml', 'block_simplehtml');
    }
    // The PHP tag and the curly bracket for the class definition
    // will only be closed after there is another function added in the next section.

    public function get_content() {
      if ($this->content !== null) {
        return $this->content;
      }

      if (! empty($this->config->text)) {
        $this->content->text = $this->config->text;
      }

      $this->content         =  new stdClass;
      $this->content->title  = 'My Block!';
      $this->content->text   = 'The content of our SimpleHTML block!';
      $this->content->footer = 'Footer here...';

      return $this->content;
    }

    public function specialization() {
      if (isset($this->config)) {
        if (empty($this->config->title)) {
            $this->title = get_string('defaulttitle', 'block_simplehtml');
        } else {
            $this->title = $this->config->title;
        }

        if (empty($this->config->text)) {
            $this->config->text = get_string('defaulttext', 'block_simplehtml');
        }
      }
    }

    public function googleSearch() {
      $api_url = 'https://cse.google.com/cse.js?cx=902af03543ff6269f';
      $json_data = file_get_contens($api_url);
    }
}
