# TP02-PHP-SABER-HIBA
TP 02 PHP — Programmation Web 2 — 2026/2027
NOM et PRENOM : SABER HIBA
GROUPE : 3
titre du TP : TP02
lancez le serveure intégré dans ce dossier : & "C:\xampp\php\php.exe" -S localhost:8000
la liste des exercices :
| `README.md` | Présentation, instructions d'exécution et réponses courtes |
| `index.php` | Page d'accueil avec un lien vers chacun des 10 exercices |
| `ex01.php` à `ex09.php` | Solutions des exercices 1 à 9 |
| `ex10_get.html` et `ex10_get.php` | Formulaire GET et son traitement |
| `ex10_post.html` et `ex10_post.php` | Formulaire POST et son traitement |

##### EX02
## 5.
# expliquer pourquoi ces deux variables sont différentes
La sensibilité à la casse fait que deux variables aux majuscules ou minuscules différentes stockent des valeurs indépendantes.
# identifier les noms valides parmi `$a`, `$_a`, `$a_a`, `$AAA`, "$a!", `$1a`, `$a1`.
les nom valide sont : "$a" , "$a_a","$AAA" ,"$a1", $_a"
les nom non valide sont : "a!" ,"$1a" 

##### EX04
## 6. Expliquer dans le README la différence d'affichage de `false` entre `echo` et `var_dump()`.
--> echo est fait pour l'utilisateur final. Il convertit false en un texte vide "", donc rien ne s'affiche.
--> var_dump() est fait pour le développeur (débogage). Il affiche le type et la valeur exacte, soit bool(false).
## EX05
## 4. Tester successivement `-1`, `9`, `10`, `12`, `14`, `16` et `21` en changeant la variable.
## 5. Consigner dans le README les valeurs testées et les messages obtenus.

`-1`-->Non valide
`9`-->Non valide
`10`-->Passable
`12`-->Assez bien
`14`-->Bien
`16`-->Trés bien
`21`-->la note est note carrect
## EX06
## 4. Tester `1`, `3`, `12` et `15`.
 `1`-->Jnvier
 `3`-->Mars
 `12`-->Décembre
 `15`-->Numéro de mois invalide