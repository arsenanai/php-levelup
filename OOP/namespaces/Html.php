<?php
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;

  public function message() {
    return "Table '{$this->title}' has {$this->numRows} rows.";
  }
}

class Row {
  public $index = 0;
  public $numCells = 0;

  public function message() {
    return "The row '{$this->index}' has {$this->numCells} cells.";
  }
}
