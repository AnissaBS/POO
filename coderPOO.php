<?php
    /*

    *******************************************************CODER EN ORIENTEE OBJET*******************************************************


    . La programmation orientée objet est beaucoup moins linéaire par rapport à la programmationprocédurale.
    Son principal avantage est d'être mieux organisé, permettant ainsi de faciliter la lisibilité du code et de sa maintenance.
    Son concept est un peu plus difficile à maîtriser que pour celui du langage procédural qui nous est plus familier dans sa manière de s'exécuter.
    Son principe est de faire en sorte que tout ce que nous allons coder devienne un objet.
    
    . Qu'est-ce qu'un objet ?
    Un objet est tout ce que vous avez l'habitude de manipuler au quotidien, par exemple un livre, un fauteuil.

    . Différence entre procédural et POO :
    Ce sont deux manières de programmer. Sur le fond : utilise la même langage, c'est à dire tout ce que nous avons appris jusqu'ici. Elle se différencie sur l'approche de la conception du programme lui-même.
    Comme nous l'avons compris, la POO à l'avantage d'avoir un code plus clair que celui du procédural et donc plus facile à mettre à jour. Il sera également beaucoup plus facile de le réutiliser dans d'autres portions de code de notre application ou site internet, ce qui est loin d'être négligeable.

    . En résumé :
    Il existe deux façons de programmer en PHP :
        - POO (orientée objet)
        - Procédurale
    Il n'y a donc pas de bonne ou mauvaise manière de coder. Nous disons ismplement que plus votre site ou application grossira, plus vous aurez intérêt à utiliser la POO.


    . LES FONDAMENTAUX DE LA POO :

        -- Principe de la POO --
    La POO se base sur le principe que tout élément inscrit est un objet. Le principe sera de créer des objets. Pour ce, nous utilisons des classes.
    Une classe est donc un bloc de code culturel qui servira de mopules pour la création d'un ou des objets.

        -- La classe --
    Nous venons de voir que le principe d'une classe est de créer un objet. La classe utilise le mot-clé class et contient un ensemble de fonctions qui servira de modèle à la création d'un objet.
    Ses fonctions porteront le nom de "methodes". Lorsque l'on crée une fonction à l'intérieur d'une classe, on l'appelle "méthode". En revanche, le principe de fonctionnement est totalement identique.

        -- Création d'une classe --
    Par convention, le nom de la classe commence par une lettre majuscule et chaque classe sera créée dans un fichier unique.
    Le fichier PHP contiendra donc uniquement la classe ainsi que ses attributs et ses méthodes. Ce fichier pourra alors être appelé partout, dans notre site ou appliction, notamment grâce aux inclusions de fichiers que nous appris jusqu'ici.
    
        class MaClass{

        }

        -- Les objets --
    Maintenant que nous avons défini une classe, nous pouvons alors créer un objet issu de cette classe. On dit alors qu'on instancie la classe ou que l'objet est une instance de la classe.
    Ces objets seront donc construits à à partir des méthodes (fonctions) et des propriétés ou attributs (variables) de la classe.
    . A retenir : la POO est basée sur les objets et les classes. On crée des objets à parir d'une classe. Chaque objet a accès aux méthodes et aux propriétés de la classe qui les a créée.


    . Les différentes visibilités d'une propriété

        -- La visibilité PUBLIQUE --
    Une propriété de visbilité publique peut être appelée de n'importe quel endroit du site. Cela signifie également qu'elle peut être modifiée de n'importe quel endroit du site.
    Sa syntaxe : public $_propriete;

        -- La visibilité PRIVEE --
    Une propriété de visibilité privée ne peut être appelée que depuis la classe. Cela signifie également qu'elle ne pourra être modifiée qu'à partir de la classe.
    Sa syntaxe : private $_propriete;

        -- La visibilité PROTEGEE --
    Une propriété de visibilité protégée ne peut être appelée que depuis la classe parent mais aussi depuis une ou des classes enfants. Cela signifie également qu'elle ne pourra être modifiée qu'à partir de la classe parent ou des classes enfants.
    Sa syntaxe : protected $_propriete;


    . Les MUTATEURS et les ASSESSEURS
        
        -- Les mutateurs --
    Un mutateur (ou un SETTER) permet d'affecter une valeur à une propriété d'un objet. Grâce aux mutateurs nous allons pouvoir affecter n'importe quelle valeur à notre propriété lors et/ou après la création d'un nouvel objet.

        * Créer un mutateur
        La création d'un mutateur se fera donc au travers d'une méthode. Le mutateur portera la mention set, comme setter. Puis nous lui donnerons le nom de la propriété qu'il devra affecter d'une nouvelle valeur.
        Syntaxe :
                public function setPrenom($prenom){
                    $this->prenom = $prenom;
                }
            Nb : setPrenom() est une méthode de type mutateur et de visibilité publique.
            Elle possède un paramètre $prenom qui est directement affecté à l'attribut $prenom grâce aux commandes $this->prenom;
            Grâce à cette méthode à qui nous passons la variable $prenom, nous pouvons affecter un prénom à chaque personne que nous créeront avec la table Pers (ou Personne).
            
        * Accéder à un mutateur
        L'accès à un mutateur se fait comme nous l'avons vu dans l'ex. de la classe Pers, c'est à dire avec l'aide du caractère ->. Syntaxe :
                $emi = new Pers();
                $emi->setPrenom('Pierre);
            Nous accédons à la méthode set Prenom en lui affectant l'argument Pierre.

    En résumé : grâce au mutateur, nous avons pu modifier la valeur de la propriété privée (private), en lui affectant une valeur de notre choix.

        -- Les assesseurs --
    Un assesseur (ou GETTER) permet d'afficher le contenu d'une propriété. Il s'agit d'une méthode, au même titre que le setter.

        * Créer un assesseur
        La création d'un assesseur se fera donc au travers d'une méthode. L'assesseur portera la mention get, comme  getter. Puis nous lui donnerons le nom de la propriété dont il affichera la valeur.
        Syntaxe :
                public function getPrenom(){
                    return $this->prenom;
                }
            Nb : getPrenom() est une méthode de type ssesseur ey de vsisibilité publique. Elle est relativement simple puisqu'elle se contente de rtourner la valeur du paramètre $prenom.
            Grâce à laméthode getPrenom(), nous récupérons le contenu de la propriété $prneom.

        * Accéder à un assesseur
        L'accès à un assesseur se fait avec l'aide du caractère ->.
        Syntaxe :
                $emi = new Pers;
                $emi->setPrenom('Pierre);
                echo $emi->getPrenom();
            Sur la dernière ligne, nous accédonc à la méthode getPrenom afin de récupérer  la valeur de la propriété $prenom.

    En résumé, grâce à l'assesseur, nous avons pu accéder à la valeur de l'attribut privé $prenom.

    CONCLUSION 
    Un MUTATEUR permet de modifier la valeur d'une propriété tandis qu'un ASSESSEUR permet d'en récupérer son contenu.


    . Le principe de L'EMPLACEMENT

        -- Definition --
    Le principe de l'encapsulation est une notion fondamentale de la poo. L'encapsulation consiste à protéger l'information contenue dans un objet en ne proposant
    que des méthodes pour manipuler les objets.

        -- Mise en pratique --
    Sans le savoir nous avons dans la partie précédente mis en place ce principe d'encapsulation. En effet, concernant l'attribut $prenom, 
    nous lui avons effecté une visibilité privée. Nous avons vu qu'il n'était pas possible d'y accéder directement. C'est la raison pour laquelle nous avons crée des methodes afin de pouvoir modifier
    et afficher le contenu de la propriété $prenom (et les autres : $nom, $age).
    Et lorsque nous avons crée ces méthodes, nous leur avons attribué une visibilité publique afin de pouvoir y accéder et donc les manipuler.

        -- Les niveaux d'accessibilité --
    Les niveaux d'accessibilité vont vous sembler familières puisque nous les avons déjà vu précédement.
        Rappel:
            - La visibilité publique permet d'accéder à la propriété ou à la méthode depuis l'intérieur de la classe. 
            - La visibilité privée: permet d'accéder à la propriété ou à la méthode uniquement depuis l'interieur de la classe.
            - La visibilité protégée: permet d'accéder à la propriété ou à la méthode depuis l'interieur de la classe elle- même ou de ses classes filles.

        -- Principe général --
    Les propriétés d'un objets seront privée ou protégées afin de n'être accessible que depuis la classe elle- meme ou depuis une classe fille.
    Les méthodes d'un objet seront publiques afin de pouvoir y accéder de n'importe quel endroit de notre site, afin de manipuler les attributs
    (ou propriétés).

    En résumé, grace aux exemple vus, nous avons acquis le princiê de l'encapsulation, ce qui permet d'en faire un simple rappel et de bien ordonner.
    Nos nouvelles connaissances concernant la POO.

    . L'HERITAGE

        -- Principe de l'héritage --
    Lorsque nous créons une classe, celle-ci peut-être une classe générale qui contiendra ses propres propriétés et méthodes.
    Mais nous aurons peut-être besoin d'avoir des classes spécifiques qui soient reliées à la classe générale.

        -- Cas concret --
    */    
        class Eleve{
            private $_prenom;
            public function setPrenom($prenom){
                $this->_prenom=$prenom;
            }
            public function getPrenom(){
                return $this->_prenom;
            }
        }

    /*
    Nous allons créer une nouvelle classe qui sera une classe fille de la classe Elève. cette nouvelle classe appellera la propriété $_prenom
    de la classe Eleve, et lorsque nous demanderons à afficher le prenom issu de cette nouvelle classe, nous souhaiterons obtenir un prénom dont la première lettre sera en majuscule.
    Nous enrichirons également cette classe d'une propriété devant récupérer l'âge. Nous appellerons, cette classe Elevefille et nous nommerons le fichier contenant cette nouvelle classe Elevefille.class.php.

    Avant d'écrire cette nouvelle classe, nous allons devoir modifier le visibilité de la propriété=_prenom de la classe Eleve, puisque
    nous souhaitons accéder à cette propriéte depuis la classe fille que nous allons créer.
    Par conséquent, la visibilité de la propriété $_prenom ne sera plus privée mais protégée (protected). Ceci afin de pouvoir y accéder depuis la classe fille.
    */
        class Eleve{
            protected $_prenom;
            public function setPrenom($prenom){
                $this->_prenom=$prenom;
            }
            public function getPrenom(){
                return $this->_prenom;
            }
        }

    /*
    Maitenant nous pouvons créer notre classe fille qui pourra accéder à la propriété $_prenom de la classe Eleve.
    */ 
        class Elevefille extends Eleve{

        }

    /*
    Ainsi nous pouvons accéder à la class mère, soit la classe Eleve. ensuite, nous avons dit que nous souhaitons accéder à la propriété=_prenom de la classe Eleve afin de pouvoir écrire le prénom avec une premiere lettre en majuscule.
    Pour cela, il nous suffit simplement de réecrire la méthode setPrenom à l'interieur de la classe Elevefille en lui ajoutant la fonction ucfirst() qui permet d'afficher la première lettre d'une chaîne de caractères en majuscule.

        // public function setPrenom($prenom){
        //     $this->_prenom=ucfirst($prenom);
        // }

    Il n'est pas utilise de réécrire la méthode et Prenom puisque celle-ci a déjà été écrite dans la classe Eleve, dont la classe Elevefille
    en est une héritière.

    Il nous reste à déclarer la propriété concernant l'âge ainsi que ses méthodes (assesseur et mutateur). Celles-ci seront propres à la classe Elevefille.
    */
        class Elevefille extends Eleve{
            private $_age;
            public function setAge($age){
                $this->_age = $age;
            }
            public function getAge(){
                return $this->_age;
            }
            public function setPrenom($prenom){
                $this->_prenom = ucfirst($prenom);
            }

        }

    /*
    Nous déclarons la propriete $_age en visiblité privée (private) car cette propriete ne sera accessible que par la classe qui la contient.
    c'est à dire la classe Elevefille.
    Ensuite nous declarons les méthodes get et set afin de pouvoir modifier l'age et l'afficher en cas d'appel. Exactement comme nous l'avons fait pour la propriete $_prenom
    de la classe Eleve.

    -- Récupération des informations --
    Maintenant que les deux classe Eleve et Elevefille sont créees, nous pouvons les inclures dans un autre fichier (index.php)
    et nous servir de leur méthodes.
    */
        include('Eleve.php');
        include('Elevefille.class.php');

        $eleveN1 = new Eleve();
        $eleveN1 = new Elevefille();

        $eleveN1 = setPrenom('alain');
        $eleveN2 = setPrenom('juline');
        $eleveN2 = setAge(22);

        echo $eleveN1->getPrenom(). '<br/>';
        echo $eleveN1->getPrenom(). 'qui a' .$eleveN2->getAge(),'ans';

?>