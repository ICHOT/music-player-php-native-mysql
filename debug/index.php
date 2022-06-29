<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
  <style>
    td {
      text-align: center;
    }
  </style>

</head>

<body onload="view()">
  <script src="script.js"></script>
  <div class="containers">
    <div class="buttons">
      <button onclick="view()">View</button>
      <button onclick="add()">Add</button>
      <button onclick="edit()">Edit</button>
      <button onclick="del()">Delete</button>
      <button onclick="search()">Search</button>
    </div><br>
    <div class="view box" id="view">
      <b>view</b>
    </div>

    <div class="add box" id="add">
      <b>add</b>

    </div>

    <div class="edit box" id="edit">

      <b>edit</b>
    </div>

    <div class="delete box" id="delete">

      <b>delete</b>
    </div>

    <div class="search box" id="search">

      <b>search</b>
    </div>

  </div>
</body>

</html>