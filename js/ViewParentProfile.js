
function unlock(){
    document.getElementById("firstName").removeAttribute('readonly');
    document.getElementById("lastName").removeAttribute('readonly');
    //document.getElementById("email").removeAttribute('readonly');
    document.getElementById("password").removeAttribute('readonly');
    var ps = document.getElementById("password");
    ps.setAttribute("type","text");
    
    

    document.getElementById("city").removeAttribute('readonly');
    document.getElementById("Neighborhood").removeAttribute('readonly');
    document.getElementById("street").removeAttribute('readonly');

    document.getElementById("submit_button").style.display="block";

}

function checkDelete(){
    let text = "Press a button!\nEither OK or Cancel.";
  if (confirm(text) == true) {
    text = "true";
  } else {
    text = "false";
  }
  document.getElementById("confirmDelete").value = text;

}

    


