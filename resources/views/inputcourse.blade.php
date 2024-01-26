<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('CSS/result.css') }}">
</head>
<body>

<h2>Students Result</h2>
<p>Hi.....Welcome here</p>

<div class="line">

<div class="dropdown">
<button class="dropbtn">Select Level</button>
<select>
        <option class="dropdown-btn" value="basic">All</option>
        <option class="dropdown-btn" value="post">Level 1</option>
        <option class="dropdown-btn" value="post">Level 2</option>
        <option class="dropdown-btn" value="post">Level 3</option>
</select>
</div> 
                

<div class="dropdown">
  <button class="dropbtn">Select Semester</button>
  <select >
        <option class="dropdown-btn" value="basic">All</option>
        <option class="dropdown-btn" value="post">Semester 1</option>
        <option class="dropdown-btn" value="post">Semester 2</option>
</select>
</div>

<div class="dropdown">
  <button class="dropbtn">Select Subject</button>
  <select name="degree" id="degree">
        <option class="dropdown-btn" value="basic">All</option>
        <option class="dropdown-btn" value="post">Physics</option>
        <option class="dropdown-btn" value="post">CS</option>
        <option class="dropdown-btn" value="post">Math</option>
</select>
</div>
</div>

</body>
</html>