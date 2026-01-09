<?php

declare(strict_types=1);

namespace Drupal\artravel_upadtes\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for AR Travel Updates routes.
 */
final class PageController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
