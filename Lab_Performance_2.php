<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration & Course Selection</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }

        .container {
            width: 60%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h2 {
            color: #333;
            border-left: 5px solid #007bff;
            padding-left: 10px;
        }

        input, button {
            width: 95%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 12px;
            border-radius: 6px;
            border: 1px solid #aaa;
        }

        button {
            width: 30%;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        #output {
            background: #e9ffe9;
            border: 1px solid #66bb6a;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
            display: none;
        }

        ul {
            list-style: none;
            padding-left: 0;
        }

        li {
            background: #f0f0f0;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .delBtn {
            background: red;
            color: white;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- ====================== STUDENT REGISTRATION ====================== -->
    <h2>Student Registration</h2>

    <input type="text" id="name" placeholder="Full Name">
    <input type="email" id="email" placeholder="Email">
    <input type="password" id="pass" placeholder="Password">
    <input type="password" id="cpass" placeholder="Confirm Password">
    <button onclick="registerStudent()">Register</button>

    <div id="output"></div>


    <!-- ====================== COURSE SELECTION ====================== -->
    <h2>Course Selection</h2>

    <input type="text" id="courseName" placeholder="Enter Course Name">
    <button onclick="addCourse()">Add Course</button>

    <ul id="courseList"></ul>

</div>

<script>
    // ---------------------- STUDENT REGISTRATION LOGIC ----------------------
    function registerStudent() {
        let name = document.getElementById("name").value.trim();
        let email = document.getElementById("email").value.trim();
        let pass = document.getElementById("pass").value;
        let cpass = document.getElementById("cpass").value;

        // Validations
        if (name === "" || email === "" || pass === "" || cpass === "") {
            alert("All fields are required!");
            return;
        }
        if (!email.includes("@")) {
            alert("Email must contain '@'");
            return;
        }
        if (pass !== cpass) {
            alert("Passwords do not match!");
            return;
        }

        // Successful — show output box
        let outputBox = document.getElementById("output");
        outputBox.style.display = "block";
        outputBox.innerHTML = `
            <h3>Registration Successful!</h3>
            <p><strong>Name:</strong> ${name}</p>
            <p><strong>Email:</strong> ${email}</p>
        `;
    }

    // ---------------------- COURSE LIST LOGIC ----------------------
    function addCourse() {
        let course = document.getElementById("courseName").value.trim();

        if (course === "") {
            alert("Please enter a course name.");
            return;
        }

        let ul = document.getElementById("courseList");

        // Create list item
        let li = document.createElement("li");
        li.textContent = course;

        // Delete button
        let delBtn = document.createElement("button");
        delBtn.textContent = "Delete";
        delBtn.className = "delBtn";
        delBtn.onclick = function () {
            ul.removeChild(li);
        };

        li.appendChild(delBtn);
        ul.appendChild(li);

        document.getElementById("courseName").value = "";
    }
</script>

</body>
</html>
