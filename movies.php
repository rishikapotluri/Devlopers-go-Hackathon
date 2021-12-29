<?php
session_start();

?>

<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Marvel-Studios</title>

<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="mycss.css">
<style>

.box:hover{
filter:grayscale(0);
border:1px solid white;
}

</style>
</head>
<body>

<section >
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
   
   
    <a class="navbar-brand" href="main.html" style="padding-left:2rem;color:red;">MARVEL <span style="color:black;">STUDIOS</span></a>
  
   <!-- specialized button -->
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
		<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="#anc1" style="padding-right:2rem;font-size:22px;">Movies</a></li>
				<li class="nav-item"><a class="nav-link" href="#anc2" style="padding-right:2rem;font-size:22px;">Anime</a></li>
				<li class="nav-item"><a class="nav-link" href="#anc10" style="padding-right:2rem;font-size:22px;">Gallery</a></li>
				<li class="nav-item"><a class="nav-link" href="logout.php" style="padding-right:2rem;font-size:22px;">Log Out</a></li>
				

		</ul>
	</div>
  </nav>

</section>

<section id="test1">



<div id="demo-co1" class="carousel slide" data-ride="false">



  <div class="carousel-inner">
    <div class="carousel-item active">
      <video controls width="100%" height="100%"
       autoplay loop muted preload="auto">

		<source src="v3.mp4" type="video/mp4">

		</video>

    </div>
    <div class="carousel-item">
      <video controls width="100%" height="100%"
       autoplay loop muted preload="auto">

		<source src="v1.mp4" type="video/mp4">

		</video>
    </div>
    <div class="carousel-item">
      <video controls width="100%" height="100%"
       autoplay loop muted preload="auto">

		<source src="v2.mp4" type="video/mp4">

		</video>
    </div>
	<div class="carousel-item">
     <video controls width="100%" height="100%"
       autoplay loop muted preload="auto">

		<source src="v4.mp4" type="video/mp4">

		</video>
    </div>
	
  </div>
  
  
  
  
  
   <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo-co1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo-co1" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>


</div>

  
  
  
  
</section>



<section class="s1">
<h2><a id="anc1">Marvel-Movies</a></h2>
<section class="s2">
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video id="11"  onmouseover="myFunction()" onmouseout="myFunction1()" width="100%" height="100%" loop   class="clip abc" poster="p1.jpg" >
		<source src="v3.mp4" type="video/mp4">
	</video>
<p class="a43">Doctor Strange Multiverse</p>
<script>
const clip1=document.querySelectorAll('.clip');
let currentTime = 0;
for(let i=0;i<clip1.length;i++)
{

clip1[i].addEventListener('mouseenter',function(e){
clip1[i].play()})

clip1[i].addEventListener('mouseout',function(e){
clip1[i].load()})


}



</script>
<script>
function myFunction() {
  document.getElementById("11").controls = true;
  
}
function myFunction1() {
  document.getElementById("11").controls = false;
  
}

</script>


	</div>
	
	 
	 <div class="col-lg-3  col-md-6  col-sm-6 col-6 box"> 
		<video id="12" onmouseover="myFunction2()" onmouseout="myFunction3()" width="100%" height="100%" loop class="clip"  poster="p2.jpg" >

		<source src="v4.mp4" type="video/mp4">

		</video>
	<p class="a43">	Shang-Chi</p>
						<script>
const clip2=document.querySelectorAll('.clip');
for(let i=0;i<clip2.length;i++)
{
clip2[i].addEventListener('mouseenter',function(e){
clip2[i].play()})
clip2[i].addEventListener('mouseout',function(e){
clip2[i].load()
})

}
</script>
<script>
function myFunction2() {
  document.getElementById("12").controls = true;
  
}
function myFunction3() {
  document.getElementById("12").controls = false;
  
}

</script>
	</div>
	
	
	
	 <div class="col-lg-3  col-md-6  col-sm-6 col-6 box" > 
  <video  id="13" onmouseover="myFunction4()" onmouseout="myFunction5()" width="100%" height="100%"   loop class="clip"  poster="a1.jpg">

		<source src="v8.mp4" type="video/mp4">

		</video>
		<p class="a43">Avengers</p>
<script>
const clip3=document.querySelectorAll('.clip');
for(let i=0;i<clip3.length;i++)
{
clip3[i].addEventListener('mouseenter',function(e){
clip3[i].play()})
clip3[i].addEventListener('mouseout',function(e){
clip3[i].pause()
})

}
</script>
<script>
function myFunction4() {
  document.getElementById("13").controls = true;
  
}
function myFunction5() {
  document.getElementById("13").controls = false;
  
}

