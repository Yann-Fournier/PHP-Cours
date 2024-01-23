<html>

<head>
    <link rel="stylesheet" href="test.css">
</head>

<body>
    <p>paragraphe</p>

    <div class="voyage">
        <div class="img_voy">
            <img src="img/maldives.png" class="img_dest">
        </div>
        <div class="info_voy">
            <h2 class="titre_voy">Maldives</h2>
            <h3 class="prix">599€</h3>
            <p class="desc_voy">Voyage pour trois personnes aux maldives</p>
            <button class="reservation_bouton">Reserver</button>
        </div>
    </div>

    <div id='balise_test'>
        <?php
            echo "truc";
        ?>
    </div>
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
    $element = ($value != NULL) ? $domObj->createElement($tag_name, $value) : $domObj->createElement($tag_name);

    if ($attributes != NULL) {
        foreach ($attributes as $attr => $val) {
            $element->setAttribute($attr, $val);
        }
    }

    return $element;
}

$elm = createElement($dom, 'p', 'bar', array('class' => 'truc'));

$dom->appendChild($elm);

$div = $dom->getElementById('balise_test');
// $attr = $div->getAttribute('balise_test');
// echo $attr;
// $div->appendChild($elm);

# Test Card ------------------------------------------------------------------
function create_card($dom)
{
    # Création élements
    $prem_div = createElement($dom, 'div', '', array('class' => 'voyage'));

    $deux_div = createElement($dom, 'div', '', array('class' => 'img_voy'));
    $img = createElement($dom, 'img', '', array('class' => 'img_voy', 'src' => 'img/maldives.png'));

    $trois_div = createElement($dom, 'div', '', array('class' => 'info_voy'));
    $titre_voy = createElement($dom, 'h2', 'Maldives', array('class' => 'titre_voy'));
    $prix = createElement($dom, 'h3', '599€', array('class' => 'prix'));
    $desc_voy = createElement($dom, 'p', 'Voyage pour trois personnes aux maldives', array('class' => 'desc_voy'));
    $button = createElement($dom, 'button', 'Reserver', array('class' => 'reservation_bouton'));

    # imbrication des éléments
    $trois_div->appendChild($titre_voy);
    $trois_div->appendChild($prix);
    $trois_div->appendChild($desc_voy);
    $trois_div->appendChild($button);

    $deux_div->appendChild($img);

    $prem_div->appendChild($deux_div);
    $prem_div->appendChild($trois_div);

    $dom->appendChild($prem_div);
}

for ($i = 0; $i < 10; $i++) {
    create_card($dom);
}

echo $dom->saveXML();

?>