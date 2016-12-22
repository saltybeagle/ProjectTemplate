<?php
namespace SelfServe;
class Controller
{
  /**
   * URL to this controller.
   *
   * @var string
   */
  public static $url = '';
  public $output;
  public $options = array('view'   => 'index', // The default from the view_map
                          'format' => 'html',  // The default output format
  );

public function __construct($options = array())
    {
        $this->options = $options + $this->options;
    }

    public function run()
    {

    }
}
