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
<style>
    [v-cloak] {
        display: none;
    }
</style>

<body class="with-welcome-text">
    <div id="admin" v-cloak>
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
                                                            <h4 class="card-title card-title-dash">Child Ville Staff PayRoll</h4>
                                                        </div>
                                                        <div>
                                                            <a data-bs-toggle="modal" href="#adddisco" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add Staff PayRoll </a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive  mt-1">
                                                        <table class="table select-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Staff</th>
                                                                    <th>Date Created</th>
                                                                    <th>Month</th>
                                                                    <th>File</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody v-if="payroll">
                                                                <tr v-for="(item, index) in payroll">
                                                                    <td>
                                                                        <div class="d-flex ">
                                                                            <img v-if='item.profile_pic' :src="baseUrl +'/assets/images/staff/'+item.profile_pic" alt="Staff image" class="thumb __567788">
                                                                            <div class="text-align-center mt-2 p-2">
                                                                                <h6>{{item.fname}} {{item.lname}}</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>{{item.created_at}}</td>
                                                                    <td>{{item.month}}</td>
                                                                    <td>{{item.file}}</td>
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
        <!-- Add Staff pay Roll  -->
        <div class="modal fade " id="adddisco" style="padding-left: 0px;" aria-modal="true" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Staff Pay Roll</h5>
                        <a href="#" class="close" id='_closedisco' data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-close"></i></a>
                    </div>
                    <div class="modal-body">
                        <form>

                            <div class="form-group">
                                <label class="form-label" for="quantity-add">Staff Pdf</label>
                                <div class="form-control-wrap">
                                    <div class="form-file">
                                        <input id="input_file__" type="file" accept="image/*" @change='uploadImage' class="form-file-input" id="customFile">
                                        <label class="form-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="oneapp">Select PayRoll Month </label>
                                <div class="form-control-wrap">
                                    <select v-model="month" class="form-select" id="oneappcode" required>
                                        <option value="null">Select Month</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="oneapp">Select Staff </label>
                                <div v-if="staff" class="form-control-wrap">
                                    <select v-model="user_id" class="form-select" id="oneappcode" required>
                                        <option value="null">Select Staff</option>
                                        <option v-for="(item, index) in staff" :value="item.user_id">{{item.fname}} {{item.lname}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><button type="submit" @click.prevent="addPayroll()" class="btn btn-lg btn-primary">Send Staff PayRoll</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/admin-footer.php' ?>

</body>

</html>