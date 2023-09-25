<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link href="Style4.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <form action="wakreg.php" method="post" id="form1" enctype="multipart/form-data">
        
    <div class="text1"><div class="wakimg"><img src="police.jpg" alt=""/></div> <h1>Register</h1>
        
            </div>
           
                 <div class="txt_field">
            <input type="text" id="firstname"  placeholder="first name" name ="Firstname" validaterequestmode="Enabled">
                
                     <label id="Label1" class="t"  text="firstname" />
                    </div>
    
                 <div class="txt_field">
            <input type="text" id="lastname" placeholder="Last name" name="Lastname">
                     <span></span>
                   <label id="Label2" class="t"  text="Last name" />
                    </div>
    
                      <div class="txt_field">
            <input type="text" id="username" placeholder="Username here" name="Username" aria-label="username" >
                          
                          <span></span>
                <label id="Label3" class="t"  text="Username" /></div>
      
                       <div class="txt_field">
            <input type="text" id="email" placeholder="example@gmail.com" name="Email" textmode="Email" aria-label="email">
                           
                           <span></span>
                           <label id="Label4" class="t" text="E-Mail" /></div>
    
                       <div class="txt_field">
            <input type="text" id="password" placeholder="Atleast 6 figures" name="Passwordw" maxlength="8" textmode="Password" aria-label="pass">
                            
                           <span></span>
                             <label id="Label5" class="t"  text="Password"/></div>
    
                    <div class="txt_field">
            <input type="text" id="phonenumber" placeholder="07--------"  maxlength="10" name="Phonenumber" textmode="Phone" aria-label="phone">
                        <span></span>
                         <label id="Label6" class="t"  text="Phone number" /></div>
                  
        <div class="container1">
              
                <div id="text1">
                        
       <div id="text3">
            <checkbox id="checkbox1"  text=" " /> By signing up , you acknowledge that you agree to our <a href="#">terms and conditions</a></div>
            
            <input type="submit" id="btn2" name="submit" value="Submit">
        

            
            <label id="lblerrormessage"></label>
            <label id="lblmessage1" ></label>
            <label id="lblmessage" ></label>
            
            <br />
            <div id="text2">
             <p><a href="lll.php"> Login instead</a></p></div>
       
        </div>
           </form>
            </div><br /> 
</body>
</html>