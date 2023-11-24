<?php
        
    namespace App\Model; // encapsule le code et évite les conflits entre les noms des classes
        

    class User // ma classe
    {
        // propriétés de la classe
        public int $age;
        public array $films_favoris = [];
        public string $nom;

        /**
         * constructeur de la classe User 
         * @param int $age L'age de l'utilisateur
         * @param string $nom Le nom de l'utilisateur
         */
        public function __construct(int $age, string $nom) // constructeur accessible de l'ecterieur de la classe
        {
            $this->age = $age; // this fait référence a l'objet lui même en création
            $this->nom = $nom;
        }
            
        public function afficherNom (): string // affiche le nom de l'utilisateur
        {
            return "Je m'appelle " .$this -> nom ."."; // affiche le message contenant le nom de l'utilisateur
        }

        public function afficherAge (): string // affiche l'age de l'utilisateur
        {
            return "J'ai " .$this -> age ."ans."; // affiche le message contenant sont age
        }

        public function ajouterFilmsFavoris (string $films): bool // function de type booléen 
        {
            $this -> films_favoris[] = $films; // un film et ajouter a la fin du tableaux
            return true; // confirmation si l'opération a reussi
        }

        public function supprimerFilmsfavoris (tring $films): bool // function de type booléen 
        {
            // si le film n'est pas présent dans les favoris alors Invalide : renvoie film inconnu
            if (!in_array($films, $this -> films_favoris)) throw new InvalidArgumentException("Film inconnu: " .$films);

            // ça permet de supprimer un film dans les favorie
            unset ($this -> films_favoris[array_search($films, $this -> films_favoris)]);

            // verifie si l'opération a reussi
            return true;
        }
        
    }

?>

