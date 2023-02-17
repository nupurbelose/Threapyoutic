<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="breath.css" />
    <title>TherapYOUtic</title>
    <link rel="icon" type="images/x-icon" href="img/logo.png" />



  </head>
  <body>
  <?php include 'header.php'; ?>

    <div class="input">
      <label>Select Breaths</label>
      <select class="breath-input">
        <option value="3">3 Breaths</option>
        <option value="5">5 Breaths</option>
        <option value="7">7 Breaths</option>
      </select>
    </div>
    <div class="circle-wrap">
      <div class="circle-outline"></div>
      <div class="circle-progress"></div>
    </div>
    <p class="breaths">Breaths remaining: <span class="breaths-text">3</span></p>
    <p class="instructions">Are you ready to start breathing?</p>
    <button class="start">Begin</button>

    
    <script src="breath.js"></script>
  </body>
</html>