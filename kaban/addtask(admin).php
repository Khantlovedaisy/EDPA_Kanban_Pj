<?php 
require_once('header&footer/header.php');

?>
 <link rel="icon" type="image/png" href="image/logo.PNG">
<style>
  
.loginForm{
 background-image: linear-gradient(  indianred,black);

}

.loginForm{
    width: 500px;
    height: 700px;
/*    background: linear-gradient(to right,  rgb(185, 43, 39), rgb(21, 101, 192));*/
    margin: 70px 500px;
/*    box-shadow: 10px 10px 5px rgb(67, 27, 27);*/
    border-radius: 20px;
    
  }

.Text_area{
  width: 470px; 
     height: 70px;
     border-radius: 20px;
     box-shadow: 2px 2px 10px #242b34;
     margin: 20px 15px;
}



.input-field {
     width: 470px; 
     height: 50px;
     border-radius: 20px;
     margin: 20px 15px;
     box-shadow: 2px 2px 10px #242b34;
      background: white;
      border: none;
  }/* Adjust width as needed */

  .dateform{
    width: 500px;
    height: 100px;
    /* background-color: #242b34; */
   
  }

  .startdate{
    width: 220px;
    height: auto;
    /* background-color: yellow; */
    float: left;
    margin: 0px 14px;
    border-radius: 10px;
  }

  .input-fielddate{
    width: 220px;
    height: 50px;
    border-radius: 10px;
    background: white;
    border: none;
    box-shadow: 2px 2px 10px #242b34;
  }

  .stagetext{
    color: white;
    size: 15px;
  }

.space{
  width: 100%;
  height: 50px;
}

.form-select{
  width: 470px; 
     height: 50px;
     /* border-radius: 40px; */
     margin: 20px 15px;
     box-shadow: 2px 2px 10px #242b34;
      background: white;
      border: none;
}
</style>


      <div class="input-container">
        <button class="btn" id="myBtn">Add Task</button>

        <!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<!-- <div class="modal-content"> -->
<div class="loginForm">
  <span class="close">&times;</span>
  
 <form>
 <h1 class="loginFormText">Add Task</h1>
<!-- <div class="mb-4 input-group-lg col-auto" >
   <label for="addmember" class="form-label">Add Member</label>
  <input type="text"  id="addmember" class="input-field"> --> 

<div class="input-group-lg col-auto" >
  <label for="BriefDiscription" class="form-label">Brief Discription</label>
  <textarea id="BriefDiscription" class="Text_area" name="w3review" rows="3" cols="42">
</textarea>
</div>

<div class="dateform">
<div class="input-group-lg col-auto startdate" >
  <label for="datetimeS" class="form-label">Start Date</label>
  <input type="datetime-local" id="datetimeS"  class="input-fielddate">
</div>

<div class="input-group-lg col-auto startdate" >
  <label for="datetimeT" class="form-label">Target Date</label>
  <input type="datetime-local" id="datetimeT" class="input-fielddate" >
</div>
</div><br>

<!-- <div class="input-group-lg col-auto startdate" >
  <label for="Stage" class="form-label">Stage</label><br>

  <input type="radio" id="Stage" name="#" value="planning" >
<label for="planning" class="stagetext">Planning</label><br>


<input type="radio" id="Stage" name="#" value="todolist">
<label for="doing" class="stagetext">To do list</label><br>


<input type="radio" id="Stage" name="fav_language" value="doing">
<label for="javascript" class="stagetext">Doing</label><br>

<input type="radio" id="Stage" name="fav_language" value="done">
<label for="javascript" class="stagetext">Done</label>
</div><br><br> -->

<div class="input-group-lg col-auto " >
  <!-- <label for="datetimeS" class="form-label">Start Date</label>
  <input type="datetime-local" id="datetimeS"  class="input-fielddate"> -->
  <select class="form-select" aria-label="Default select example" >
  <option selected>Select Stage</option>
  <option value="1">✔ Planning</option>
  <option value="2">✔ To Do List</option>
  <option value="3">✔ Doing Task</option>
  <option value="3">✔ Done</option>
</select>
</div>

<div class="space"></div>
<button type="button" class="button" id="submit-button">Add Task</button>

</form>

 </div>

</div>
</div>
    </header>

    <section class="column-container">
      <div class="task-column" id="backlog">
        <h3>✔ Planning</h3>
        <hr class="custom-hr" />
        <div class="task-list"></div>
      </div>

      <div class="task-column" id="doing">
        <h3>✔ To Do List</h3>
        <hr class="custom-hr" />
        <div class="task-list"></div>
      </div>

      <div class="task-column" id="done">
        <h3>✔ Doing Task</h3>
        <hr class="custom-hr" />
        <div class="task-list"></div>
      </div>

      <div class="task-column" id="doing">
        <h3>✔ Done</h3>
        <hr class="custom-hr" />
        <div class="task-list"></div>
      </div>
    </section>

    <div class="error-container"></div>

    <script src="js/app.js"></script>
   
    <script>
      
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>

  </body>
</html>
