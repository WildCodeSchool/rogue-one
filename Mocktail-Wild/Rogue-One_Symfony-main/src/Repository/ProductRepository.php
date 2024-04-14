<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 *
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * Récupère le dernier produit ajouté à la base de données.
     *
     * @return Product|null Le dernier produit ajouté ou null s'il n'y a pas de produits dans la base de données
     */
    public function findLatestProduct(): ?Product
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

   /**
     * Récupère les produits similaires à partir de la même catégorie que le produit actuel.
     *
     * @param Product $product Le produit pour lequel récupérer les produits similaires
     * @param int $limit Le nombre maximal de produits similaires à récupérer
     * @return Product[] Liste des produits similaires
     */
    public function findRelatedProducts(Product $product, int $limit = 4): array
    {
        $qb = $this->createQueryBuilder('p');

        return $qb->where($qb->expr()->andX(
            $qb->expr()->eq('p.category', ':categoryId'),
            $qb->expr()->neq('p.id', ':productId')
        ))
            ->setParameter('categoryId', $product->getCategory()->getId())
            ->setParameter('productId', $product->getId())
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
