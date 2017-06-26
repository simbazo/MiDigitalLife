@extends('web.layout._master')

@section('content')

<div id="container">
          
  <div id="content" class="">  

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
            
      <fieldset>

         <p>If you would like to speak with us about how we can work with you to create an app you and your clients' love, please fill out the form below and we will get back to you.</p>

         <div id="form_align">

            <div class="form-group">
              <label class="col-md-4 control-label">Name & Surname <sup>*</sup></label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="name_surname" placeholder="Name & Surname" class="form-control"  type="text" required>
              </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" >Company Name</label> 
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
              <input name="company_name" placeholder="Company Name" class="form-control"  type="text">
              </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">E-Mail Address <sup>*</sup></label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" required>
              </div>
              </div>
            </div>
                     
            <div class="form-group">
              <label class="col-md-4 control-label">Telephone No.</label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input name="phone" placeholder="`Contact Number" class="form-control" type="text">
              </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Message <sup>*</sup></label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <textarea class="form-control" name="comment" placeholder="Please send us a message in connection with your query." required="required"></textarea>
              </div>
              </div>
            </div>

            <button>Submit</button>
          </div>
      </fieldset>
    </form>
  </div>
</div>

@endsection
