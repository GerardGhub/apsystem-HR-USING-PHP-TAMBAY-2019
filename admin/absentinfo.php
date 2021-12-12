<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:window;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!--h3-->
    <img src="images/GerardSs.jpg" height="40"></img><emp style="font-size:17px;">&nbsp;Leave Form Absences Report</emp>
      <!--/h3-->
      <ol class="breadcrumb">
        <!--li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Department</li-->
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead style="background-color:rgb(60,141,188);color:white;">
                  <th>Date_Incident</th>
				  <th>Name</th>
				  <th>Leave&nbsp;Form</th>
                  <th>Type&nbsp;of&nbsp;Leave</th>
				  <th>Date Added</th>
                  <th>Action</th>
                </thead>
                <tbody>
				<!--
				
				                 $sql = "SELECT *, sections.id AS id FROM sections LEFT JOIN Department ON Department.id=sections.department";
								 -->
								 
                  <?php
                    $sql = "SELECT *,  tol.id AS empide FROM empleaveform LEFT JOIN tol ON tol.id=empleaveform.TypeofLeave LEFT JOIN employees ON employees.id=empleaveform.employee_subject";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
						$rower =$row['TypeofLeave'];
						
						     include('connect.php');
            $cats=$row['empide'];
            $query7 = mysql_query("select * from tol WHERE id='$cats'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
           // echo $row7['type_of_leave'];
						
						
                      echo "
                        <tr>
                          <td>".$row['incident_date']."</td>
						  <td>".$row['firstname']."&nbsp;".$row['lastname']."</td>
                              
						  <td>".$row['LeaveForm']."</td>
						  <td>".$row7['type_of_leave']."</td>
						  <td>".$row['date_added']."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/absentinfo_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'Section_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#posid').val(response.id);
    $('#edit_department').val(response.department);
      $('#edit_section').val(response.section);
      $('#del_posid').val(response.id);
      $('#del_position').html(response.description);
    }
  });
}
</script>
</body>
</html>
