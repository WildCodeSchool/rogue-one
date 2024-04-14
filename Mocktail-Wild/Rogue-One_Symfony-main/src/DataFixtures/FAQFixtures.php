<?php

namespace App\DataFixtures;

use App\Entity\Faq;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FAQFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faqsData = [
            [
                'question' => 'Qu\'est-ce qu\'un mocktail ?',
                'response' => 'Un mocktail est une boisson non alcoolisée qui est
                souvent composée de différents jus de fruits,
                 de sirops, d\'herbes aromatiques et d\'autres ingrédients 
                 pour créer une expérience gustative rafraîchissante et délicieuse.',
                'section' => 'headingOne',
                'collapse' => 'collapseOne'
            ],
            [
                'question' => 'Pourquoi choisir un mocktail ?',
                'response' => 'Les mocktails offrent une alternative sans alcool pour ceux qui veulent profiter 
                d\'une boisson savoureuse et rafraîchissante sans les effets de l\'alcool. 
                Ils conviennent également à ceux qui conduisent ou qui évitent 
                la consommation d\'alcool pour des raisons de santé ou de préférence personnelle.',
                'section' => 'headingTwo',
                'collapse' => 'collapseTwo'
            ],
            [
                'question' => 'Quels sont les avantages des mocktails par rapport aux cocktails alcoolisés ?',
                'response' => 'Les mocktails offrent une alternative plus saine,
                sans risque d\'ivresse, sont souvent plus abordables 
                et peuvent être appréciés par un public plus large, 
                y compris les enfants et les personnes qui ne boivent pas d\'alcool.',
                'section' => 'headingThree',
                'collapse' => 'collapseThree'
            ],
            [
                'question' => 'Les mocktails sont-ils adaptés à tous les âges ?',
                'response' => 'Oui, les mocktails sont adaptés à tous les âges. 
                Ils peuvent être appréciés par les enfants, les adolescents 
                et les adultes qui ne boivent pas d\'alcool.',
                'section' => 'headingFour',
                'collapse' => 'collapseFour'
            ],
            [
                'question' => 'Est-ce que les mocktails sont compliqués à préparer ?',
                'response' => 'Pas du tout ! La plupart des mocktails sont simples à préparer et 
                nécessitent des ingrédients de base que l\'on trouve généralement 
                dans une cuisine bien approvisionnée.',
                'section' => 'headingFive',
                'collapse' => 'collapseFive'
            ],
        ];

        foreach ($faqsData as $faqData) {
            $faq = new Faq();
            $faq->setQuestion($faqData['question']);
            $faq->setResponse($faqData['response']);
            $faq->setsection($faqData['section']);
            $faq->setcollapse($faqData['collapse']);
            $manager->persist($faq);
        }
        $manager->flush();
    }
}
