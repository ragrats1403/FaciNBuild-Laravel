<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Account</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/admin/adminaccount.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/body.css">    
</head>

<header>
    <div class="imgctrl">

    </div>
    <div class="navplace">
        <p>Hello, Administrator</p>
      <nav class="gnav">
        </nav>
    </div>
</header>

<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <img src="../../../images/Brown_logo_faci.png" />
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <div class="navdiv">
            <ul class="nav_list">
                <li>
                    <a href="../../../php/systemadministrator/accounts/admin_account.php">
                        <i class='bx bx-user'></i>
                        <span class="link_name">Account</span>
                    </a>
                    <span class="tooltip">Account</span>
                </li>
                <li>
                    <a href="../../../php/systemadministrator/jobrequest/adminjobreq.php">
                        <i class='bx bx-clipboard'></i>
                        <span class="link_name">Job Request</span>
                    </a>
                    <span class="tooltip">Job Request</span>
                </li>
                <li>
                    <a href="../../../php/systemadministrator/equipments/adminequipment.php">
                        <i class='bx bx-wrench'></i>
                        <span class="link_name">Equipment</span>
                    </a>
                    <span class="tooltip">Equipment</span>
                </li>
                <li>
                    <a href="../../../php/systemadministrator/reservations/adminreservations.php">
                        <i class='bx bx-check-square'></i>
                        <span class="link_name">Reservation</span>
                    </a>
                    <span class="tooltip">Reservation</span>
                </li>
            </ul>
            <div class="profile_content">
                <div class="profile">
                    <div class="profile_details">
                    <img src="../../../images/ico/profileicon.png" alt="" style = "height: 45px; width:45px; object-fit:cover; border-radius:12px;" />
                        <div class="name_role">
                            <div class="name">EDP</div>
                            <div class="role">System Administrator</div>
                        </div>
                    </div>
                    <a href="../../../logout.php">
                        <i class='bx bx-log-out' id="log_out"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");

        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>
    <!-- Data Table Start-->
    <!--<h1 class="text-center">Faci N Build Test table control</h1>-->
    <div class="table1">

        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8" style="background-color: #ccc; padding-left:50px; padding-top:50px; padding-right:50px;">
                            <!-- padding-left:50px; padding-top:50px; padding-right:50px;-->
                            <button type="button" class="btn btn-primary" style="margin-bottom:40px;" data-bs-toggle="modal" data-bs-target="#addUserModal">Add New Account</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8" style="background-color: #ccc; padding-left:50px; padding-right:50px; padding-bottom:50px; ">
                            <!-- padding-left:50px; padding-right:50px; padding-bottom:50px;-->
                            <table id="datatable" class="table">
                                <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Role Level</th>
                                    <th>Role ID</th>
                                    <th>Options</th>

                                </thead>
                                <tbody>
                                    <tr>
                                        <!---
                                    <td>1</td>
                                    <td>Rajesh</td>
                                    <td>raj@gmail.com</td>
                                    <td>131131231</td>
                                    <td>Mumbai</td>
                                    <td><a class="btn ">Edit</a><a href="">Delete</a></td>
                                    -->

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table End-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- Script Process Start-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $('#datatable').DataTable({
            'serverSide': true,
            'processing': true,
            'paging': true,
            'order': [],
            'ajax': {
                'url': 'fetch_data.php',
                'type': 'post',

            },
            'fnCreatedRow': function(nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData[0]);
            },
            'columnDefs': [{
                'target': [0, 5],
                'orderable': false,
            }],
        scrollY: 200,
        scrollCollapse: true,
        paging: false 

        });
    </script>
    <script type="text/javascript">
        //add button control
        $(document).on('submit', '#saveUserForm', function(event) {
            event.preventDefault();
            var name = $('#inputName').val();
            var username = $('#inputUsername').val();
            var password = $('#inputPassword').val();
            var rolelevel = $('#inputRolelevel').val();
            var roleid = $('#inputRoleID').val();
            if (username != '' && password != '' && rolelevel != '' && roleid != '') {
                $.ajax({
                    url: "add_user.php",
                    data: {
                        name: name,
                        username: username,
                        password: password,
                        rolelevel: rolelevel,
                        roleid: roleid
                    },
                    type: 'POST',
                    success: function(data) {
                        var json = JSON.parse(data);
                        status = json.status;
                        if (status = 'success') {
                            table = $('#datatable').DataTable();
                            table.draw();
                            alert('Successfully Added User!');
                            $('#inputName').val('');
                            $('#inputUsername').val('');
                            $('#inputPassword').val('');
                            $('#inputRolelevel').val('');
                            $('#inputRoleID').val('');
                            $('#addUserModal').modal('hide');
                        }
                    }
                });
            } else {
                alert("Please fill all the Required fields");
            }
        });
        //delete user button control
        $(document).on('click', '.btnDelete', function(event) {
            var table = $('#datatable').DataTable();
            event.preventDefault();
            var id = $(this).data('id');
            if (confirm('Are you sure to delete this user?')) {


                $.ajax({
                    url: "delete_user.php",
                    data: {
                        id: id
                    },
                    type: 'POST',
                    success: function(data) {
                        var json = JSON.parse(data);
                        status = json.status;

                        if (status == 'success') {
                            $('#' + id).closest('tr').remove();

                        } else {
                            alart('failed');
                            return;
                        }
                    }
                });
            } else {
                return null;
            }
        });
        //edit button control 
        $(document).on('click', '.editBtn', function(event) {
            var id = $(this).data('id');
            var trid = $(this).closest('tr').attr('id');
            $.ajax({
                url: "get_single_user.php",
                data: {
                    id: id
                },
                type: 'POST',
                success: function(data) {
                    var json = JSON.parse(data);
                    $('#id').val(json.id);
                    $('#trid').val(trid);
                    $('#_inputName').val(json.name)
                    $('#_inputUsername').val(json.username);
                    $('#_inputPassword').val(json.password);
                    $('#_inputRoleLevel').val(json.rolelevel);
                    $('#_inputRoleID').val(json.roleid);
                    $('#editUserModal').modal('show');
                }
            });
        });

        $(document).on('submit', '#updateUserForm', function() {
            var id = $('#id').val();
            var trid = $('#trid').val();
            var name = $('#_inputName').val();
            var username = $('#_inputUsername').val();
            var password = $('#_inputPassword').val();
            var rolelevel = $('#_inputRoleLevel').val();
            var roleid = $('#_inputRoleID').val();
            $.ajax({
                url: "update_user.php",
                data: {
                    id: id,
                    name: name,
                    username: username,
                    password: password,
                    rolelevel: rolelevel,
                    roleid: roleid
                },
                type: 'POST',
                success: function(data) {
                    var json = JSON.parse(data);
                    status = json.status;
                    if (status == 'success') {
                        alert('Updated Successfully!');
                        table = $('#datatable').DataTable();
                        var button = '<a href="javascript:void();" class="btn btn-sm btn-info" data-id="' + id + '" >Edit</a> <a href="javascript:void();" class="btn btn-sm btn-danger" data-id="' + id + '" >Delete</a>';
                        var row = table.row("[id='" + trid + "']");
                        row.row("[id='" + trid + "']").data([id, name, username, password, rolelevel, roleid, button]);
                        $('#editUserModal').modal('hide');
                    } else {
                        alert('failed');
                    }
                }
            });
        });
    </script>
    <!-- Script Process End-->
    <!-- add user modal-->
    <!-- Modal Popup -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="saveUserForm" action="javascript:void();" method="POST">
                        <div class="modal-body">
                            <!-- Form Controls-->

                            <div class="mb-3 row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="inputName" class="form-control" id="inputName">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="inputUsername" class="form-control" id="inputUsername">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputRolelevel" class="col-sm-2 col-form-label">RoleLevel</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputRolelevel" name="inputRolelevel">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputRoleID" class="col-sm-2 col-form-label">RoleID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputRoleID" name="inputRoleID">
                                </div>
                            </div>

                            <!-- Form Controls End-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- add user modal end-->
    <!-- edit user modal-->
    <!-- Modal -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateUserForm" action="javascript:void();" method="POST">
                        <div class="modal-body">
                            <input type="hidden" id="id" name="id" value="">
                            <input type="hidden" id="trid" name="trid" value="">
                            <!-- Form Controls-->
                            <div class="mb-3 row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="_inputName" class="form-control" id="_inputName">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="_inputUsername" class="form-control" id="_inputUsername">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="_inputPassword" name="_inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputRoleLevel" class="col-sm-2 col-form-label">RoleLevel</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="_inputRoleLevel" name="_inputRoleLevel">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputRoleID" class="col-sm-2 col-form-label">RoleID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="_inputRoleID" name="_inputRoleID">
                                </div>
                            </div>
                            <!-- Form Controls End-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- edit user modalPopup end-->




</body>

</html>