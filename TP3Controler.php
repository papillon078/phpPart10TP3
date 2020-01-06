<?php
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
// 4 appels de la fonction
function portraitShow($myPortrait){
    return '<div class="col-6">'.
            '<div class="row">'.
                '<div class="col-7 p-2">'.
                    '<img src="'.$myPortrait['portrait'].'" class="w-75" />'.
                '</div>'.
                '<div class="col-5 p-2">'.
                    '<p>'.$myPortrait['name'].'</br>'.$myPortrait['firstname'].'</p>'.
                '</div>'.
            '</div>'.   
        '</div>';
    }
?>