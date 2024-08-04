<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <!-- Style Notifikasi for Dashboard -->
  <style>
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.5);
      display: none;
      z-index: 999;
    }
    .notification {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      color: black;
      padding: 15px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(2, 0, 0, 0.2);
      display: none;
      z-index: 1000;
      max-width: 90%;
      width: 300px;
    }
    .notification-content {
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: center;
    }
    .notification-text {
      font-size: 16px;
    }
    .notif-header {
      margin-bottom: 5px;
    }
    .notification-close {
      background: #FF4C4C;
      border: none;
      color: white;
      font-size: 20px;
      cursor: pointer;
      margin-top: 20px;
      width: 80%;
      height: 35px;
      border-radius: 5px;
    }
    .text-content-pop {
      padding: 10px;
    }
    .bold {
      font-weight: 600;
    }
  </style>
</head>