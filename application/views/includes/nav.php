<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
<link rel="shortcut icon" href="#">

<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
</head>

<body>

  <div class="row mb-4">
    <div class="col-12">
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Search by
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo base_url('search/author') ?>">Author</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url('search/faculty') ?>">Faculty</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url('search/dateissued') ?>">Date Issued</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Archive
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo base_url('archive/campus')?>">Campus</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url('archive/faculty')?>">Faculty</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- navbar -->
    </div>
  </div>
  <div class="container-fluid ">
