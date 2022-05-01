MeteionBundle
=============

MeteionBundle is a Symfony integration of the [Meteion library](https://github.com/ablaise/meteion).

# Key features

* Auto-configuration
* Commands
* Services
* Entities

# Installation

```shell
composer require ablaise/meteion-bundle
```

# Getting Started

## Environment Variable

You only need to fill in the environment variable `METEION_RAWEXD_PATH` which indicates the location of the `rawexd` directory extracted using [SaintCoinach](https://github.com/ablaise/meteion#getting-started).

```
###> ablaise/meteion-bundle ###
METEION_RAWEXD_PATH="/path/to/rawexd"
###< ablaise/meteion-bundle ###
```

## Configuration

You can leave the default settings unless you need to specify a different dbal connection.

```yaml
# config/packages/meteion.yaml
meteion:
    dbal_connection: 'default'
    rawexd_path: '%env(string:METEION_RAWEXD_PATH)%'
```

## Command

Once you have defined your `DATABASE_URL` connection, you can simply create the associated database and run Meteion using the following commands.

```bash
php bin/console doctrine:database:create

php bin/console meteion:run
```

Remember to allocate enough resources to your server before running the `meteion:run` command.

## Meteion As A Service

The `MeteionManager` class is a service that allows you to use Meteion without additional configuration using dependency injection.

```php
public function meteion(MeteionManager $manager)
{
    $manager->run();

    // ...
}
```

## Ready to use Entities

Entities are available under the namespace `MeteionBundle\Entity`.

```php
use MeteionBundle\Entity\Quest;

public function meteion(ManagerRegistry $doctrine)
{
    $quest = $doctrine->getRepository(Quest::class)->findOneBy(['name' => 'Coming to Gridania']);

    // ...
}
```

## Linking subfolders metadata

Entities with the suffix `Metadata` contained in the subfolders can be linked using the `referenceTable` field.

```php
use MeteionBundle\Entity\Quest;
use MeteionBundle\Entity\QuestMetadata;

public function meteion(ManagerRegistry $doctrine)
{
    $quest = $doctrine->getRepository(Quest::class)->findOneBy(['name' => 'Coming to Gridania']);
    if (false !== $quest) {
        $dialogs = $doctrine->getRepository(QuestMetadata::class)->findBy(['referenceTable' => $quest->getId()], ['pk' => 'ASC']);
    }
    
    // ...
}
```

# What's next?

* Recipes are coming
* New entity-related services
* Improved commands
