<?php

class gallerijController extends controllerController {

  public function indexAction() {

    $data = [];
    $data['header_html'] = $this->viewAction('common.header');
    $data['footer_html'] = $this->viewAction('common.footer');
    $data['gallerij_html'] = $this->viewAction('gallerij.gallerij');

    print($this->viewAction('gallerij.gallerij', $data));

  }


}

?>
