<?php

if (isset($content)) {
    $this->load->view($template . '/index', $content);
} else {
    $this->load->view($template . '/index');
}
?>