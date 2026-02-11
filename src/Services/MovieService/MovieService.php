<?php
declare(strict_types=1);

namespace App\Services\MovieService;

use App\Services\MovieService\MovieRepositoryInterface;

class MovieService 
{
  public function __construct(
    private MovieRepositoryInterface $repository
  )
  {}

  public function searchMovieById(string $imdbId): ?array
  {
    return $this->repository->searchMovieById($imdbId);
  }
}
