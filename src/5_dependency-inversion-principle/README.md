# Dependency Inversion Principle (Inversion des dépendances)


## Description

### En

Depend on abstractions, not implementations.

Ability to override injected dependencies.

Our dependencies must be on interfaces/contracts or on abstract classes rather than on "concrete" classes.

Dependency injection provides a component with its dependencies either via a constructor,
method calls or property configuration.

Dependencies are separated by controlling them and instantiating them elsewhere in the system.

Dependency injection allows us to inject only the dependencies we need,
when we need and those without having to hard-write any dependencies.

### Fr

Il faut dépendre des abstractions, pas des implémentations.

Possibilité de remplacer les dépendances injectées.

Nos dépendances doivent se faire sur des interfaces/contrats ou encore sur des classes abstraites plutôt que sur des classes "concrètes".

L’injection de dépendances fournit un composant avec ses dépendances que ce soit via un constructeur,
des appels de méthodes ou la configuration de propriétés.

On sépare les dépendances en les contrôlant et en les instanciant ailleurs dans le système.

L’injection de dépendances nous permet d'injecter uniquement les dépendances dont nous avons besoin,
quand nous avons besoin et ceux sans avoir à écrire en dur quelques dépendances que ce soit.


## Example

* [Dependency Inversion Principle - Source code](https://github.com/s-damian/solid-php/tree/master/src/5_dependency-inversion-principle/index.php)
