<?php

session_start();
require "vendor/autoload.php";
use myPHPnotes\Microsoft\Auth;
$tenant = "supinfo.com";
$client_id = "f1479853-5db1-4999-90ad-26a18bc1a9ac";
$client_secret = "hD28Q~Dz.OQXLKKvFos57NXXZCIumFlroUbEGan9";
$callback = "http://localhost:63342/callback.php";
$scopes = ["User.Read"];
$microsoft = new Auth($tenant, $client_id, $client_secret,$callback, $scopes);
header("location: " . $microsoft->getAuthUrl());