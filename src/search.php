<?php
use Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\JsonResponse;

$app->get('/search', function (Request $request) use ($app) {
    $results = [
        ['type' => 'article', 'title' => 'Some result1', 'url' => '/article/blabla1'],
        ['type' => 'article', 'title' => 'Some result2', 'url' => '/article/blabla2'],
        ['type' => 'discussion', 'title' => 'Some discussion1', 'url' => '/discussion/blabla1']
    ];
    return new JsonResponse($articles);
});
