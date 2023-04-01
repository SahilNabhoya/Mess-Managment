<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback form</title>
    <style>
@import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
html, body{
  font-family: Palatino Linotype, Book Antiqua, monospace;
  font-size: 20px;
  text-align: center;
  text-decoration: underline;
  background-color:#2a557d ;
  color: white;
  min-width: 350px;
}
header {
  font-size: 2em;
  font-weight: bold;
  margin: 20px;
}

#description{
    color :black;
}
#form-outer {
  background-color: white;
  margin: 0 auto;
  border-radius: 4px;
  width: 75%;
  max-width: 900px;
  padding: 10px;
  padding-top: 20px;
  background-color:#d6eaef ;
}
/* RGB(146, 168, 209) 
RGB(247, 202, 201*/
.labels {
  display: inline-block;
  text-align: right;
  width: 40%;
  padding: 5px;
  vertical-align: top;
  margin-top: 10px;
}

.labels label{
    color: BLACK;
}

.rightTab {
  display: inline-block;
  text-align: left;
  width: 48%;
  vertical-align: middle;
  color : black;
}

.input-field {
  height: 20px;
  width: 280px;
  padding: 5px;
  margin: 10px;
  border: 1px solid #c0c0c0;
  border-radius: 2px;
}

#userAge {
  width: 40px;
}

.userRatings,
input[type="checkbox"] {
  float: left;
  margin-right: 5px;
}
/**.In/out,
input[type="radio"]{
  float: left;
  margin-right: 5px;**/

#submit {
  background-color: #59ace0;
  border-radius: 4px;
  color: white;
  font-size: 1em;
  height: 40px;
  width: 96px;
  margin: 10px;
  border: 0px solid;
}

.dropdown {
  height: 35px;
  width: 140px;
  padding: 5px;
  margin: 10px;  
  margin-top: 15px;
  border: 1px solid #c0c0c0;
  border-radius: 2px;
}

.radio, .checkbox {
  position: relative;
  left: -43px;
  margin-left: 10px;
  display: block;
  padding-bottom: 10px;
}

@media screen and (max-width: 833px) {
  .input-field {
    width: 80%;
  }
  select {
    width: 90%;
  }
}

@media screen and (max-width: 520px) {
  .labels {
    width: 100%;
    text-align: left;
  }
  .rightTab {
    width: 80%;
    float: left;
  }
  .input-field {
    width: 100%;
  }
  select {
    width: 100%;
  }
}
    </style>
</head>
<body>
<!-- <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script> -->

<h1 id="title">"Mess Management"
  <h2>Feedback Form</h2></h1>
<div id="form-outer">
<p id="description"> Let us know how can we improve</p>
<form id="survey-form" method="GET" action="https://crossorigin.me/https://freecodecamp.com">
   <div class="rowTab">
      <div class="labels">
        <label id="name-label" for="name">* Name: </label>
      </div>
      <div class="rightTab">
        <input autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your name" required>
      </div>
    </div>
  <div class="rowTab">
      <div class="labels">
        <label id="email-label" for="email">* Email: </label>
      </div>
      <div class="rightTab">
        <input type="email" name="email" id="email" class="input-field" required placeholder="Enter your Email">
      </div>
    </div>
    <div class="rowTab">
      <div class="labels">
        <label id="number-label" for="age">* Enrollment No: </label>
      </div>
      <div class="rightTab">
        <input type="number" name="age" id="number" min="1" max="125" class="input-field" placeholder="Age">
      </div>
    </div>
  
    <div class="rowTab">
      <div class="labels">
        <label for="userRating">* DineIn/ Take Out</label>
      </div>
      <div class="rightTab">
        <ul style="list-style: none;">
          <li class="radio"><label>Dine In<input name="radio-buttons" value="1"  type="radio" class="userRatings" ></label></li>
          <li class="radio"><label>Take Out<input name="radio-buttons" value="2"  type="radio" class="userRatings" ></label></li>
        </ul>
      </div>
  </div>
<div class="rightTab">
      <div class="labels">
        <label for="preferences">Things that should be improved in the future </label>
      </div>
      <div class="rightTab">
        <ul id="preferences" style="list-style: none;">
          <li class="checkbox"><label><input name="prefer" value="1" type="checkbox" class="userRatings">Food Quality</label></li>
          <li class="checkbox"><input name="prefer" value="2" type="checkbox" class="userRatings">Services</li>
          <li class="checkbox"><label><input name="prefer" value="3" type="checkbox" class="userRatings">Interior</label></li>
          <li class="checkbox"><label><input name="prefer" value="4" type="checkbox" class="userRatings">Menu</label></li>
          <li class="checkbox"><label><input name="prefer" value="5" type="checkbox" class="userRatings">Food taste</label></li>
          </ul>
      </div>
    </div>
<div class="rowTab">
      <div class="labels">
        <label for="comments">Any Comments or Suggestions?</label>
      </div>
      <div class="rightTab">
        <textarea id="comments" class="input-field" style="height:50px; resize:vertical;" name="comment" placeholder="Enter your comment here..."></textarea>
      </div>
    </div>
    <button id="submit" type="submit">Submit</button>
  </form>
</div>
</body>
</html>