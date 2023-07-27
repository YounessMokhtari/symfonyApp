<?php

namespace App\Factory;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Utilisateur>
 *
 * @method        Utilisateur|Proxy create(array|callable $attributes = [])
 * @method static Utilisateur|Proxy createOne(array $attributes = [])
 * @method static Utilisateur|Proxy find(object|array|mixed $criteria)
 * @method static Utilisateur|Proxy findOrCreate(array $attributes)
 * @method static Utilisateur|Proxy first(string $sortedField = 'id')
 * @method static Utilisateur|Proxy last(string $sortedField = 'id')
 * @method static Utilisateur|Proxy random(array $attributes = [])
 * @method static Utilisateur|Proxy randomOrCreate(array $attributes = [])
 * @method static UtilisateurRepository|RepositoryProxy repository()
 * @method static Utilisateur[]|Proxy[] all()
 * @method static Utilisateur[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Utilisateur[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Utilisateur[]|Proxy[] findBy(array $attributes)
 * @method static Utilisateur[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Utilisateur[]|Proxy[] randomSet(int $number, array $attributes = [])
 *
 * @phpstan-method        Proxy<Utilisateur> create(array|callable $attributes = [])
 * @phpstan-method static Proxy<Utilisateur> createOne(array $attributes = [])
 * @phpstan-method static Proxy<Utilisateur> find(object|array|mixed $criteria)
 * @phpstan-method static Proxy<Utilisateur> findOrCreate(array $attributes)
 * @phpstan-method static Proxy<Utilisateur> first(string $sortedField = 'id')
 * @phpstan-method static Proxy<Utilisateur> last(string $sortedField = 'id')
 * @phpstan-method static Proxy<Utilisateur> random(array $attributes = [])
 * @phpstan-method static Proxy<Utilisateur> randomOrCreate(array $attributes = [])
 * @phpstan-method static RepositoryProxy<Utilisateur> repository()
 * @phpstan-method static list<Proxy<Utilisateur>> all()
 * @phpstan-method static list<Proxy<Utilisateur>> createMany(int $number, array|callable $attributes = [])
 * @phpstan-method static list<Proxy<Utilisateur>> createSequence(iterable|callable $sequence)
 * @phpstan-method static list<Proxy<Utilisateur>> findBy(array $attributes)
 * @phpstan-method static list<Proxy<Utilisateur>> randomRange(int $min, int $max, array $attributes = [])
 * @phpstan-method static list<Proxy<Utilisateur>> randomSet(int $number, array $attributes = [])
 */
final class UtilisateurFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'MotdePass' => self::faker()->text(255),
            'cne' => self::faker()->text(50),
            'dateNaissance' => self::faker()->dateTime(),
            'email' => self::faker()->text(255),
            'nom' => self::faker()->text(50),
            'prenom' => self::faker()->text(50),
            'tel' => self::faker()->text(50),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Utilisateur $utilisateur): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Utilisateur::class;
    }
}
