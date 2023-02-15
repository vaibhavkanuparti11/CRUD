function validateform(){  
    var name=document.myform.fname.value;  
    var mail=document.myform.email.value;  
    var password=document.myform.pwd.value;  
    var cpwd=document.myform.cpwd.value;  
      
    // if (name==null || name==""){  
    //   alert("Name can't be blank");  
    //   return false;  
    // }else 
    if(name.length<8){  
      alert("name must be at least 8 characters long.");  
      return false;  
      }  
      if(password==cpwd){  
        return true;  
        }  
        else{  
        alert("password must be same!");  
        return false;  
        }  
    }  