<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jobeda Hossain">
    <meta name="description" content="Personal portfolio webpage of Jobeda Hossain">
    <meta name="keywords" content="Portfolio, Jobeda, AIUB, CSE">
    <title>Portfolio - Jobeda Hossain</title>
    <style>
        body {
            background-color: lavender;
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            background-color: #d6c7f7;
            padding: 15px;
            border-radius: 8px;
        }

        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }

        table {
            width: 50%;
        }
    </style>
</head>

<body>

    <header>
        <h1>Jobeda Hossain</h1>
        <nav>
            <a href="#bio">About Me</a>
            <a href="#education">Education</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <main>
        <section id="bio">
            <h2>About Me</h2>
            <p>
                Hi! I'm Jobeda. I'm currently pursuing my Bachelor Degree in Computer Science 
                and Engineering from AIUB.
            </p>
        </section>

        <section id="education">
            <h2>Educational Qualifications</h2>
            <table>
                <tr>
                    <th>Education</th>
                    <th>GPA/CGPA</th>
                </tr>
                <tr>
                    <td>HSC</td>
                    <td>5.00</td>
                </tr>
                <tr>
                    <td>BSc in CSE</td>
                    <td>4.00</td>
                </tr>
            </table>
        </section>

        <section id="contact">
            <h2>Contact Me</h2>
            <form>
                <label>Name:</label><br>
                <input type="text" required><br><br>

                <label>Email:</label><br>
                <input type="email" required><br><br>

                <label>Message:</label><br>
                <textarea rows="4" required></textarea><br><br>

                <button type="submit">Send</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2025 Jobeda Hossain</p>
    </footer>

</body>
</html>
