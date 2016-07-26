<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Horizontal Application Form - Template Monster Demo</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
  <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
  <div id="wrapper">
  
  <h1>Country Insert</h1>
  
  <form onsubmit="return false">
  <div class="col-2">
    <label>
      Country (Formal)
      <input placeholder="What is the full name of the country?" id="name" name="name" tabindex="1">
    </label>
  </div>
  <div class="col-2">
    <label>
      Nickname
      <input placeholder="Any particular region you're interested in?" id="company" name="company" tabindex="2">
    </label>
  </div>
  
  <div class="col-3">
    <label>
      Phone Number
      <input placeholder="What is the best # to reach you?" id="phone" name="phone" tabindex="3">
    </label>
  </div>
  <div class="col-3">
    <label>
      Email
      <input placeholder="What is your e-mail address?" id="email" name="email" tabindex="4">
    </label>
  </div>
  <div class="col-3">
    <label>
      Availability
      <select tabindex="5">
        <option>5-15 hrs per week</option>
        <option>15-30 hrs per week</option>
        <option>30-40 hrs per week</option>
      </select>
    </label>
  </div>
  
  <div class="col-4">
    <label>
      Skills
      <input placeholder="List a few of your primary skills" id="skills" name="skills" tabindex="6">
    </label>
  </div>
  <div class="col-4">
    <label>
      Yrs Experience
      <input placeholder="How many years of experience?" id="experience" name="experience" tabindex="7">
    </label>
  </div>
  <div class="col-4">
    <label>Contact References?</label>
    <center style="position:relative; margin-bottom:8px;"><input type="checkbox" class="js-switch"></center>
  </div>
  <div class="col-4 switch">
    <label>E-mail Updates?</label>
    <center style="position:relative;margin-bottom:8px;"><input type="checkbox" class="js-switch"></center>
  </div>
  
  <div class="col-submit">
    <button class="submitbtn">Submit Form</button>
  </div>
  
  </form>
  </div>
<script type="text/javascript">
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
</script>
</body>