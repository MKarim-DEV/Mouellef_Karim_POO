MOUELLEF_Karim_POO

Partie Théorique: Les méthodes magiques.

La méthode __get($attribut) est appelée lorsque l'on tente d'accéder à un attribut qui n'est pas accessible ou inexistante.
 exemple:
 public function add(Moto $moto) {
        $brand=$moto->getBrand();
        $model = $moto->getModel();
        $type= $moto->getType();
        $picture = $moto->getPicture();

La méthode __set($attribut) est appelée lorsque l'on tente de modifier un attribut qui n'est pas accessible ou inexistante.
exemple:$moto->setId($this->bdd->lastInsertId());

Le __construct() est automatiquement appelée lors de la création d'un nouvel objet à partir d'une classe. 
exemple:public function __construct($id, $brand, $model,$type, $picture)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->type= $type;
        $this->picture = $picture;
    }

Le __destruct() est automatiquement appelée lorsqu'un objet n'est plus utilisé ou lorsqu'il est explicitement détruit avec unset(). 
La méthode destruct s'active implicitement à chaque fois qu'une classe n'est plus utilisée, je ne crois pas avoir d'exemple visible dans mon code actuel.
 $this->currentUser = $user;

 La méthode magique __serialize() transforme un objet en chaine de caractère, elle permet notamment de stocker des objets en session.
 exemple:$_SESSION["user"] = serialize($user);
