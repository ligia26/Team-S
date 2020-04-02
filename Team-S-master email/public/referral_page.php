.public {
    margin: auto;
    background-color:white;
    color:black; 
    font-family: "Trebuchet MS", Helvetica, sans-serif;
    position: relative;
    min-height: 100%;
   }
  
   
   .outerdiv {
    /* margin: auto; */
    /* top: 0px!important; */
    /* background-color:white; */
    color:black; 
    font-family: "Trebuchet MS", Helvetica, sans-serif;
    /* position: absolute!important; */
    /* min-height: 100%; */
   }
   #logo {
     display: block;
     /* margin-left: -20px; */
     /* margin-top: -650px;
     margin-right: auto; */
     width: 200px; 
    margin-bottom: 10px;
   }

  #doctor {
 
    margin-bottom: 55px;
    /* margin-top: 550px; */
    width: 100%;

  }

  #aboutus {
      color: midnightblue;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 30px;
  }
  #listofservice {
    color: midnightblue;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
  }
   #searchbar::after {
    content: "";
    clear: both;
    display: table;
  }

  .image-aboutus {
      padding-right: 85px ;
      padding-top: 20px;
  }

  #title-page {
    font-size: 30px;
    color : rgb(42,103,204);
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
   }

   #darkblue {
    background-color: rgb(9, 66, 112);
    color : white;
    border: 0.5px solid grey;
    font-family: 'Open Sans', sans-serif;
    text-align: center;
    font-size: 13px;
    font-weight: bold;
}

#lightblue {
    background-color: rgb(26, 201, 178);
    color : white;
    border: 0.5px solid grey;
    font-family: 'Open Sans', sans-serif;
    text-align: center;
    font-size: 13px;
    font-weight: bold;
}
     button {
       /*
     float: left;
    width: 20%;
    padding: 10px;
    background: #333;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
    height: 42px; 
*/
font-size: 13px;
font-weight: bold;
padding: 10px;
background-color : rgb(42,103,204);
color:white;
font-family: 'Open Sans', sans-serif;
text-align: center;
width: 50%;
height: 5%;
border-radius: 4px;
border: 0.5px solid grey;
border-left: none;
cursor: pointer;
float:left;

}
   

   
  /* #searchbutton{
    float: left;
    width: 10%;
    padding: 10px;
    background: #333;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
    height: 42px;
  } */
  
   #searchbutton:hover {
    background: black;
  }
   
  #searchinput {
    padding: 10px;
    font-size: 17px;
    border: 0.5px solid grey;
    float: left;
    width: 70%;
    background: #f1f1f1;
  }
   
    ul {
     display: flex;
     justify-content: space-around;
     list-style-type: none;
     margin: 0;
     padding: 0;
     overflow: hidden;
     background-color: rgb(222, 222, 222);
   }
   
   li {
     float: left;
     display: block;
   } 
   
   /* li a {
     display: block;
     color: white;
     font-weight: bold;
     text-align: center;
     margin-top: 350px;
     margin-left: -20px;
     margin-bottom: 25px;
     padding-top: 14px;
     padding-bottom: 14px;
     text-decoration: none;
     letter-spacing: 2px;
     white-space: nowrap;
     font-size: 24px;   
   }
    */


    li a {
        display: block;
        color: midnightblue;
        font-weight: bold;
        text-align: center;
        /* margin-top: 350px;
        margin-left: -20px;
        margin-bottom: 25px; */
        padding-top: 5px;
        padding-bottom: 5px;
        text-decoration: none;
        letter-spacing: 2px;
        white-space: nowrap;
        font-size: 16px;   
      }
  
    li a:hover {
     background-color: #D0D0D0;
   }
    
    ul li ul {
     visibility: hidden;
     opacity: 0;
     position: absolute;
     transition: all 0.5s ease;
     display: block;
     min-width: 16.7%;
   }
   
   ul li:hover > ul,
   ul li ul:hover {
     visibility: visible;
     opacity: 1;
     display: block;
   }
   
   ul li ul li {
     clear: both;
     width: 100%;
   }
   
   ul > li {
     flex: 1;
    }
    
    .nav-dropdown {
     visibility: hidden;
    }
   
    .footer {
     position: relative;
     display: flex;
     bottom: 0px;
     width: 100%;
     height: 2.5rem;
     margin-top: 0px;
     margin-bottom: 0px;
     margin-left: 5px;
     display: inline-block;
   }
   
    #footer-public {
     position: absolute;
     display: flex;
     bottom: 0px;
     width: 100%;
     height: 2.5rem;
     margin-top: 0px;
     margin-bottom: 0px;
     margin-left: 5px;
     display: inline-block;
     color: white;
   }
   
   
   body{
     margin: 0px;
     background-color: white;
     color: rgb(117, 117, 117); 
     font-family: "Trebuchet MS", Helvetica, sans-serif;
     position: relative;
     min-height: 100%;
     min-height: 100vh;
   }
   
   #main {
     margin-right: 50px;
     margin-left: 50px;
     margin-top: 20px;
     margin-bottom: 20px;
   }
   
   div{
     margin: 20px;
   }
   
  
   h1 {
     text-align: center;
     letter-spacing: 2px;
   }
   
  
   
   #profile a {
     color:#D0D0D0;
     border-style: solid;
     border-width: 2px;
     padding: 5px 10px;
     text-align: center; 
     text-decoration: none;
     display: inline-block;
     font-style: italic;
     font-size: 14px;
   }
   
   #profile p {
     line-height: 10px;
   }
   
  
   label, input {
       display: block;
   }
   
   label {
       margin-bottom: 10px;
   }
  
  
  
  
   
   .field-column input, .field-column select{
      margin: auto;
      padding: 5px;
      width: 300px;
   }
   
   .field-column{
      margin: auto;
      padding: 5px;
      width: 300px;
   }
   
  
   
   #center-title {
     text-align: center;
   }
   
  
   
   #new:hover, #new:active, #new-match:hover, #new-match:active{
     background-color: #000;
   }
   
  
  
  
   h1 {
     letter-spacing: 5px;
     padding-top: 20px;
     padding-bottom: 20px;
   }
  
  table{
    border-collapse: collapse;
    margin: 0;
  }
  table.center { margin-left:auto; margin-right:auto; }
   th, td {
     border-collapse: collapse;
     border: 1px solid black;
     text-align: center;
     padding: 9px;
     background-color: white;
   }
   
   th {
     background-color: rgb(92, 92, 92);
     color: white;
     width: 20%;
   }
  
   
   #gender {
     display: inline-block;
     float: left;
     width: auto;
     margin-left: 1em;
   }
   
   #genderOption {
     padding-left: 40px;
   }
