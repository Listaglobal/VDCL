<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/staff-header-link.php' ?>
</head>
<style>
    [v-cloak] {
        display: none;
    }
</style>


<body id="staff" v-cloak class="with-welcome-text">
    <div class="container-scroller">
        <?php include 'includes/staff-header.php' ?>
        <div class="container-fluid page-body-wrapper">
        
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary me-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary me-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="../assets/images/faces/face1.jpg" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../assets/images/faces/face2.jpg" alt="image"><span class="offline"></span>
                                </div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../assets/images/faces/face3.jpg" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../assets/images/faces/face4.jpg" alt="image"><span class="offline"></span>
                                </div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../assets/images/faces/face5.jpg" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../assets/images/faces/face6.jpg" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <?php include 'includes/staff-sidebar.php' ?>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">

                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                                        <div class="row">
                                            <div class="col-lg-8 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">Performance Overview</h4>
                                                                        <p class="card-subtitle card-subtitle-dash">Know Your Performance</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                                <h6 class="dropdown-header">Settings</h6>
                                                                                <a class="dropdown-item" href="#">Last Month</a>
                                                                                <a class="dropdown-item" href="#">Last Week</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                                                    <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                                                        <h2 class="me-2 fw-bold"></h2>
                                                                        <h4 class="me-2"></h4>
                                                                        <h4 class="text-success"></h4>
                                                                    </div>
                                                                    <div class="me-3">
                                                                        <div id="marketingOverview-legend"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="chartjs-bar-wrapper mt-3">
                                                                    <canvas id="marketingOverview"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">Child Ville Pupils</h4>
                                                                        <p class="card-subtitle card-subtitle-dash">You have 3 Pupils</p>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new Pupils</button>
                                                                    </div>
                                                                </div>
                                                                <div class="table-responsive  mt-1">
                                                                    <table class="table select-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>PuPils Name</th>
                                                                                <th>Sex</th>
                                                                                <th>Parents Contact</th>
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
                                                                                    <div>
                                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p class="text-success">+23729474</p>
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p>Washington James</p>
                                                                                        </div>
                                                                                    </div>
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
                                                                                    <h6>Female</h6>
                                                                                </td>
                                                                                <td>
                                                                                    <div>
                                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p class="text-success">+23729474</p>
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p>Washington James</p>
                                                                                        </div>
                                                                                    </div>
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
                                                                                    <h6>Female</h6>
                                                                                </td>
                                                                                <td>
                                                                                    <div>
                                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p class="text-success">+23729474</p>
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p>Washington James</p>
                                                                                        </div>
                                                                                    </div>
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
                                                <div class="row flex-grow">
                                                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body card-rounded">
                                                                <h4 class="card-title  card-title-dash">Recent Events</h4>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">
                                                                            Change in Directors
                                                                        </p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">
                                                                            Other Events
                                                                        </p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">
                                                                            Quarterly Report
                                                                        </p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">
                                                                            Change in Directors
                                                                        </p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="list align-items-center pt-3">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-0">
                                                                            <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                                    <h4 class="card-title card-title-dash">Activities</h4>
                                                                    <p class="mb-0">20 finished, 5 remaining</p>
                                                                </div>
                                                                <ul class="bullet-line-list">
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                            <p>Just now</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="list align-items-center pt-3">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-0">
                                                                            <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <h4 class="card-title card-title-dash">Todo list</h4>
                                                                            <div class="add-items d-flex mb-0">
                                                                                <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                                                                <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="list-wrapper">
                                                                            <ul class="todo-list todo-list-rounded">
                                                                                <li class="d-block">
                                                                                    <div class="form-check w-100">
                                                                                        <label class="form-check-label">
                                                                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                            of the printing <i class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                            <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                                                                            <i class="mdi mdi-flag ms-2 flag-color"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="d-block">
                                                                                    <div class="form-check w-100">
                                                                                        <label class="form-check-label">
                                                                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                            of the printing <i class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div class="ps-4 text-small me-3">23 June 2020</div>
                                                                                            <div class="badge badge-opacity-success me-3">Done</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="form-check w-100">
                                                                                        <label class="form-check-label">
                                                                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                            of the printing <i class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                            <div class="badge badge-opacity-success me-3">Done</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="border-bottom-0">
                                                                                    <div class="form-check w-100">
                                                                                        <label class="form-check-label">
                                                                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                            of the printing <i class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                            <div class="badge badge-opacity-danger me-3">Expired</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                                                            <div>
                                                                                <h4 class="card-title card-title-dash">Leave Report</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-3">
                                                                            <canvas id="leaveReport"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                                                            <div>
                                                                                <h4 class="card-title card-title-dash">Top Performer</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-3">
                                                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10" src="assets/images/faces/face1.jpg" alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                                                                        <small class="text-muted mb-0">162543</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small">
                                                                                    1h ago
                                                                                </div>
                                                                            </div>
                                                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10" src="assets/images/faces/face2.jpg" alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                                                                        <small class="text-muted mb-0">162543</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small">
                                                                                    1h ago
                                                                                </div>
                                                                            </div>
                                                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10" src="assets/images/faces/face3.jpg" alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                                                                        <small class="text-muted mb-0">162543</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small">
                                                                                    1h ago
                                                                                </div>
                                                                            </div>
                                                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10" src="assets/images/faces/face4.jpg" alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                                                                        <small class="text-muted mb-0">162543</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small">
                                                                                    1h ago
                                                                                </div>
                                                                            </div>
                                                                            <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10" src="assets/images/faces/face5.jpg" alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                                                                        <small class="text-muted mb-0">Alaska, USA</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small">
                                                                                    1h ago
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <?php include 'includes/staff-footer.php' ?>
</body>

</html>