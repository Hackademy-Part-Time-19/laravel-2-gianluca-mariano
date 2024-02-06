<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    
  <div id="main"></div>

<script>

fetch("http://127.0.0.1:8000/api/api1")
  .then(response => response.json())
  .then(data => {

    document.getElementById("main").innerHTML = data

  })
  .catch(error => {
    console.log(error)
  });

</script>


</body>
</html>