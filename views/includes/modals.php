
<!-- Modal of forgot Passowrd -->
<div class="modal fade" id="forgot-pass">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Forgot Password</h4>
        <button id="forgotpass-close" type="button" class="close" data-dismiss="modal" onclick="forgotpassResetall()">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        
        <!--------------------------form for checking Username---------------------------------- -->

        <!-- ---------------------------------- form validate ------------------------------------------------- -->
        
        <form action="../../models/forgotpwd_checkun.php" id="forgotpassCheckun-form" method="POST" autocomplete="off" name="forgotpasscheckUn" onsubmit="forgotpassCheckun(event, $('#forgotpassCheckun-form'), document.forms.forgotpasscheckUn, $('#questFs'), $('#verifyAcc'), $('#msg'))">
        
        <div id="msg" class="form-group text-center">
        <!-- Message Here.. -->  
        </div>

        <fieldset id="verifyAcc">
          <legend>Verify Account: </legend>
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 text-center">
              <div class="form-group">
                <input type="text" name="forgotUn" class="form-control" placeholder="Enter your Username" id="forgotUn" onkeyup="unameManipulate()" required>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
              <div class="form-group">
                <input type="submit" name="forgotUnCheck" value="validate" class="btn btn-primary">
              </div>
            </div>
          </div>
        </fieldset>
        
       </form>
        
        <!---------------------------------form for special question-------------------------------->
        <form action="../../models/forgotpass_quest.php" id="forgotpassQuest-form" method="POST" autocomplete="off" onsubmit="verifyQuest(event, $(this),$('#questFs'), $('#newpassFs'), $('#submitButton'), $('#msg'))">

        <fieldset id="questFs" style="display: none;">
          <legend>Special Question: </legend>
              <div class="form-group">
                <label for="quest_username" class="text-mute">Username: </label>
                <input type="text" name="quest_username" id="quest_username" class="form-control" readonly>
              </div>
              <div class="form-group">
                <label for="forgotQuest" class="text-mute">Special Question: </label>
                <select name="forgotQuest" id="forgotQuest" class="form-control">
                  <option>what is your favorite food?</option>
                  <option>who is your favorite teacher?</option>  
                  <option>what is your favorite color?</option>
                </select>
              </div>
            
              <div class="form-group">
                <label for="forgotAns" class="text-mute">Answer: </label>
                <input type="text" name="forgotAns" id="forgotAns" class="form-control">
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <a href="#" onclick="forgotpassResetall()"><b>IT'S NOT YOU?</b></a>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
                    <input type="button" name="questReset" id="quest-reset" value="Clear" onclick="quest_Reset()" class="btn btn-danger">
                    <input type="submit" name="questSubmit" value="Next" class="btn btn-primary">
                  </div>
                </div>
              </div>
          </fieldset>
        </form>

        <!---------------------------------form for changing password-------------------------------->
         <form action="../../models/forgotpass_changepwd.php" id="forgotpass-form" name="forgotpassForm" method="POST" autocomplete="off" onsubmit="forgotPass(event, $(this), $('#forgotUn'), $('#forgotNewpass'), $('#forgotConpass'), $('#msg'), $('#forgotpass-close'))">

          <fieldset id="newpassFs" style="display: none;">
            <legend>New Password</legend>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label for="forgotNewpass" class="text-mute">New Password: </label>
                  <input type="password" name="forgotNewpass" class="form-control" id="forgotNewpass" required>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label for="forgotConpass" class="text-mute">Confirm Password: </label>
                  <input type="password" name="forgotConpass" id="forgotConpass" class="form-control" required>
                </div>
              </div>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" name="forgotpass-eye" id="forgotpass-eye" onchange="forgotpassSee()">
                <label id="forgotpass-eye-label" for="forgotpass-eye">Show Password</label>
              </div>
              
            </div>

          </fieldset>
        
      </div>
      <!-- Modal footer -->
      <div class="modal-footer" id="submitButton" style="display: none;">
        <div class="form-group">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <a href="#" onclick="forgotpassResetall()"><b>IT'S NOT YOU?</b></a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
              <input type="button" name="reset" value="Reset" class="btn btn-primary" id="forgotReset" onclick="inputpwdReset()">
              <input type="submit" name="forgotSubmit" value="Submit" class="btn btn-primary" id="forgotSubmit">
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------->

<!-- Logout Modal -->

<div class="modal fade" id="logout-dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">LOGOUT DIALOG</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        ARE YOU SURE YOU WANT TO LOGOUT?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="logout()">OK <i class="fa fa-sign-out"></i></button>
      </div>

    </div>
  </div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------->

<!-- Add Book Modal -->

