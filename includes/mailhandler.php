<?php

    require_once 'Page.class.php';
    require_once 'Mail.php';
    $doc = new Page("mailhandler");
    
    $backend = "smtp";
    
    $params["host"] = "smtp.unoeuro.com";
    $params["port"] = 25;
    $params["auth"] = FALSE ;
    $params["localhost"] = "smtp.unoeuro.com"; //The value to give when sending EHLO or HELO. Default is localhost 
    $params["timeout"] = NULL;
    $params["verp"] = FALSE; //Whether to use VERP or not. Default is FALSE. 
    $params["debug"] = FALSE;
    $params["persist"] = FALSE;
    $params["pipelining"] = FALSE; //Indicates whether or not the SMTP commands pipelining should be used. 
    
    $headers["name"] = "no-reply@aarhusnorhavn.dk";
    $headers["Sender"] = "no-reply@aarhusnorhavn.dk";
    $headers["Reply-To"] = "no-reply@aarhusnorhavn.dk";
    $headers["Return-Path"] = "no-reply@aarhusnorhavn.dk";
    $headers["Date"] = date("D, j M Y H:i:s O",time());
    
    $smtp =& Mail::factory($backend, $params);
    
    print_r($params);
    print_r($headers);
    