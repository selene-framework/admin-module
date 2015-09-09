<?php
namespace Selenia\Plugins\AdminInterface\Config;

use Selenia\Matisse\Components\DataGrid;
use Selenia\Matisse\Components\Input;

class AdminPresets
{
  function DataGrid (DataGrid $grid)
  {
    global $controller;
    $grid->attrs ()->apply ([
      'lang'               => $controller->langISO,
      'pageLength'         => "mem.get ('prefs.rowsPerPage', 10)",
      'lengthChangeScript' => "mem.set ('prefs.rowsPerPage', len)",
    ]);
  }

  function Input (Input $input)
  {
    global $controller;
    $input->attrs ()->apply ([
      'lang' => $controller->langISO,
    ]);
  }

}
