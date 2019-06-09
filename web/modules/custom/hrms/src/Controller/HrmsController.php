<?php
namespace Drupal\hrms\Controller;
use Drupal\Core\Controller\ControllerBase;

class HrmsController extends ControllerBase {
    /**
     * default function
     */
    public function myapplications() {
        return['markup' => $this->t("this is a test Pagess")];
    }
}

