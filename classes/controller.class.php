<?php

  abstract class controller {

    protected $html;

    public function get() {}
    public function post() {}
    public function put() {}
    public function delete() {}
    public function __construct() {
      $header = '<!DOCTYPE>
        <html>
          <head>
	  <title>Meilin Lu</title>
	  <link rel="stylesheet" href="css/main.css">
	  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	  <meta name="viewport" content="width-device-width, initial-scale=1">
        </head>
	<body>
          <div id="wrapper">
	  <div class="header" id="header">
	  <div id="logo">
	    <a href="https://web.njit.edu/~ml473/TEST/index.php"><img src="img/logo.jpg"></a>
	  </div>
	  <div id="menu">
	    <ul>
	      <li><a href="index.php">Home</a></li>
	      <li><a href="index.php?controller=userController">Login</a></li>
	      <li><a href="index.php?controller=userController">Register</a></li>
	      <li><a href="index.php?controller=userController&action=logout">Logout</a></li>
	      <li><a href="index.php?controller=userController&action=profile">Profile</a></li>
	      <li><a href="index.php?controller=userController&action=usertable">Users</a></li>
            </ul>
	   </div>
         </div>
      ';
      $this->html .= $header;
    }

    public function getHTML() {
        return $this->html;
    }

  }
