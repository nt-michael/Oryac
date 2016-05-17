<!-- modal for signin -->
<?php
  $HTTP_HOST = 'localhost:2000';
  $REQUEST_URI = '/login.php';
  $url = sprintf("%s%s%s","http://",$HTTP_HOST,$REQUEST_URI);

?> 
<style type="text/css">
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
</style>
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Foubs Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="usrname" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" name="psw" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
             <!-- <label><input type="checkbox" value="" checked>Remember me</label> -->
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member yet? <a href="test.php">Start here</a></p>
        </div>
      </div>
      
    </div>
  </div>



    <!-- jQuery -->
    <script type='text/javascript' src="js/jquery.js"></script>

     <!--Bootstrap Core JavaScript -->
   <script type='text/javascript' src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script type='text/javascript' src="js/jquery.easing.min.js"></script>
   <script type='text/javascript' src="js/jquery.fittext.js"></script>
   <script type='text/javascript' src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
  <script type='text/javascript' src="js/creative.js"></script>
  <script type='text/javascript' src="js/cbpAnimatedHeader.js"></script>
  <script>
    $('.carousel').carousel({
        interval: 4000 //changes the speed
    })
    </script>
   
</body>

</html>
