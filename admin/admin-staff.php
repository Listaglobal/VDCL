<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ChildVille Admin Profile Access </title>
    <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/select.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="../asset/img/Logo2.png" />
</head>

<body class="with-welcome-text">
    <div class="container-scroller">
        <?php include 'includes/admin-header.php' ?>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <?php include 'includes/admin-sidebar.php' ?>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                <div class="row flex-grow">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card card-rounded">
                                            <div class="card-body">
                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                    <div>
                                                        <h4 class="card-title card-title-dash">Child Ville Staff</h4>
                                                        <p class="card-subtitle card-subtitle-dash">You have 3 Staff</p>
                                                    </div>
                                                    <div>
                                                        <a data-bs-toggle="modal" href="#adddisco" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add New Staff </a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive  mt-1">
                                                    <table class="table select-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Staff Name</th>
                                                                <th>Sex</th>
                                                                <th>Email</th>
                                                                <th>Class</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex ">
                                                                        <img src="assets/images/faces/face1.jpg" alt="">
                                                                        <div>
                                                                            <h6>Brandon Washington</h6>
                                                                            <p></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>Female</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Washington@gmail.com</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Grade 4</h6>
                                                                </td>

                                                                <td>
                                                                    <div class="badge badge-opacity-success">Active</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex ">
                                                                        <img src="assets/images/faces/face1.jpg" alt="">
                                                                        <div>
                                                                            <h6>Brandon Washington</h6>
                                                                            <p></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>Washington@gmail.com</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Grade 4</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Female</h6>
                                                                </td>

                                                                <td>
                                                                    <div class="badge badge-opacity-success">Active</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex ">
                                                                        <img src="assets/images/faces/face1.jpg" alt="">
                                                                        <div>
                                                                            <h6>Brandon Washington</h6>
                                                                            <p></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>Washington@gmail.com</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Grade 4</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>Female</h6>
                                                                </td>

                                                                <td>
                                                                    <div class="badge badge-opacity-success">Active</div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Staff  -->
    <div class="modal fade " id="adddisco" style="padding-left: 0px;" aria-modal="true" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Staff</h5>
                    <a href="#" class="close" id='_closedisco' data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-close"></i></a>
                </div>
                <div class="modal-body">
                    <form @submit.prevent>

                        <div class="form-group">
                            <label class="form-label" for="quantity-add">Staff Image</label>
                            <div class="form-control-wrap">
                                <div class="form-file">
                                    <input id="input_file__" type="file" accept="image/*" @change='uploadImage' class="form-file-input" id="customFile">
                                    <label class="form-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="shortname">Staff Full Name</label>
                            <div class="form-control-wrap">
                                <input type="text" v-model="shortname" class="form-control" id="shortname" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="oneapp">Select Staff Sex</label>
                            <div class="form-control-wrap">
                                <select v-model="oneapp_code" class="form-select" id="oneappcode" required>
                                    <option value="null">Select Staff Sex</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Staff Class</label>
                            <div class="form-control-wrap">
                                <input type="text" v-model="color_code" class="form-control" id="email-address" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Staff Email</label>
                            <div class="form-control-wrap">
                                <input type="text" v-model="name" class="form-control" id="email-address" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Staff Number</label>
                            <div class="form-control-wrap">
                                <input type="number" v-model="service_charge" class="form-control" id="email-address" required="">
                            </div>
                        </div>
                        <div class="form-group"><button @click='addDisco' class="btn btn-lg btn-primary">Add New Staff</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/admin-footer.php' ?>

</body>

</html>