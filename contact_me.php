<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Deepak</title>
    <?php include "./includes/header.php" ?>
    <style>
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
        }

        p {
            font-size: 18px;
        }

        ul {
            list-style-type: none;
        }

        a {
            color: #0077b6;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            margin-top: 20px;
        }

        label,
        input,
        textarea {
            display: block;
            margin-bottom: 10px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #0077b6;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #00557e;
        }
    </style>
    <style>
        h1 {
            text-align: center;
            color: #0058a2;
            font-size: 2.3rem;
            margin: 20px auto 0;
        }

        .container {
            width: 80%;
            margin: 2rem auto 3rem;
            padding: 20px;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 12px;
        }

        .container h2 {
            color: rgba(0, 0, 0, .7);
            font-size: 1.6rem;
            margin: 8px 4px;
        }

        .container p {
            padding: 8px 16px;
            border-radius: 8px;
            background-color: #475569;
            color: white;
            width: 90%;
            margin: auto;
        }

        p {
            font-size: 1.08rem;
            line-height: 1.6;
        }

        .team-section {
            margin-top: 20px;
        }

        .team-member {
            text-align: center;
            margin: 20px;
            display: inline-block;
            width: 30%;
        }

        .team-member img {
            width: 100%;
            border-radius: 50%;
        }

        .team-member h3 {
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .team-member p {
            font-size: 1rem;
            color: #777;
        }
        .container ul{
            display: flex;
            width:90%;
            flex-wrap: wrap;
            gap: 10px;
            margin: 1rem auto;
            justify-content: space-around;
            align-items: center;
            border-radius: 8px;
            background-color: #475569;
        }
        .container i {
            font-size: 2rem;
            padding: 10px 20px;

        }
        .container a{
            text-decoration: none;
            color: rgba(0, 0, 0, .7);
            color: white;
        }
        .fa-linkedin{
            color:dodgerblue;
        }
        .fa-envelope{
            color: tomato;
        }
        .fa-user-tie{
            color: #0ea5e9;
        }
        .fa-github{
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <h1>Contact Deepak</h1>
        
    </header>

    <div class="container">
        <h2>Get in Touch</h2>
        <p>
            Feel free to reach out to me if you have any questions, suggestions, or want to discuss something. I'm here to help and collaborate.
        </p>

        <h2>Contact Me On</h2>
        <ul>
            <li><strong>
           </strong> <a href="mailto:deepakyad18@gmail.com"> <i class="fa-solid fa-envelope"></i></a></li>
            <li> <a href="https://deepakthecoder1982.github.io" target="_blank"><strong><i class="fa-solid fa-user-tie"></i></strong></a></li>
            <li><strong></strong> <a href="https://github.com/deepakthecoder1982" target="_blank"><i class="fa-brands fa-github"></i></a></li>
            <li><strong></strong> <a href="https://www.linkedin.com/in/deepak-archana-mahesh-yadav/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
        </ul>

        <h2>Contact Form</h2>
        <p>
            Alternatively, you can use the contact form below to send me a message or inquiry. I'll respond to you as soon as possible.
        </p>

        <form action="process_contact.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <?php include "./includes/footer.php" ?>
</body>

</html>