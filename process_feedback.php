<!DOCTYPE html>
<html>
<head>
  <title>Feedback</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome star Icon Library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
        body{
            margin: 0px;
            padding: 0px;
        }
        div{
            color: whitesmoke
        }
        .feedback{
            border-radius: 4px;
        }
        .header{
            background-color: #1725e8;
            width: 60%;
            height: 60%;
            padding: 20px;
            margin-left: 20%;
        }
        .rate{
            background-color:whitesmoke;
            color: black;
            width: 60%;
            height: 60%;
            padding: 20px;
            margin-left: 20%;
            
        }
        
        .unchecked{
          cursor: pointer;
          font-size: 40px;
          
        }
        .checked {
            color: orange;
        }
        
        .unlist li{
          display: inline-block;
          list-style: none;
          
        }
        .contact-form{
            background-color:whitesmoke;
            color: black;
            width: 60%;
            padding: 20px;
            margin-left: 20%;
            
        }
        .contact-form label{
          color:black;
        }
    </style>

</style>
</head>
<body>
  <div class="container-fluid">
    <div class="jumbotron">
        <div class="feedback">
            <div class="header"> 
                <h3 style="display: inline;"><span  class="glyphicon glyphicon-send" aria-hidden="true"></span></h3>
                <label style="float: right; font-size:x-large;">Help us to improve your experience with us.</label>
                <br>
                <br>
                <h4>Hello user.</h4> 
                <h4>Please rate your feedback below.</h4>    
            </div>
            <div class="rate text-center row">
                <h4>How do you rate your overall experience?</h4> 

              <!-- here click-nth(this) functions meh this refer to [object HtmlSpanElement]-->
                <span id="1" onmouseover= "onmouseOver1()" onclick="click1(this)"  class="fa fa-star unchecked checked">&nbsp;</span>
                <span id="2" onmouseover="onmouseOver2()" onclick="click2(this)"  class="fa fa-star unchecked">&nbsp;</span>
                <span id="3" onmouseover="onmouseOver3()" onclick="click3(this)"  class="fa fa-star unchecked">&nbsp;</span>
                <span id="4" onmouseover="onmouseOver4()" onclick="click4(this)"  class="fa fa-star unchecked">&nbsp;</span>
                <span id="5" onmouseover="onmouseOver5()" onclick="click5(this)"  class="fa fa-star unchecked">&nbsp;</span>
                
                <ul class="unlist">
                  <li id="">1-Terrible</li>
                  <li id="">3-Good</li>
                  <li id="" style="margin-right: 50px;">5-Excellent</li>
                </ul>   
                <h6>Please click on the above star to rate us.</h6> 
                <h3 style="text-align: left;" class="page-header">Enter your details</h3>
            </div>
            
            <div class="contact-form">
          <form action="show.html">
              <!--Row 1 inside form with Fullname and Email-->
              <div class="row">

                  <div class="col-sm-6"> 
                    <div class="form-group">
                      <label for="name">Full Name*</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name">
                      <label style="color:red;" id="error"></label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="email">Email*</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email @domainname.com" name="email">
                      <label style="color:red;" id="error1"></label>
                    </div>
                  </div>
  
              </div> <!--Row 1 ends-->

              <!--Row 2-->
              <div class="row">
                <div class="col-sm-6"> 
                  <div class="form-group">
                    <label for="age">Age*</label>
                    <input type="number" min="0" max="150" class="form-control" id="age" placeholder="Enter age" name="age">
                    <label style="color:red;" id="error2"></label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="number">Contact Number*</label>
                    <input type="number" min="0" class="form-control" id="number" placeholder="Enter contact number (+91-)"  name="number">
                    <label style="color:red;" id="error3"></label>
                  </div>
                </div>

            </div> <!--Row 2 ends-->
            <!--Row 3 starts-->
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="msg">Message</label>
                  <textarea class="form-control" rows="5" id="msg" placeholder="Enter your message here(Optional)"></textarea>
                </div>
              </div>
            </div>
            <!--Row 4-->
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <button type="button" class="btn btn-block" style="background-color:#e81717;" onclick="return validate();">Submit</button>
                  
                </div>
              </div>
            </div>
          </form> 
            </div>
        </div>


    </div>
         
