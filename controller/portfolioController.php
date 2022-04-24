<?php

class portfolioController extends controllerController {

  public function indexAction() {

    $data = [];
    $data['header_html'] = $this->viewAction('common.header');
    $data['footer_html'] = $this->viewAction('common.footer');
    $data['portfolio_html'] = $this->viewAction('portfolio.portfolio');

    print($this->viewAction('portfolio.portfolio', $data));

  }


}

?>
