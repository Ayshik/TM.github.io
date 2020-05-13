function validate(){
  
  var subject = document.getElementById("subject").value;
  var message = document.getElementById("message").value;
  
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  
  if(subject.length < 10){
    text = "Please Enter Correct Subject";
    error_message.innerHTML = text;
    return false;
  }
  
  if(message.length <= 140){
    text = "Please Enter More Than 140 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}