</div>
 plugin code
<span  onmouseover="starmark(this)" onclick="starmark(this)" id="1one" style="font-size:40px;cursor:pointer;"  class="fa fa-star checked"></span>
<span onmouseover="starmark(this)" onclick="starmark(this)" id="2one"  style="font-size:40px;cursor:pointer;" class="fa fa-star "></span>
<span onmouseover="starmark(this)" onclick="starmark(this)" id="3one"  style="font-size:40px;cursor:pointer;" class="fa fa-star "></span>
<span onmouseover="starmark(this)" onclick="starmark(this)" id="4one"  style="font-size:40px;cursor:pointer;" class="fa fa-star"></span>
<span onmouseover="starmark(this)" onclick="starmark(this)" id="5one"  style="font-size:40px;cursor:pointer;" class="fa fa-star"></span>
<br/>
<textarea  style="margin-top:5px;" class="form-control" rows="3" id="comment" placeholder="Enter your review"></textarea>

<button  onclick="result()" type="button" style="margin-top:10px;margin-left:5px;" class="btn btn-lg btn-success">Submit</button>
</body>

<script>
var count;

function starmark(item)
{
count=item.id[0];
sessionStorage.starRating = count;
var subid= item.id.substring(1);
for(var i=0;i<5;i++)
{
if(i<count)
{
document.getElementById((i+1)+subid).style.color="orange";
}
else
{
document.getElementById((i+1)+subid).style.color="black";
}


}

}

function result()
{
//Rating : Count
//Review : Comment(id)
alert("Rating : "+count+"\nReview : "+document.getElementById("comment").value);
}


