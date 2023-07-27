<?php
// src/EventListener/UserCreationListener.php
namespace App\EventListener;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use App\Entity\Client;
use App\Entity\Livreur;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserCreationListener
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if ($entity instanceof Client || $entity instanceof Livreur) {
            $user = new User();
            $user->setEmail($entity->getEmail()); // Utilisez ici un attribut unique pour le nom d'utilisateur (par exemple, l'e-mail du client)
            $user->setPassword($this->passwordEncoder->encodePassword($user, 'votre_mot_de_passe'));
            
            if ($entity instanceof Client) {
                $user->setRoles([User::ROLE_CLIENT]);
            } elseif ($entity instanceof Livreur) {
                $user->setRoles([User::ROLE_LIVREUR]);
            }
            
            // Assurez-vous de sauvegarder le nouvel utilisateur
            $entityManager = $args->getObjectManager();
            $entityManager->persist($user);
            $entityManager->flush();
        }
    }
}
