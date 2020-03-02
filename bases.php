
<style>
h2 {
    border-top: 1px solid navy;
    border-bottom: 1px solid navy;
    color: navy;
    /* text-align: center; */
}
</style>

<?php
//-----------------------------------
echo '<h2>Les balises PHP</h2>';
//-----------------------------------
?>

<?php
//pour ouvrir un passsage en php on utilise la balise précédente
//pour fermer un passage en php on utilise la balise suivante:
?>

<p>Bonjour</p> <!-- en dehors des balises PHP nous pouvons écrire du HTML dans un fichier ayant l'extension .php (ce n'est pas possible dans un fichier .html-->

<?php
//Vous n'êtes pas obligé de fermer un passage PHP en fin de script.
// doble slash sert à  faire un conmmentaire sur 1 seule ligne
# pour faire un commentaire sur 1 seule ligne
/* 
    pour faire 
    des commentaires
    sur plusieurs lignes
*/

//-----------------------------------
echo '<h2>Affichage</h2>';
//-----------------------------------

echo 'Bonjour <br>'; // echo est une instruction qui permet d'effectuer un affichage. Nous pouvons y mettre du HTML. Toute les instructions se terminent par un ";" en PHP.

print 'Nous sommes lundi <br>'; // print est une autre instruction d'affichage

var_dump('code');
print_r('code'); // ces deux fonctions d'affichage permetent d'analyser dans le navigateur le contenu d'une variable par exemple (nous en verrons l'utilisation plus tard).

//-----------------------------------
echo '<h2>Variable</h2>';
//-----------------------------------
//Une variable est un espace mémoire qui porte un nom et qui permet de conserver une valeur. Cette valeur peut être de n'importe quel type.
//En PHP en représente une variable avec le signe "$".

$a = 127; // on déclare la variable $a et lui affecte la valeur 127
echo gettype($a); //gettype est une fonction prédéfinie qui permet de voir le type d'une variable. Ici il s'agit d'un integer (entier)
echo '<br>';

$a = 1.5;
echo gettype($a);//ici il s'agit d'un double.(nombre à virgule)
echo '<br>';

$a = 'une chaine de charactères';
echo gettype($a);
echo '<br>'; // ici il s'afit d'un string

$a = '127';
echo gettype($a); //un nombre écrit entre quotes ou guillemets est interprété comme un string.
echo '<br>';

$a = true; //ou false
echo gettype($a); // ici il s'agit d'un boolean (booléen)
echo '<br>';

// Par convention un nom de variable commence par une minuscule, puis on met une majuscule à chaque mot. Il peut contenir des chiffres (jamais au début) ou un "_" (pas au début ni à la fin).
// Exemple : $maVariable1

//-----------------------------------
echo '<h2>Concaténation</h2>';
//-----------------------------------

// En PHP on concatène avec le pointb"."
$x = 'Bonjour ';
$y = 'tout le monde';
echo $x.$y.'<br>';
 // On concatène les deux variables et le string avec le point que l'on peut traduire par 'suivi de'.

 //-----------------
 //Concaténation et affectation combinées ave l'opérateur ".="
 $prenom = 'Nicolas';
 $prenom .= '-Maria'; // on ajoute la valeur "-Maria" à la valeur "Nicolas" sans la remplacer grâce à l'opérateur ".="

 echo $prenom .'<br>'; // affiche "Nicolas-Marie"

//-----------------------------------
echo '<h2>Guillemets et quotes</h2>';
//-----------------------------------
$message = "aujourd'hui <br>";
$message .= 'aujourd\'hui <br>'; // on échape les apostrophes quand on écrit dans les quotes simples avec "\" (AltGr + 8)
echo $message;

$txt = 'Bonjour';
echo "$txt tout le monde <br>"; // dans les guillements, la variable est évaluée : c'est son contenu qui est affiché.
echo '$txt tout le monde <br>'; // dans les quotes simples, $txt est considété comme une chaine de caractères brute : on affiche $txt littéralment.

//-----------------------------------
echo '<h2>Constante</h2>';
//-----------------------------------
// Une constante permet de conserver une valeur sauf que celle ci ne peut pas changer. c'est à dire qu'on ne pourra pas la modifier durant l'exécution du script. Utile pour conserver les paramètres de connexion à la BDD de façon certaine.

define('CAPITALE_FRANCE', 'Paris'); // par convention une constante s'écrit toujours en MAJUSCULES. Ici on déclare la constante CAPITALE_FRANCE à Laquelle on affecte 'Paris'.
echo CAPITALE_FRANCE . '<br>';

//Autre syntaxe pour déclarer une constante : 
const TAUX_CONVERTION = 6.55957; //On peut aussi déclarer une constante avec le mot clé const.
echo TAUX_CONVERTION . '<br>'; //affiche 6.55957

//-----------------------------------
echo '<h2>Exercice <br></h2>';
//-----------------------------------

//-----------------
// Exercice: Vous afficher Bleu-Blanc-Rouge en mettant le texte de chaque couleur dans des variables.
$a = 'Bleu';
$b = '-Blanc';
$c = '-Rouge';
echo $a.$b.$c.'<br>';
echo "$a$b$c <br>";
$couleur ='Bleu';
$couleur .='-Blanc';
$couleur .='-Rouge <br>';
$couleur .='Bleu-Blanc-Rouge <br>';
echo $couleur;

