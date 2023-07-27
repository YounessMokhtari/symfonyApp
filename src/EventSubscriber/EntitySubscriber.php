<?php

namespace App\EventSubscriber;

use App\Entity\Client;
use App\Entity\Livreur;
use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;
use Symfony\Component\Security\Core\Security;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class EntitySubscriber implements EventSubscriberInterface
{
    private $security;
    private $passwordEncoder;

    public function __construct(Security $security, UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->security = $security;
        $this->passwordEncoder = $passwordEncoder;
    }

    public function getSubscribedEvents(): array
    {
        return [
            Events::prePersist,
            Events::postPersist,
            Events::postRemove,
            // Events::postUpdate,
        ];
    }

    public function prePersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getEntity();

        if ($entity instanceof Client || $entity instanceof Livreur) {
            $user = new User();
            $user->setEmail($entity->getEmail()); // Utilisez ici un attribut unique pour le nom d'utilisateur (par exemple, l'e-mail du client)
            $user->setPassword($this->passwordEncoder->encodePassword($user, 'votre_mot_de_passe'));

            if ($entity instanceof Client) {
                $user->setRoles([User::ROLE_CLIENT]);
            } elseif ($entity instanceof Livreur) {
                $user->setRoles([User::ROLE_LIVREUR]);
            }

            $objectManager = $args->getObjectManager();
            $objectManager->persist($user);
            $objectManager->flush();
        } else {
            /*$user = $this->security->getUser();
            if (!$entity->getCreatedAt()) {
                $entity->setCreatedBy($user);
                $entity->setCreatedAt(new \DateTime());
            }
            $entity->setEditedBy($user);
            $entity->setEditedAt(new \DateTime());*/
        }
    }

    public function postPersist(LifecycleEventArgs $args): void
    {
        $this->logActivity('persist', $args);
    }

    public function postRemove(LifecycleEventArgs $args): void
    {
        $this->logActivity('remove', $args);
    }

    /*public function postUpdate(PreUpdateEventArgs $event): void
    {
        $this->logActivity('postUpdate', $args);
    }*/

    private function logActivity(string $action, LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();

        // if this subscriber only applies to certain entity types,
        // add some code to check the entity type as early as possible
        if (!$entity instanceof User) {
            return;
        }

        // ... get the entity information and log it somehow
    }
}
