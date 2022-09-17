<?php
class gate
{
    public static $HTML = array(
        "METAS"=>"",
        "LINKS"=>"",
        "NO_INDEX_LINKS"=>"",
        "HEAD_SCRIPTS"=>"",
        "TITLE"=>"",
        "NAVIGATION_BLOCK"=>"",
        "MAIN_BLOCK"=>"",
        "FOOTER_BLOCK"=>"",
        "BODY_SCRIPTS_BLOCK"=>""
    );
    function __construct()
    {
        self::$HTML["NAVIGATION_BLOCK"]=file_get_contents("templates/header/navblock.html");
        self::$HTML["BODY_SCRIPT_BLOCK"] = "<script src=\"scripts/js/myroom.js\"></script>";
        self::$HTML["LINKS"] .= "<link rel=\"stylesheet\" href=\"scripts/css/myroom.css\">";
    }
    public function setPage()
    {

    }
}
?>