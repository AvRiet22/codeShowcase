<?php

class commonController extends controllerController {

  public function indexAction() {

    $data = [];
    $data['header_html'] = $this->viewAction('common.header');
    $data['footer_html'] = $this->viewAction('common.footer');
    $data['slide_html'] = $this->viewAction('common.slide');

    print($this->viewAction('common.common', $data));

  }


}

?>
