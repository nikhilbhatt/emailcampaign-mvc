<?php
  class ListSubscriber
  {
      protected $pdo;
      public function __construct($pdo)
      {
          $this->pdo=$pdo;
      }
      public function getvalues($table)
      {
         $stmt=$this->pdo->query("SELECT * FROM {$table}");
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
  }

?>