<?php

require_once 'library/php-mailer/src/PHPMailer.php';
require_once 'library/php-mailer/src/SMTP.php';
require_once 'library/php-mailer/src/Exception.php';

class contactController extends controllerController {

  public function indexAction() {
//print phpinfo(); exit;

    $data = [];
    $data['header_html'] = $this->viewAction('common.header');
    $data['footer_html'] = $this->viewAction('common.footer');

    $data['send'] = false;
    if (isset($_POST['email'])) {
      if ($_POST['email']) {
        $data['send'] = $this->contactAction();
      }
    }

    print($this->viewAction('contact.contact', $data));


  }

  public function contactAction() {

    $message = 'Naam: ' . $_POST['name'] . '</br>';
    $message .= 'Email: ' . $_POST['email'] . '</br>';
    $message .= 'Message:</br>';
    $message .= $_POST['message'];


    return mail(
      'jamillademoor@gmail.com',
      $_POST['subject'],
      $message,
      implode("\r\n", [
        'From: muahJamilla@outlook.com',
        'Reply-To: ' . $_POST['email'],
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=iso-8859-1'
      ])
    );

  }


}

 ?>
