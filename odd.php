<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8>
        <title>Registration Form</title>
        <style>
            body{
                padding:30px;
                background: lightgray;
                
                
                
            }
            .container{

                width: 60%;
                margin: auto;
                padding: 20px;
                background-color: white;
                box-shadow: 0 0 17px 0px gray;
                border-radius: 8px;
                margin-bottom: 40px;

            }

            h1{
                text-align: center;
            }

            input{
                width: 95%;
                padding: 5px;
                margin: 5px;
                /* box-shadow: 0 0 15px 0px gray; */
            }

            label{
                padding: 5px;

            }

            button{
                padding-left: 20px;
                padding-right: 20px;
                padding-top: 5px;
                padding-bottom: 5px;
                border: none;
                background-color: royalblue;
                color: white;
                margin: 5px;
                border-radius: 3px;
                
            }
            button:hover{
                border: none;
                background-color: blue;
            }

            #output{
                background-color: #e9ffe9;
                border-radius: 8px;
                border: 3px solid lightgreen;
                padding: 10px;
                margin: 5px;
                display: none;
            }
            ul{
                list-style: none;
                padding-left: 0;
                
            }
            li{
                border: 2px solid gray;
                padding: 5px;
                border-radius: 5px;
                display: flex;
                justify-content: space-between ;
                align-items: center; 
                margin-bottom: 5px;
            }
            .dltBtn{
                color: white;
                background-color: red;
                margin-left: 50px;
                

            }
            .dltBtn:hover{

                background-color: darkred;

            }

        </style>
    </head>
    <body>

    <div class="container">
   
         <!--------------------registration form------------------------>
        <h1>Student Registration</h1>

        <label for="name"> Full Name </label><br>
        <input type="text" id="name"><br>

        <label for="email"> Email </label><br>
        <input type="email" id="email"><br>

        <label for ="pass"> Password </label><br>
        <input type="password" id="pass"><br>

        <label for ="cpass"> Confirm Password </label><br>
        <input type="password" id="cpass"><br>

        <button onclick="registration()"> Register </button><br>

        <div id="output"></div><br>

    </div>

    <div class="container">

        
        <!--------------------Course form------------------------>

        <label for="course"> Course Name </label><br>
        <input type="text" id="course">

        <button onclick="add()"> Add Course </button>

        <ul id="courseList"></ul>


    </div>
        
        <script>

            function registration(){
                let name = document.getElementById("name").value.trim();
                let email = document.getElementById("email").value.trim();
                let pass = document.getElementById("pass").value;
                let cpass= document.getElementById("cpass").value;

                if(name === "" || email === "" || pass === "" || cpass === ""){
                    alert("Must be filled up!");
                    return;
                }
                if(!email.includes('@')){
                    alert("Invalid email address!");
                    return;
                }
                if(pass !== cpass){
                    alert("Confirm password has to match with password!");
                    return;
                }

                let outputBox = document.getElementById("output");
                outputBox.style.display="block";
                outputBox.innerHTML=`
                <h2>Registration Succecssful</h2>
                <p> <strong>Name: </strong>${name}</p>
                <p> <strong >Email: </strong>${email}</p>
                `;
                
            }

            function add(){
                let course = document.getElementById("course").value.trim();

                if(course === ""){
                    alert("Add a course");
                    return;
                }
                let ul = document.getElementById("courseList");

                let li = document.createElement("li");
                li.textContent = course;

                let dltBtn = document.createElement("button");
                dltBtn.textContent = "Delete";
                dltBtn.className = "dltBtn";

                dltBtn.onclick = function(){
                    ul.removeChild(li);
                };

                li.appendChild(dltBtn);
                ul.appendChild(li);

                document.getElementById("course").value="";




            }

        </script>

        
    </body>
</html>