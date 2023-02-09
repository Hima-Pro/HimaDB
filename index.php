<?php
# ==Server Configuration Section==
error_reporting(0);
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

# ==Server Main Class Section==
include("cdn/assets/class.php");

# ==Server Functions Section==
if (isset($_GET["auth"])) {
  $db = new HimaDB($_GET["auth"]);
} else {
  $db = new HimaDB("data");
}
# Endpoint: /?auth=dbName&get=keyName
if (isset($_GET["get"])) {
  $db->get($_GET["get"]);
}
# Endpoint: /?auth=dbName&all=true
if (isset($_GET["all"])) {
  $db->getAll();
}
# Endpoint: /?auth=dbName&set={}
if (isset($_GET["set"])) {
  $db->create($_GET["set"]);
}
# Endpoint: /?auth=dbName&name=customKey&put={}
if (isset($_GET["put"]) && isset($_GET["name"])) {
  $db->update($_GET["name"], $_GET["put"]);
}
# Endpoint: /?auth=dbName&del=keyName
if (isset($_GET["del"])) {
  $db->delete($_GET["del"]);
}
# Endpoint: /?reset=dbName
if (isset($_GET["reset"])) {
  $db->reset();
}
# Endpoint: /?unlink=dbName
if (isset($_GET["unlink"])) {
  $db->format();
}