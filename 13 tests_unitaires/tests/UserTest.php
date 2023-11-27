<?php

    /// autre facon d'afficher
    /// namespace App\Model;

    use PHPUnit\Framework\TestCase; // importer la classe test de phpunit
    require 'Model/User.php'; // inclure le fichier contenant la classe User
    use App\Model\User; // importer la classe User du namespace appp\model

    /// class User 

    class UserTest extends TestCase
    {
        /// public function afficherNom(): string {return "je m'appelle" . $this ->nom . "et j'ai" . $this ->age. "ans.";}

        // les fonction du test
        public function testAfficherNom()
        {
            $user = new User(29, 'Ibrahima');
            $this -> assertIsString($user -> afficherNom());

            // vérifié que le retour de la fontion contient mon prénom
            $this -> assertStringContainsStringIgnoringCase('Ibrahima', $user -> afficherNom());

            // vérifier que le message retourné est correct
            $this -> assertEquals ("Je m'appelle Ibrahima.", $user -> afficherNom(), "Le nom n'est pas correct");
        }
    }

?>