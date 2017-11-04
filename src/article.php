<?php
use Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\JsonResponse;

$app->get('/articles', function (Request $request) use ($app) {
    $articles = [
        ['id' => 1, 'title' => 'blabla', 'tags' => ['tag1', 'tag2', 'tag3'], 'content' => 'some article text bla bla'],
        ['id' => 2, 'title' => 'blabla', 'tags' => ['tag1', 'tag2', 'tag3'], 'content' => 'some article text bla bla'],
        ['id' => 3, 'title' => 'blabla', 'tags' => ['tag1', 'tag2', 'tag3'], 'content' => 'some article text bla bla'],
    ];
    return new JsonResponse($articles);
});
