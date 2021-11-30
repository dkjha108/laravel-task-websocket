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
    <tbody id="div-data">
    
    
    </tbody>
  </table>

</div>
<script src="{{ asset('js/app.js') }}"></script>

<script>
            window.Echo.channel('EventTriggered')
            .listen('SubmitTaskEvent', (e) => {
              debugger;
                console.log(e)
                var tasks = e.tasks;
                var html = '';
                tasks.forEach(element => {
                html += `
                      <tr>
                        <td>${element.id}</td>
                        <td>${element.name}</td>
                        <td>${element.description}</td>
                      </tr>`;
              });
                document.querySelector('#div-data').innerHTML = html
            })
        </script>
</body>
</html>
