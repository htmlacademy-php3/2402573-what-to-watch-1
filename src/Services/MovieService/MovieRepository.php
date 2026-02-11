<?php
declare(strict_types=1);

namespace App\Services\MovieService;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;

class MovieRepository implements MovieRepositoryInterface
{

  public function __construct (
    private ClientInterface $httpClient,
    private RequestFactoryInterface $requestFactory
  )
  {}

  public function searchMovieById(string $imdbId): ?array
  {
    $request = $this->requestFactory->createRequest('GET', "http://omdbapi.com?i={$imdbId}");
    $response = $this->httpClient->sendRequest($request);

    return json_decode($response->getBody()->getContents(), true);
  }
}
