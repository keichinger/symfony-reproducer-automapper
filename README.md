# Doctrine AutoMapper Reproducer

This is a reproducer for the Symfony issue https://github.com/symfony/symfony/issues/44355.


## How to reproduce

- Clone this repository
- Configure your `.env.local` to point to an existing database
- Execute `php bin/console doctrine:migrations:diff`
- You should see an `MappingException` being thrown with the message: „The class 'Vich\UploaderBundle\Entity\File' was not found in the chain configured namespaces App\Entity”
