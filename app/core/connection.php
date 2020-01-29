<?php

require_once 'app/core/config.php';
          try 
          {
              return new PDO(
                  $database['connection'].';dbname='.$database['name'],
                  $database['username'],
                  $database['password'],
                  $database['options']
              );
          }
          catch(PDOException $e)
          {
              die($e->getmessage());
          }

?>
