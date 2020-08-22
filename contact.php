<head>
    <meta charset="UTF-8">
    <title>Nathan Rankin | Contact</title>
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<?php include_once('header.php'); ?>
<body>
    <h1 class="header">Contact</h1>
    <div class="line"></div>
    <div class="contact">
        <div class="column">
            <div class="column-head">Send a message:</div>
            <div class="subline"></div>
            <form class="contact-form" action="contactform.php" method="post">
                <span>Name:</span>
                <input type="text" name="name" placeholder="Your name" required>
                <span>Email:</span>
                <input type="text" name="mail" placeholder="example@domain.com" required>
                <span>Subject:</span>
                <input type="text" name="subject" placeholder="Subject">
                <span class="spacer"></span>
                <span>Message:</span>
                <textarea name="message" placeholder="Your message here..."></textarea>
                <br>
                <div class="g-recaptcha" data-sitekey="6LcyNrUZAAAAAKUiMPfiyw5037o245IZXhK9g8vc"></div>
                <button type="submit" name="submit">Send</button>
            </form>
        </div>
        <div class="column">
            <div class="column-head">Connect:</div>
            <div class="subline"></div>
            <div class="connection">
                <a href="https://www.facebook.com/nathan.rankin.908"><img src="img/facebook.png"></a>
                <a href="https://www.facebook.com/nathan.rankin.908">facebook.com/nathan.rankin.908</a>
            </div>
            <div class="connection">
                <a href="https://www.instagram.com/rankin_n/"><img src="img/instagram.png"></a>
                <a href="https://www.instagram.com/rankin_n/">instagram.com/rankin_n</a>
            </div>
            <div class="connection">
                <a href="https://www.linkedin.com/in/nathanrankin/"><img src="img/linkedin.png"></a>
                <a href="https://www.linkedin.com/in/nathanrankin/">linkedin.com/in/nathanrankin</a>
            </div>
            <div class="connection">
                <a href="https://github.com/nrankin18"><img src="img/github.png"></a>
                <a href="https://github.com/nrankin18">github.com/nrankin18</a>
            </div>
        </div>
    </div>
</body>
<?php include_once('footer.php'); ?>

<script src="js/contact.js"></script>