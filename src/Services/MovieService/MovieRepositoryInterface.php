<?php
declare(strict_types=1);

namespace App\Services\MovieService;

interface MovieRepositoryInterface {
  public function searchMovieById(string $imdbId): ?array;
}