</script>
	</div>
	
	
	 <div class="col-lg-3  col-md-6 col-sm-6 col-6 box"> 
  <video id="14" onmouseover="myFunction6()" onmouseout="myFunction7()"  width="100%" height="100%" loop class="clip"  poster="a1.jpg">
   <source src="v6.mp4" type="video/mp4">
		</video>
		<p class="a43">Avengers Clip-2</p>
		
<script>
const clip4=document.querySelectorAll('.clip');
for(let i=0;i<clip4.length;i++)
{
clip4[i].addEventListener('mouseenter',function(e){
clip4[i].play()})
clip4[i].addEventListener('mouseout',function(e){
clip4[i].load()
})

}
</script>
<script>
function myFunction6() {
  document.getElementById("14").controls = true;
  
}
function myFunction7() {
  document.getElementById("14").controls = false;
  
}

</script>
	</div>
 
 </div>

</section>


<section class="s2">
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video id="15" onmouseover="myFunction8()" onmouseout="myFunction9()" width="100%" height="100%" 
        loop  class="clip" poster="p5.jpg">

		<source src="v13.mp4" type="video/mp4">

		</video>
		<p class="a43">Black Panther</p>
		
												<script>
const clip5=document.querySelectorAll('.clip');
for(let i=0;i<clip5.length;i++)
{
clip5[i].addEventListener('mouseenter',function(e){
clip5[i].play()})
clip5[i].addEventListener('mouseout',function(e){
clip5[i].load()
})

}
</script>
<script>
function myFunction8() {
  document.getElementById("15").controls = true;
  
}
function myFunction9() {
  document.getElementById("15").controls = false;
  
}

</script>
	</div>

<div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video  id="16" onmouseover="myFunction10()" onmouseout="myFunction11()" width="100%" height="100%" 
      loop class="clip"  poster="p6.jpg">

		<source src="v14.mp4" type="video/mp4">

		</video>
		<p class="a43">Captian Marvel</p>
														<script>
const clip6=document.querySelectorAll('.clip');
for(let i=0;i<clip6.length;i++)
{
clip6[i].addEventListener('mouseenter',function(e){
clip6[i].play()})
clip6[i].addEventListener('mouseout',function(e){
clip6[i].load()
})

}
</script>
<script>
function myFunction10() {
  document.getElementById("16").controls = true;
  
}
function myFunction11() {
  document.getElementById("16").controls = false;
  
}

</script>
	</div>
	
	<div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video  id="17" onmouseover="myFunction12()" onmouseout="myFunction13()" width="100%" height="100%" 
        loop class="clip" poster="p7.jpg">

		<source src="v12.mp4" type="video/mp4">

		</video>
		<p class="a43">Spider Man No Way Home</p>
																<script>
const clip7=document.querySelectorAll('.clip');
for(let i=0;i<clip7.length;i++)
{
clip7[i].addEventListener('mouseenter',function(e){
clip7[i].play()})
clip7[i].addEventListener('mouseout',function(e){
clip7[i].load()
})

}
</script>
<script>
function myFunction12() {
  document.getElementById("17").controls = true;
  
}
function myFunction13() {
  document.getElementById("17").controls = false;
  
}

</script>
	</div>
	
	<div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video id="18" onmouseover="myFunction14()" onmouseout="myFunction15()" width="100%" height="100%" 
        loop  class="clip" poster="a3.jpg">
		<source src="v11.mp4" type="video/mp4">

		</video>
		<p class="a43">Avengers Infinity War</p>
																		<script>
const clip8=document.querySelectorAll('.clip');
for(let i=0;i<clip8.length;i++)
{
clip8[i].addEventListener('mouseenter',function(e){
clip8[i].play()})
clip8[i].addEventListener('mouseout',function(e){
clip8[i].load()
})

}
</script>
<script>
function myFunction14() {
  document.getElementById("18").controls = true;
  
}
function myFunction15() {
  document.getElementById("18").controls = false;
  
}

</script>
	</div>



</div>



</section>






<section class="s2">
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
	
  <video id="19" onmouseover="myFunction16()" onmouseout="myFunction17()"  width="100%" height="100%" 
       loop class="clip" poster="p8.jpeg">

		<source src="v7.mp4" type="video/mp4">

		</video>
		<p class="a43">Captain America Civil War</p>
																				<script>
