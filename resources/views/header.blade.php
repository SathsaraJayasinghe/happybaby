<div class="topnavbar">
  <div class="searchbox">
    <img src="/images/bars.png" alt="bar image" class="barlogo" id="menubtn" onclick="openmenu()">
    <img src="/images/close.png" alt="close image" class="closelogo" id="closebtn" onclick="closemenu()">
    <img src="/images/logo.jpg" alt="logo image" class="logo">
    <input type="text" class="formcontrol">
    <span class="inputgrouptext"><img src="/images/search.png" alt="search image" class="search"></i></span>
  </div>
  <div class="menubar">
    <ul>
      <li><a href="#"><img src="/images/cart.png" alt="cart image" class="cart">Cart(0)</a></li>
      <li><a href="#">Sign up</a></li>
      <li><a href="#">Login</a></li>
    </ul>
  </div>
</div>

<section>
  <div class="sidemenu" id="sidemenu">
      <ul>
        <li>Baby Gear<img src="/images/angle.png" alt="angle image" class="angle">
          <ul>
            <li>Sub Menu1</li>
            <li>Sub Menu1</li>
            <li>Sub Menu1</li>
          </ul>    
        </li>
        <li>Clothes<img src="/images/angle.png" alt="angle image" class="angle">
          <ul>
            <li>Sub Menu2</li>
            <li>Sub Menu2</li>
            <li>Sub Menu2</li>
          </ul>  
        </li>
        <li>Toys<img src="/images/angle.png" alt="angle image" class="angle">
          <ul>
            <li>Sub Menu3</li>
            <li>Sub Menu3</li>
            <li>Sub Menu3</li>
          </ul>  
        <li>
        <li>Nursery<img src="/images/angle.png" alt="angle image" class="angle">
          <ul>
            <li>Sub Menu4</li>
            <li>Sub Menu4</li>
            <li>Sub Menu4</li>
          </ul>  
        <li>
        <li>Baby Care<img src="/images/angle.png" alt="angle image" class="angle"></li>  
        <li>Gifts<img src="/images/angle.png" alt="angle image" class="angle"></li>  
        <li>Feeding<img src="/images/angle.png" alt="angle image" class="angle"></li>  
        <li>Hospital List<img src="/images/angle.png" alt="angle image" class="angle"></li>  
      </ul>
    </div>
</section>

<div class="slider">
<div id="slider" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="/images/c1.png" class="d-block w-100" alt="c1" height="400px">
    </div>
    <div class="carousel-item">
    <img src="/images/c2.png" class="d-block w-100" alt="c2" height="400px">
    </div>
    <div class="carousel-item">
    <img src="/images/c3.png" class="d-block w-100" alt="c3" height="400px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
</div>
</div>

<script>
  function openmenu(){
      document.getElementById("sidemenu").style.display="block";
      document.getElementById("menubtn").style.display="none";
      document.getElementById("closebtn").style.display="block";
  }
  function closemenu(){
      document.getElementById("sidemenu").style.display="none";
      document.getElementById("menubtn").style.display="block";
      document.getElementById("closebtn").style.display="none";
  }
</script>