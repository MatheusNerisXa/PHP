<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Alura\Mvc\Entity\Video;
use Alura\Mvc\Repository\VideoRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class EditVideoController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function processaRequisicao(ServerRequestInterface $request): ResponseInterface
    {
        $queryParams = $request->getQueryParams();
        $id = filter_var($queryParams['id'], FILTER_VALIDATE_INT);
        if ($id === false || $id === null) {
            return new Response(302, [
                'Location' => '/'
            ]);
        }

        $queryParams = $request->getParsedBody();
        $url = filter_var($queryParams['url'],FILTER_VALIDATE_URL);
        if ($url === false) {
            return new Response(302, [
                'Location' => '/'
            ]);
        }
        $titulo = filter_var($queryParams['titulo']);
        if ($titulo === false) {
            return new Response(302, [
                'Location' => '/'
            ]);
        }
        $video = new Video($url, $titulo);
        $video->setId($id);

        if ($_FILES['image']['error'] === UPLOAD_ERR_OK){
            move_uploaded_file(

                $_FILES['image']['tmp_name'],
                __DIR__ . '/../../public/img/uploads/' . $_FILES['image']['name']
            );
            $video->setFilePath($_FILES['image']['name']);
        }

        $success = $this->videoRepository->update($video);

        if ($success === false) {
            return new Response(302, [
                'Location' => '/'
            ]);
        } else {
            return new Response(302, [
                'Location' => '/'
            ]);
        }
    }
}