const clip9=document.querySelectorAll('.clip');
for(let i=0;i<clip9.length;i++)
{
clip9[i].addEventListener('mouseenter',function(e){
clip9[i].play()})
clip9[i].addEventListener('mouseout',function(e){
clip9[i].load()
})

}
</script>
<script>
function myFunction16() {
  document.getElementById("19").controls = true;
  
}
function myFunction17() {
  document.getElementById("19").controls = false;
  
}

</script>
	</div>
	
	<div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video id="20" onmouseover="myFunction18()" onmouseout="myFunction19()" width="100%" height="100%" 
        loop class="clip" poster="p3.jpg">

		<source src="v5.mp4" type="video/mp4">

		</video>
		<p class="a43">Doctor Strange</p>
																				<script>
const clip10=document.querySelectorAll('.clip');
for(let i=0;i<clip10.length;i++)
{
clip10[i].addEventListener('mouseenter',function(e){
clip10[i].play()})
clip10[i].addEventListener('mouseout',function(e){
clip10[i].load()
})

}
</script>
<script>
function myFunction18() {
  document.getElementById("20").controls = true;
  
}
function myFunction19() {
  document.getElementById("20").controls = false;
  
}

</script>
	</div>
	
	<div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video id="21" onmouseover="myFunction20()" onmouseout="myFunction21()" width="100%" height="100%" 
       loop class="clip" poster="a2.jpg">

		<source src="v9.mp4" type="video/mp4">

		</video>
<p class="a43">Avengers Age Of Ultron</p>												
												<script>
const clip11=document.querySelectorAll('.clip');
for(let i=0;i<clip11.length;i++)
{
clip11[i].addEventListener('mouseenter',function(e){
clip11[i].play()})
clip11[i].addEventListener('mouseout',function(e){
clip11[i].load()
})

}
</script>
<script>
function myFunction20() {
  document.getElementById("21").controls = true;
  
}
function myFunction21() {
  document.getElementById("21").controls = false;
  
}

</script>

	</div>
	
	<div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video id="22" onmouseover="myFunction22()" onmouseout="myFunction23()" width="100%" height="100%" 
        loop class="clip" poster="a4.jpg">

		<source src="v10.mp4" type="video/mp4">

		</video>
		<p class="a43">Avengers Endgame</p>
																				<script>
const clip12=document.querySelectorAll('.clip');
for(let i=0;i<clip12.length;i++)
{
clip12[i].addEventListener('mouseenter',function(e){
clip12[i].play()})
clip12[i].addEventListener('mouseout',function(e){
clip12[i].load()
})

}
</script>
<script>
function myFunction22() {
  document.getElementById("22").controls = true;
  
}
function myFunction23() {
  document.getElementById("22").controls = false;
  
}

</script>
	</div>

</div>
	
	
</section>
	
	
	
	


</section>






<!--                 		marvel-anime-->

<section class="s11">
<h2><a id="anc2">Marvel-Anime</a></h2>
<section class="s2">
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video id="31"  onmouseover="myFunction31()" onmouseout="myFunction32()" width="100%" height="100%" loop   class="clip" poster="cp1.jpg" >
		<source src="c1.mp4" type="video/mp4">
	</video>
<p class="a43">Ant-Man</p>
<script>
const clip31=document.querySelectorAll('.clip');
let currentTime = 0;
for(let i=0;i<clip31.length;i++)
{

clip31[i].addEventListener('mouseenter',function(e){
clip31[i].play()})

clip31[i].addEventListener('mouseout',function(e){
clip31[i].load()})


}



</script>
<script>
function myFunction31() {
  document.getElementById("31").controls = true;
  
}
function myFunction32() {
  document.getElementById("31").controls = false;
  
}

</script>


	</div>
	
	 
	 <div class="col-lg-3  col-md-6  col-sm-6 col-6 box"> 
		<video id="32" onmouseover="myFunction33()" onmouseout="myFunction34()" width="100%" height="100%" loop class="clip"  poster="cp2.jpg" >

		<source src="c2.mp4" type="video/mp4">

		</video>
	<p class="a43">Avengers-Assemble</p>
						<script>
const clip32=document.querySelectorAll('.clip');
for(let i=0;i<clip32.length;i++)
{
clip32[i].addEventListener('mouseenter',function(e){
clip32[i].play()})
clip32[i].addEventListener('mouseout',function(e){
clip32[i].load()
})

}
</script>
<script>
function myFunction33() {
  document.getElementById("32").controls = true;
  
}
function myFunction34() {
  document.getElementById("32").controls = false;
  
}

