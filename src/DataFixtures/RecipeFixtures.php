<?php

namespace App\DataFixtures;


use App\Entity\Recipe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RecipeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $recipe = new Recipe();
        $recipe->setTitre('Poke Bowl');
        $recipe->setDescription('Poke bawl complet 100% végé');
        $recipe->setTempsDePreparation('00:15');
        $recipe->setTempsDeRepos('00:00');
        $recipe->setTempsDeCuisson('00:00');
        $recipe->setIngredients('3 carrottes
                                1 oignon
                                2 cuillière de lait
                                400gr de pâtes  ');
        $recipe->setEtapes('1. Couper les légumes

                            2. Faire bouillir l\'eau

                            3. Plonger les œufs 8 minutes dans l\'eau bouillante');
        $recipe->setAllergenes('Gluten');
        $recipe->setRegime('végétarien');

        $manager->persist($recipe);

        $recipe2 = new Recipe();
        $recipe2->setTitre('Pancakes allégés');
        $recipe2->setDescription('Pour bien commencer la journée, rien de tel que des pancakes Allégés à la farine d\'avoine bio');
        $recipe2->setTempsDePreparation('00:30');
        $recipe2->setTempsDeRepos('00:15');
        $recipe2->setTempsDeCuisson('01:00');
        $recipe2->setIngredients('Farine d\'avoine bio - 250 grSel (une pincée)

                               1 cuillère à soupe d\'huile d\'olive extra vierge

                               Lait d\'avoine 1/2 litre

                               2 oeufs ');
        $recipe2->setEtapes('1. Dans un saladier ajouter la farine et le sel

                            2. Mélanger de façon homogène

                            3. Séparer le blanc du jaune des oeufs

                            4. Incorporer le blanc d\'œuf à la préparation

                            5. Ajouter progressivement le lait jusqu\'à obtenir une pâte homogène

                            6. Laisser reposer 1h');
        $recipe2->setAllergenes('Gluten');
        $recipe2->setRegime('Sans-viande');

        $manager->persist($recipe2);

        $recipe3 = new Recipe();
        $recipe3->setTitre('Salade Fraicheur');
        $recipe3->setDescription('Poke bawl complet 100% végé');
        $recipe3->setTempsDePreparation('00:45');
        $recipe3->setTempsDeRepos('00:15');
        $recipe3->setTempsDeCuisson('15:00');
        $recipe3->setIngredients('2 kg de salade verte

                                 1 seau d\’oeufs durs écalés Cocotine

                                 25 gros avocats mûrs

                                 3 kg de saumon fumé

                                 Ciboulette

                                 Vinaigre balsamique');
        $recipe3->setEtapes('1. Déposer une chiffonnade de salade sur des assiettes.

                            2. Rincer, égoutter puis couper en quartiers les oeufs durs écalés Cocotine. de la même manière, couper grossièrement l’avocat.

                            3. Garnir la salade de ces ingrédients puis ajouter des tranches de saumon fumé.

                            4. Terminer en assaisonnant de ciboulette et de vinaigre balsamique.');
        $recipe3->setAllergenes('Noix');
        $recipe3->setRegime('Sans sucre

                          Sans-viande');

        $manager->persist($recipe3);


        $recipe4 = new Recipe();
        $recipe4->setTitre('Pain perdu aux fruits');
        $recipe4->setDescription('Le dessert parfait pour terminer la journée');
        $recipe4->setTempsDePreparation('00:30');
        $recipe4->setTempsDeRepos('00:20');
        $recipe4->setTempsDeCuisson('00:00');
        $recipe4->setIngredients('Pain de mie épais

                                1 banane

                                100 gr de mûres

                                1 oeuf

                                200 cl de lait

                                Sucre glace ');
        $recipe4->setEtapes('1. Dans un plat mélanger l\'oeuf et le lait de façon homogène

                             2. Imbiber généreusement vos tranches de pain de mie

                             3. Snacker rapidement les deux côtés du pain dans une poêle chaude

                             4. Réduire le feu pour conserver une texture moelleuse

                             5. Découper vos fruits à votre convenance

                             6. Soupoudrez le sucre glace');
        $recipe4->setAllergenes('Gluten');
        $recipe4->setRegime('Sans-viande');


        $manager->persist($recipe4);


        $manager->flush();
    }
}
