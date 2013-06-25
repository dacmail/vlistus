<?php $this->load->view('includes/header'); ?>

<div id="message-area"><?= $this->session->flashdata('message'); ?></div>

<?php $this->load->view($main_content); ?>

<?php $this->load->view('includes/footer'); ?>