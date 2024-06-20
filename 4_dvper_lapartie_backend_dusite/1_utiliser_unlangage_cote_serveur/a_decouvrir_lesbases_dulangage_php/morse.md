### Exercice : Transformation d'une chaîne de caractères en code Morse

**Objectif :**
Développer un script en PHP qui transforme une chaîne de caractères en code Morse.

**Description :**
Vous devez écrire une fonction en PHP qui prend en entrée une chaîne de caractères et retourne sa traduction en code Morse. Le code Morse est un système de codage qui utilise des séquences de points et de traits pour représenter les lettres et les chiffres.

**Traduction de l'alphabet en code Morse :**

| Lettre | Code Morse | Lettre | Code Morse | Lettre | Code Morse |
|--------|------------|--------|------------|--------|------------|
| A      | .-         | K      | -.-        | U      | ..-        |
| B      | -...       | L      | .-..       | V      | ...-       |
| C      | -.-.       | M      | --         | W      | .--        |
| D      | -..        | N      | -.         | X      | -..-       |
| E      | .          | O      | ---        | Y      | -.--       |
| F      | ..-.       | P      | .--.       | Z      | --..       |
| G      | --.        | Q      | --.-       | 0      | -----      |
| H      | ....       | R      | .-.        | 1      | .----      |
| I      | ..         | S      | ...        | 2      | ..---      |
| J      | .---       | T      | -          | 3      | ...--      |
|        |            |        |            | 4      | ....-      |
|        |            |        |            | 5      | .....      |
|        |            |        |            | 6      | -....      |
|        |            |        |            | 7      | --...      |
|        |            |        |            | 8      | ---..      |
|        |            |        |            | 9      | ----.      |

**Consignes :**
1. Créez un fichier PHP.
2. Définissez une fonction `stringToMorse($string)` qui prendra en entrée une chaîne de caractères.
3. Utilisez un tableau associatif pour stocker la correspondance entre les lettres/chiffres et leur équivalent en code Morse.
4. La fonction doit ignorer les caractères non définis dans le tableau de correspondance.
5. La sortie de la fonction doit être une chaîne de caractères où chaque lettre est traduite en code Morse et les lettres sont séparées par un espace.


