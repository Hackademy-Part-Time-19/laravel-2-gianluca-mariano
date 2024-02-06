<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    
<script>

fetch("http://127.0.0.1:8000/test")
  .then(response => response.json())
  .then(data => {

    /* data contiene i dati letti dall'endpoint */
    /* utilizzare js in questo punto per visualizzare nella vista, in un modo a piacere, i dati letti */

  })
  .catch(error => {
    console.log(error)
  });

</script>


</body>
</html>