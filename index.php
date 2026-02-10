<?php
declare(strict_types=1);

require 'vendor/autoload.php';

use App\Services\MovieService\MovieRepository;
use App\Services\MovieService\MovieService;

$httpClient = new \GuzzleHttp\Client();
$requestFactory = new \GuzzleHttp\Psr7\HttpFactory;

$repo = new MovieRepository($httpClient, $requestFactory);

$service = new MovieService($repo);

$movie = $service->searchMovieById('s44o6me');
