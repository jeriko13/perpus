<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Pdf extends Dompdf
{
  public $filename;

  public function __construct()
  {
    parent::__construct();
    $this->filename = "perpus.pdf";
  }

  function ci()
  {
    return get_instance();
  }

  function load_view($view, $data = array())
  {
    $html = $this->ci()->load->view($view, $data, true);
    $this->load_html($html);
    $this->render();
    $this->stream($this->filename, array('Attachment' => false));
  }
}
