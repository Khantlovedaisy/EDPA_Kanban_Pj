<?php 
require_once('header&footer/header.php');
?>
 <link rel="icon" type="image/png" href="image/logo.PNG">
     <!--  <form class="input-container">
        <div class="fields">
          <input id="title" placeholder="title..." />
          <input id="description" placeholder="description..." />
        </div>
        <input type="submit" id="submit-button" />
      </form> -->

      <style>
  .loginForm{
    width: 500px;
    height: 600px;
/*    background: linear-gradient(to right,  rgb(185, 43, 39), rgb(21, 101, 192));*/
    margin: 70px 500px;
/*    box-shadow: 10px 10px 5px rgb(67, 27, 27);*/
    border-radius: 20px;
    background-image: linear-gradient(  indianred,black);
  
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

  .plustext{
        padding: 0px 120px;
        color: white;
       font-size: 30px;
      }

      .button{
        margin: 0px 180px;
      }
  
 </style>
    </header>
    


      <section class="column-container row" >
  <div class="leftSideBar col-lg-3 h-10">
    <h3 class="text-center text-white mt-5">Project</h3>
    
  </div>
  <div class="col-lg-9">
    <div class="task-columns-container mt-3" id="taskColumnsContainer">
    <div class="task-column" id="backlog">
      <a href="index.php" class="text-decoration-none text-white"><h3>Project 1</h3></a>
      </div>

      <div class="task-column" id="backlog">
      <a href="index.php" class="text-decoration-none text-white"><h3>Project 2</h3></a>
      </div>

      <div class="task-column" id="backlog">
      <a href="index.php" class="text-decoration-none text-white"><h3>Project 3</h3></a>
      </div>

      <div class="task-column" id="backlog">
      <a href="index.php" class="text-decoration-none text-white"><h3>Project 4</h3></a>
      </div>

      <div class="task-column" id="backlog" id="addTaskButton">
        <!-- <h3 class="text-center add-task btn" id="myBtn">+</h3> -->
        <button class="btn plustext" id="myBtn">+</button>

                          <!-- The Modal -->
          <div id="myModal" class="modal">

          <!-- Modal content -->
          <!-- <div class="modal-content"> -->
          <div class="loginForm">
            <span class="close">&times;</span>
            
          <form action="index.php" method="">
          <h1 class="loginFormText">Add Project</h1>
           <div class="mb-4 input-group-lg col-auto" >
            <label for="addmember" class="form-label">Project Title</label>
            <input type="text"  id="addmember" class="input-field">
           </div>

           <div class="mb-4 input-group-lg col-auto">
           <label for="addmember" class="form-label">Add Member</label>
            <input type="text"  id="addmember" class="input-field">
           </div>

           <button type="submit" class="button" id="submit-button">Add Project</button> 

          </form>
          </div>
          </div>
      </div>


    </div>
  </div>
</section>

      
    <div class="error-container"></div>

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