<!-- my code-->
<script>
window.onload = function()
{
  var defaultRating = "1";
  if(localStorage.getItem('rating') == null)
    localStorage.setItem('rating', JSON.stringify(defaultRating));
  else{
    localStorage.setItem('rating', JSON.stringify(defaultRating)); // set rating to 1 on fresh page load
  }

  var feedbackmsg = "No additional feedback message given";
  if(localStorage.getItem('message') == null || document.getElementById("msg") == "")
    localStorage.setItem('message', feedbackmsg);
  else{
        //var message = document.getElementById("num");
        localStorage.setItem('message', feedbackmsg);
   }
}
// adding validations to input forms
function validate()
{
        // validate input form
        var fullname = document.getElementById('name').value;
        var emailID = document.getElementById('email').value;
        var age = document.getElementById('age').value;
        //console.log(typeof(age)); // string
        var num = document.getElementById('number').value;
        var atpos = emailID.indexOf("@");
        var lastdotpos = emailID.lastIndexOf("."); // search for the last dot(.) in the email address
        
        // store optional msg content into db to be shown on next page
        var feedbackMessage = document.getElementById('msg').value;
        if(feedbackMessage != "")
          localStorage.setItem('message', feedbackMessage);

        if(fullname.trim()=="" || fullname == null)
        {
          document.getElementById('error').innerHTML="*Please enter name";
          document.getElementById('name').style.border = "2px solid red";
          return false;
        }
        else(fullname.trim() !="")
        {
          document.getElementById('name').style.display = 'inline';
          document.getElementById('name').style.border = '1px solid black';
          document.getElementById('error').style.display="none";
          
        }

        if(emailID.trim()=="" || emailID == null || lastdotpos - atpos <2) // <2 as @ and (.) can't be together in a valid email address 
        {
          document.getElementById('error1').innerHTML="*Please enter valid email address";
          document.getElementById('email').style.border = "2px solid red";
          return false;
        }
        else(emailID.trim() !="")
        {
          document.getElementById('email').style.display = 'inline';
          document.getElementById('email').style.border = '1px solid black';
          document.getElementById('error1').style.display="none";
          
        }
        if(age.trim()=="" || age == null || age.length >= 4 || (Number)(age)>150)
        {
          document.getElementById('error2').innerHTML="*Please enter valid age";
          document.getElementById('age').style.border = "2px solid red";
          return false;
        }
        else(age.trim() !="")
        {
          document.getElementById('age').style.display = 'inline';
          document.getElementById('age').style.border = '1px solid black';
          document.getElementById('error2').style.display="none";
          
        }
        if(num.trim()=="" || num == null || num.length != 10)
        {
          document.getElementById('error3').innerHTML="*Please enter valid contact number. It should be equal to 10 digit number";
          document.getElementById('number').style.border = "2px solid red";
          return false;
        }
        else(age.trim() !="")
        {
          document.getElementById('number').style.display = 'inline';
          document.getElementById('number').style.border = '1px solid black';
          document.getElementById('error3').style.display="none";
          
        }
        
        window.location.href='show.html?name=' +fullname; // when valid input is provided by the user
}
function onmouseOver1(index)
{
  document.getElementById("2").style.color = "black";
  document.getElementById("3").style.color = "black";
  document.getElementById("4").style.color = "black";
  document.getElementById("5").style.color = "black";
  //alert(index);
}
function onmouseOver2(index)
{
  document.getElementById("2").style.color = "orange";
  document.getElementById("3").style.color = "black";
  document.getElementById("4").style.color = "black";
  document.getElementById("5").style.color = "black";
  //alert(index);
}
function onmouseOver3(index)
{
  document.getElementById("2").style.color = "orange";
  document.getElementById("3").style.color = "orange";
  document.getElementById("4").style.color = "black";
  document.getElementById("5").style.color = "black";
 // alert(index);
}
function onmouseOver4(index)
{
  document.getElementById("2").style.color = "orange";
  document.getElementById("3").style.color = "orange";
  document.getElementById("4").style.color = "orange";
  document.getElementById("5").style.color = "black";
  //alert(index);
}
function onmouseOver5(index)
{
  document.getElementById("2").style.color = "orange";
  document.getElementById("3").style.color = "orange";
  document.getElementById("4").style.color = "orange";
  document.getElementById("5").style.color = "orange";
  //alert(index);
}

// SET RATING ACCORDING TO STARS GIVEN BY THE USER
var rating = 0;
//console.log(rating);
function click1(e)
{
  rating = e.id; // e.id=1
  //console.log(e.id) //prints 1
  //alert(e.id);
  window.localStorage.setItem('rating', JSON.stringify(rating));
  //console.log(rating);
  //alert("Rating: " + rating);
  //return rating;
}
function click2(e)
{
  rating = e.id;
  window.localStorage.setItem('rating', JSON.stringify(rating));
  //(e.id).value =2;
  //alert("Rating: " + rating);
  //console.log(rating)
  //alert("You have clicked button id = "+e.id+" and button value = "+document.getElementById(e.id).value);
 
  //return rating;
}
function click3(e)
{
  rating = e.id;
  window.localStorage.setItem('rating', JSON.stringify(rating));
  //alert("Rating: " + rating);
  //return rating;
}
function click4(e)
{
  rating = e.id;
  window.localStorage.setItem('rating', JSON.stringify(rating));
  //alert("Rating: " + rating);
  //return rating;
}
function click5(e)
{
  rating = e.id;
  window.localStorage.setItem('rating', JSON.stringify(rating));
 // alert("Rating: " + rating);
 //return rating;
}
/*
Que: Differnce between submiting from onclick event vs form action attribut?
function submit()
{
  //alert(rating);
  //return false;
  //console.log(rating);
}*/
</script>
</html>