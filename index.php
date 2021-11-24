<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vaibhav CV Website</title>
</head>
<body>
   <div class="header">
    <nav>
        <img src="vabby.jpg" alt="logoimage" class="logoimage">

        <ul>
            <li><a href="">HOME</a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="">PORTFOLIO</a></li>
            <li><a href="">SERVICES</a></li>

        </ul>
        <img src="finalmenu.png" alt="" class="menu-icon">
    </nav>
        <div class="text-box">
            <h1>I'm <span class="auto-input"></span> </h1>
            <p>You can reach out to me if you need any help in making a <br>website for you or your business.</p>
            
            <a href="">Contact Me</a>
            <a href="vabresume.pdf" class="btn" target="_Vaibhav">Download CV</a>
        </div>

        <!-- <img src="vabfinalimage.png" class="user-img"> -->
   </div>


   <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
   <script>
       var typed = new Typed(".auto-input",{
            strings: ["Vaibhav Saxena", "Web-Devloper", "Android Developer", "UI Designer"],
            typeSpeed: 100,
            backSpeed: 100,
            loop : true
       })
   </script>
</body>
</html>