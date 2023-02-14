

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/dashboard.css">
  <!-- CSS Files -->

  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/overview.css">

</head>



<style>
  /*percentage STEPS (do not touch)*/
.full_percentage[data-percentage="100"] { -webkit-transform: rotate(180deg); -moz-transform: rotate(180deg); -o-transform: rotate(180deg); transform: rotate(180deg); }
.full_percentage[data-percentage="95"] { -webkit-transform: rotate(170deg); -moz-transform: rotate(170deg); -o-transform: rotate(170deg); transform: rotate(170deg); }
.full_percentage[data-percentage="90"] { -webkit-transform: rotate(155deg); -moz-transform: rotate(155deg); -o-transform: rotate(155deg); transform: rotate(155deg); }
.full_percentage[data-percentage="85"] { -webkit-transform: rotate(125deg); -moz-transform: rotate(125deg); -o-transform: rotate(125deg); transform: rotate(125deg); }
.full_percentage[data-percentage="80"] { -webkit-transform: rotate(110deg); -moz-transform: rotate(110deg); -o-transform: rotate(110deg); transform: rotate(110deg); }
.full_percentage[data-percentage="75"] { -webkit-transform: rotate(90deg); -moz-transform: rotate(90deg); -o-transform: rotate(90deg); transform: rotate(90deg); }
.full_percentage[data-percentage="70"] { -webkit-transform: rotate(70deg); -moz-transform: rotate(70deg); -o-transform: rotate(70deg); transform: rotate(70deg); }
.full_percentage[data-percentage="65"] { -webkit-transform: rotate(55deg); -moz-transform: rotate(55deg); -o-transform: rotate(55deg); transform: rotate(55deg); }
.full_percentage[data-percentage="60"] { -webkit-transform: rotate(35deg); -moz-transform: rotate(35deg); -o-transform: rotate(35deg); transform: rotate(35deg); }
.full_percentage[data-percentage="55"] { -webkit-transform: rotate(20deg); -moz-transform: rotate(20deg); -o-transform: rotate(20deg); transform: rotate(20deg); }
.full_percentage[data-percentage="50"] { -webkit-transform: rotate(0deg); -moz-transform: rotate(0deg); -o-transform: rotate(0deg); transform: rotate(0deg); }

.half_percentage[data-percentage="50"] { -webkit-transform: rotate(180deg); -moz-transform: rotate(180deg); -o-transform: rotate(180deg); transform: rotate(180deg); }
.half_percentage[data-percentage="45"] { -webkit-transform: rotate(170deg); -moz-transform: rotate(170deg); -o-transform: rotate(170deg); transform: rotate(170deg); }
.half_percentage[data-percentage="40"] { -webkit-transform: rotate(155deg); -moz-transform: rotate(155deg); -o-transform: rotate(155deg); transform: rotate(155deg); }
.half_percentage[data-percentage="35"] { -webkit-transform: rotate(125deg); -moz-transform: rotate(125deg); -o-transform: rotate(125deg); transform: rotate(125deg); }
.half_percentage[data-percentage="30"] { -webkit-transform: rotate(110deg); -moz-transform: rotate(110deg); -o-transform: rotate(110deg); transform: rotate(110deg); }
.half_percentage[data-percentage="25"] { -webkit-transform: rotate(90deg); -moz-transform: rotate(90deg); -o-transform: rotate(90deg); transform: rotate(90deg); }
.half_percentage[data-percentage="20"] { -webkit-transform: rotate(70deg); -moz-transform: rotate(70deg); -o-transform: rotate(70deg); transform: rotate(70deg); }
.half_percentage[data-percentage="15"] { -webkit-transform: rotate(55deg); -moz-transform: rotate(55deg); -o-transform: rotate(55deg); transform: rotate(55deg); }
.half_percentage[data-percentage="10"] { -webkit-transform: rotate(35deg); -moz-transform: rotate(35deg); -o-transform: rotate(35deg); transform: rotate(35deg); }
.half_percentage[data-percentage="5"] { -webkit-transform: rotate(20deg); -moz-transform: rotate(20deg); -o-transform: rotate(20deg); transform: rotate(20deg); }
.half_percentage[data-percentage="0"] { -webkit-transform: rotate(0deg); -moz-transform: rotate(0deg); -o-transform: rotate(0deg); transform: rotate(0deg); }


