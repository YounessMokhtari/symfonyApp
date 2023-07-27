<?php

namespace App\Factory;

use App\Entity\Restaurant;
use App\Repository\RestaurantRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Restaurant>
 *
 * @method        Restaurant|Proxy create(array|callable $attributes = [])
 * @method static Restaurant|Proxy createOne(array $attributes = [])
 * @method static Restaurant|Proxy find(object|array|mixed $criteria)
 * @method static Restaurant|Proxy findOrCreate(array $attributes)
 * @method static Restaurant|Proxy first(string $sortedField = 'id')
 * @method static Restaurant|Proxy last(string $sortedField = 'id')
 * @method static Restaurant|Proxy random(array $attributes = [])
 * @method static Restaurant|Proxy randomOrCreate(array $attributes = [])
 * @method static RestaurantRepository|RepositoryProxy repository()
 * @method static Restaurant[]|Proxy[] all()
 * @method static Restaurant[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Restaurant[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Restaurant[]|Proxy[] findBy(array $attributes)
 * @method static Restaurant[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Restaurant[]|Proxy[] randomSet(int $number, array $attributes = [])
 *
 * @phpstan-method        Proxy<Restaurant> create(array|callable $attributes = [])
 * @phpstan-method static Proxy<Restaurant> createOne(array $attributes = [])
 * @phpstan-method static Proxy<Restaurant> find(object|array|mixed $criteria)
 * @phpstan-method static Proxy<Restaurant> findOrCreate(array $attributes)
 * @phpstan-method static Proxy<Restaurant> first(string $sortedField = 'id')
 * @phpstan-method static Proxy<Restaurant> last(string $sortedField = 'id')
 * @phpstan-method static Proxy<Restaurant> random(array $attributes = [])
 * @phpstan-method static Proxy<Restaurant> randomOrCreate(array $attributes = [])
 * @phpstan-method static RepositoryProxy<Restaurant> repository()
 * @phpstan-method static list<Proxy<Restaurant>> all()
 * @phpstan-method static list<Proxy<Restaurant>> createMany(int $number, array|callable $attributes = [])
 * @phpstan-method static list<Proxy<Restaurant>> createSequence(iterable|callable $sequence)
 * @phpstan-method static list<Proxy<Restaurant>> findBy(array $attributes)
 * @phpstan-method static list<Proxy<Restaurant>> randomRange(int $min, int $max, array $attributes = [])
 * @phpstan-method static list<Proxy<Restaurant>> randomSet(int $number, array $attributes = [])
 */
final class RestaurantFactory extends ModelFactory
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
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Restaurant $restaurant): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Restaurant::class;
    }
}
