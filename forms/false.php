
<?php

date_default_timezone_set('Asia/Kuching');
$d = date('d', time());
$m = date('m', time());
$y = date('Y', time());

?>
<!DOCTYPE html>
<html lang="en" >

<head>

<meta charset="UTF-8">
<title>Maklum Balas</title>

<style>
@import url('https://fonts.googleapis.com/css?family=Asap+Condensed:600i,700');

body {
  background: #fafafa;
  display: flex;
  text-transform: uppercase;
  font-family: 'Asap Condensed', sans-serif;
}

h1 {
  font-size: 60px;
}
h3 {
  font-size: 26px;
}

.italic {
  font-style: italic;
}

.card {
  position: relative;
  margin: auto;
  height: 350px;
  width: 600px;
  text-align: center;
  background: linear-gradient(#E96874, #6E3663, #2B0830);
  border-radius: 2px;
  box-shadow: 0 6px 12px -3px rgba(0,0,0,.3);
  color: #fff;
  padding: 30px;
}

.card header {
  position: absolute;
  top: 31px;
  left: 0;
  width: 100%;
  padding: 0 10%;
  transform: translateY(-50%);
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  align-items: center;
}

.card header > *:first-child {
  text-align: left;
}
.card header > *:last-child {
  text-align: right;
}

.logo {
  font-size: 24px;
  position: relative;
}
.logo:before,
.logo:after {
  content: '';
  position: absolute;
  top: 50%;
  border-top: 3px solid currentColor;
  transform: translateY(-50%);
}

.logo:before {
  right: 158px;
  width: 40%;
}
.logo:after {
  left: 158px;
  width: 55%;
}

.logo span {
  /*border: solid currentColor;
  border-width: 0 3px 3px 0;
  position: absolute;
  top: -22px;
  width: 69px;
  height: 70px;
  left: 50%;
  transform: translateX(-58%) rotate(58deg) skew(0deg, -30deg);*/
  display: block;
  position: absolute;
  width: 100%;
  top: calc(50% - 1px);
}

.announcement {
  position: relative;
  border: 3px solid currentColor;
  border-top: 0;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.announcement:before,
.announcement:after {
  content: '';
  position: absolute;
  top: 0px;
  border-top: 3px solid currentColor;
  height: 0;
  width: 15px;
}
.announcement:before {
  left: -3px;
}
.announcement:after {
  right: -3px;
}


.inspiration {
  position: absolute;
  bottom: 20px;
  left: 20px;
}








* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html, body {
  height: 100%;
}

a,
a:visited,
a:focus,
a:active,
a:link {
  text-decoration: none;
  outline: 0;
}

a {
  color: currentColor;
  transition: .2s ease-in-out;
}

h1, h2, h3, h4 {
  margin: .15em 0;
}

ul {
  padding: 0;
  list-style: none;
}

img {
  vertical-align: middle;
  height: auto;
  width: 100%;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>



  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <div class="card">
  <header>
    <time
  datetime="2018-05-15T19:00"><?php echo $d; ?></time>
    <div class="logo">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 234.5 53.7"><style>.st0{fill:none;stroke:#FFFFFF;stroke-width:5;stroke-miterlimit:10;}</style><path d="M.6 1.4L116.9 52l117-50.6" class="st0"/></svg>
      </span><?php echo $y; ?></div>
    <div class="sponsor"><?php echo $m; ?></div>
  </header>
  <div class="announcement">
    <h3>SinagingWeb</h3>
    <h1>Maklum Balas</h1>
    <h3 class="italic">Gagal Dihantar</h3>
    <br>
    <a href="../index.php">Klik Sini ????</a>
  </div>
</div>

</body>

</html>