/*end STEPS*/

/*
 *
 * THE FIRST EXAMPLE
 * use that code if you want a percentuage from 50% to 100%
 *
 */
 
/*COLOR and STYLES (note: you can use gradients for the class full_bar_color)*/
.full_bar_color { 
background: #e74c3c;
}
/*start pie chart code*/
.full_pie { position: relative; width: 200px; height: 200px; margin: 0 auto;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
}
/*the background white circular color*/
.full_pie:before { content: ''; display: block; position: absolute; z-index: -1; width: 220px; height: 220px; top: -10px; left: -10px; background: #fff;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
}
/*color white #fff to fix the rendering problem*/
.full_pie:after { content: ''; display: block; position: absolute; z-index: 10; width: 198px; height: 198px; top: 1px; left: 1px;
-webkit-box-shadow: 0px 0px 0px 2px #fff, inset 0 0 5px rgba(0,0,0,0.1);
-moz-box-shadow: 0px 0px 0px 2px #fff, inset 0 0 5px rgba(0,0,0,0.1);
box-shadow: 0px 0px 0px 2px #fff, inset 0 0 5px rgba(0,0,0,0.1);
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
}
/*the icon*/
span.full_pie_icon { position: absolute; z-index: 7; top: 25px; left: 25px; width: 150px; height: 150px; font-size: 3em; line-height: 150px; text-align: center; color: #e0e0e0;
background: #fff;
-webkit-box-shadow:  0px 0px 10px 0px rgba(0,0,0,0.1);
-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
box-shadow:  0px 0px 10px 0px rgba(0,0,0,0.1);
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
}
/*ONE*/
.full_part_pie_one { position: absolute; z-index: 4; width: 100%; height: 100%; background: #fff;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
clip: rect(0px 200px 200px 100px);
-webkit-animation: full_first 2s linear;
-moz-animation: full_first 2s linear;
-o-animation: full_first 2s linear;
animation: full_first 2s linear;
opacity: 0;
}
/*TWO*/
.full_part_pie_two { position: absolute; z-index: 2; width: 100%; height: 100%; background: #fff;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
clip: rect(0px 100px 200px 0px);
-webkit-animation: full_second 3.25s linear;
-moz-animation: full_second 3.25s linear;
-o-animation: full_second 3.25s linear;
animation: full_second 3.25s linear;
}
/*THREE*/
.full_part_pie_three { position: absolute; z-index: 3; width: 100%; height: 100%;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
clip: rect(0px 200px 200px 100px);
}
/*FOUR*/
.full_part_pie_four { position: absolute; z-index: 3; width: 100%; height: 100%; background: #fff;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
clip: rect(0px 100px 200px 0px);
-webkit-animation: full_fourth 2s linear 2s;
-moz-animation: full_fourth 2s linear 2s;
-o-animation: full_fourth 2s linear 2s;
animation: full_fourth 2s linear 2s;
opacity: 0;
}
/*FIVE*/
.full_part_pie_five { position: absolute; z-index: 5; width: 100%; height: 100%;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
clip: rect(0px 200px 200px 100px);
-webkit-animation: full_fifth 4s linear;
-moz-animation: full_fifth 4s linear;
-o-animation: full_fifth 4s linear;
animation: full_fifth 4s linear;
opacity: 1;
}
/*FIRST animation*/
@-webkit-keyframes full_first {
0% { opacity: 1; -webkit-transform: rotate(0deg); }
100% { opacity: 1; -webkit-transform: rotate(180deg); }
}
@-moz-keyframes full_first {
0% { opacity: 1; -moz-transform: rotate(0deg); }
100% { opacity: 1; -moz-transform: rotate(180deg); }
}
@-o-keyframes full_first {
0% { opacity: 1; -o-transform: rotate(0deg); }
100% { opacity: 1; -o-transform: rotate(180deg); }
}
@keyframes full_first {
0% { opacity: 1; transform: rotate(0deg); }
100% { opacity: 1; transform: rotate(180deg); }
}
/*SECOND animation*/
@-webkit-keyframes full_second {
0% { z-index: 6; }
100% { z-index: 2; }
}
@-moz-keyframes full_second {
0% { z-index: 6; }
100% { z-index: 2; }
}
@-o-keyframes full_second {
0% { z-index: 6; }
100% { z-index: 2; }
}
@keyframes full_second {
0% { z-index: 6; }
100% { z-index: 2; }
}
/*FOURTH animation*/
@-webkit-keyframes full_fourth {
0% { opacity: 1; -webkit-transform: rotate(0deg); }
100% { opacity: 1; -webkit-transform: rotate(180deg); }
}
@-moz-keyframes full_fourth {
0% { opacity: 1; -moz-transform: rotate(0deg); }
100% { opacity: 1; -moz-transform: rotate(180deg); }
}
@-o-keyframes full_fourth {
0% { opacity: 1; -o-transform: rotate(0deg); }
100% { opacity: 1; -o-transform: rotate(180deg); }
}
@keyframes full_fourth {
0% { opacity: 1; transform: rotate(0deg); }
100% { opacity: 1; transform: rotate(180deg); }
}
/*FIFTH animation*/
@-webkit-keyframes full_fifth {
0% { opacity: 0; }
50% { opacity: 0; }
50.1%, 100% { opacity: 1; }
}
@-moz-keyframes full_fifth {
0% { opacity: 0; }
50% { opacity: 0; }
50.1%, 100% { opacity: 1; }
}
@-o-keyframes full_fifth {
0% { opacity: 0; }
50% { opacity: 0; }
50.1%, 100% { opacity: 1; }
}
@keyframes full_fifth {
0% { opacity: 0; }
50% { opacity: 0; }
50.1%, 100% { opacity: 1; }
}




