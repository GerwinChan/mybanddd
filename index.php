<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
//
include 'includes/fncts.php';




// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Nr.1 footballnews - Golazo ');

// Display template: output html
$templateParser->display('head.tpl');






$templateParser->display('header.tpl');




// Get newsarticles from database

$action = isset($_GET['action'])?$_GET['action']:'homepage';
switch($action) {

  case 'homepage':




  include('model/select_homepage.php');




  $templateParser->assign('result',$result);
  $templateParser->display('homepage.tpl');
break;

  case 'home':
  $page_nr = isset($_GET['pagenr'])?$_GET['pagenr']:1;



  include('model/select_newsarticles.php');

// Show newsarticles 'old style' => refactor to template system.


  $templateParser->assign('result',$result);
  $templateParser->display('newsarticles.tpl');
break;

case 'about':

  include('model/select_speelschema.php');
  //go to about model
  //assign to smarty
  $templateParser->assign('result',$result);
  $templateParser->display('about.tpl');

break;

case 'logo':

include('model/logo.php');

$templateParser->assign('result',$result);
$templateParser->display('logo.tpl');
break;

case 'logo1':

include('model/logo1.php');

$templateParser->assign('result',$result);
$templateParser->display('logo1.tpl');
break;

case 'logo2':

include('model/logo2.php');

$templateParser->assign('result',$result);
$templateParser->display('logo2.tpl');
break;

case 'logo3':

include('model/logo3.php');

$templateParser->assign('result',$result);
$templateParser->display('logo3.tpl');
break;

case 'highlight':
 include('model/highlight.php');

 $templateParser->assign('result',$result);
 $templateParser->display('highlight.tpl');
  break;


  case 'over':
   include('model/over.php');

   $templateParser->assign('result',$result);
   $templateParser->display('over.tpl');
    break;
};


//$templateParser->display('about.tpl');



$footerText = '© 2016 GERWIN CHAN MADE FOR SCHOOL';


$templateParser->assign('footerString',$footerText);

$templateParser->display('footer.tpl');
