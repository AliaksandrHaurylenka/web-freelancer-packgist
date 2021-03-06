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

    // Вывод всего в обратном порядке
    function allDesc($table, $col)
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(['*'])
            ->from($table)
            ->orderBy([$col]);

        $sth = $this->pdo->prepare($select->getStatement());
        $sth->execute($select->getBindValues());
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }


  //Вывод одного элемента по указанному столбцу и определенному значению
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


//  Вывод одного элемента по указанному столбцу
  public function find($table, $id)
  {
    $select = $this->queryFactory->newSelect();
    $select->cols(['*'])
        ->from($table)
        ->where('id = :id')
        ->bindValue('id', $id);

    $sth = $this->pdo->prepare($select->getStatement());
    $sth->execute($select->getBindValues());
    return $sth->fetch(PDO::FETCH_ASSOC);
  }


  // Вывод определенного количества
  function limit($table, $col, $num)
  {
    $select = $this->queryFactory->newSelect();
    $select->cols(['*'])
        ->from($table)
        ->orderBy([$col])
        ->limit($num);

    $sth = $this->pdo->prepare($select->getStatement());
    $sth->execute($select->getBindValues());
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $result;
  }

//  добавление в базу данных
  public function create($table, $data)
  {
    $insert = $this->queryFactory->newInsert();
    $insert
        ->into($table)
        ->cols($data);
    $sth = $this->pdo->prepare($insert->getStatement());
    $sth->execute($insert->getBindValues());
  }

//  Delete
    public function delete($table, $id)
    {
        $delete = $this->queryFactory->newDelete();
        $delete
            ->from($table)
            ->where('id = :id')
            ->bindValue('id', $id);
        $sth = $this->pdo->prepare($delete->getStatement());
        $sth->execute($delete->getBindValues());
    }

//    Edit
    function update($table, $id, $data)
    {
        $update = $this->queryFactory->newUpdate();

        $update->table($table)
            ->cols($data)
            ->where('id=:id')
            ->bindValue('id', $id);

        $sth = $this->pdo->prepare($update->getStatement());
        $sth->execute($update->getBindValues());
    }


  //Select User
  function selectUser($table, $name, $password)
  {
    //  1. Проверить существует ли пользователь в базе

    $select = $this->queryFactory->newSelect();
    $select->cols(['*'])
        ->from($table)
        ->where('name=:name')
        ->where('password=:password')
        ->bindValue('name', $name)
        ->bindValue('password', md5($password));

    $sth = $this->pdo->prepare($select->getStatement());

    $sth->execute($select->getBindValues());

    return $sth->fetch(PDO::FETCH_ASSOC);
  }
}