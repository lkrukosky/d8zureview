<?php
 
namespace Drupal\zukumain\Controller;
 
class ZukuMainController {
    public function zuku() {
        return array(
                '#title' => 'This is Zuku',
                '#markup' => 'Zuku is new.',
            );
    }
}