</script>
	</div>
	
	
	
	 <div class="col-lg-3  col-md-6  col-sm-6 col-6 box" > 
  <video  id="33" onmouseover="myFunction35()" onmouseout="myFunction36()" width="100%" height="100%"   loop class="clip"  poster="cp3.jpg">

		<source src="c3.mp4" type="video/mp4">

		</video>
		<p class="a43">Guardians Of The Galaxy</p>
<script>
const clip33=document.querySelectorAll('.clip');
for(let i=0;i<clip33.length;i++)
{
clip33[i].addEventListener('mouseenter',function(e){
clip33[i].play()})
clip33[i].addEventListener('mouseout',function(e){
clip33[i].pause()
})

}
</script>
<script>
function myFunction35() {
  document.getElementById("13").controls = true;
  
}
function myFunction36() {
  document.getElementById("13").controls = false;
  
}

</script>
	</div>
	
	
	 <div class="col-lg-3  col-md-6 col-sm-6 col-6 box"> 
  <video id="34" onmouseover="myFunction37()" onmouseout="myFunction38()"  width="100%" height="100%" loop class="clip"  poster="cp4.jpg">
   <source src="c4.mp4" type="video/mp4">
		</video>
		<p class="a43">The Incredible Hulk</p>
		
<script>
const clip34=document.querySelectorAll('.clip');
for(let i=0;i<clip34.length;i++)
{
clip34[i].addEventListener('mouseenter',function(e){
clip34[i].play()})
clip34[i].addEventListener('mouseout',function(e){
clip34[i].load()
})

}
</script>
<script>
function myFunction37() {
  document.getElementById("34").controls = true;
  
}
function myFunction38() {
  document.getElementById("34").controls = false;
  
}

</script>
	</div>
 
 </div>

</section>


<section class="s2">
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video id="35" onmouseover="myFunction39()" onmouseout="myFunction40()" width="100%" height="100%" 
        loop  class="clip" poster="cp5.jpg">

		<source src="c5.mp4" type="video/mp4">

		</video>
		<p class="a43">Marvels Rising</p>
		
												<script>
const clip35=document.querySelectorAll('.clip');
for(let i=0;i<clip5.length;i++)
{
clip35[i].addEventListener('mouseenter',function(e){
clip35[i].play()})
clip35[i].addEventListener('mouseout',function(e){
clip35[i].load()
})

}
</script>
<script>
function myFunction39() {
  document.getElementById("35").controls = true;
  
}
function myFunction40() {
  document.getElementById("35").controls = false;
  
}

</script>
	</div>

<div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video  id="36" onmouseover="myFunction41()" onmouseout="myFunction42()" width="100%" height="100%" 
      loop class="clip"  poster="cp6.jpg">

		<source src="c6.mp4" type="video/mp4">

		</video>
		<p class="a43">What If?</p>
														<script>
const clip36=document.querySelectorAll('.clip');
for(let i=0;i<clip36.length;i++)
{
clip36[i].addEventListener('mouseenter',function(e){
clip36[i].play()})
clip36[i].addEventListener('mouseout',function(e){
clip36[i].load()
})

}
</script>
<script>
function myFunction41() {
  document.getElementById("36").controls = true;
  
}
function myFunction42() {
  document.getElementById("36").controls = false;
  
}

</script>
	</div>
	
	<div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video  id="37" onmouseover="myFunction43()" onmouseout="myFunction44()" width="100%" height="100%" 
        loop class="clip" poster="cp7.jpg">

		<source src="c7.mp4" type="video/mp4">

		</video>
		<p class="a43">Avengers Infinity War</p>
																<script>
const clip37=document.querySelectorAll('.clip');
for(let i=0;i<clip37.length;i++)
{
clip37[i].addEventListener('mouseenter',function(e){
clip37[i].play()})
clip37[i].addEventListener('mouseout',function(e){
clip37[i].load()
})

}
</script>
<script>
function myFunction43() {
  document.getElementById("37").controls = true;
  
}
function myFunction44() {
  document.getElementById("37").controls = false;
  
}

</script>
	</div>
	
	<div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video id="38" onmouseover="myFunction45()" onmouseout="myFunction46()" width="100%" height="100%" 
        loop  class="clip" poster="cp8.jpg">
		<source src="c8.mp4" type="video/mp4">

		</video>
		<p class="a43">Ultimate Spider Man</p>
																		<script>
