<x-layout>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-6">
                            <h2>Event <b>Management System</b></h2>
                        </div>
                        <div class="col-xs-6">
                            <a href="#addScheduleModal" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Schedule</span></a>
                            <a href="#deleteScheduleModal" class="btn btn-danger" data-toggle="modal"><i
                                    class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>Event Name</th>
                            <th>Attendee</th>
                            <th>Venue</th>
                            <th>Task</th>
                            <th>Schedule</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                    <label for="checkbox1"></label>
                                </span>
                            </td>
                            <td>Wedding Events</td>
                            <td>100</td>
                            <td>Masosu Spring Resort Pool No. 3 Tourist Inn & Event Hall</td>
                            <td>Wedding Reception</td>
                            <td>10/01/2024 11:15 am</td>

                            <td>
                                <a href="#editScheduleModal" class="edit" data-toggle="modal"><i
                                        class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#deleteScheduleModal" class="delete" data-toggle="modal"><i
                                        class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                        <!-- <tr>
       <td>
        <span class="custom-checkbox">
         <input type="checkbox" id="checkbox2" name="options[]" value="1">
         <label for="checkbox2"></label>
        </span>
       </td>
       <td>Dominique Perrier</td>  -->

                        <!-- <td>
        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
       </td>
      </tr>
      <tr>
       <td>
        <span class="custom-checkbox">
         <input type="checkbox" id="checkbox3" name="options[]" value="1">
         <label for="checkbox3"></label>
        </span>
       </td>
       <!- <td>Maria Anders</td> -->

                        <!-- <td>
        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
       </td> -->
                        <!-- </tr>
      <tr>
       <td>
        <span class="custom-checkbox">
         <input type="checkbox" id="checkbox4" name="options[]" value="1">
         <label for="checkbox4"></label>
        </span>
       </td>
       <!- <td>Fran Wilson</td> -->

                        <!-- <td>
        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
       </td> -->
                        <!-- </tr>
      <tr>
       <td>
        <span class="custom-checkbox">
         <input type="checkbox" id="checkbox5" name="options[]" value="1">
         <label for="checkbox5"></label>
        </span>
       </td> -->
                        <!-- <td>Martin Blank</td> -->

                        <!-- <td>
        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
       </td> -->
                        <!-- </tr>  -->
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addScheduleModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Add Schedule</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <h2>Event</h2>
                        <div class="form-group">
                            <label>Event Name:</label>
                            <input type="text" class="form-control" placeholder="Event Name" required>
                        </div>
                        <div class="form-group">
                            <label>Date:</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Time:</label>
                            <input type="time" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Location:</label>
                            <input type="text" class="form-control" placeholder="Location" required>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <input type="text" class="form-control" placeholder="Description" required>
                        </div>
                        <h2>Attendee</h2>
                        <div class="form-group">
                            <label>Attendee Name:</label>
                            <input type="text" class="form-control" placeholder="Attendee Name" required>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" class="form-control" placeholder="Email Address"required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number:</label>
                            <input type="text" class="form-control" placeholder="Phone Number" required>
                        </div>
                        <h2>Venue</h2>
                        <div class="form-group">
                            <label>Venue Name:</label>
                            <input type="text" class="form-control" placeholder="Venue Name" required>
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input type="text" class="form-control" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <label>Capacity:</label>
                            <input type="number" class="form-control" placeholder="Capacity" required>
                        </div>
                        <div class="form-group">
                            <label>Availability:</label>
                            <label>
                                <input type="radio" name="choice-radio">
                                Yes
                            </label>
                            <label>
                                <input type="radio" name="choice-radio">
                                No
                            </label>
                        </div>
                        <h2>Task</h2>
                        <div class="form-group">
                            <label>Task Name:</label>
                            <input type="text" class="form-control" placeholder="Task Name" required>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <input type="text" class="form-control" placeholder="Description" required>
                        </div>
                        <div class="form-group">
                            <label>Due Date:</label>
                            <input type="time" class="form-control" required>
                        </div>
                        <h2>Schedule</h2>
                        <div class="form-group">
                            <label>StartTime:</label>
                            <input type="datetime-local" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>EndTime:</label>
                            <input type="time" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <input type="text" class="form-control" placeholder="Description" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editScheduleModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Schedule</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h2>Event</h2>
                            <div class="form-group">
                                <label>Event Name:</label>
                                <input type="text" class="form-control" placeholder="Event Name" required>
                            </div>
                            <div class="form-group">
                                <label>Date:</label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Time:</label>
                                <input type="time" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Location:</label>
                                <input type="text" class="form-control" placeholder="Location" required>
                            </div>
                            <div class="form-group">
                                <label>Description:</label>
                                <input type="text" class="form-control" placeholder="Description" required>
                            </div>
                            <h2>Attendee</h2>
                            <div class="form-group">
                                <label>Attendee Name:</label>
                                <input type="text" class="form-control" placeholder="Attendee Name" required>
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="text" class="form-control" placeholder="Email Address"required>
                            </div>
                            <div class="form-group">
                                <label>Phone Number:</label>
                                <input type="text" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <h2>Venue</h2>
                            <div class="form-group">
                                <label>Venue Name:</label>
                                <input type="text" class="form-control" placeholder="Venue Name" required>
                            </div>
                            <div class="form-group">
                                <label>Address:</label>
                                <input type="text" class="form-control" placeholder="Address" required>
                            </div>
                            <div class="form-group">
                                <label>Capacity:</label>
                                <input type="number" class="form-control" placeholder="Capacity" required>
                            </div>
                            <div class="form-group">
                                <label>Availability:</label>
                                <label>
                                    <input type="radio" name="choice-radio">
                                    Yes
                                </label>
                                <label>
                                    <input type="radio" name="choice-radio">
                                    No
                                </label>
                            </div>
                            <h2>Task</h2>
                            <div class="form-group">
                                <label>Task Name:</label>
                                <input type="text" class="form-control" placeholder="Task Name" required>
                            </div>
                            <div class="form-group">
                                <label>Description:</label>
                                <input type="text" class="form-control" placeholder="Description" required>
                            </div>
                            <div class="form-group">
                                <label>Due Date:</label>
                                <input type="time" class="form-control" required>
                            </div>
                            <h2>Schedule</h2>
                            <div class="form-group">
                                <label>StartTime:</label>
                                <input type="datetime-local" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>EndTime:</label>
                                <input type="time" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Description:</label>
                                <input type="text" class="form-control" placeholder="Description" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save">
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteScheduleModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Schedule</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
