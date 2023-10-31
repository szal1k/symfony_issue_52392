<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/test')]
class TestController extends AbstractController
{
    #[Route('/{id}/{context}', name: 'app_test')]
    public function index($id, $context): JsonResponse
    {
        return $this->json([
            'id' => $id,
            'context' => $context,
        ]);
    }

    #[Route('/_cancel/{id}/{context}', name: 'app_cancel')]
    public function cancel($id, $context): JsonResponse
    {
        return $this->json([
            'id' => $id,
            'context' => $context,
        ]);
    }
}
