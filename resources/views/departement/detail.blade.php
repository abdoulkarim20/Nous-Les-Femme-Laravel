<?php
echo $departement->nom . '<br>';
echo $departement->region->nom . '<br>';
foreach ($departement->communes as $dep) {
    echo $dep->nom;
}
