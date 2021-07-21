<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/suggest.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Project suggestion</title>
</head>

<body>

    <!-- 
  ****************************************
  Contest Entry for Treehouse:
  "Design a Contact Form"
  Submitted by Lisa Wagner
  ****************************************
-->
    
    <div id="contact-form">
        <div>
            <h1>Nice to Meet You!</h1>
            <h4>Have a question or just want to get in touch? Let's chat.</h4>
        </div>
        <p id="failure">Oopsie...message not sent.</p>
        <p id="success">Your message was sent successfully. Thank you!</p>

        <form method="post" action="/">
            <div>
                <label for="name">
                    <span class="required">Topic name: *</span>
                    <input type="text" id="name" name="name" value="" placeholder="Your Name" required="required" tabindex="1" autofocus="autofocus" />
                </label>
            </div>
            <div>
                <label for="message">
                    <span class="required">Description: *</span>
                    <textarea id="message" name="message" placeholder="Please write your message here." tabindex="5" required="required"></textarea>
                </label>
            </div>
            <div>
                <button name="submit" type="submit" id="submit">SEND</button>
            </div>
        </form>

    </div>
    <img id = "image" src="https://image.freepik.com/free-vector/character-illustration-people-with-creative-ideas-icons_53876-59888.jpg" alt="Ideas change lives">
</body>

</html>