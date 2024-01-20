<html>
    <head>

    </head>
    <body>
        <p>paragraphe</p>
    </body>
</html>


<?php

$dom = new DOMDocument('1.0', 'utf-8');

$element = $dom->createElement('p', 'Ceci est un paragragrahe !');

// Nous insérons le nouvel élément en tant que racine (enfant du document)
$dom->appendChild($element);

$element2 = $dom->createElement('test', 'Ceci est un test !');

// Nous insérons le nouvel élément en tant que racine (enfant du document)
$dom->appendChild($element2);

echo $dom->saveXML();
?>

<?php

function createElement($domObj, $tag_name, $value = NULL, $attributes = NULL)
{
    $element = ($value != NULL ) ? $domObj->createElement($tag_name, $value) : $domObj->createElement($tag_name);

    if( $attributes != NULL )
    {
        foreach ($attributes as $attr=>$val)
        {
            $element->setAttribute($attr, $val);
        }
    }

    return $element;
}

$dom = new DOMDocument('1.0', 'utf-8');

$elm = createElement($dom, 'p', 'bar', array('attr_name'=>'attr_value'));

$dom->appendChild($elm);

echo $dom->saveXML();

?>