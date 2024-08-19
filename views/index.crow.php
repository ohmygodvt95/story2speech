<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Text to Speech</title>
</head>
<body class="container mt-5 bg-dark">
<h1 class="text-light">Text to Speech</h1>

<!-- Control Buttons -->
<div class="mb-5">
  <button id="start" class="btn btn-success mt-5 me-3">Start</button>
  <button id="pause" class="btn btn-warning mt-5 me-3">Pause</button>
  <button id="resume" class="btn btn-info mt-5 me-3">Resume</button>
  <button id="cancel" class="btn btn-danger mt-5 me-3">Cancel</button>
</div>
<div class="d-flex mt-5 gap-3 text-light">
    <div class="flex-grow-1 mr-4">
        <p class="lead">URL</p>
        <input type="text" class="form-control" placeholder="URL here" id="url" value="https://truyenfull.vn/truyen-dau-pha-thuong-khung/chuong-1/" />
    </div>
    <div class="w-25">
        <p class="lead">Selector</p>
        <input type="text" class="form-control bg-secondary" placeholder="Selector" id="selector" value=".chapter-c" />
    </div>
</div>

<!-- Text Area  for the User to Type -->
<textarea class="form-control bg-dark text-light mt-5" cols="30" rows="10" placeholder="Type here..."></textarea>


<p class="lead text-light mt-4">Select Voice</p>

<!-- Select Menu for Voice -->
<select id="voices" class="form-select bg-secondary text-light"></select>

<!-- Range Slliders for Volume, Rate & Pitch -->
<div class="d-flex mt-4 text-light">
  <div>
    <p class="lead">Volume</p>
    <input type="range" min="0" max="1" value="1" step="0.1" id="volume" />
    <span id="volume-label" class="ms-2">1</span>
  </div>
  <div class="mx-5">
    <p class="lead">Rate</p>
    <input type="range" min="0.1" max="10" value="1.4" id="rate" step="0.1" />
    <span id="rate-label" class="ms-2">1.4</span>
  </div>
  <div>
    <p class="lead">Pitch</p>
    <input type="range" min="0" max="2" value="1" step="0.1" id="pitch" />
    <span id="pitch-label" class="ms-2">1</span>
  </div>
</div>

</body>
<script src="./script.js?t={{rand(100000,999999)}}"></script>
</html>
