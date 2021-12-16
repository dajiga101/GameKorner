
<?php 
 ?>

 <head>
	<title>Game Korner</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
	  .company{
	  	background: #cbb09c !important;
	  }
  	.brand-text{
  		color: #cbb09c !important;
  	}
  	.text{
  		background: grey;
  	}
  	form{
  		max-width :460px;
  		margin : 20px auto;
  		padding : 20px;
  	}
    .logo{
    position: relative;

    left: 20px; /* This will move it 20px to the right */
}
  </style>
</head>
<body class="brown lighten-4">

	<nav class="white z-depth-0">
    <div class="container">
      <a href="index.php" class="brand-logo brand-text center">
      	GameKorner
      </a>
    </div>
  </nav>
  
     <nav>
    <div class="grey nav-wrapper">
      <a href="#" class="logo">Welcome back <?php echo $name; ?></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="">Profile</a></li>
          <li><a href="">Inbox <span class="new badge">4</span></a></li>
          <li><a href="">Settings</a></li>
      </ul>
    </div>
  </nav>

    

