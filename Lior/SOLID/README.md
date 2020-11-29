# START PROJECT

```markdown
1. git clone project
https://github.com/liorchamla/cours-solid
git clone https://github.com/liorchamla/cours-solid.git
git clone https://github.com/liorchamla/cours-solid.git nom_du_dossier_project

2. composer install

3. lunch server
php -S localhost:3000 -t public -d display_errors=1
```

# SOLID
1. SRP: SINGLE RESPONSIBILITY PRINCIPALE (Robert C. Martin)
```markdown
LE PRINCIPE DE RESPONSABILITE UNITE
UNE CLASSE NE DOIT CHANGER QUE POUR UNE SEULE RAISON

1. RESPONSABLITE DE REPRESENTER UN RAPPORT
2. LE FORMATAGE HTML
3. LE FORMATAGE JSON

ParExample Si on faisait dans report
getContents()
formatToHtml()
formatToJson()
formatToCsv()
formatToYaml()
formatToXml()
formatToRtf()
```

2. OCP : OPEN CLOSE PRINCIPLE (BERTRAND MEYER)
```markdown
LE PRINCIPE OUVERT FERME
A class is closed, since it may be compiled, stored in a library,
baselined, and used by client classes.
But it is also open, since any new class
may use it as parent, adding new 
features.
When a descendant class is defined,
there is no need to change the original
or to disturb its clients.

UNE CLASSE DOIT ETRE FERME A LA MODIFICATION 
A PARTIR DU MOMENT ELLE EST UTILISEE PAR D' AUTRE CLASSE
MAIS UNE CLASSE DOIT ETRE OUVERTE A D' AUTRE CLASSE 
POUR LA MODIFICATION
```

3. LSP : LISKOV SUBSTITUTION PRINCIPE
```markdown
si S est un sous-type de T, alors tout object de type T peut etre
remplace par un objet de type S sans alterer les proprietes desirables
du programme concerne
```


4. ISP : INTERFACE SEGREGATION PRINCIPLE (ROBERT C. MARTIN)
```markdown
PRINCIPE DE SEGREGATION DES INTERFACES
plusieurs interfaces mieux vaut creer plusieurs methods
Cette pratique permet de ne pas forcer les classes a implementer des methodes 
dont elles n'ont pas besoin

interface                Classe X
-------------------      --------------------
+ methodA()              + __construct()
+ methodB()              # methodeX()
                         + methodeY()
                         + methodeA()
                         + methodeB()

Aucun client (c.a.d les classes de l'interface) ne devrait dependre
de methodes qu'il n' utilise pas
```

4. DIP : DEPENDENCY INVERSION PRINCIPE (ROBERT C. MARTIN)
```markdown
Nous preferons dependre d'abstraction plutot que d'implementation
Nous devons dependre de l'abstraction que de chose concrete


Un module de haut niveau ne devrait pas dependre de modules de bas de
niveaux.

Les deux devraient dependre d'une abstraction
```

```