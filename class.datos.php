<?php

include_once("abstract.databoundobject.php");
include_once("class.pdofactory.php");

class Datos extends DataBoundObject {

    protected $URL;
    protected $AuthorName;
    protected $AuthorUrl;
    protected $Photo;

    protected function DefineTableName() {
        return("datos");
    }

    protected function DefineRelationMap() {

        return(array(
            "id" => "ID",
            "url" => "URL",
            "author_name" => "AuthorName",
            "author_url" => "AuthorUrl",
            "photo" => "Photo",
        ));
    }
  
    
}

?>