//---------------------------------------------------
echo '<h2>Les opérateurs arithmètiques <br></h2>';
//---------------------------------------------------
$a = 10;
$b = 2;
echo $a + $b .'<br>'; // 12
echo $a - $b .'<br>'; // 8
echo $a * $b .'<br>'; // 20
echo $a / $b .'<br>'; // 5
echo $a % $b .'<br>'; // 0 // modulo = reste de la division entière. Exemple: 3 % 2 = 1 car si on a 3 billes réparties sur 2 personnes, il nous en reste 1.

//Opération et affectation combinées : 
$a = 10;
$b = 2;

$a += $b; // équivaut à $a = $a + $b soit $a = 10 + 2, $a vaut donc 12 au final
$a -= $b; // équivaut à $a = $a - $b soit $a = 12 - 2, $a vaut donc 10 au final
echo $a;
// On utilise ces opérateurs dans les paniers d'achat par exemple.
// Il existe aussi les opérateurs *=, /= et %=

//-----------------------------------------------------
echo '<h2>Incrémentation et décrémentation <br></h2>';
//-----------------------------------------------------
//---------------
//Encrémenter et décrémenter : 
$i = 0;
$i++; // on augmente $i de 1
$i--; // on domunue $i de 1 ($i vaut donc 0 ici)
echo $i;

//---------------------------------------------------
echo '<h2>Les structures conditionnelles <br></h2>';
//---------------------------------------------------

$a = 10;
$b = 5;
$c = 2;

// if ... else :

if($a >$b){ // si la condition est vraie, c'est-à-dire que $a est supérieur à $b, alors on exécute les accolades qui suivent:
    echo '$a est supérieur à $b <br>';
} else { //sinon si la condition est fausse on exécute le else:
    echo 'Non c\'est $b qui est supérieur ou égal à $a <br>';
}

// l'opérateur And qui s'écrit &&
if($a >$b && $b > $c){ // si $a est supérieur à $b et que dans le même temps $b est supérieur à $c, alor on entre dans les accolades:
    echo 'Ok pour les deux conditions <br>';
}

//l'opérateur OR qui s'écrit || (altgr+6)
if($a == 9 ||$b > $c){ // si $a est égal (== pour comparer en valeur) à 9 ou alors $b est supérieur à $c, alors on exécute les accolades qui suivent:
    echo 'ok pour au moins une des deux conditions <br>';
} else {// sinon est que les deux conditions sont fausses
    echo 'Les deux conditions sont fausses';
}
//if ... elseif ... else:
if($a == 8){ //si $a est égal à 8
    echo 'réponse 1 : $a est égal à 8';

} elseif($a != 10){//sinon si $a est diffétent de 10
    echo 'réponse 2: $a est different de 10';

}else{//sinon, si nous ne sommes pas entrés dans le if ni dans le elseif, on entre dans le else :
    echo 'réponse 3: les deux conditions précédentes sont fausses <br>';
}
//----------
// La condition ternaire :
//La ternaire est une autre syntaxe pour écrire un if...else.
$a = 10;
echo($a==10)?'$a est égal à 10 <br>':'$a est différent de 10 <br>';// dans la ternaire le '?' remplace le 'if' et le ':' remplace le else. 
//Ainsi on dit : si $a est égal à 10, on affiche la première expression sinon la seconde.

 //-----------
 // Comparaison avec == et ===
 $varA = 1; // integer
 $varB = '1'; //string

 if($varA == $varB){//La condition est vraie car en valeur 1 et '1' sont équivalents
     echo '$varA est égal à $varB en valeur uniquement <br>';
 }
if($varA === $varB){ //La condition est fausse car 1 et '1' sont différents en type
    echo '$varA est égal à $varB en valeur et en type (stritement égaux <br>';
} else {
    echo 'Les deux variables sont differentes en type même si la valeur peut être égale: (pas strictement égales <br>';
}
// Pour mémoire l'opérateur '=' est un signe d'afectation.

//---------------------------------------------------
echo '<h2>isset et empty <br></h2>';
//---------------------------------------------------
//-------------
// isset() et empty():
//Définitions :
//empty() vérifie si c'est vide : 0,'', NULL,false, non définie
//isset() vérifie si c'est défini, et non NULL
$var1 = 0;
$var2 = '';
if(empty ($var1)){
    echo '$var1 est vide (0, string vide, NULL, false ou non défini) <br>';
}
if(isset($var2)){
    echo '$var2 existe et est non NULL <br>';   
}

// Différence entre isset() et empty (): si on suprime les déclarations de variables $var1 et $var2, empty reste vraie var $var1 n'est pas définie. 
//Isset devient fausse car $var2 n'est pas définie non plus.

//Utilisation: empty pour vérifier qu'un champ de formulaire est rempli. isset pour vérifier l'existance d'une variable avant de l'utiliser.

//-------------
//L'opérateur not qui s'écrit "!":
$var3 ='quelque chose';
if(!empty ($var3)){
    echo '$var3 n\'est pas vide <br>';//ici on entre dans la condition, car $var3 ,'est pas vide
}

//-------
//PHP7: afficher une variable sous condition d'existence avec l'opérateur "??"

echo $maVar??'valeur par défaut';//on affiche la variable $mavar si elle existe, sinon on affiche le string qui suit.

//Exemple d'utilisation: pour Laisser Les valeurs saisies dans un formulaire
