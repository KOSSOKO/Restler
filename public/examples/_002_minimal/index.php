<?php
/*
 Tagline: Less is more
 Tags: basic, validation, http status
 Requires: PHP >= 5.3
 Description: Shows the bare minimum code needed to get your RESTful api server up and running
 Example 1: GET math/add returns 2
 Example 2: GET math/add?n1=6&n2=4 returns 10
 Example 3: GET math/multiply/4/3 returns {"result":12}
 */

require_once '../../../vendor/restler.php';
//smart auto loader helps loading a namespaced class with just the name part
//use Luracast\Restler\Restler;

$r = new Restler();
$r->addAPIClass('Math');
$r->handle();