/*
 *
 * THE SECOND EXAMPLE
 * the second example for a max percentuage of 50% in this case
 *
 */
 
/*COLOR and STYLES (note: you can use gradients for the class full_bar_color)*/
.half_bar_color { 
background: #3498db;
}
/*start chart pie code*/
.half_pie { position: relative; width: 200px; height: 200px; margin: 0 auto;
background: #fff;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
}
/*the background white circular color*/
.half_pie:before { content: ''; display: block; position: absolute; z-index: -1; width: 220px; height: 220px; top: -10px; left: -10px; background: #fff;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
}
/*color white #fff to fix the rendering problem*/
.half_pie:after { content: ''; display: block; position: absolute; z-index: 10; width: 198px; height: 198px; top: 1px; left: 1px;
-webkit-box-shadow: 0px 0px 0px 2px #fff, inset 0 0 5px rgba(0,0,0,0.1);
-moz-box-shadow: 0px 0px 0px 2px #fff, inset 0 0 5px rgba(0,0,0,0.1);
box-shadow: 0px 0px 0px 2px #fff, inset 0 0 5px rgba(0,0,0,0.1);
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
}
/*the icon*/
span.half_pie_icon { position: absolute; z-index: 5; top: 25px; left: 25px; width: 150px; height: 150px; font-size: 3em; line-height: 150px; text-align: center; color: #e0e0e0;
background: #fff;
-webkit-box-shadow:  0px 0px 10px 0px rgba(0,0,0,0.1);
-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
box-shadow:  0px 0px 10px 0px rgba(0,0,0,0.1);
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
}
/*ONE*/
.half_part_pie_one { position: absolute; z-index: 1; width: 100%; height: 100%;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%; 
clip: rect(0px 100px 200px 0px);
}
/*TWO*/
.half_part_pie_two { position: absolute; z-index: 2; width: 100%; height: 100%; background: #fff;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%;
clip: rect(0px 100px 200px 0px);
}
/*THREE*/
.half_part_pie_three { position: absolute; z-index: 3; width: 100%; height: 100%; background: #fff;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
-o-border-radius: 100%;
border-radius: 100%; 
clip: rect(0px 200px 200px 100px);
-webkit-animation: half_third 4s linear;
-moz-animation: half_third 4s linear;
-o-animation: half_third 4s linear;
animation: half_third 4s linear;
opacity: 0;
}
/*THIRD animation*/
@-webkit-keyframes half_third {
0% { opacity: 1; -webkit-transform: rotate(0deg); }
100% { opacity: 1; -webkit-transform: rotate(180deg); }
}
@-moz-keyframes half_third {
0% { opacity: 1; -moz-transform: rotate(0deg); }
100% { opacity: 1; -moz-transform: rotate(180deg); }
}
@-o-keyframes half_third {
0% { opacity: 1; -o-transform: rotate(0deg); }
100% { opacity: 1; -o-transform: rotate(180deg); }
}
@keyframes half_third {
0% { opacity: 1; transform: rotate(0deg); }
100% { opacity: 1; transform: rotate(180deg); }
}
</style>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
 
        <span><img style="width: 220px;" src="../assets/img/logo2.png" alt=""></span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./app.dashboard.php">
            <div>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA9UlEQVR4nO2Yyw2DMBBE6SL2yZhqgmgncRoJriu4BKCBAHcipHwUc0C2NgsK86S9rmY0a7M4SQAAYJMcLq4QxrXSuDGkxNk1wlS53y8r74Uuu1bbfgyp1HaNssOs3yKTkFDxbxOmqv1+k5BQ8fpjYtZvkVjxr/L7xYrXz4IBiQR6jFAQOMT/do0qO+QxJlLb1eo6HFc3wI6EgZWRSOC32y17AtTbLbsB9pGUMPANEgiF+tCxJyBMlceYmMSL0222u+C7sjZIYHcJZMQvaewGUuJfQHYDmvgZBAZCQQIeGKHdjVBKfI2y/1Iq4pc06u0WAACSTfAAMwjMhMzhAGkAAAAASUVORK5CYII=">
                <title>shop </title>
               
                
            
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" href="./app.trading-overview.php">
            <title>office</title>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAgElEQVR4nO3SwQmAQBBD0alrGrJsS9HD3nKUQCL8B55l82cGwC/sdT9fvmnDQ9pQpA1F2lCkDUXaUKRtEdv/l4d4UERxWiacluK0TDgtxWmZhqg5reUhB0VU+jQootKLUkSlF6WISi9KEZVelCIqvShFVHpRiqj0ohRR6UUpMscL/nTKPoCeTwUAAAAASUVORK5CYII=">   <span class="nav-link-text ms-1">Trading Overview</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="./app.profitshare.php">
            <div>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAnElEQVR4nO2VyQ3DMAwEWdc0xLJVivMNiMAvO5tYM4C+ErgHVSV/Ar2OXzzlIJ13AR0pO3IYrbYj52yxtepmcJAPpCOEH+IgrTw6Mkgrj44M0sqjI4O08ujIIK08OjK4VJWTO29/mx0GwY4sy47R6g3KXk8ZBLfWcmthtHqDstdTBsGttdxaGK3O9wHL/kZaeXRkkFaeiz9jqS/zAio7d7CGNm9rAAAAAElFTkSuQmCC">
                <title>shop </title>
            </div>
            <span class="nav-link-text ms-1">ProfitShare</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pages/virtual-reality.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>box-3d-50</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(603.000000, 0.000000)">
                        <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                        <path class="color-background opacity-6" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"></path>
                        <path class="color-background opacity-6" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pages/rtl.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>settings</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(304.000000, 151.000000)">
                        <polygon class="color-background opacity-6" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                        <path class="color-background opacity-6" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"></path>
                        <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pages/profile.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>customer-support</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(1.000000, 0.000000)">
                        <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                        <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                        <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pages/sign-in.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(154.000000, 300.000000)">
                        <path class="color-background opacity-6" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                        <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pages/sign-up.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>spaceship</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(4.000000, 301.000000)">
                        <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                        <path class="color-background opacity-6" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                        <path class="color-background opacity-6" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"></path>
                        <path class="color-background opacity-6" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
        <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpg')"></div>
        <div class="card-body text-start p-3 w-100">
          <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
            <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
          </div>
          <div class="docs-info">
            <h6 class="text-white up mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold">Please check our docs</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard" target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
          </div>
        </div>
      </div>
      <a class="btn bg-gradient-primary mt-3 w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro?ref=sidebarfree">Upgrade to pro</a>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <p style="border-color: #3D4EEC; color: #3D4EEC; " class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard">Account N.:10110203</p>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Edoardo R.</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div >
      <div >
        <div>
          <div >
            <div >
              <div  >
                <div  >
                  <div class="numbers bg-gray-100">
                   
                    <h5 class="font-weight-bolder mb-0">
                      Trading Overview
                      
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>

        <div id="objectives" style="width: max-content; padding: 2%">

            <h5 style="font-weight: bold;">Objectives</h5>

            </div>

            
       

            <div class="minDays">

            
                <div style="width: max-content; padding: 5%" >
                <div class="card">
                    <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize" style="width: max-content; font-size: 1.7vh!important; color: black; letter-spacing: 0.3px">Minimum trading days</p>
                            <br>
                            <h6 style="width:max-content">Minimum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span  style="font-weight: bold">5 Days</span></h6>
                            <br>
                            <h6 style="width:max-content">Current Result&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: orange; font-weight: bold">1 Days</span></h6>
                        
                        <p id="statusDays" class="stDaysOnG">Ongoing</p>
                            
                        </div>
                        </div>
                        <div class="col-4 text-end">
                        
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="profitTarget">
                    <div style="width: max-content; padding: 5%" >
                    <div class="card" style="width:110%">
                        <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize" style="width: max-content; font-size: 1.7vh!important; color: black; letter-spacing: 0.3px">Profit Target</p>
                                <br>
                                <h6 style="width:max-content">Target&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span  style="font-weight: bold; color: black">750$</span></h6>
                                <br>
                                <h6 style="width:max-content">Current Result&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: lightgreen; font-weight: bold">900</span></h6>
                            
                            <p id="statusTarget" class="stDaysDone">Completed</p>
                                
                    </div>
                    </div>
                    <div class="col-4 text-end">
            

            </div>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>

            

            <div class="dailyLoss">

            
                <div style="width: max-content; padding: 5%" >
                <div class="card">
                    <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize" style="width: max-content; font-size: 1.7vh!important; color: black; letter-spacing: 0.3px">Daily Loss</p>
                            <br>
                            <h6 style="width:max-content">Max. Loss&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span  style="font-weight: bold">1200$</span></h6>
                            <h6 style="width:max-content">Max. Loss recorded&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span  style="font-weight: bold; color: orange">1500$</span></h6>
                            <p id="statusLoss" class="stDaysLost">Failed</p>
                            <br>
                    
                        </div>
                        </div>
                        <div class="col-4 text-end">
                        
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                
                
            </div>

            <div class="resetLoss">

            
