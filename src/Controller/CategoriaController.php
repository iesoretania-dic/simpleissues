<?php

namespace App\Controller;

use App\Repository\CategoriaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriaController extends AbstractController
{
    /**
     * @Route("/categoria/listar", name="categoria_listar")
     */
    public function listarCategorias(CategoriaRepository $categoriaRepository) : Response
    {
        $categorias = $categoriaRepository->findAll();
        return $this->render('categoria/listar.html.twig', [
            'categorias' => $categorias
        ]);
    }
}