<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<br/><br/>
<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Date</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($tasks as $task)
      <tr>
        <td>{{ $task->name }}</td>
        <td>{{ $task->date }}</td>
        <td>{{ $task->description }}</td>
      </tr>
    @endforeach
    
    </tbody>
  </table>

  <h2>TASK FORM</h2>
  <form action="{{ route('task') }}" method="POST">
  @csrf
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
    </div>
    <div class="form-group">
      <label for="pwd">Date:</label>
      <input type="date" class="form-control" id="pwd" name="date" required>
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <textarea class="form-control" id="pwd"  name="description" required></textarea>
    </div>
  
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
