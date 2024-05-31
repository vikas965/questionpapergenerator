<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<style>
    .form-control:focus ,.form-select:focus{
  border-color: black;
  box-shadow: none;
}
#Login{
        width: 300px;
        padding: 8px;
        border: none;
        box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
        font-size: 19px;
        margin-top: 30px;
        border-radius: 6px;
        cursor: pointer;
        margin-left: 27%;
        
    }

    .form-select{
        margin-bottom:15px;
    }

    .container-fluid{
        padding:40px;
        
    }
#content-wrapper{
    height: 100vh;
    overflow-y: scroll;
}
    
</style>


<?php 

include('includes/db.php');

if(isset($_POST['add']))
{

    $sub_code = $_POST['subcode'];
    $sub_name = $_POST['subname'];
    $sub_branch = $_POST['branch'];
    $sub_reg = $_POST['regulation'];
    $sub_sem = $_POST['semno'];

    $fetch_sub = "SELECT * FROM subjects where subject_code='$sub_code'";
    $fetch_exe = mysqli_query($con,$fetch_sub);
    if(mysqli_num_rows($fetch_exe)>0)
    {
        echo "<script>window.alert('Subject Already exist')</script>";
    }

else{
    $insert_subject_query = "INSERT INTO subjects(subject_code,subject_name,branch_id,sem_no,sub_reg)
    Values('$sub_code','$sub_name',$sub_branch,$sub_sem,'$sub_reg')";


    $subject_exe = mysqli_query($con,$insert_subject_query);

    if($subject_exe)
    {
        echo "<script>window.alert('Subject Added')</script>";
    }

}


}


?>

<div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow align-items-center justify-content-center">

                    <!-- Sidebar Toggle (Topbar) -->
                  

                       
                       <h1 style="color:rgba(0, 0, 0, 0.726)" class="text-center">Add Subject</h1>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid align-items-center justify-content-center">
                     
                <div class="login-container">

                <form action="" method="post">

                    <div class="form-floating mb-3">
                        <input name="subcode" type="text" class="form-control w-100 " id="floatingInput" placeholder="Subject Code" required>
                        <label for="floatingInput">Subject Code</label>
                      </div>
                    <div class="form-floating mb-3">
                        <input name="subname" type="text" class="form-control w-100 " id="floatingInput" placeholder="Subject Name" required>
                        <label for="floatingInput">Subject Name</label>
                      </div>
                      <div class="form-floating">
                      <select name="branch" class="form-select" aria-label="Default select example" required>
                            <option selected>Choose Branch</option>
                            <option value="9">BSH</option>
                            <option value="1">CSE</option>
                            <option value="2">AIML</option>
                            <option value="3">AIDS</option>
                            <option value="4">IT</option>
                            <option value="5">MECH</option>
                            <option value="6">CIVIL</option>
                            <option value="7">ECE</option>
                            <option value="8">EEE</option>
                            
                    </select>
                      </div>
                      <div class="form-floating">
                      <select name="regulation" class="form-select" aria-label="Default select example" required>
                            <option selected>Choose Regulation</option>
                            <option value="18">AR18</option>
                            <option value="19">AR19</option>
                            <option value="20">AR20</option>
                            <option value="21">AR21</option>
                            <option value="22">AR22</option>
                            <option value="23">AR23</option>
                            
                            
                    </select>
                      </div>
                      <div class="form-floating">
                      <select name="semno" class="form-select" aria-label="Default select example" required>
                            <option selected>Choose Sem</option>
                            <option value="1">I</option>
                            <option value="2">II</option>
                            <option value="3">III</option>
                            <option value="4">IV</option>
                            <option value="5">V</option>
                            <option value="6">VI</option>
                            <option value="7">VII</option>
                            <option value="8">VIII</option>
                            
                            
                    </select>
                      </div>

                <input name="add" id="Login" type="submit" value="Add">
                </form>
                </div>
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
            <!-- End of Footer -->

        </div>