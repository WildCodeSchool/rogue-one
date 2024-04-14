<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/product', name: 'app_product_')]
class ProductController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/product', name: 'index')]
    public function index(Request $request): Response
    {
        $categories = $this->entityManager->getRepository(Category::class)->findAll();

        $productsPerPage = 10;
        $page = $request->query->getInt('page', 1);
        $offset = ($page - 1) * $productsPerPage;

        $productRepository = $this->entityManager->getRepository(Product::class);
        $products = $productRepository->findBy([], null, $productsPerPage, $offset);

        $totalProducts = $productRepository->count([]);

        $pagesNumber = ceil($totalProducts / $productsPerPage);

        return $this->render('product/index.html.twig', [
            'pageName' => "Nos Mocktails",
            'pageDescription' => "product",
            'categories' => $categories,
            'products' => $products,
            'pagesNumber' => $pagesNumber,
            'currentPage' => $page,
            'banner' => "product",
        ]);
    }

    #[Route('/{id}', name: 'show', requirements: ['id' => '\d+'])]
    public function show(Product $product, ProductRepository $productRepository): Response
    {
        $relatedProducts = $productRepository->findRelatedProducts($product);
        return $this->render('product/show.html.twig', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }
}
