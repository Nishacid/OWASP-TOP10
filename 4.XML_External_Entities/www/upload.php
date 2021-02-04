<?php

if (isset($_POST['submit'])) {
    if (!empty($_FILES['file'])) {
        $Infos = pathinfo($_FILES['file']['name']); // informations
        $Extension = $Infos['extension']; // extension
        $AuthorizedExtension = array('xml'); // authorized extension

        if (in_array($Extension, $AuthorizedExtension)) {
            $Name = 'upload/'.rand().time().rand().'.'.$Extension ; // random name
            move_uploaded_file($_FILES['file']['tmp_name'], $Name); // picture upload
            libxml_disable_entity_loader (false);
            $xmlfile = file_get_contents($Name);
            $dom = new DOMDocument();
            $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD); 
            $root = simplexml_import_dom($dom);
            echo $root; 

        } else {
            echo 'The file you uploaded is not a xml file.';
        }
    }
}

?>