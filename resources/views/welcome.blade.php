@extends('layouts.app')
@section('contents')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="#" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text" data-toggle="modal" href="#myModal">Add New</span>
        </a>  
    </div>

    <!--Success Modal Templates-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title pull-left text-light">Modal title</h4>
                <button type="button" class="close pull-right text-light" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" >
                <p>
                    <form class="user" id="main">
                        <div class="form-group row">
                        <h6 class="messages"></h6>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="FirstName" placeholder="First Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="LastName" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
                            <h6 class="messages"></h6>
                        </div>
                        <!-- <div class="form-group">
                            <label class="col-sm-2 control-label" for="email">Email</label>
                            <div class="col-sm-5">
                            <input id="email" class="form-control" type="email" placeholder="Email" name="email">
                            </div>
                            <div class="col-sm-5 messages"></div>
                        </div> -->
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                            </div>
                        </div>
                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </a>
                    </form>    
                &hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    <!--End Success Modal Templates-->

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
              <th>
                  <a href="#" class="btn btn-success btn-circle">
                      <i class="fas fa-info-circle"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-circle">
                      <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-circle">
                      <i class="fas fa-trash"></i>
                  </a>
              </th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
            <th>
                  <a href="#" class="btn btn-success btn-circle">
                      <i class="fas fa-info-circle"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-circle">
                      <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-circle">
                      <i class="fas fa-trash"></i>
                  </a>
              </th>
          </tr>
          <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>$170,750</td>
            <th>
                  <a href="#" class="btn btn-success btn-circle">
                      <i class="fas fa-info-circle"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-circle">
                      <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-circle">
                      <i class="fas fa-trash"></i>
                  </a>
              </th>
          </tr>
          <tr>
            <td>Ashton Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>66</td>
            <td>2009/01/12</td>
            <td>$86,000</td>
            <th>
                  <a href="#" class="btn btn-success btn-circle">
                      <i class="fas fa-info-circle"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-circle">
                      <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-circle">
                      <i class="fas fa-trash"></i>
                  </a>
              </th>
          </tr>
          <tr>
            <td>Cedric Kelly</td>
            <td>Senior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>22</td>
            <td>2012/03/29</td>
            <td>$433,060</td>
            <th>
                  <a href="#" class="btn btn-success btn-circle">
                      <i class="fas fa-info-circle"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-circle">
                      <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-circle">
                      <i class="fas fa-trash"></i>
                  </a>
              </th>
          </tr>
          <tr>
            <td>Airi Satou</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>33</td>
            <td>2008/11/28</td>
            <td>$162,700</td>
            <th>
                  <a href="#" class="btn btn-success btn-circle">
                      <i class="fas fa-info-circle"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-circle">
                      <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-circle">
                      <i class="fas fa-trash"></i>
                  </a>
              </th>
          </tr>
          <tr>
            <td>Brielle Williamson</td>
            <td>Integration Specialist</td>
            <td>New York</td>
            <td>61</td>
            <td>2012/12/02</td>
            <td>$372,000</td>
            <th>
                  <a href="#" class="btn btn-success btn-circle">
                      <i class="fas fa-info-circle"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-circle">
                      <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-circle">
                      <i class="fas fa-trash"></i>
                  </a>
              </th>
          </tr>
          <tr>
            <td>Herrod Chandler</td>
            <td>Sales Assistant</td>
            <td>San Francisco</td>
            <td>59</td>
            <td>2012/08/06</td>
            <td>$137,500</td>
            <th>
                  <a href="#" class="btn btn-success btn-circle">
                      <i class="fas fa-info-circle"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-circle">
                      <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-circle">
                      <i class="fas fa-trash"></i>
                  </a>
              </th>
          </tr>
          <tr>
            <td>Rhona Davidson</td>
            <td>Integration Specialist</td>
            <td>Tokyo</td>
            <td>55</td>
            <td>2010/10/14</td>
            <td>$327,900</td>
            <th>
                  <a href="#" class="btn btn-success btn-circle">
                      <i class="fas fa-info-circle"></i>
                  </a>
                  <a href="#" class="btn btn-primary btn-circle">
                      <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-circle">
                      <i class="fas fa-trash"></i>
                  </a>
              </th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<script>
    (function() {
      // Before using it we must add the parse and format functions
      // Here is a sample implementation using moment.js
      validate.extend(validate.validators.datetime, {
        // The value is guaranteed not to be null or undefined but otherwise it
        // could be anything.
        parse: function(value, options) {
          return +moment.utc(value);
        },
        // Input is a unix timestamp
        format: function(value, options) {
          var format = options.dateOnly ? "YYYY-MM-DD" : "YYYY-MM-DD hh:mm:ss";
          return moment.utc(value).format(format);
        }
      });

      // These are the constraints used to validate the form
      var constraints = {
        FirstName: {
          // You need to pick a username too
          presence: true,
          // And it must be between 3 and 20 characters long
          length: {
            minimum: 3,
            maximum: 20
          },
          format: {
            // We don't allow anything that a-z and 0-9
            pattern: "[a-z0-9]+",
            // but we don't care if the username is uppercase or lowercase
            flags: "i",
            message: "can only contain a-z and 0-9"
          }
        },
        LastName: {
          // You need to pick a username too
          presence: true,
          // And it must be between 3 and 20 characters long
          length: {
            minimum: 3,
            maximum: 20
          },
          format: {
            // We don't allow anything that a-z and 0-9
            pattern: "[a-z0-9]+",
            // but we don't care if the username is uppercase or lowercase
            flags: "i",
            message: "can only contain a-z and 0-9"
          }
        },
        email: {
          // Email is required
          presence: true,
          // and must be an email (duh)
          email: true
        },
        password: {
          // Password is also required
          presence: true,
          // And must be at least 5 characters long
          length: {
            minimum: 5
          }
        },
        "confirm-password": {
          // You need to confirm your password
          presence: true,
          // and it needs to be equal to the other password
          equality: {
            attribute: "password",
            message: "^The passwords does not match"
          }
        },
        
        birthdate: {
          // The user needs to give a birthday
          presence: true,
          // and must be born at least 18 years ago
          date: {
            latest: moment().subtract(18, "years"),
            message: "^You must be at least 18 years old to use this service"
          }
        },
        country: {
          // You also need to input where you live
          presence: true,
          // And we restrict the countries supported to Sweden
          inclusion: {
            within: ["SE"],
            // The ^ prevents the field name from being prepended to the error
            message: "^Sorry, this service is for Sweden only"
          }
        },
        zip: {
          // Zip is optional but if specified it must be a 5 digit long number
          format: {
            pattern: "\\d{5}"
          }
        },
        "number-of-children": {
          presence: true,
          // Number of children has to be an integer >= 0
          numericality: {
            onlyInteger: true,
            greaterThanOrEqualTo: 0
          }
        }
      };

      // Hook up the form so we can prevent it from being posted
      var form = document.querySelector("form#main");
      form.addEventListener("submit", function(ev) {
        ev.preventDefault();
        handleFormSubmit(form);
      });

      // Hook up the inputs to validate on the fly
      var inputs = document.querySelectorAll("input, textarea, select")
      for (var i = 0; i < inputs.length; ++i) {
        inputs.item(i).addEventListener("change", function(ev) {
          var errors = validate(form, constraints) || {};
          showErrorsForInput(this, errors[this.name])
        });
      }

      function handleFormSubmit(form, input) {
        // validate the form against the constraints
        var errors = validate(form, constraints);
        // then we update the form to reflect the results
        showErrors(form, errors || {});
        if (!errors) {
          showSuccess();
        }
      }

      // Updates the inputs with the validation errors
      function showErrors(form, errors) {
        // We loop through all the inputs and show the errors for that input
        _.each(form.querySelectorAll("input[name], select[name]"), function(input) {
          // Since the errors can be null if no errors were found we need to handle
          // that
          showErrorsForInput(input, errors && errors[input.name]);
        });
      }

      // Shows the errors for a specific input
      function showErrorsForInput(input, errors) {
        // This is the root of the input
        var formGroup = closestParent(input.parentNode, "form-group")
          // Find where the error messages will be insert into
          , messages = formGroup.querySelector(".messages");
        // First we remove any old messages and resets the classes
        resetFormGroup(formGroup);
        // If we have errors
        if (errors) {
          // we first mark the group has having errors
          formGroup.classList.add("has-error");
          // then we append all the errors
          _.each(errors, function(error) {
            addError(messages, error);
          });
        } else {
          // otherwise we simply mark it as success
          formGroup.classList.add("has-success");
        }
      }

      // Recusively finds the closest parent that has the specified class
      function closestParent(child, className) {
        if (!child || child == document) {
          return null;
        }
        if (child.classList.contains(className)) {
          return child;
        } else {
          return closestParent(child.parentNode, className);
        }
      }

      function resetFormGroup(formGroup) {
        // Remove the success and error classes
        formGroup.classList.remove("has-error");
        formGroup.classList.remove("has-success");
        // and remove any old messages
        _.each(formGroup.querySelectorAll(".help-block.error"), function(el) {
          el.parentNode.removeChild(el);
        });
      }

      // Adds the specified error with the following markup
      // <p class="help-block error">[message]</p>
      function addError(messages, error) {
        var block = document.createElement("p");
        block.classList.add("help-block");
        block.classList.add("error");
        block.innerText = error;
        messages.appendChild(block);
      }

      function showSuccess() {
        // We made it \:D/
        alert("Success!");
      }
    })();
  </script>
@endsection