<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

/**
 * This will suppress all the PMD warnings in this class.
 ** @SuppressWarnings(PHPMD)
 **/
class ProductFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $products = [
            [
                "name" => "WARA'TAIL", "price" => 10.00, "detail" =>
                "Boisson énergisante à l'Awara de BIO STRATÈGE (poudre concentrée),
                au Maracudja (Fruit de la Passion) et à la Mandarine. 
                Sa belle couleur naturelle est grâce aux fruits qui la composent. 
                Son goût est très original et bien fruité.",
                "image" => "waraTail.png",
                "categoryReference" => "Energisants Naturels"
            ],
            [
                "name" => "WASSAÏ'TAIL", "price" => 10.50, "detail" =>
                "Boisson énergisante au Wassaï de BIO STRATÈGE (poudre concentrée)
                et à la Pitaya (Fruit du dragon) et au piment fort. 
                Sa belle couleur naturelle est due aux fruits que contient ce Mocktail. 
                Son goût est très original, fait penser au raisin 
                et le piment chien sublime cette boisson.",
                "image" => "wassaiTail.png",
                "categoryReference" => "Energisants Naturels"
            ],
            [
                "name" => "PANGA ROUJ'", "price" => 10.25, "detail" =>
                "Panga (Attention en créole guyanais) à son côté subtil, 
                mais piquant avec le piment Chien. 
                Sa belle couleur grâce au Pitaya. 
                Son délicieux goût de Cerises Péyi.",
                "image" => "pangaRouj.png",
                "categoryReference" => "Fruits Locaux Epices"
            ],
            [
                "name" => "ICE COFFEE GINGER", "price" => 10.00, "detail" =>
                "Café glacé guyanais parfumé au Gingembre et raffiné en bouche. 
            Sa belle couleur grâce au Café. Son goût est unique et original.",
                "image" => "iceCoffeeGinger.png",
                "categoryReference" => "Mariages Saveurs Uniques"
            ],
            [
                "name" => "MACOCI", "price" => 10.75, "detail" =>
                "Punch Coco sans Alcool bien crémeux, à base de Maracudja (Fruit de la Passion). 
                Sa belle couleur grâce aux deux principaux fruits que contient ce mocktail. 
                Son goût est très original et bien doux, 
                rappelant une délicieuse pâtisserie fine.",
                "image" => "macoci.png",
                "categoryReference" => "Fruits Locaux Epices"
            ],
            [
                "name" => "MORINAS", "price" => 10.50, "detail" =>
                "Boisson rafraîchissante à l'Ananas débordant de 'peps' 
                avec sa Menthe bien fraîche et puissante. 
                Sa belle couleur est due à l'Ananas et à la Menthe locale. 
                Son goût est très fruité et mentholé, mais aussi relevé avec 
                le bois d'Inde qui vient sublimer ce Mocktail.",
                "image" => "morinas.png",
                "categoryReference" => "Fraicheur sublimée"
            ],
            [
                "name" => "MÉLOJAH GINGER", "price" => 10.25, "detail" =>
                "Boisson bien rafraîchissante bien parfumée au gingembre, 
            sans son côté piquant. Sa belle couleur est surtout due au Melon d’eau.
             Son goût est très fruité avec les discrets gingembre et maracudja,
              puis le melon d’eau qui nous affirme sa fraîcheur.",
                "image" =>
                "melojaGinger.png",
                "categoryReference" => "Energisants Naturels"
            ],
            [
                "name" => "HOT PAPA CHÉWI", "price" => 10.50, "detail" =>
                "Boisson bien chaleureuse avec son côté piquant avec le piment chien (fort). 
            Sa belle couleur est due à la Papaye Solo et à la Cerise Péyi (Acerola). 
            Son goût est très fruité et doux avec la Papaye qui apporte de la 
            rondeur et adoucit le piquant du piment.",
                "image" =>
                "hotPapaChewi.png",
                "categoryReference" => "Chaleur Epices"
            ],
            [
                "name" => "SOLOJAH", "price" => 10.25, "detail" =>
                "Boisson débordant de 'peps' : à la fois frais et acidulé avec son maracudja.
                Sa belle couleur est due à la Papaye Solo et au Maracudja (Fruit de la Passion). 
                Son goût est très fruité et doux avec la Papaye qui apporte de la rondeur : 
                il nous fait drôlement penser à du planteur.",
                "image" => "solojah.png",
                "categoryReference" => "Fruits Locaux Epices"
            ],
            [
                "name" => "PAPAYER PÉYI", "price" => 10.50, "detail" =>
                "Boisson hyper rafraîchissante à la Papaye Solo, 
            à la Citronnelle fraîche et au piment Scorpion. 
            Sa belle couleur est grâce à la Papaye. 
            Son délicieux goût de Thé Péyi fruité, raffiné et pimenté.",
                "image" =>
                "papayerPeyi.png", "categoryReference" => "Fruits d'excellences"
            ],
            [
                "name" => "THÉ PÉYI DORÉ", "price" => 10.75, "detail" =>
                "Boisson hyper rafraîchissante, parfumée au Maracudja (Fruit de la Passion) 
                et à la Citronnelle fraîche. Sa belle couleur grâce aux couleurs naturelles 
                du Maracudja et de la Citronnelle. Son goût est très original, 
                bien parfumé et subtilement relevé par le gingembre.",
                "image" =>
                "thePeyiDore.png", "categoryReference" => "Mariages Saveurs Uniques"
            ],
            [
                "name" => "HOT BLOOD", "price" => 10.75, "detail" =>
                "Boisson bien rafraîchissante bien parfumée avec sa Cerise Péyi et sa Groseille Péyi. 
                Sa belle couleur est due à ces deux fruits. Son goût est très fruité et agréablement acidulé, 
                puis le piment fort vient sublimer notre Mocktail.",
                "image" => "hotBlood.png",
                "categoryReference" => "Chaleur Epices"
            ],
            [
                "name" => "YANA START", "price" => 10.25, "detail" =>
                "Boisson débordante de fraîcheur avec sa Mangue verte et sa Cerise Péyi,
                relevées par du Piment fort. Sa belle couleur est due au mariage de ces deux fruits. 
                Son goût est rempli de caractère et reste tout de même frais.",
                "image" =>
                "yanaStart.png",
                "categoryReference" => "Fruits d'excellences"
            ],
        ];
        foreach ($products as $productData) {
            $product = new Product();
            $product->setName($productData['name']);
            $product->setPrice($productData['price']);
            $product->setDetail($productData['detail']);
            $product->setImage($productData['image']);
            $categoryReference = $this->getReference('category_' . $productData['categoryReference']);
            $product->setCategory($categoryReference);
            $manager->persist($product);
            $this->addReference('product_' . $productData['name'], $product);
        }
        $manager->flush();
    }
    public function getDependencies(): array
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
