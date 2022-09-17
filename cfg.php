<?php
if(isset($_GET["session_id"]))
    session_id($_GET["session_id"]);
session_start();
DEFINE("SESSION_ID", session_id());
DEFINE ("HTML_PATH", $_SERVER["DOCUMENT_ROOT"]."/");
DEFINE ("ROOT_PATH", str_replace("\\","/",__DIR__)."/");
DEFINE ("CLASSES", ROOT_PATH."classes/");
?>