<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    /**
     * @Route("/book", name="book")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/BookController.php',
        ]);
    }
}

/**
 *  @Route("/books", name="show_all_books")
 */
    public function showBooks()
    {
        $books = $this ->bookRepository->find();
        return $this->render('book/list.html.twig', [
            'books' => $books
        ]);
    }
}