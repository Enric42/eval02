<?php

/* exercice 2 */


function lireNote ($aEleve)
{
    global $aData;
    foreach ($aData as $value) {
        if ($value['prenom'] == $aEleve){
                echo "\n";
                echo $value ['note'];
                echo "\n";
        }
    }

}

/* exercice 3 */


function supprimerEleve ($aEleve)
{
    global $aData;
    foreach ($aData as $key => $value)
    {
        if ($value['prenom'] == $aEleve){
            unset($aData[$key]);
        }
        
        
    }
}

/* exercice 4 */


function modifierNote ($aEleve,$aNote)
{
    global $aData;
    foreach ($aData as $key => $value)
    {
        if ($value['prenom'] == $aEleve){
            $aData[$key]=['prenom'=>$aEleve,'note'=>$aNote];
        }
        
        
    }
}

/* Exercice 5 */
function csv () 
{
    global $aData;

    $chemin = 'fichier.csv';
    $delimiteur = ',';
    $fichier_csv = fopen($chemin, 'w+');
    fprintf($fichier_csv, chr(0xEF).chr(0xBB).chr(0xBF));
    foreach($aData as $ligne)
    {

        fputcsv($fichier_csv, $ligne, $delimiteur);
    }
        fclose($fichier_csv);
}