const clip38=document.querySelectorAll('.clip');
for(let i=0;i<clip38.length;i++)
{
clip38[i].addEventListener('mouseenter',function(e){
clip38[i].play()})
clip38[i].addEventListener('mouseout',function(e){
clip38[i].load()
})

}
</script>
<script>
function myFunction45() {
  document.getElementById("38").controls = true;
  
}
function myFunction46() {
  document.getElementById("38").controls = false;
  
}

</script>
	</div>



</div>



</section>






<section class="s2">
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
	
  <video id="39" onmouseover="myFunction47()" onmouseout="myFunction48()"  width="100%" height="100%" 
       loop class="clip" poster="cp9.jpg">

		<source src="c9.mp4" type="video/mp4">

		</video>
		<p class="a43">Ultimate Spiderman Season-2</p>
																				<script>
const clip39=document.querySelectorAll('.clip');
for(let i=0;i<clip39.length;i++)
{
clip39[i].addEventListener('mouseenter',function(e){
clip39[i].play()})
clip39[i].addEventListener('mouseout',function(e){
clip39[i].load()
})

}
</script>
<script>
function myFunction47() {
  document.getElementById("39").controls = true;
  
}
function myFunction48() {
  document.getElementById("39").controls = false;
  
}

</script>
	</div>
	
	<div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video id="40" onmouseover="myFunction49()" onmouseout="myFunction50()" width="100%" height="100%" 
        loop class="clip" poster="cp10.jpg">

		<source src="c10.mp4" type="video/mp4">

		</video>
		<p class="a43">Spider-verse</p>
																				<script>
const clip40=document.querySelectorAll('.clip');
for(let i=0;i<clip40.length;i++)
{
clip40[i].addEventListener('mouseenter',function(e){
clip40[i].play()})
clip40[i].addEventListener('mouseout',function(e){
clip40[i].load()
})

}
</script>
<script>
function myFunction49() {
  document.getElementById("40").controls = true;
  
}
function myFunction50() {
  document.getElementById("40").controls = false;
  
}

</script>
	</div>
	
	<div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video id="41" onmouseover="myFunction51()" onmouseout="myFunction52()" width="100%" height="100%" 
       loop class="clip" poster="cp11.jpg">

		<source src="c11.mp4" type="video/mp4">

		</video>
<p class="a43">Deadpool</p>												
												<script>
const clip41=document.querySelectorAll('.clip');
for(let i=0;i<clip41.length;i++)
{
clip41[i].addEventListener('mouseenter',function(e){
clip41[i].play()})
clip41[i].addEventListener('mouseout',function(e){
clip41[i].load()
})

}
</script>
<script>
function myFunction51() {
  document.getElementById("41").controls = true;
  
}
function myFunction52() {
  document.getElementById("41").controls = false;
  
}

</script>

	</div>
	
	<div class="col-lg-3 col-md-6 col-sm-6 col-6 box"> 
  <video id="42" onmouseover="myFunction53()" onmouseout="myFunction54()" width="100%" height="100%" 
        loop class="clip" poster="cp12.jpg">

		<source src="c12.mp4" type="video/mp4">

		</video>
		<p class="a43">Venom</p>
																				<script>
const clip42=document.querySelectorAll('.clip');
for(let i=0;i<clip42.length;i++)
{
clip42[i].addEventListener('mouseenter',function(e){
clip42[i].play()})
clip42[i].addEventListener('mouseout',function(e){
clip42[i].load()
})

}
</script>
<script>
function myFunction53() {
  document.getElementById("42").controls = true;
  
}
function myFunction54() {
  document.getElementById("42").controls = false;
  
}

</script>
	</div>

</div>
	
	
</section>
	
	
	
	


</section>

<section style="background-color:black;padding:0% 0% 10% 0%">
<div  align="center">

	<h2 style="color:white;"><a id="anc10">Marvel Gallery</a></h2>
		
	<br>
	
	<div class="thumbnails">
		<img onmouseover="preview.src=a1.src" name="a1" src="a1.jpg" />
		<img onmouseover="preview.src=cp1.src" name="cp1" src="cp1.jpg" />
		<img onmouseover="preview.src=cp2.src" name="cp2" src="cp2.jpg" />
		<img onmouseover="preview.src=cp3.src" name="cp3" src="cp3.jpg" />
		<img onmouseover="preview.src=cp4.src" name="cp4" src="cp4.jpg" />
	</div>
	
	<br>
	
	<div class="preview" >
		<img name="preview" src="a1.jpg" />
	</div>

</div>
</section>

<footer id="f">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 f2">© 2021 Copyright:
    <a href="copyright.html">This is for education purpose</a>
  </div>
  <!-- Copyright -->

</footer>
</body>

 </html>

  
  
  
  