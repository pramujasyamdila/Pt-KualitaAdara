<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>AdminLTE 3 | Top Navigation</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="<?= base_url('assets/admin_lte/') ?>plugins/fontawesome-free/css/all.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url('assets/admin_lte/') ?>dist/css/adminlte.min.css">
   <!-- daterange picker -->
   <link rel="stylesheet" href="<?= base_url('assets/admin_lte/') ?>plugins/daterangepicker/daterangepicker.css">
   <!-- summernote -->
   <link rel="stylesheet" href="<?= base_url('assets/admin_lte/') ?>plugins/summernote/summernote-bs4.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/admin_lte/plugins/select2/css/select2.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/admin_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- Sweetalert-->
   <link href="<?= base_url('assets/'); ?>sweetalert2/sweetalert2.min.css" rel="stylesheet">
   <script src="<?= base_url('assets/'); ?>js/sweetalert.min.js"></script>
</head>
<?php
$this->role_login->cek_login();
?>

<body class="hold-transition layout-top-nav">
   <div class="wrapper">