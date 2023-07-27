<?php

namespace App\Factory;

use App\Entity\Plat;
use App\Repository\PlatRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Plat>
 *
 * @method        Plat|Proxy create(array|callable $attributes = [])
 * @method static Plat|Proxy createOne(array $attributes = [])
 * @method static Plat|Proxy find(object|array|mixed $criteria)
 * @method static Plat|Proxy findOrCreate(array $attributes)
 * @method static Plat|Proxy first(string $sortedField = 'id')
 * @method static Plat|Proxy last(string $sortedField = 'id')
 * @method static Plat|Proxy random(array $attributes = [])
 * @method static Plat|Proxy randomOrCreate(array $attributes = [])
 * @method static PlatRepository|RepositoryProxy repository()
 * @method static Plat[]|Proxy[] all()
 * @method static Plat[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Plat[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Plat[]|Proxy[] findBy(array $attributes)
 * @method static Plat[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Plat[]|Proxy[] randomSet(int $number, array $attributes = [])
 *
 * @phpstan-method        Proxy<Plat> create(array|callable $attributes = [])
 * @phpstan-method static Proxy<Plat> createOne(array $attributes = [])
 * @phpstan-method static Proxy<Plat> find(object|array|mixed $criteria)
 * @phpstan-method static Proxy<Plat> findOrCreate(array $attributes)
 * @phpstan-method static Proxy<Plat> first(string $sortedField = 'id')
 * @phpstan-method static Proxy<Plat> last(string $sortedField = 'id')
 * @phpstan-method static Proxy<Plat> random(array $attributes = [])
 * @phpstan-method static Proxy<Plat> randomOrCreate(array $attributes = [])
 * @phpstan-method static RepositoryProxy<Plat> repository()
 * @phpstan-method static list<Proxy<Plat>> all()
 * @phpstan-method static list<Proxy<Plat>> createMany(int $number, array|callable $attributes = [])
 * @phpstan-method static list<Proxy<Plat>> createSequence(iterable|callable $sequence)
 * @phpstan-method static list<Proxy<Plat>> findBy(array $attributes)
 * @phpstan-method static list<Proxy<Plat>> randomRange(int $min, int $max, array $attributes = [])
 * @phpstan-method static list<Proxy<Plat>> randomSet(int $number, array $attributes = [])
 */
final class PlatFactory extends ModelFactory
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
            'nom' => self::faker()->text(50),
            'prix' => self::faker()->randomFloat(),
            'restaurant' => RestaurantFactory::randomOrCreate(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Plat $plat): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Plat::class;
    }
}
