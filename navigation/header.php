<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="application-name" content="Jerke Taeymans">
    <meta name="description" content="CV van Jerke Taeymans">
    <meta name="keywords" content="Jerke, Taeymans, CV, Curiculum, Vitea">
    <meta name="author" content="Jerke Taeymans">
    
    <title>Jerke Taeymans</title>
    <!-- css van Font Awesome laden -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- css laden -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/listStyle.css">
    <link rel="stylesheet" type="text/css" href="css/footerStyle.css">
    <link rel="stylesheet" type="text/css" href="css/formStyle.css">

    
    <!-- script laden -->
    <link type="text/javascript" href="script.js">
</head>
<body>
    <script type="text/javascript">
       window.onload = function GetCurrentPage(){
        document.getElementById("index").className = "inactivePage";
        document.getElementById("cv").className = "inactivePage";
        document.getElementById("contact").className = "inactivePage";
        document.getElementById("about").className = "inactivePage";
        var path = location.pathname;
        var res = path.substring(3, 1);
        switch(res) {
            case "in":
                document.getElementById("index").className = "activePage";
                break;
            case "cv":
                document.getElementById("cv").className = "activePage";
                break;
            case "co":
                document.getElementById("contact").className = "activePage";
                break;
            case "ab":
                document.getElementById("about").className = "activePage";
                break;
            } 
       }
    </script>
	<header>
	    <h1>Jerke Taeymans</h1>
	    <hr>
        <div class="foto">
            <img src="img/Jerke.png" alt="Jerke Taeymans" align="middle" id="foto">
        </div>
        <nav>
            <ul>
                <li id="index" class="inactivePage"><a href="index.php"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>&nbsp;Profiel</a></li>
                <li id="cv" class="inactivePage"><a href="cv.php"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i>&nbsp;CV</a></li>
                <li id="contact" class="inactivePage"><a href="contact.php"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>&nbsp;Contact</a></li>
                <li id="about" class="inactivePage"><a href="about.php"><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></i>&nbsp;About</a></li>
            </ul>
        </nav>

   	</header>