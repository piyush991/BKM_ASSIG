

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<style>
.input-group-addon {
   color: #fff;
   background-color: #337ab7;
}


.form-control, .input-group-addon {
   border-radius: 0px;
}
label{
  text-align: left !important;
}
</style>
<body>

<div class="container">
      <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-5 col-md-offset-4 col-sm-7 col-sm-offset-3">  
        <h2>Registration</h2>                  
            <div class="panel panel-primary" >
                    <div class="panel-heading">
                        <div class="panel-title text-center"></div>
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <div class="col-sm-12">
                        <input type="radio" name="user_idetify" id="personal"   onClick="$('#signupbox').hide(); $('#loginbox').show()" checked>Personal
                      
                        <input type="radio" name="user_idetify" id="commercial"   onClick="$('#loginbox').hide(); $('#signupbox').show()">Commercial
                        <hr>
                        </div>
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="{{URL::to('/user')}}" enctype="multipart/form-data" >{{csrf_field()}}
                                    
                            <div class="form-group">
                                    <label for="phone1" class="col-md-4 control-label">Phone Number</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="phone1" id="phone1" placeholder="Phone Number" required>
                                    </div>
                             </div>
                              <div class="form-group">
                                    <label for="Address1" class="col-md-4 control-label">Address</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="Address1" id="Address1" placeholder="Address" required>
                                    </div>
                             </div>
                              <div class="form-group">
                                    <label for="City1" class="col-md-4 control-label">City</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="City1" id="City1" placeholder="City" required>
                                    </div>
                             </div>
                              <div class="form-group">
                                    <label for="state1" class="col-md-4 control-label">State</label>
                                    <div class="col-md-8">
                                        <select class="form-control input-sm" name="state1" id="state1" required>
                                        <option value="">--Select State--</option>   
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                        </select>
                                    </div>
                                </div>
                                   <div class="form-group">
                                    <label for="pin1" class="col-md-4 control-label">Pincode</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="pin1" id="pin1" placeholder="Pincode" required>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </div>
                             </div>
                                  <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-4 col-md-8">
                                       <input id="p1" type="submit" name="p1" id="p1" />
                                        <!--<span style="margin-left:8px;">or</span>  -->
                                    </div>
                                </div>

                                
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-5 col-md-offset-4 col-sm-7 col-sm-offset-3">
            <h2>Registration</h2>       
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            
                            
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" method="POST" role="form" action="{{URL::to('/com_user')}}" enctype="multipart/form-data">{{csrf_field()}}
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                 <div class="col-sm-12">
                        <input type="radio" name="user_idetify1" id="personal1"   onClick="$('#signupbox').hide(); $('#loginbox').show()">Personal
                      
                        <input type="radio" name="user_idetify1" id="commercial1"   onClick="$('#loginbox').hide(); $('#signupbox').show()" checked>Commercial
                        <hr>
                        </div>
                                  
                                <div class="form-group">
                                    <label for="phone" class="col-md-4 control-label">Customer Number</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="Address" class="col-md-4 control-label">Address</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-sm" name="Address" id="Address" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="City" class="col-md-4 control-label">City</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-sm" name="City" id="City"placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="state1" class="col-md-4 control-label">State</label>
                                    <div class="col-md-8">
                                        <select class="form-control input-sm" name="state" id="state" required>
                                        <option value="">--Select State--</option>   
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>

                                        </select>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="pincode" class="col-md-4 control-label">Pincode</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-sm" name="pincode" id="pincode" placeholder="" required>
                                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-4 col-md-8">
                                       <input id="c1" type="submit" name="c1" />
                                        <!--<span style="margin-left:8px;">or</span>  -->
                                    </div>
                                </div>
                            </form>
                         </div>
                    </div>

         
         </div> 





    </div>
    <?php
    $response = DB::Select("select * from user_register");

    ?>
   <div class="col-sm-12">
       <table class="table table-bordered">
           <thead>
            <tr>
               <th>PhoneNumber</th>
               <th>Address</th>
               <th>City</th>
               <th>State</th>
               <th>Pincode</th>
               <th>Lead From</th>
               </tr>
           </thead>
           <tbody>
           @foreach($response as $key)
                 <?php

                    $Phone = $key->phone;
                    $Address = $key->address;
                    $City = $key->city;
                    $State = $key->state;
                    $Pincode = $key->pincode;
                    $lead = $key->user_identity;
                    if($lead == 0)
                    {
                        $l1 = 'Personal';
                    }
                    elseif ($lead == 1)
                    {
                        $l1 = 'Commercial';
                    }
                   ?>
                
               <tr>
                   <td>{{$Phone}}</td>
                   <td>{{$Address}}</td>
                   <td>{{$City}}</td>
                   <td>{{$State}}</td>
                   <td>{{$Pincode}}</td>
                   <td>{{$l1}}</td>
               </tr>
  @endforeach
          
           </tbody>
       </table>
   </div>
</div>
</body> 
</html>