<div class="modal fade" id="addBook">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Book</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" action="../../../models/adding_new_book.php" enctype="multipart/form-data" autocomplete="off" onsubmit="addBook(event, $(this), $('#addingbook-msg'))" onreset="restorePreview($('#book-image-preview'))">
          <div class="form-row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="orm-group">
                <div class="custom-file">
                  <input type="file" name="book_image" id="book-image" class="custom-file-input" onchange="bookImageupload(event)" required>
                  <label for="book-image" class="custom-file-label">Image Upload</label>
                </div>
              </div>
              <div class="form-group">
                <label for="book-barcode" class="text-mute">Barcode Number</label>
                <input type="text" name="book_barcode" id="book-barcode" class="form-control" maxlength="20" onkeypress="barcodeStrict(event)" required>
                <small class="text-danger">Note: Focus this Field before using Barcode Scanner.</small>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
              <div class="form-group">
                <img src="../../../library/import-images/preview.jpg" id="book-image-preview" alt="photo" width="160px" height="130px" class="m-auto" style="border-radius: 10px;">
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="form-group">
                <label for="book-title" class="text-mute">Book Title</label>
                <input type="text" name="book_title" id="book-title" class="form-control" required>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="form-group">
                <label for="book-author" class="text-mute">Book Author</label>
                <input type="text" name="book_author" id="book-author" class="form-control" required>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="form-group">
                <label for="book-category" class="text-mute">Book Category</label>
                <input type="text" name="book_category" id="book-category" class="form-control" list="bookCategory" required>
                <datalist id="bookCategory">
                  <option>English</option>
                  <option>Science</option>
                  <option>Math</option>
                  <option>Information Technology</option>
                </datalist>
                <small class="text-danger">Note: Double Click to see the Suggestion.</small>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="form-group">
                <label for="book-isbn" class="text-mute">Book ISBN</label>
                <input type="text" name="book_isbn" id="book-isbn" class="form-control" onkeypress="barcodeStrict(event)" required>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="form-group">
                <label for="book-publisher" class="text-mute">Book Publisher</label>
                <input type="text" name="book_publisher" id="book-publisher" class="form-control" required>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="form-group">
                <label for="book-publishdate" class="text-mute">Book Publish Date</label>
                <input type="date" name="book_publishdate" id="book-publishdate" class="form-control" required>
              </div>
            </div>
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <div class="mr-auto px-5" id="addingbook-msg"></div>
        <button type="reset" class="btn btn-danger"><i class="fa fa-erase"></i> Clear</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!------------------------------------------------------------------------------------------------------------------------------------->

<!-- Add Book Category Modal -->

<div class="modal fade" id="addBkCategory">
  <div class="modal-dialog">
    <div class="modal-content">

      <form method="POST" action="../../../models/adding_new_bookcat.php" autocomplete="off" onsubmit="addbkCat(event, $(this), $('#addbkcat-close'), $('#addbkcat-msg'))">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">ADD NEW BOOK CATEGORY</h4>
          <button type="button" id="addbkcat-close" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group" id="addbkcat-msg">
            <!-- Message -->
          </div>
          <div class="form-group">
            <label class="text-mute" for="bkcat-name">Book Category Name</label>
            <input type="text" name="bkcat_name" id="bkcat-name" class="form-control" required>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------->


<!-- Add Student Modal -->

<div class="modal fade" id="addStudent">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-user"></i> Add Student</h4>
        <button type="button" id="addstud-close" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" action="../../../models/adding_new_student.php" enctype="multipart/form-data" autocomplete="off" onsubmit="addStudent(event, $(this), $('#addingstud-msg'), $('#addstud-close'))" onreset="restorePreview($('#stud-image-preview'))">
          <div class="form-row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="orm-group">
                <div class="custom-file">
                  <input type="file" name="stud_image" id="book-image" class="custom-file-input" onchange="bookImageupload(event)" required>
                  <label for="book-image" class="custom-file-label">Image Upload</label>
                </div>
              </div>
              <div class="form-group">
                <label for="book-barcode" class="text-mute">Student ID</label>
                <input type="text" name="stud_id" id="book-barcode" class="form-control" maxlength="20" value="GC" required>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
              <div class="form-group">
                <img src="../../../library/import-images/preview.jpg" id="stud-image-preview" alt="photo" width="160px" height="130px" class="m-auto" style="border-radius: 10px;">
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
              <div class="form-group">
                <label for="stud_fname" class="text-mute">First Name</label>
                <input type="text" name="stud_fname" id="stud_fname" class="form-control" onkeypress="alphaStrict(event)" required>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
              <div class="form-group">
                <label for="stud_mname" class="text-mute">Middle Name</label>
                <input type="text" name="stud_mname" id="stud_mname" class="form-control" onkeypress="alphaStrict(event)" required>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
              <div class="form-group">
                <label for="stud_lname" class="text-mute">Last Name</label>
                <input type="text" name="stud_lname" id="stud_lname" class="form-control" onkeypress="alphaStrict(event)" required>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
              <div class="form-group">
                <label for="stud_nameext" class="text-mute">Name Extension</label>
                <select name="stud_nameext" id="stud_nameext" class="form-control">
                  <option>Blank</option>
                  <option>Jr.</option>
                  <option>Sr.</option>
                  <option>III</option>
                  <option>IV</option>
                  <option>V</option>
                </select>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="form-group">
                <label for="stud_con" class="text-mute">Contact Number</label>
                <input type="text" name="stud_con" id="stud_con" class="form-control" maxlength="14" onkeypress="barcodeStrict(event)" placeholder="09*********" required>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="form-group">
                <label for="stud_gender" class="text-mute">Gender</label>
                
                <select id="stud_gender" class="form-control" name="stud_gender">
                  <option>male</option>
                  <option>female</option>
                </select>

              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="form-group">
                <label for="stud_course" class="text-mute">Course</label>
                <select name="stud_course" id="stud_course" class="form-control">
                  <option>BS Information Technology</option>
                  <option>BS in Criminology</option>
                  <option>BS in PolSci</option>
                  <option>BSE</option>
                </select>
              </div>
            </div>
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <div class="mr-auto px-5" id="addingstud-msg"></div>
        <button type="reset" class="btn btn-danger"><i class="fa fa-erase"></i> Clear</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!------------------------------------------------------------------------------------------------------------------------------------->