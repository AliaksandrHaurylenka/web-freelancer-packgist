<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04.05.2018
 * Time: 13:28
 */

namespace App\Models;


use Aura\SqlQuery\QueryFactory;
use PDO;

class Database
{
  public $queryFactory;
  public $pdo;

  function __construct(QueryFactory $queryFactory, PDO $pdo)
  {
    $this->queryFactory=$queryFactory;
    $this->pdo=$pdo;
  }

  // Вывод всего
  function all($table)
  {
    $select = $this->queryFactory->newSelect();
    $select->cols(['*'])
      ->from($table);

    $sth = $this->pdo->prepare($select->getStatement());
    $sth->execute($select->getBindValues());
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $result;
  }

  // Вывод всего с условием
  function allWhere($table, $col, $attachment)
  {
    $select = $this->queryFactory->newSelect();
    $select->cols(['*'])
        ->from($table)
        ->where("$col = :$attachment")
        ->bindValue("$attachment", $attachment);

    $sth = $this->pdo->prepare($select->getStatement());
    $sth->execute($select->getBindValues());
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $result;
  }


  //Вывод одного
  function getOne($table, $col, $val)
  {
    $select = $this->queryFactory->newSelect();
    $select->cols(['*'])
        ->from($table)
        ->where("$col = :$val")
        ->bindValue("$val", $val);

    $sth = $this->pdo->prepare($select->getStatement());
    $sth->execute($select->getBindValues());
    $result = $sth->fetch(PDO::FETCH_ASSOC);

    return $result;
  }
}