<div style="width: 127%; padding: 5%" >
<div class="card">
    <div class="card-body p-3">
    <div class="row">
        <div class="col-8">
        <div class="numbers">
            <p class="text-sm mb-0 text-capitalize" style="width: max-content; font-size: 1.7vh!important; color: black; letter-spacing: 0.3px; text-align: center!important; font-weight: bold">Today's Permitted Loss Will Reset In</p>
            <br>
            <br>
            

             <p id="coounterLossTimer">
                11:02:15
             </p>
             <br>
             <br>
             <br>
           
       
            
        </div>
        </div>
        <div class="col-4 text-end">
        
        </div>
    </div>
    </div>
</div>
</div>
</div>



<div id="mainData">
  <h4 id="data1">Stats</h4>
  <br>

 <p class="data2">equity <span class="stat1">4434</span></p>
  <p class="data2">balance <span class="stat1">4434</span></p>
  <p class="data2">WinRate <span class="stat1">4434</span></p>
  <p class="data2">N. of Trades <span class="stat1">4434</span></p>
  <p class="data2">Avg. Winning Trade <span class="stat1">4434</span></p>
  <p class="data2">Avg. Losing Trade <span class="stat1">4434</span></p>
  <p class="data2">Lots <span class="stat1">4434</span></p>
  <p class="data2">Today's Permitted Loss <span class="stat1">4434</span></p>
  <p class="data2">Max Permitted Loss <span class="stat1">4434</span></p>
  
  
  
  
</div>


<div id="tradinghistory">

  <h4>Trading History</h4>

</div>




            

     

                       
                    </div>
                </div>
                </div>
            </div>
        </div>

        

        </div>

       
        </div>
      </div>

      
      <div class="row mt-4">
        <div class="mb-lg-0 ">
          <div class="card z-index-2">
            
          </div>
        </div>
        
      
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a>LightFund</a>
           
              </div>
            </div>
            
          </div>
        </div>
      </footer>
      <br>
      <br>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>