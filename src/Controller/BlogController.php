<?php
/**
 * Created by PhpStorm.
 * User: dquintana
 * Date: 26/09/2020
 * Time: 11:10
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog_list")
     */
    public function getList()
    {
        return $this->json(['username' => 'jane.doe']);
    }
}
