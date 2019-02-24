<?php

# ডাটাবেস এর সাথে connect করার system oop ব্যাবহার ।
try{
  $pdo = new PDO("mysql:host=127.0.0.1; dbname=todos", "root", "");
} catch(PDOExcecption $e){
  die("Could not connect...");
}

# ডাটাবেস তথা  mysql command execute করার system।
$statement = $pdo->prepare('SELECT * FROM mytodos');

# $statement variable execute তথা run করার system ।
$statement->execute();

// ডাটাবেজ থেকে সকল ডাটা এনে view তে তথা পেজএ দেখান আর এটি ডাটা গুলকে Array এবং Associative array দুই form এই দিবে ।
// var_dump($statement->fetchAll());

// ডাটাবেজ থেকে সকল ডাটা এনে view তে তথা পেজএ দেখান আর এটি ডাটা গুলকে object form এ দিবে ।
$results = $statement->fetchAll(PDO::FETCH_OBJ);
var_dump($results[0]->description);

# আমাদের view ফাইলকে import করা ।
require('index.view.php');
