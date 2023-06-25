<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Code Alpha</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
       <!-- <link  href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" rel="stylesheet">-->

    <style>
	#about {
  background-color: #FBBEDE;
}

	section {
  padding: 40px;
  text-align: center;
}
    .search input[type=text]{
        width:300px;
        height:25px;
        border-radius:25px;
        border: none;
    }
         
    .search{
        float:right;
        margin:7px;
    }
         
    .search button{
        background-color: #0074D9;
        color: #f2f2f2;
        float: right;
        padding: 5px 10px;
        margin-right: 16px;
        font-size: 12px;
        border: none;
        cursor: pointer;
    }
    .topleft{
        position:absolute;
        top:8px;
        left:16px;
        width:5px;
        height:5px;
        align:left;
    }
    *{
    margin:0;
    pading:0;
    font-family: 'Poppins', sans-serif;
}
.header{
    min-height:100vh;
    width:100%;
    background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(bgi.png);
    background-position: center;
    background-size: cover;
    position: relative;

}
nav{
    display:flex;
    padding:2% 6%;
    justify-content: space-between;
    align-items: center;
}
nav img{
    border-radius: 25px;
    width:350px;

}
nav links{
    flex:1;
    text-align:right;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a{
     color:#fff;
     text-decoration: none;
     font-size: 13px;
}
.nav-links ul li::after{
    content:'';
    width:0%;
    height:2px;
    background:#f44336;
    display:block;
    margin:auto;
    transition:0.5s;
}
.nav-links ul li:hover::after{
    width:100%;
}
.text-box{
    width:90%;
    color:#fff;
    position:absolute;
    top:50% ;
    left:50%;
    transform: translate(-50%,-50%);
    text-align:center;

}
.text-box h1{
    font-size:62px ;
}
.text-box p{
    margin:10px 0 40px;
    font-size:14px;
    color:#fff;
}
nav.fa{
    display:none;
}
/*@media(max-width:700px){
    .text-box h1{
        font-size:20px;
    }
    .nav-links ul li{
        display:block;
    }
    .nav-links{
        position:absolute;
        background:#f44336;
        height:100vh;
        width:200px;
        top:0;
        right:0;
        text-align:left;
        z-index:2;
    }
    nav.fa{
        display:block;
        color:#fff;
        margin:10px;
        font-size:22px;
        cursor:pointer;
    }
    
}*/
    </style>
</head>
<body>
    <section class="header">
        <nav>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p><a href="main.php"><img src="logo1.png"></a>
        
        <div class="nav-links">
      <!--  <i class="fa fa-times"></i>-->
        <ul>
        <li><a href="hospitals.php">Branches</a></li>
        <li><a href=""></a></li>
        <li><a href="#about">About</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="index.php">Sign in</a></li>
        </ul>
        </div>
        <div class="search">
            <form method="POST">
                <input type="text"
                    placeholder=" Search "
                    name="search">
                <button name="sea">
                    <i class="fa fa-search"
                        style="font-size: 18px;">
                    </i>
                </button>
            </form>
        </div>
        <!--<i class="fa fa-bars"></i>-->
        </nav>
    <div class="text-box">
        <h1>Code Alpha IT Solution </h1>
        <p>Code Alpha brings an integrated, multi-function platform <br>and<br> powerful solution specifically designed to meet your needs</p>
    </div>
    
    
    </section>
	<section id="about">
    <h2>About Me</h2>
    <p>
	Welcome to [Your Organization/Brand Name]!

At Code alpha, we are passionate about [describe your purpose or mission]. Our dedicated team is committed to [describe the problem you aim to solve or the value you provide]. Through [your unique approach or methodology], we strive to make a positive impact and [state your vision for the future].

Our core values of [list your core values] guide everything we do. We believe in [philosophy or principle 1], [philosophy or principle 2], and [philosophy or principle 3]. These values set us apart and inspire us to deliver exceptional [products/services].

We offer [briefly describe your main products/services]. With a focus on [highlight key features or benefits], we aim to [describe the value or transformation your offerings provide]. Our track record of success and [number of years/experience] of industry expertise ensure that you receive top-quality [products/services].

At [Your Organization/Brand Name], we have been recognized for our achievements in [mention notable achievements, awards, or milestones]. We take pride in our team of [mention number] dedicated professionals who bring a wealth of experience and a shared passion for [your industry or field]. Together, we work tirelessly to deliver outstanding results.

But don't just take our word for it. Here's what some of our satisfied customers have to say:

"[Customer/Testimonial 1]"
"[Customer/Testimonial 2]"
"[Customer/Testimonial 3]"

Beyond our commitment to our customers, we believe in giving back to the community. We actively engage in [mention social responsibility, sustainability, or community initiatives]. We strive to create a positive impact beyond our business operations.

Ready to experience the [Your Organization/Brand Name] difference? [Call to Action: Explore our range of products/services, contact us for more information, or sign up for updates]. We look forward to partnering with you on your [specific need or goal].

For inquiries or further information, please reach out to us at:







</p>
  </section>
  <section id="contact">
    <h2>Contact Me</h2>
    <form>
      <input type="text" name="name" placeholder="Your Name">
      <input type="email" name="email" placeholder="Your Email">
      <textarea name="message" placeholder="Your Message"></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

</body>
</html>