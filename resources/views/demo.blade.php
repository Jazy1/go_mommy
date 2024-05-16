<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Web Builder | GoMommy®</title>
    <meta content="Best Free Open Source Responsive Websites Builder" name="description">
    <link rel="stylesheet" href="stylesheets/toastr.min.css">
    <link rel="stylesheet" href="stylesheets/grapes.min.css?v0.21.10">
    <link rel="stylesheet" href="stylesheets/grapesjs-preset-webpage.min.css">
    <link rel="stylesheet" href="stylesheets/tooltip.css">
    <link rel="stylesheet" href="stylesheets/demos.css?v3">
    <link href="https://unpkg.com/grapick/dist/grapick.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/toastr.min.js"></script>
    <script src="js/grapes.min.js?v0.21.10"></script>
    <script src="https://unpkg.com/grapesjs-preset-webpage@1.0.2"></script>
    <script src="https://unpkg.com/grapesjs-blocks-basic@1.0.1"></script>
    <script src="https://unpkg.com/grapesjs-plugin-forms@2.0.5"></script>
    <script src="https://unpkg.com/grapesjs-component-countdown@1.0.1"></script>
    <script src="https://unpkg.com/grapesjs-plugin-export@1.0.11"></script>
    <script src="https://unpkg.com/grapesjs-tabs@1.0.6"></script>
    <script src="https://unpkg.com/grapesjs-custom-code@1.0.1"></script>
    <script src="https://unpkg.com/grapesjs-touch@0.1.1"></script>
    <script src="https://unpkg.com/grapesjs-parser-postcss@1.0.1"></script>
    <script src="https://unpkg.com/grapesjs-tooltip@0.1.7"></script>
    <script src="https://unpkg.com/grapesjs-tui-image-editor@0.1.3"></script>
    <script src="https://unpkg.com/grapesjs-typed@1.0.5"></script>
    <script src="https://unpkg.com/grapesjs-style-bg@2.0.1"></script>

    <style type="text/css">
        .icons-flex {
          background-size: 70% 65% !important;
          height: 15px;
          width: 17px;
          opacity: 0.9;
        }
        .icon-dir-row {
          background: url("./img/flex-dir-row.png") no-repeat center;
        }
        .icon-dir-row-rev {
          background: url("./img/flex-dir-row-rev.png") no-repeat center;
        }
        .icon-dir-col {
          background: url("./img/flex-dir-col.png") no-repeat center;
        }
        .icon-dir-col-rev {
          background: url("./img/flex-dir-col-rev.png") no-repeat center;
        }
        .icon-just-start{
         background: url("./img/flex-just-start.png") no-repeat center;
        }
        .icon-just-end{
         background: url("./img/flex-just-end.png") no-repeat center;
        }
        .icon-just-sp-bet{
         background: url("./img/flex-just-sp-bet.png") no-repeat center;
        }
        .icon-just-sp-ar{
         background: url("./img/flex-just-sp-ar.png") no-repeat center;
        }
        .icon-just-sp-cent{
         background: url("./img/flex-just-sp-cent.png") no-repeat center;
        }
        .icon-al-start{
         background: url("./img/flex-al-start.png") no-repeat center;
        }
        .icon-al-end{
         background: url("./img/flex-al-end.png") no-repeat center;
        }
        .icon-al-str{
         background: url("./img/flex-al-str.png") no-repeat center;
        }
        .icon-al-center{
         background: url("./img/flex-al-center.png") no-repeat center;
        }

         [data-tooltip]::after {
           background: rgba(51, 51, 51, 0.9);
         }

         .gjs-pn-commands {
           min-height: 40px;
         }

         #gjs-sm-float {
            display: none;
         }

         .gjs-logo-version {
           background-color: #756467;
         }

        .gjs-pn-btn.gjs-pn-active {
          box-shadow: none;
        }

        .CodeMirror {
          min-height: 450px;
          margin-bottom: 8px;
        }
        .grp-handler-close {
          background-color: transparent;
          color: #ddd;
        }

        .grp-handler-cp-wrap {
          border-color: transparent;
        }
    </style>

    <style>
      @import"../fonts/gordita/stylesheet.css";
      @import"../fonts/font-awesome-6.4.2/css/all.css";
      
      *{
        font-family: "Gordita";
        /* font-family: "Font Awesome 6"; */
      }

      .gjs-one-bg {
        background-color: #2c2e35 !important;
      }
      
      .gjs-four-color{
        color: #f45e43 !important;
      }
      
      .gjs-four-color-h:hover{
        color: #f45e43 !important;  
      }

    </style>

  </head>
  <body>
    <div style="display: none">
      <div class="gjs-logo-cont">
        {{-- <a href="https://grapesjs.com"><img class="gjs-logo" src="img/grapesjs-logo-cl.png"></a>
        <div class="gjs-logo-version"></div> --}}
      </div>
    </div>
    <div class="ad-cont">
      <!-- <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=grapesjscom" id="_carbonads_js"></script> -->
      <div id="native-carbon"></div>
      <script async type="text/javascript" src="./js/carbon-v2.js"></script>
    </div>

    <div id="gjs" style="height:0px; overflow:hidden">
      <header class="header-banner">
        <div class="container-width">
          <div class="logo-container">
            <div class="logo">GoMommy</div>
          </div>
          <nav class="menu">
            <div class="menu-item">BUILDER</div>
            <div class="menu-item">TEMPLATE</div>
            <div class="menu-item">WEB</div>
          </nav>
          <div class="clearfix"></div>
          <div class="lead-title">Build your websites without any coding skills</div>
          <div class="sub-lead-title">This is sample template. Feel free to edit</div>
          <div class="lead-btn">Hover me</div>
        </div>
      </header>

      {{-- <section class="flex-sect">
        <div class="container-width">
          <div class="flex-title">Flex is the new black</div>
          <div class="flex-desc">With flexbox system you're able to build complex layouts easily and with free responsivity</div>
          <div class="cards">
            <div class="card">
              <div class="card-header"></div>
              <div class="card-body">
                <div class="card-title">Title one</div>
                <div class="card-sub-title">Subtitle one</div>
                <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
              </div>
            </div>
            <div class="card">
              <div class="card-header ch2"></div>
              <div class="card-body">
                <div class="card-title">Title two</div>
                <div class="card-sub-title">Subtitle two</div>
                <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
              </div>
            </div>
            <div class="card">
              <div class="card-header ch3"></div>
              <div class="card-body">
                <div class="card-title">Title three</div>
                <div class="card-sub-title">Subtitle three</div>
                <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
              </div>
            </div>
            <div class="card">
              <div class="card-header ch4"></div>
              <div class="card-body">
                <div class="card-title">Title four</div>
                <div class="card-sub-title">Subtitle four</div>
                <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
              </div>
            </div>
            <div class="card">
              <div class="card-header ch5"></div>
              <div class="card-body">
                <div class="card-title">Title five</div>
                <div class="card-sub-title">Subtitle five</div>
                <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
              </div>
            </div>
            <div class="card">
              <div class="card-header ch6"></div>
              <div class="card-body">
                <div class="card-title">Title six</div>
                <div class="card-sub-title">Subtitle six</div>
                <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}

      {{-- <section class="am-sect">
        <div class="container-width">
          <div class="am-container">
            <img class="img-phone" onmousedown="return false" src="./img/phone-app.png"/>
            <div class="am-content">
              <div class="am-pre">ASSET MANAGER</div>
              <div class="am-title">Manage your images with Asset Manager</div>
              <div class="am-desc">You can create image blocks with the command from the left panel and edit them with double click</div>
              <div class="am-post">Image uploading is not allowed in this demo</div>
            </div>
          </div>
        </div>
      </section> --}}

      {{-- <section class="blk-sect">
        <div class="container-width">
          <div class="blk-title">Blocks</div>
          <div class="blk-desc">Each element in HTML page could be seen as a block. On the left panel you could find different kind of blocks that you can create, move and style</div>

          <div class="price-cards">
            <div class="price-card-cont">
              <div class="price-card">
                <div class="pc-title">Starter</div>
                <div class="pc-desc">Some random list</div>
                <div class="pc-feature odd-feat">+ Starter feature 1</div>
                <div class="pc-feature">+ Starter feature 2</div>
                <div class="pc-feature odd-feat">+ Starter feature 3</div>
                <div class="pc-feature">+ Starter feature 4</div>
                <div class="pc-amount odd-feat">$ 9,90/mo</div>
              </div>
            </div>
            <div class="price-card-cont">
              <div class="price-card pc-regular">
                <div class="pc-title">Regular</div>
                <div class="pc-desc">Some random list</div>
                <div class="pc-feature odd-feat">+ Regular feature 1</div>
                <div class="pc-feature">+ Regular feature 2</div>
                <div class="pc-feature odd-feat">+ Regular feature 3</div>
                <div class="pc-feature">+ Regular feature 4</div>
                <div class="pc-amount odd-feat">$ 19,90/mo</div>
              </div>
            </div>
            <div class="price-card-cont">
              <div class="price-card pc-enterprise">
                <div class="pc-title">Enterprise</div>
                <div class="pc-desc">Some random list</div>
                <div class="pc-feature odd-feat">+ Enterprise feature 1</div>
                <div class="pc-feature">+ Enterprise feature 2</div>
                <div class="pc-feature odd-feat">+ Enterprise feature 3</div>
                <div class="pc-feature">+ Enterprise feature 4</div>
                <div class="pc-amount odd-feat">$ 29,90/mo</div>
              </div>
            </div>
          </div>

        </div>
      </section> --}}

      <section class="bdg-sect">
        <div class="container-width">
          <h1 class="bdg-title">The team</h1>
          <div class="badges" id="i72bg">
            <div class="badge">
              <div class="badge-header">
              </div>
              <img src="img/team2.jpg" class="badge-avatar"/>
              <div class="badge-body">
                <div class="badge-name">Sir Faisal Shafique Butt
                </div>
                <div class="badge-role">Supervisor
                </div>
                <div class="badge-desc">
                </div>
              </div>
              {{-- <div class="badge-foot">
                <span class="badge-link">f</span>
                <span class="badge-link">t</span>
                <span class="badge-link">ln</span>
              </div> --}}
            </div>
          </div>
          <div class="badges">
            <div class="badge">
              <div class="badge-header"></div>
              <img class="badge-avatar" src="img/noor.jpg">
              <div class="badge-body">
                <div class="badge-name">Noor Fatima</div>
                <div class="badge-role">Frontend Developer</div>
                <div class="badge-desc"></div>
              </div>
              {{-- <div class="badge-foot">
                <span class="badge-link">f</span>
                <span class="badge-link">t</span>
                <span class="badge-link">ln</span>
              </div> --}}
            </div>
            <div class="badge">
              <div class="badge-header"></div>
              <img class="badge-avatar" src="img/Nigga Headshot 90x90.jpg">
              <div class="badge-body">
                <div class="badge-name">Jahanzeb Ahmad</div>
                <div class="badge-role">Team Lead</div>
                <div class="badge-desc"></div>
              </div>
              {{-- <div class="badge-foot">
                <span class="badge-link">f</span>
                <span class="badge-link">t</span>
                <span class="badge-link">ln</span>
              </div> --}}
            </div>
            <div class="badge">
              <div class="badge-header"></div>
              <img class="badge-avatar" src="img/dua 90x90.jpg">
              <div class="badge-body">
                <div class="badge-name">Dua Insharah</div>
                <div class="badge-role">Backend Developer</div>
                <div class="badge-desc"></div>
              </div>
              {{-- <div class="badge-foot">
                <span class="badge-link">f</span>
                <span class="badge-link">t</span>
                <span class="badge-link">ln</span>
              </div> --}}
            </div>
          </div>
        </div>
      </section>

      {{-- <footer class="footer-under">
        <div class="container-width">
          <div class="footer-container">
            <div class="foot-lists">
              <div class="foot-list">
                <div class="foot-list-title">About us</div>
                <div class="foot-list-item">Contact</div>
                <div class="foot-list-item">Events</div>
                <div class="foot-list-item">Company</div>
                <div class="foot-list-item">Jobs</div>
                <div class="foot-list-item">Blog</div>
              </div>
              <div class="foot-list">
                <div class="foot-list-title">Services</div>
                <div class="foot-list-item">Education</div>
                <div class="foot-list-item">Partner</div>
                <div class="foot-list-item">Community</div>
                <div class="foot-list-item">Forum</div>
                <div class="foot-list-item">Download</div>
                <div class="foot-list-item">Upgrade</div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="form-sub">
              <div class="foot-form-cont">
                <div class="foot-form-title">Subscribe</div>
                <div class="foot-form-desc">Subscribe to our newsletter to receive exclusive offers and the latest news</div>
                <input name="name" class="sub-input" placeholder="Name" />
                <input name="email" class="sub-input" placeholder="Email"/>
                <button class="sub-btn" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <div class="container-width">
            <div class="made-with">
              Made with ❤ with GoMommy by Jahanzeb Ahmad, Dua Insharah, Noor Fatima
            </div>
            <div class="foot-social-btns">facebook twitter linkedin mail</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </footer> --}}

      <style>
        .clearfix{ clear:both}
        .header-banner{
          padding-top: 35px;
          padding-bottom: 100px;
          color: #ffffff;
          font-family: Helvetica, serif;
          font-weight: 100;
          background-image:url("https://grapesjs.com/img/bg-gr-v.png"), url("https://grapesjs.com/img/work-desk.jpg");
          background-attachment:scroll, scroll;
          background-position:left top, center center;
          background-repeat:repeat-y, no-repeat;
          background-size: contain, cover;
        }
        .container-width{
          width: 90%;
          max-width: 1150px;
          margin: 0 auto;
        }
        .logo-container{
          float: left;
          width: 50%;
        }
        .logo{
          background-color: #fff;
          border-radius: 5px;
          width: 130px;
          padding: 10px;
          min-height: 30px;
          text-align: center;
          line-height: 30px;
          color: #4d114f;
          font-size: 23px;
        }
        .menu {
          float: right;
          width: 50%;
        }
        .menu-item{
          float:right;
          font-size: 15px;
          color:#eee;
          width: 130px;
          padding: 10px;
          min-height: 50px;
          text-align: center;
          line-height: 30px;
          font-weight: 400;
        }
        .lead-title{
          margin: 150px 0 30px 0;
          font-size: 40px;
        }
        .sub-lead-title{
          max-width: 650px;
          line-height:30px;
          margin-bottom:30px;
          color: #c6c6c6;
        }
        .lead-btn{
          margin-top: 15px;
          padding:10px;
          width:190px;
          min-height:30px;
          font-size:20px;
          text-align:center;
          letter-spacing:3px;
          line-height:30px;
          background-color:#d983a6;
          border-radius:5px;
          transition: all 0.5s ease;
          cursor: pointer;
        }
        .lead-btn:hover{
          background-color:#ffffff;
          color:#4c114e;
        }
        .lead-btn:active{
          background-color:#4d114f;
          color:#fff;
        }
        .flex-sect{
          background-color: #fafafa;
          padding: 100px 0;
          font-family: Helvetica, serif;
        }
        .flex-title{
          margin-bottom: 15px;
          font-size: 2em;
          text-align: center;
          font-weight: 700;
          color:#555;
          padding: 5px;
        }
        .flex-desc{
          margin-bottom: 55px;
          font-size: 1em;
          color: rgba(0, 0, 0, 0.5);
          text-align: center;
          padding: 5px;
        }
        .cards{
          padding: 20px 0;
          display: flex;
          justify-content: space-around;
          flex-flow: wrap;
        }
        .card{
          background-color: white;
          height: 300px;
          width:300px;
          margin-bottom:30px;
          box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);
          border-radius: 2px;
          transition: all 0.5s ease;
          font-weight: 100;
          overflow: hidden;
        }
        .card:hover{
          margin-top: -5px;
          box-shadow: 0 20px 30px 0 rgba(0, 0, 0, 0.2);
        }
        .card-header{
          height: 155px;
          background-image:url("https://via.placeholder.com/350x250/78c5d6/fff");
          background-size:cover;
          background-position:center center;
        }
        .card-header.ch2{
          background-image:url("https://via.placeholder.com/350x250/459ba8/fff");
        }
        .card-header.ch3{
          background-image:url("https://via.placeholder.com/350x250/79c267/fff");
        }
        .card-header.ch4{
          background-image:url("https://via.placeholder.com/350x250/c5d647/fff");
        }
        .card-header.ch5{
          background-image:url("https://via.placeholder.com/350x250/f28c33/fff");
        }
        .card-header.ch6{
          background-image:url("https://via.placeholder.com/350x250/e868a2/fff");
        }
        .card-body{
          padding: 15px 15px 5px 15px;
          color: #555;
        }
        .card-title{
          font-size: 1.4em;
          margin-bottom: 5px;
        }
        .card-sub-title{
          color: #b3b3b3;
          font-size: 1em;
          margin-bottom: 15px;
        }
        .card-desc{
          font-size: 0.85rem;
          line-height: 17px;
        }
        .am-sect{
          padding-top: 100px;
          padding-bottom: 100px;
          font-family: Helvetica, serif;
        }
        .img-phone{
          float: left;
        }
        .am-container{
          display: flex;
          flex-wrap: wrap;
          align-items: center;
          justify-content: space-around;
        }
        /*
        .am-container{
          perspective: 1000px;
        }*/
        .am-content{
          float:left;
          padding:7px;
          width: 490px;
          color: #444;
          font-weight: 100;
          margin-top: 50px;
        }
        .am-pre{
          padding:7px;
          color:#b1b1b1;
          font-size:15px;
        }
        .am-title{
          padding:7px;
          font-size:25px;
          font-weight: 400;
        }
        .am-desc{
          padding:7px;
          font-size:17px;
          line-height:25px;
        }
        .am-post{
          padding:7px;
          line-height:25px;
          font-size:13px;
        }
        .blk-sect{
          padding-top: 100px;
          padding-bottom: 100px;
          background-color: #222222;
          font-family: Helvetica, serif;
        }
        .blk-title{
          color:#fff;
          font-size:25px;
          text-align:center;
          margin-bottom: 15px;
        }
        .blk-desc{
          color:#b1b1b1;
          font-size:15px;
          text-align:center;
          max-width:700px;
          margin:0 auto;
          font-weight:100;
        }
        .price-cards{
          margin-top: 70px;
          display: flex;
          flex-wrap: wrap;
          align-items: center;
          justify-content: space-around;
        }
        .price-card-cont{
          width: 300px;
          padding: 7px;
          float:left;
        }
        .price-card{
          margin:0 auto;
          min-height:350px;
          background-color:#d983a6;
          border-radius:5px;
          font-weight: 100;
          color: #fff;
          width: 90%;
        }
        .pc-title{
          font-weight:100;
          letter-spacing:3px;
          text-align:center;
          font-size:25px;
          background-color:rgba(0, 0, 0, 0.1);
          padding:20px;
        }
        .pc-desc{
          padding: 75px 0;
          text-align: center;
        }
        .pc-feature{
          color:rgba(255,255,255,0.5);
          background-color:rgba(0, 0, 0, 0.1);
          letter-spacing:2px;
          font-size:15px;
          padding:10px 20px;
        }
        .pc-feature:nth-of-type(2n){
          background-color:transparent;
        }
        .pc-amount{
          background-color:rgba(0, 0, 0, 0.1);
          font-size: 35px;
          text-align: center;
          padding: 35px 0;
        }
        .pc-regular{
          background-color: #da78a0;
        }
        .pc-enterprise{
          background-color: #d66a96;
        }
        .footer-under{
          background-color: #312833;
          padding-bottom: 100px;
          padding-top: 100px;
          min-height: 500px;
          color:#eee;
          position: relative;
          font-weight: 100;
          font-family: Helvetica,serif;
        }
        .led{
          border-radius: 100%;
          width: 10px;
          height: 10px;
          background-color: rgba(0, 0, 0, 0.15);
          float: left;
          margin: 2px;
          transition: all 5s ease;
        }
        .led:hover{
          background-color: #c29fca;/* #eac229 */
          box-shadow: 0 0 5px #9d7aa5, 0 0 10px #e6c3ee;/* 0 0 10px 0 #efc111 */
          transition: all 0s ease;
        }
        .copyright {
          background-color: rgba(0, 0, 0, 0.15);
          color: rgba(238, 238, 238, 0.5);
          bottom: 0;
          padding: 1em 0;
          position: absolute;
          width: 100%;
          font-size: 0.75em;
        }
        .made-with{
          float: left;
          width: 50%;
          padding: 5px 0;
        }
        .foot-social-btns{
          display: none;
          float: right;
          width: 50%;
          text-align: right;
          padding: 5px 0;
        }
        .footer-container{
          display: flex;
          flex-wrap: wrap;
          align-items: stretch;
          justify-content: space-around;
        }
        .foot-list {
          float: left;
          width: 200px;
        }
        .foot-list-title {
          font-weight: 400;
          margin-bottom: 10px;
          padding: 0.5em 0;
        }
        .foot-list-item {
          color: rgba(238, 238, 238, 0.8);
          font-size: 0.8em;
          padding: 0.5em 0;
        }
        .foot-list-item:hover {
          color: rgba(238, 238, 238, 1);
        }
        .foot-form-cont{
          width: 300px;
          float: right;
        }
        .foot-form-title{
          color: rgba(255,255,255,0.75);
          font-weight: 400;
          margin-bottom: 10px;
          padding: 0.5em 0;
          text-align: right;
          font-size: 2em;
        }
        .foot-form-desc{
          font-size: 0.8em;
          color: rgba(255,255,255,0.55);
          line-height: 20px;
          text-align: right;
          margin-bottom: 15px;
        }

        .form {
          border-radius: 3px;
          padding: 10px 15px;
          background-color: rgba(0,0,0,0.2);
        }

        .input,
        .textarea,
        .select,
        .sub-input {
          width: 100%;
          margin-bottom: 15px;
          padding: 7px 10px;
          border-radius: 2px;
          color:#fff;
          background-color: #554c57;
          border: none;
        }

        .select {
          height: 30px;
        }

        .label {
          width: 100%;
          display: block;
        }

        .button,
        .sub-btn{
          width: 100%;
          margin: 15px 0;
          background-color: #785580;
          border: none;
          color:#fff;
          border-radius: 2px;
          padding: 7px 10px;
          font-size: 1em;
          cursor: pointer;
        }
        .sub-btn:hover{
          background-color: #91699a;
        }
        .sub-btn:active{
          background-color: #573f5c;
        }
        .blk-row::after{
          content: "";
          clear: both;
          display: block;
        }
        .blk-row{
          padding: 10px;
        }
        .blk1{
          width: 100%;
          padding: 10px;
          min-height: 75px;
        }
        .blk2{
          float: left;
          width: 50%;
          padding: 10px;
          min-height: 75px;
        }
        .blk3{
          float: left;
          width: 33.3333%;
          padding: 10px;
          min-height: 75px;
        }
        .blk37l{
          float: left;
          width: 30%;
          padding: 10px;
          min-height: 75px;
        }
        .blk37r{
          float: left;
          width: 70%;
          padding: 10px;
          min-height: 75px;
        }
        .heading{padding: 10px;}
        .paragraph{padding: 10px;}

        .bdg-sect{
          padding-top:100px;
          padding-bottom:100px;
          font-family: Helvetica, serif;
          background-color: #fafafa;
        }
        .bdg-title{
          text-align: center;
          font-size: 2em;
          margin-bottom: 55px;
          color: #555555;
        }
        .badges{
          padding:20px;
          display: flex;
          justify-content: space-around;
          align-items: flex-start;
          flex-wrap: wrap;
        }
        .badge{
          width: 290px;
          font-family: Helvetica, serif;
          background-color: white;
          margin-bottom:30px;
          box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2);
          border-radius: 3px;
          font-weight: 100;
          overflow: hidden;
          text-align: center;
        }
        .badge-header{
          height: 115px;
          background-image:url("https://grapesjs.com/img/bg-gr-v.png"), url("https://grapesjs.com/img/work-desk.jpg");
          background-position:left top, center center;
          background-attachment:scroll, fixed;
          overflow: hidden;
        }
        .blurer{
          filter: blur(5px);
        }
        .badge-name{
          font-size: 1.4em;
          margin-bottom: 5px;
        }
        .badge-role{
          color: #777;
          font-size: 1em;
          margin-bottom: 25px;
        }
        .badge-desc{
          font-size: 0.85rem;
          line-height: 20px;
        }
        .badge-avatar{
          width:100px;
          height:100px;
          border-radius: 100%;
          border: 5px solid #fff;
          box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
          margin-top: -75px;
          position: relative;
        }
        .badge-body{
          margin: 35px 10px;
        }
        .badge-foot{
          color:#fff;
          background-color:#a290a5;
          padding-top:13px;
          padding-bottom:13px;
          display: flex;
          justify-content: center;
        }
        .badge-link{
          height: 35px;
          width: 35px;
          line-height: 35px;
          font-weight: 700;
          background-color: #fff;
          color: #a290a5;
          display: block;
          border-radius: 100%;
          margin: 0 10px;
        }
        .quote{
          color:#777;
          font-weight: 300;
          padding: 10px;
          box-shadow: -5px 0 0 0 #ccc;
          font-style: italic;
          margin: 20px 30px;
        }

        @media (max-width: 768px){
          .foot-form-cont{
            width:400px;
          }
          .foot-form-title{
            width:autopx;
          }
        }

        @media (max-width: 480px){
          .foot-lists{
            display:none;
          }
        }
      </style>
    </div>

    <div id="info-panel" style="display:none">
      <br/>
      <svg class="info-panel-logo" xmlns="https://www.w3.org/2000/svg" version="1"><g id="gjs-logo">
        <path d="M40 5l-12.9 7.4 -12.9 7.4c-1.4 0.8-2.7 2.3-3.7 3.9 -0.9 1.6-1.5 3.5-1.5 5.1v14.9 14.9c0 1.7 0.6 3.5 1.5 5.1 0.9 1.6 2.2 3.1 3.7 3.9l12.9 7.4 12.9 7.4c1.4 0.8 3.3 1.2 5.2 1.2 1.9 0 3.8-0.4 5.2-1.2l12.9-7.4 12.9-7.4c1.4-0.8 2.7-2.2 3.7-3.9 0.9-1.6 1.5-3.5 1.5-5.1v-14.9 -12.7c0-4.6-3.8-6-6.8-4.2l-28 16.2" style="fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-width:10;stroke:#fff"/>
      </g></svg>
      <br/>
      <div class="info-panel-label">
        <b>GrapesJS Webpage Builder</b> is a simple showcase of what is possible to achieve with the
        <a class="info-panel-link gjs-four-color" target="_blank" href="https://github.com/artf/grapesjs">GrapesJS</a>
        core library
        <br/><br/>
        For any hint about the demo check the
        <a class="info-panel-link gjs-four-color" target="_blank" href="https://github.com/artf/grapesjs-preset-webpage">Webpage Preset repository</a>
        and open an issue. For problems with the builder itself, open an issue on the main
        <a class="info-panel-link gjs-four-color" target="_blank" href="https://github.com/artf/grapesjs">GrapesJS repository</a>
        <br/><br/>
        Being a free and open source project contributors and supporters are extremely welcome.
        If you like the project support it with a donation of your choice or become a backer/sponsor via
        <a class="info-panel-link gjs-four-color" target="_blank" href="https://opencollective.com/grapesjs">Open Collective</a>
      </div>
    </div>

    <script type="text/javascript">
      var lp = './img/';
      var plp = 'https://via.placeholder.com/350x250/';
      var images = [
        lp + 'noor.jpg',
        lp + 'Nigga Headshot 90x90.jpg',
        lp + 'dua 90x90.jpg',
        plp + '78c5d6/fff',
        plp + '459ba8/fff',
        plp + '79c267/fff',
        plp + 'c5d647/fff',
        plp + 'f28c33/fff',
        plp + 'e868a2/fff',
        plp + 'cc4360/fff',
        lp + 'work-desk.jpg',
        lp + 'phone-app.png',
        lp + 'bg-gr-v.png'
      ];

      var editor  = grapesjs.init({
        height: '100%',
        container : '#gjs',
        fromElement: true,
        showOffsets: true,
        assetManager: {
          embedAsBase64: true,
          assets: images
        },
        selectorManager: { componentFirst: true },
        styleManager: {
          sectors: [{
              name: 'General',
              properties:[
                {
                  extend: 'float',
                  type: 'radio',
                  default: 'none',
                  options: [
                    { value: 'none', className: 'fa fa-times'},
                    { value: 'left', className: 'fa fa-align-left'},
                    { value: 'right', className: 'fa fa-align-right'}
                  ],
                },
                'display',
                { extend: 'position', type: 'select' },
                'top',
                'right',
                'left',
                'bottom',
              ],
            }, {
                name: 'Dimension',
                open: false,
                properties: [
                  'width',
                  {
                    id: 'flex-width',
                    type: 'integer',
                    name: 'Width',
                    units: ['px', '%'],
                    property: 'flex-basis',
                    toRequire: 1,
                  },
                  'height',
                  'max-width',
                  'min-height',
                  'margin',
                  'padding'
                ],
              },{
                name: 'Typography',
                open: false,
                properties: [
                    'font-family',
                    'font-size',
                    'font-weight',
                    'letter-spacing',
                    'color',
                    'line-height',
                    {
                      extend: 'text-align',
                      options: [
                        { id : 'left',  label : 'Left',    className: 'fa fa-align-left'},
                        { id : 'center',  label : 'Center',  className: 'fa fa-align-center' },
                        { id : 'right',   label : 'Right',   className: 'fa fa-align-right'},
                        { id : 'justify', label : 'Justify',   className: 'fa fa-align-justify'}
                      ],
                    },
                    {
                      property: 'text-decoration',
                      type: 'radio',
                      default: 'none',
                      options: [
                        { id: 'none', label: 'None', className: 'fa fa-times'},
                        { id: 'underline', label: 'underline', className: 'fa fa-underline' },
                        { id: 'line-through', label: 'Line-through', className: 'fa fa-strikethrough'}
                      ],
                    },
                    'text-shadow'
                ],
              },{
                name: 'Decorations',
                open: false,
                properties: [
                  'opacity',
                  'border-radius',
                  'border',
                  'box-shadow',
                  'background', // { id: 'background-bg', property: 'background', type: 'bg' }
                ],
              },{
                name: 'Extra',
                open: false,
                buildProps: [
                  'transition',
                  'perspective',
                  'transform'
                ],
              },{
                name: 'Flex',
                open: false,
                properties: [{
                  name: 'Flex Container',
                  property: 'display',
                  type: 'select',
                  defaults: 'block',
                  list: [
                    { value: 'block', name: 'Disable'},
                    { value: 'flex', name: 'Enable'}
                  ],
                },{
                  name: 'Flex Parent',
                  property: 'label-parent-flex',
                  type: 'integer',
                },{
                  name: 'Direction',
                  property: 'flex-direction',
                  type: 'radio',
                  defaults: 'row',
                  list: [{
                    value: 'row',
                    name: 'Row',
                    className: 'icons-flex icon-dir-row',
                    title: 'Row',
                  },{
                    value: 'row-reverse',
                    name: 'Row reverse',
                    className: 'icons-flex icon-dir-row-rev',
                    title: 'Row reverse',
                  },{
                    value: 'column',
                    name: 'Column',
                    title: 'Column',
                    className: 'icons-flex icon-dir-col',
                  },{
                    value: 'column-reverse',
                    name: 'Column reverse',
                    title: 'Column reverse',
                    className: 'icons-flex icon-dir-col-rev',
                  }],
                },{
                  name: 'Justify',
                  property: 'justify-content',
                  type: 'radio',
                  defaults: 'flex-start',
                  list: [{
                    value: 'flex-start',
                    className: 'icons-flex icon-just-start',
                    title: 'Start',
                  },{
                    value: 'flex-end',
                    title: 'End',
                    className: 'icons-flex icon-just-end',
                  },{
                    value: 'space-between',
                    title: 'Space between',
                    className: 'icons-flex icon-just-sp-bet',
                  },{
                    value: 'space-around',
                    title: 'Space around',
                    className: 'icons-flex icon-just-sp-ar',
                  },{
                    value: 'center',
                    title: 'Center',
                    className: 'icons-flex icon-just-sp-cent',
                  }],
                },{
                  name: 'Align',
                  property: 'align-items',
                  type: 'radio',
                  defaults: 'center',
                  list: [{
                    value: 'flex-start',
                    title: 'Start',
                    className: 'icons-flex icon-al-start',
                  },{
                    value: 'flex-end',
                    title: 'End',
                    className: 'icons-flex icon-al-end',
                  },{
                    value: 'stretch',
                    title: 'Stretch',
                    className: 'icons-flex icon-al-str',
                  },{
                    value: 'center',
                    title: 'Center',
                    className: 'icons-flex icon-al-center',
                  }],
                },{
                  name: 'Flex Children',
                  property: 'label-parent-flex',
                  type: 'integer',
                },{
                  name: 'Order',
                  property: 'order',
                  type: 'integer',
                  defaults: 0,
                  min: 0
                },{
                  name: 'Flex',
                  property: 'flex',
                  type: 'composite',
                  properties  : [{
                    name: 'Grow',
                    property: 'flex-grow',
                    type: 'integer',
                    defaults: 0,
                    min: 0
                  },{
                    name: 'Shrink',
                    property: 'flex-shrink',
                    type: 'integer',
                    defaults: 0,
                    min: 0
                  },{
                    name: 'Basis',
                    property: 'flex-basis',
                    type: 'integer',
                    units: ['px','%',''],
                    unit: '',
                    defaults: 'auto',
                  }],
                },{
                  name: 'Align',
                  property: 'align-self',
                  type: 'radio',
                  defaults: 'auto',
                  list: [{
                    value: 'auto',
                    name: 'Auto',
                  },{
                    value: 'flex-start',
                    title: 'Start',
                    className: 'icons-flex icon-al-start',
                  },{
                    value   : 'flex-end',
                    title: 'End',
                    className: 'icons-flex icon-al-end',
                  },{
                    value   : 'stretch',
                    title: 'Stretch',
                    className: 'icons-flex icon-al-str',
                  },{
                    value   : 'center',
                    title: 'Center',
                    className: 'icons-flex icon-al-center',
                  }],
                }]
              }
            ],
        },
        plugins: [
          'gjs-blocks-basic',
          'grapesjs-plugin-forms',
          'grapesjs-component-countdown',
          'grapesjs-plugin-export',
          'grapesjs-tabs',
          'grapesjs-custom-code',
          'grapesjs-touch',
          'grapesjs-parser-postcss',
          'grapesjs-tooltip',
          'grapesjs-tui-image-editor',
          'grapesjs-typed',
          'grapesjs-style-bg',
          'grapesjs-preset-webpage',
        ],
        pluginsOpts: {
          'gjs-blocks-basic': { flexGrid: true },
          'grapesjs-tui-image-editor': {
            script: [
              // 'https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.6.7/fabric.min.js',
              'https://uicdn.toast.com/tui.code-snippet/v1.5.2/tui-code-snippet.min.js',
              'https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.js',
              'https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.js'
            ],
            style: [
              'https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.css',
              'https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.css',
            ],
          },
          'grapesjs-tabs': {
            tabsBlock: { category: 'Extra' }
          },
          'grapesjs-typed': {
            block: {
              category: 'Extra',
              content: {
                type: 'typed',
                'type-speed': 40,
                strings: [
                  'Text row one',
                  'Text row two',
                  'Text row three',
                ],
              }
            }
          },
          'grapesjs-preset-webpage': {
            modalImportTitle: 'Import Template',
            modalImportLabel: '<div style="margin-bottom: 10px; font-size: 13px;">Paste here your HTML/CSS and click Import</div>',
            modalImportContent: function(editor) {
              return editor.getHtml() + '<style>'+editor.getCss()+'</style>'
            },
          },
        },
      });

      editor.I18n.addMessages({
        en: {
          styleManager: {
            properties: {
              'background-repeat': 'Repeat',
              'background-position': 'Position',
              'background-attachment': 'Attachment',
              'background-size': 'Size',
            }
          },
        }
      });

      var pn = editor.Panels;
      var modal = editor.Modal;
      var cmdm = editor.Commands;

      // Update canvas-clear command
      cmdm.add('canvas-clear', function() {
        if(confirm('Are you sure to clean the canvas?')) {
          editor.runCommand('core:canvas-clear')
          setTimeout(function(){ localStorage.clear()}, 0)
        }
      });

      // Add info command
      var mdlClass = 'gjs-mdl-dialog-sm';
      var infoContainer = document.getElementById('info-panel');

      cmdm.add('open-info', function() {
        var mdlDialog = document.querySelector('.gjs-mdl-dialog');
        mdlDialog.className += ' ' + mdlClass;
        infoContainer.style.display = 'block';
        modal.setTitle('About this demo');
        modal.setContent(infoContainer);
        modal.open();
        modal.getModel().once('change:open', function() {
          mdlDialog.className = mdlDialog.className.replace(mdlClass, '');
        })
      });

      // pn.addButton('options', {
      //   id: 'open-info',
      //   className: 'fa fa-question-circle',
      //   command: function() { editor.runCommand('open-info') },
      //   attributes: {
      //     'title': 'About',
      //     'data-tooltip-pos': 'bottom',
      //   },
      // });


      // Simple warn notifier
      var origWarn = console.warn;
      toastr.options = {
        closeButton: true,
        preventDuplicates: true,
        showDuration: 250,
        hideDuration: 150
      };
      console.warn = function (msg) {
        if (msg.indexOf('[undefined]') == -1) {
          toastr.warning(msg);
        }
        origWarn(msg);
      };


      // Add and beautify tooltips
      [['sw-visibility', 'Show Borders'], ['preview', 'Preview'], ['fullscreen', 'Fullscreen'],
       ['export-template', 'Export'], ['undo', 'Undo'], ['redo', 'Redo'],
       ['gjs-open-import-webpage', 'Import'], ['canvas-clear', 'Clear canvas']]
      .forEach(function(item) {
        pn.getButton('options', item[0]).set('attributes', {title: item[1], 'data-tooltip-pos': 'bottom'});
      });
      [['open-sm', 'Style Manager'], ['open-layers', 'Layers'], ['open-blocks', 'Blocks']]
      .forEach(function(item) {
        pn.getButton('views', item[0]).set('attributes', {title: item[1], 'data-tooltip-pos': 'bottom'});
      });
      var titles = document.querySelectorAll('*[title]');

      for (var i = 0; i < titles.length; i++) {
        var el = titles[i];
        var title = el.getAttribute('title');
        title = title ? title.trim(): '';
        if(!title)
          break;
        el.setAttribute('data-tooltip', title);
        el.setAttribute('title', '');
      }


      // Store and load events
      editor.on('storage:load', function(e) { console.log('Loaded ', e) });
      editor.on('storage:store', function(e) { console.log('Stored ', e) });


      // Do stuff on load
      editor.on('load', function() {
        var $ = grapesjs.$;

        // Show borders by default
        pn.getButton('options', 'sw-visibility').set({
          command: 'core:component-outline',
          'active': true,
        });

        // Show logo with the version
        var logoCont = document.querySelector('.gjs-logo-cont');
        document.querySelector('.gjs-logo-version').innerHTML = 'v' + grapesjs.version;
        var logoPanel = document.querySelector('.gjs-pn-commands');
        logoPanel.appendChild(logoCont);


        // Load and show settings and style manager
        var openTmBtn = pn.getButton('views', 'open-tm');
        openTmBtn && openTmBtn.set('active', 1);
        var openSm = pn.getButton('views', 'open-sm');
        openSm && openSm.set('active', 1);

        // Remove trait view
        pn.removeButton('views', 'open-tm');

        // Add Settings Sector
        var traitsSector = $('<div class="gjs-sm-sector no-select">'+
          '<div class="gjs-sm-sector-title"><span class="icon-settings fa fa-cog"></span> <span class="gjs-sm-sector-label">Settings</span></div>' +
          '<div class="gjs-sm-properties" style="display: none;"></div></div>');
        var traitsProps = traitsSector.find('.gjs-sm-properties');
        traitsProps.append($('.gjs-traits-cs'));
        $('.gjs-sm-sectors').before(traitsSector);
        traitsSector.find('.gjs-sm-sector-title').on('click', function(){
          var traitStyle = traitsProps.get(0).style;
          var hidden = traitStyle.display == 'none';
          if (hidden) {
            traitStyle.display = 'block';
          } else {
            traitStyle.display = 'none';
          }
        });

        // Open block manager
        var openBlocksBtn = editor.Panels.getButton('views', 'open-blocks');
        openBlocksBtn && openBlocksBtn.set('active', 1);

        // Move Ad
        $('#gjs').append($('.ad-cont'));
      });

      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-74284223-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
