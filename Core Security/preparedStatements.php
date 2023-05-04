<?php
try {
  // establishing connection
  $conn = new PDO("mysql:host=localhost;dbname=dbname", 'root', 'secret');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'Connected successfullly' . PHP_EOL;
  // query 1
  $query = $conn->prepare('select * from partners where name like :name limit 3');
  $name = '%testing%'; $limit = 3;
  $query->bindParam(':name', $name);
  $query->execute();
  $res = $query->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($res, JSON_PRETTY_PRINT) . PHP_EOL;
  // query 2
  $query = $conn->prepare('select * from partners where name like :name order by :column :direction limit :limit');
  $query->bindParam(':name', $name);
  $query->bindParam(':limit', $limit, PDO::PARAM_INT);
  $query->bindValue(':column', 'name');
  $query->bindValue(':direction', 'desc');
  $query->execute();
  $res = $query->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($res, JSON_PRETTY_PRINT) . PHP_EOL;
  // $query->execute([$name, 3, 'id']);
  // $res = $query->fetchAll();
  // echo json_encode($res, JSON_PRETTY_PRINT) . PHP_EOL;
  // $query->execute([$name, 3, 'name']);
  // $res = $query->fetchAll();
  // echo json_encode($res, JSON_PRETTY_PRINT) . PHP_EOL;
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage() . PHP_EOL;
}