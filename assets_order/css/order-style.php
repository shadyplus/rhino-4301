@charset "utf-8";
/* CSS Document */
* {
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	padding: 0;
	/* [disabled]margin:0; */
}
 @font-face {font-family: ProximaLight;src: url(../fonts/ProximaLight.otf);}
 @font-face {font-family: ProximaBold;src: url(../fonts/ProximaBold.otf);}
  @font-face {font-family: ProximaBlack;src: url(../fonts/ProximaBlack.otf);}

body {
    width:100%;
    margin:0;
    background-position:center !important;
   
    font-family: 'SourceSansPro-Bold', sans-serif;
    font-size: 24px;
    line-height: normal;
    overflow-x: hidden !important;
    color: #3f0c53;
}
.container{
    margin:0 auto;
    max-width: 800px;
    padding-right: 0px !important;
    padding-left: 0px !important;
}
.bigContainer{
    margin:0 auto;
    max-width: 800px;
}
.mother{
    
}



@media(min-width: 768px){
.indirim-sure-text{
    width: 107%;
    text-align: center;
    font-weight: 900;
    font-size: 205%;
    font-family: 'Alatsi', sans-serif;
    padding-top: 39px;
}
}


@media(max-width: 767px){
.indirim-sure-text{
    width: 121%;
    text-align: center;
    font-weight: 900;
    font-size: 85%;
    font-family: 'Alatsi', sans-serif;
    padding: 15px 0px 6px 0px;
}
}

@media(min-width: 768px){
.zaman{
    background-color: #e8acac;
    padding: 0px 30px 0px 30px;
    font-size: 50px;
    font-weight: 900;
    border-radius: 11px;
}
}

@media(max-width: 767px){
.zaman{
    background-color: #e8acac;
    padding: 5px 60% 5px 60%;
    font-size: 17px;
    font-weight: 900;
    border-radius: 11px;
}
}

@media(min-width: 768px){
.zamanText{
    padding: 0 0 0 33px;
    font-weight: 800;
    margin-top: -13px;
    font-size: 19px;
}
}

@media(max-width: 767px){
.zamanText{
    padding: 0 0 0 16px;
    font-weight: 800;
    font-size: 10px;
    text-align: center;
    width: 160.333333%;
    margin-top: -7px;
}
}

.urunAciklama{
    color: #000000;
    font-family: 'Open Sans', sans-serif;
    font-weight: 500;
}

.urunPaketAdi{
    font-family: 'Oswald', sans-serif;
    font-size: 26px;
}

.urunUcretsizKargo{
    font-size: 13px;
    background-color: #000000;
    padding: 6px 7px 6px 7px;
    color: #ffffff;
    margin: 79px 35px 8px 0px;
    text-align: center;
    border-radius: 8px;
    font-family: 'Nanum Gothic', sans-serif;
    font-weight: 100;
    width: 97%;
}



.urunSecDiv {
	position: absolute;
    margin: 6px 0px 0px 11px;
    z-index: 999;
}


.odemeYontemi {
    background-color: white;
}

.odemeYontemiAdi{
    font-family: 'Oswald', sans-serif;
    font-size: 97%;
    width: 80%;
    padding: 2px 0px 2px 5px;
}

.odemeYontemiAciklama{
    color: #000000;
    font-family: 'Open Sans', sans-serif;
    font-weight: 500;
    font-size: 12px;
    padding: 2px 0px 10px 5px;
}


.sozlesmeOnay{
    direction: rtl;
    text-decoration: none;
    color: #000000;
    font-size: 15px;
}


.firstHeader{
    float: left;
    width:100%;
    background-color: #222222;
    position: relative;
    -webkit-box-shadow: 0px 4px 22px -6px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 4px 22px -6px rgba(0,0,0,0.75);
    box-shadow: 0px 4px 22px -6px rgba(0,0,0,0.75);
}
.firstHeader p{
    float: left;
    width:50%;
    color: #fff;
    font-family: Arial, sans-serif;
    font-size: 18px;
    padding:10px 0;
    padding-left: 1%;
}
.flags{
    float: right;
    width:50%;
    padding:10px 0;
    padding-right: 1%;
}
.flags img{
    float: right;
    width: 12%;
    padding-left: 18px;
}
.flags span{
    float: right;
    color: #fff;
    font-family: Arial, sans-serif;
    font-size: 18px;

}
.secHeader{
    float: left;
    width: 100%;
    background-color: #073673;
    box-shadow: 0px 3px 60px #000;
    position: relative;
}
.flogo{
    float: left;
    width: 100%;
    padding: 3% 0;
    padding-left: 6%;
}
.flogo img{
    float: left;
    width: 35%;
}
.slogo{
    float: left;
    width:50%;
    padding-right: 1%;
}
.slogo img{
    float: right;
    width:90%;
}
.bannerCounterDiv{
    float: left;
    width:100%;
    text-align: center;
    position: relative;
    padding-bottom: 3%;
}
.titleSpan{
    float: left;
    width: 100%;
    font-family: 'ProximaLight';
    font-size: 40px;
    position: relative;
    z-index: 111;
    margin: 2% 0 0 0;
    color: #fff;
}
.subtitleSpan{
    float: left;
    width: 100%;
    font-family: ProximaBlack;
    font-size: 40px;
    position: relative;
    font-weight: 100;
    line-height: 40px;
    z-index: 111;
    color: #f7fe00;
    margin-bottom: 1%;
}
.borderImage{
    max-width: 90%;
}
.outerCounter{
    float: left;
    width:100%;
    padding-left: 19%;
}
.arothing{
    position: absolute;
    left: 16%;
    top:0;
}
.haho{
}
.Only{
    padding-top: 7px;
    color: #000 !important;
}
.selecto{
    float: left;
    width:100%;
    background: #ff7f00;
    color: #fff;
    font-size: 17px;
    border-radius: 5px;
    text-align: center;
    border: none;
    padding: 10px 0;
    margin-top: 5%;
}
.secAro{
    position: absolute;
    left: -8px !important;
    top: 26% !important;
    width: 10% !important;
    z-index: 999;
}
.inputUnderRirle{
    font-family: 'SourceSansPro-Bold', sans-serif;
    font-size: 21px;
    float: left;
    width: 100%;
    color: #fff;
}
.selectora{
    float: left;
    width:33.33%;
    padding-right: 2%;
}
.abbado{
    padding-left: 0%;
    width: 67%;
    cursor: pointer;
    float: left;
}
.fazlakeDiv{
    float: left;
    width:100%;
}
.fazlakeInner{
    float: left;
    width:100%;
    border-radius: 5px;
    background-color: #f1dedc;
    padding: 2% 4%;
    margin-top: 4%;
}
.fazlakeInner span{
    color: #5c4875;
    float: left;
    width: 100%;
    font-size: 27px;
}
.fazlakeInner h1{
    color: #5c4875;
    float: left;
    width: 100%;
    font-size: 42px;
}
.fazlakeInner p{
    color: #5c4875;
    float: left;
    width: 50%;
    font-weight: 900;
    font-size: 23px;
    padding-bottom: 2%;
}
#cond{
    float: left;
    width: 20%;
    margin-top: 5px;
    clear: left;
}
input[type="checkbox"]{
    width: 20px; /*Desired width*/
    height: 20px; /*Desired height*/
}
.fnot{
    text-decoration: line-through;
}
.haya{
    color: #ff9920 !important;
    font-weight: 900;
    font-family: HelveticaNeue;
}
.haya span{
    float: left;
    width: 100%;
    border-radius: 5px;
    background-color: #ff9920;
    color: #fff !important;
    margin: 2% 0;
    padding: 3%;
    font-weight: 100;
}
.black{
    color: #000 !important;
}
.total{
    float: left;
    width:100%;
    padding: 5px 35px;
}
.total p{
    width:50%;
    color: #5c4875;
    float: left;
    font-size: 36px;
}
.sero{
    float: right;
    width:50%;
}
.sero h1{
    text-align: center;
    float: right;
    color: #5c4875;
    width: 100%;
    font-size: 36px;
}




.formDiv{
    float: left;
    width:100%;
    background-position:center !important;
    position: relative;
    z-index: 996;
    background-color: #ffffff;
    background-repeat: no-repeat;
}
.formLand{
    float: left;
    width:100%;
    padding-top: 16px;
    position: relative;
    z-index: 111;
}
.formLand h1{
    float: left;
    width:100%;
    text-align: center;
    color: #fff;
    font-family: 'HelveticaNeue', sans-serif;
    font-size: 45px;
    position: relative;
    font-weight: 100;
    z-index: 111;
}
.formLand h1 small{
    font-weight: 100;
}
.formLand h1 b{
    font-size: 40px;
    line-height: 34px;
}
.theForm{
    float: left;
    width:100%;
    padding:0 10px;
    padding-top: 10px;
    position: relative;
    z-index: 111;
    background-color: #f4ebd9;
}
.leftCounters{
    float: left;
    width:50%;
    position: relative;
}
.counter{
    float: left;
    width:100%;
}
.kalanurun{
    float: left;
    width: 31%;
}
#quata{
    float: left;
    width: 50%;
    font-size: 72px;
    color: #dc7249;
    font-family: 'SourceSansPro-Bold', sans-serif;
    margin: 0;
    text-align: center;
    line-height: 62px;
    height: 74px;
    margin-left: 119px;
    border: 4px solid #010101;
}
#quata1{
    float: left;
    width: 50%;
    font-size: 72px;
    background-color: #fff;
    color: #c5c5c5;
    font-family: 'SourceSansPro-Bold', sans-serif;
    margin: 0;
    font-weight: 900;
    text-align: center;
    line-height: 62px;
    height: 74px;
    margin-left: 119px;
    border: 4px solid #7fbed5;
}
#quata2{
    float: left;
    width: 70%;
    font-size: 60px;
    background-color: #f7fe00;
    color: #3f2f28;
    font-family: ProximaBold;
    margin: 0;
    font-weight: 900;
    text-align: center;
    line-height: 62px;
    margin-left: 15%;
    border-radius: 10px;
}
.sayac{
    float: left;
    width: 47%;
}
.sayac span{:width: 100%font-weight: 900;font-family: 'ProximaBold';font-size: 25px;float: left;width: 100%;text-align: center;color: #fff;line-height: 20px;margin-bottom: 10px;}
.defaultCountdown{
    float: left;
    width:100%;
}
#timer{
    /*float: left;
    width:100%;*/
}
#vals{
    float: left;
    width: 83%;
    font-size: 60px;
    color: #3f2f28;
    padding: 0;
    background-color: #f7fe00;
    font-weight: 900;
    margin: 0;
    font-family: ProximaBold;
    text-align: left;
    line-height: 62px;
    background-repeat: no-repeat;
    background-size: cover;
    padding-left: 18px;
    border-radius: 10px;
    margin-left: 12%;
}
#h{
    float: left;
    margin-right: 0px;
}
#m{
    float: left;
    margin-right: 0px;
    margin-left: 5px;
}
#s{
    float: left;
    margin-left: 5px;
}
#labels{
    float: left;
    width:100%;
    padding-left: 103px;
    padding-top: 10px;
}

#hl{
    font-size: 15px;
    margin-right: 80px;
    color: #fff;
    float: left;
}
#ml{
    font-size: 18px;
    margin-bottom: 10px;
    color: #fff;
    float: left;
}
#sl{
    font-size: 15px;
    margin-left: 69px;
    color: #fff;
    float: left;
}
.kalanurun span{
    font-family: 'ProximaBold';
    font-size: 25px;
    float: left;
    width:100%;
    text-align: center;
    color: #fff;
    line-height: 20px;
    margin-bottom: 10px;
}
.RightInput{
    float: right;
    width:50%;
    padding-left: 30px;
    padding-right: 15px;
    padding-bottom: 2%;
    position: relative;
}
.inputTitle{
    font-family: ProximaBlack;
    font-size: 26px;
    float: left;
    width: 100%;
    font-weight: 900;
    padding-bottom: 2%;
    color: #ffffff;
}
.RightInput input{
    float: right;
    width:100%;
    font-size: 20px;
    padding: 2% 0;
    padding-left: 3%;
    background: #ffffff;
    font-family: 'Hind Madurai', sans-serif;
    margin-bottom: 4%;
    border: none;
    border-radius: 5px;
    height: 50px;
    outline: none;
    border: 2px solid #ded5c4;
}
.Start1 > select{
    float: left;
    width: 100%;
    font-size: 20px;
    padding: 2% 0;
    padding-left: 3%;
    font-family: 'Hind Madurai', sans-serif;
    margin-bottom: 4%;
    border: none;
    border-radius: 5px;
    -webkit-appearance: none;
    -moz-appearance: none;
    outline: none;
    cursor: pointer;
    background: url(../comnet/view/Landing/orders/assets/img/aro.png) no-repeat #fff;
    background-position: 97% 50%;
    height: 50px;
    background-size: 4%;
    border: 2px solid #ded5c4;
}

.selek {float: left;width: 100%;margin-bottom: 4%;}
.Start1 > textarea {border: 2px solid #ded5c4 !important;float: left;width: 100%;resize: none;border: none;font-family: 'Hind Madurai', sans-serif;font-size: 20px;border-radius: 5px;height: 130px;padding: 2%;outline: none;margin-bottom: 4%;}
.selek > select{
    float: left;
    width: 48%;
    margin: 0 1%;
    font-size: 20px;
    padding: 2% 0;
    padding-left: 3%;
    font-family: 'Hind Madurai', sans-serif;
    border: none;
    border-radius: 5px;
    -webkit-appearance: none;
    -moz-appearance: none;
    outline: none;
    cursor: pointer;
    background: url(../comnet/view/Landing/orders/assets/img/aro.png) no-repeat #fff;
    background-position: 97% 50%;
    background-size: 8%;
    height: 50px;
}

.inputoption{
    float: left;
    line-height: 46px;
    height: 65px;
    width:100%;
    border: 8px solid #de006d;
    font-size: 22px;
    padding-left: 20px;
    margin-bottom: 18px;
}


::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    color: #000;
}
::-moz-placeholder { /* Firefox 19+ */
    color: #000;
}
:-ms-input-placeholder { /* IE 10+ */
    color: #000;
}
:-moz-placeholder { /* Firefox 18- */
    color: #000;
}
.leftoption{
    float: left;
    width:30%;
}
.leftoption img{
    float: left;
    width:100%;
}


.firstC{
    float: left;
    width:100%;
    font-size: 21px;
}
.continTitle{
    float: left;
    width:100%;
    font-family: 'SourceSansPro-Black', sans-serif;
    font-size: 36px;
    color: #000;
    padding-left: 271px;
    padding-bottom: 7px;
}
.bolder{
    font-family: 'SourceSansPro-Black', sans-serif;
}
.centerTextForm{
    float: left;
    width:100%;
    text-align: center;
    font-family: 'SourceSansPro-Black', sans-serif;
    font-size: 30px;
    color: #000;
    padding-top: 5px;
}
.centerTextForm1{
    float: left;
    width: 100%;
    text-align: center;
    font-family: 'SourceSansPro-Bold-Book', sans-serif;
    font-size: 22px;
    color: #000;
    padding: 0 100px;
}
.BtnDiv0{
    float: left;
    width:100%;
    text-align: center;
    padding-top: 15px;
}
.finalbtn{
    width: 493px;
    height: 57px;
    background-image: url("../comnet/view/Landing/orders/assets/img/fbtn.html");
    background-size: 100%;
    border: none;
}
.commentsDiv{
    float: left;
    width:100%;
}
.theComments{
    float: left;
    width:100%;
    background-color: #fff;
}
.logodiv{
    float: left;
    width:100%;
    padding-left: 32px;
}
.logodiv img{
    float: left;
}
.border{
    float: left;
    width:100%;
}
.border img{
    float: left;
    width:100%;
}


@media all {
    .lightbox { display: none; }
    .fl-page h1,
    .fl-page h3,
    .fl-page h4 {
        font-family: 'HelveticaNeue-UltraLight', 'Helvetica Neue UltraLight', 'Helvetica Neue', Arial, Helvetica, sans-serif;
        font-weight: 100;
        letter-spacing: 1px;
    }
    .fl-page h1 { font-size: 110px; margin-bottom: 0.5em; }
    .fl-page h1 i { font-style: normal; color: #ddd; }
    .fl-page h1 span { font-size: 30px; color: #333;}
    .fl-page h3 { text-align: right; }
    .fl-page h3 { font-size: 15px; }
    .fl-page h4 { font-size: 2em; }
    .fl-page .jumbotron { margin-top: 2em; }
    .fl-page .doc { margin: 2em 0;}
    .fl-page .btn-download { float: right; }
    .fl-page .btn-default { vertical-align: bottom; }

    .fl-page .btn-lg span { font-size: 0.7em; }
    .fl-page .footer { margin-top: 3em; color: #aaa; font-size: 0.9em;}
    .fl-page .footer a { color: #999; text-decoration: none; margin-right: 0.75em;}
    .fl-page .github { margin: 2em 0; }
    .fl-page .github a { vertical-align: top; }
    .fl-page .marketing a { color: #999; }

    /* override default feather style... */
    .fixwidth {
        background: rgba(256,256,256, 0.8);
    }
    .fixwidth .featherlight-content {
        width: 500px;
        padding: 25px;
        color: #fff;
        background: #111;
    }
    .fixwidth .featherlight-close {
        color: #fff;
        background: #333;
    }

}
@media(max-width: 768px){
    .fl-page h1 span { display: block; }
    .fl-page .btn-download { float: none; margin-bottom: 1em; }
}

@media all{.featherlight{display:none;position:fixed;top:0;right:0;bottom:0;left:0;z-index:2147483647;text-align:center;white-space:nowrap;cursor:pointer;background:#333;background:rgba(0,0,0,0)}.featherlight:last-of-type{background:rgba(0,0,0,.8)}.featherlight:before{content:'';display:inline-block;height:100%;vertical-align:middle;margin-right:-.25em}.featherlight .featherlight-content{position:relative;text-align:left;vertical-align:middle;display:inline-block;overflow:auto;padding:25px 25px 0;border-bottom:25px solid transparent;max-height:100%;background:#fff;cursor:auto;white-space:normal}.featherlight .featherlight-inner{display:block;width: 100%;height: 100%;left: 24.5%;top: 18%;/* min-width: 664px; */}.featherlight .featherlight-close-icon{position:absolute;z-index:9999;top:0;right: 1px;line-height:25px;width:25px;cursor:pointer;text-align:center;font-family:Arial,sans-serif;background:#fff;background:rgba(255,255,255,.3);color:#000;}.featherlight .featherlight-image{width:100%}.featherlight-iframe .featherlight-content{border-bottom:0;padding:0}.featherlight iframe{border:0}}@media only screen and (max-width:1024px){.featherlight .featherlight-content{max-height:100%;padding:10px 10px 0;border-bottom:10px solid transparent}}
.featherlight .featherlight-content {
    position: relative;
    text-align: left;
    vertical-align: middle;
    display: inline-block;
    width: 52%;
    height: 64%;
    left: 11px;
    top: 0%;
    overflow: auto;
    padding: 25px 25px 0;
    border-bottom: 25px solid transparent;
    /* min-width: 664px; */
    max-height: 100%;
    background: #fff;
    cursor: auto;
    white-space: normal;
    background-color: #312a2a;
}



.thehover:hover .youic{
    display:block;
}
.btnDivInner11{
    float: left;
    width:100%;
    text-align: center;
    padding: 40px 2px;
    position: relative;
    z-index: 999;
}
.btnDivInner11 span {
    padding: 12px 39px;
    bottom: 20px;
    right: -140px;
    line-height: 43px;
    font-family: 'SourceSansPro-Bold', sans-serif;
    font-size: 18px;
    color: #000;
    float: left;
    width:100%;
    font-weight: 900;
    text-align: center;

}
.btnDivInner11 span p{
    text-align: center;
    text-decoration: none;
    font-size: 18px;
    color: #000;
    background-color: #c5d7e4;
    font-weight: 900;
    float: left;
    line-height: 20px;
    -webkit-box-shadow: 0px 0px 24px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 24px 0px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 24px 0px rgba(0,0,0,0.75);
    padding: 11px 0px;
    width:100%;
    border-radius: 10px;
}
.btnDivInner123{
    float: left;
    width:100%;
    text-align: center;
    padding: 40px 2px;
    position: relative;
    z-index: 999;
}
.btnDivInner123 span {
    padding: 12px 39px;
    bottom: 20px;
    right: -140px;
    line-height: 43px;
    font-family: 'SourceSansPro-Bold', sans-serif;
    font-size: 18px;
    color: #000;
    float: left;
    width:100%;
    font-weight: 900;
    text-align: center;

}
.btnDivInner123 span p{
    text-align: center;
    text-decoration: none;
    font-size: 18px;
    color: #000;
    background-color: #fcc748;
    font-weight: 900;
    float: left;
    line-height: 20px;
    -webkit-box-shadow: 0px 0px 24px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 24px 0px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 24px 0px rgba(0,0,0,0.75);
    padding: 11px 0px;
    width:100%;
    border-radius: 10px;
    border:1px solid #595857;
}
.btnzDiv{
    float: left;
    width:100%;
    margin: 4% 0;
}
.fbtnDiv{
    float: left;
    width: 100%;
    text-align: center;
}


.btnDivInnerlool{
    float: left;
    width:100%;
    text-align: center;
    padding: 40px 2px;
    padding-right: 15px;
}
.btnDivInnerlool a {
    border: 1px solid #595755;
    padding: 12px 39px;
    bottom: 20px;
    right: -140px;
    line-height: 43px;
    float: right;
    border-radius: 10px;
    color: #fff;
    background: rgba(241,111,92,1);
    background: -moz-linear-gradient(top, rgba(241,111,92,1) 0%, rgba(246,41,12,1) 0%, rgba(237,134,40,1) 0%, rgba(250,189,66,1) 1%, rgba(246,171,58,1) 33%, rgba(237,134,40,1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(241,111,92,1)), color-stop(0%, rgba(246,41,12,1)), color-stop(0%, rgba(237,134,40,1)), color-stop(1%, rgba(250,189,66,1)), color-stop(33%, rgba(246,171,58,1)), color-stop(100%, rgba(237,134,40,1)));
    background: -webkit-linear-gradient(top, rgba(241,111,92,1) 0%, rgba(246,41,12,1) 0%, rgba(237,134,40,1) 0%, rgba(250,189,66,1) 1%, rgba(246,171,58,1) 33%, rgba(237,134,40,1) 100%);
    background: -o-linear-gradient(top, rgba(241,111,92,1) 0%, rgba(246,41,12,1) 0%, rgba(237,134,40,1) 0%, rgba(250,189,66,1) 1%, rgba(246,171,58,1) 33%, rgba(237,134,40,1) 100%);
    background: -ms-linear-gradient(top, rgba(241,111,92,1) 0%, rgba(246,41,12,1) 0%, rgba(237,134,40,1) 0%, rgba(250,189,66,1) 1%, rgba(246,171,58,1) 33%, rgba(237,134,40,1) 100%);
    background: linear-gradient(to bottom, rgba(241,111,92,1) 0%, rgba(246,41,12,1) 0%, rgba(237,134,40,1) 0%, rgba(250,189,66,1) 1%, rgba(246,171,58,1) 33%, rgba(237,134,40,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f16f5c', endColorstr='#ed8628', GradientType=0 );
    font-family: 'SourceSansPro-Bold', sans-serif;
    font-size: 41px;
    opacity: 0.5;
    font-weight: 900;
    text-align: center;
    text-decoration: none;
    -webkit-box-shadow: 0px 0px 11px -2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 11px -2px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 11px -2px rgba(0,0,0,0.75);
}


.btnDivInnerlool1{
    width:100%;
    float: left;
}
.btnDivInnerlool1 button {
    padding: 15px 0;
    border-radius: 10px;
    width: 100%;
    float: left;
    color: #000000;
    font-size: 40px;
    font-weight: 900;
    border: none;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    background-color: #6dd400;
    font-family: 'Francois One', sans-serif;
}
.btnDivInnerlool1 button img{
    float: right;
    width: 13%;
}
.aro1{
    position: absolute;
    top: -101px;
    left: 58px;
    z-index: 0;
}
.aro2{
    position: absolute;
    right: -15px;
    top: 45px;
}
.aro3{
    position: absolute;
    bottom: -89px;
    left: 40px;
}
.sliderBigDiv{
    float: left;
    width:100%;
    background-color: #dfe3e6;
}
.sliderBigDiv2{
    float: left;
    width:100%;
    background-color: #fff8f4;
}
.centerNormal{
    float: left;
    width:100%;
    text-align: center;
    padding-top: 10px;
}
.TielDiv{
    float: left;
    width:100%;
    text-align: center;
    padding: 13px 0;
}
.TielDiv img{
    max-width: 100%;
}
.stepItem{
    position: absolute;
}
.stepItem p{
    float: left;
    width:100%;
    color: #400c54;
    font-family: 'SourceSansPro-Black', sans-serif;
    font-size: 20px;
    line-height: 24px;
    font-weight: 900;
}

.lefto{
    float: left;
    width:50%;
    padding-right: 2%;
}
.righto{
    float: left;
    width:50%;
    padding-left: 2%;
}
.lastInfos{
    /*
    float: left;
    width:50%;
    padding-right: 5%;*/
}
.lastInfos h2{
    width: 100%;
    float: left;
    font-size: 23px;
    line-height: 25px;
    padding-bottom: 2%;
    font-family: ProximaBold;
    background: -webkit-linear-gradient(top, #ffaf00, #ff8f00);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.lastInfos h1{
    color: #5c4875;
    float: left;
    width: 100%;
    font-size: 30px;
}
.lastInfos p{
    width: 100%;
    font-size: 17px;
    float: left;
    color: #fff;
    font-family: ProximaBold;
}



















.stepItem span{
    float: left;
    width:100%;
    color: #400c54;
    font-family: 'SourceSansPro-Bold', sans-serif;
    font-size: 22px;
    line-height: 25px;
}
.s1{
    width:33.33%;
    left:0;
    top: 612px;
}
.s2{
    width: 29.33%;
    left: 402px;
    top: 925px;
}
.s3{
    width: 29.33%;
    right:0;
    top: 640px;
}
.s4{
    width: 40.33%;
    left: 33px;
    top: 1350px;
}
.s5{
    width: 30.33%;
    right: 0;
    top: 1290px;
}
.smallCommentsDiv{
    float: left;
    width:100%;
    background-color: #7fbed5;
    padding: 40px 0;
}
.innerSmall{
    float: left;
    width:100%;
}
.innerSmall img{
    float: left;
}
.innerSmall a{
    float: left;
    color: #000;
    text-decoration: underline;
    font-size: 13px;
}
.comItem{
    float: left;
    width:25%;
    padding-top: 20px;
}
.comItem img{
    float: left;
    width:100%;
    -webkit-box-shadow: 0px 0px 38px 3px rgba(74,111,124,1);
    -moz-box-shadow: 0px 0px 38px 3px rgba(74,111,124,1);
    box-shadow: 0px 0px 38px 3px rgba(74,111,124,1);
}
.comItem p{
    float: left;
    width:100%;
    color: #380c48;
    font-size: 20px;
    padding-top: 15px;
}
.theTital{
    float: left;
    width:100%;
    padding: 7px 0;
}
.theTital a{
    margin-left: 21px;
    line-height: 22px;
    font-size: 19px;
}
.fourthBanner{
    float: left;
    width:100%;
    background-image: url("../comnet/view/Landing/orders/assets/img/banner3.html");
    background-position: center !important;
    background-repeat: no-repeat;
    height: 646px;
}
.bigYoutube{
    float: left;
    width:100%;
    text-align: center;
    padding-top: 429px;
}
.fifthBanner{
    float: left;
    width:100%;
    background-color: #380c49;
}
.innerFifth{
    float: left;
    width:100%;
    text-align: center;
    padding: 20px 0;
    position: relative;
}
.innerFifth img{
}
.innerFifth h2{
    float: left;
    width:100%;
    text-align: center;
    color: #fff;
    font-family: 'SourceSansPro-Bold', sans-serif;
    font-weight: 100;
    font-size: 37px;
    line-height: 31px;
}
.innerFifth h2 b{
    color: #fff;
    font-family: 'SourceSansPro-Bold', sans-serif;
    font-weight: 900;
    font-size: 27px;
}
.innerFifth small{
    float: left;
    width:100%;
    text-align: center;
    font-size: 20px;
    padding: 10px 0;
    color: #fff;
}
.innerFifth h1{
    float: left;
    width:100%;
    text-align: center;
    color: #fff;
    font-family: 'SourceSansPro-Bold', sans-serif;
    font-weight: 100;
    font-size: 85px;
    line-height: 66px;
    padding-bottom: 33px;
}
.innerFifth h1 b{
    color: #fff;
    font-family: 'SourceSansPro-Bold', sans-serif;
    font-weight: 900;
    font-size: 85px;
}
#quata{
    float: left;
    background-color: #fff;
    width: 25%;
    font-size: 72px;
    color: #c5c5c5;
    font-family: 'SourceSansPro-Bold', sans-serif;
    margin: 0;
    font-weight: 900;
    text-align: center;
    line-height: 62px;
    height: 74px;
    margin-left: 37%;
    border: 4px solid #7fbed5;
}
.innerFifth span{
    float: left;
    width: 100%;
    color: #7ebcd1;
    font-size: 23px;
    line-height: 23px;
    font-family: 'HelveticaNeueB', sans-serif;
    text-align: center;
}
.innerFifth h4{
    float: left;
    width:100%;
    text-align: center;
    color: #fff;
    font-family: 'SourceSansPro-Bold', sans-serif;
    font-weight: 100;
    font-size: 85px;
    line-height: 66px;
    padding-bottom: 33px;
    padding-top: 460px;
}
.innerFifth h4 b{
    color: #fff;
    font-family: 'SourceSansPro-Bold', sans-serif;
    font-weight: 900;
    font-size: 56px;
}
.absocenter{
    position: absolute;
    top: 430px;
    left: 28px;
}
.sixthBanner{
    float: left;
    width:100%;
    background-color: #f3e8f4;
}
.innerSix{
    float: left;
    width:100%;
    padding: 15px 0;
    text-align: center;
}
.firstOne{
    float: left;
    width:100%;
    text-align: left;
}
.firstOne h1{
    float: left;
    width:100%;
    font-size: 46px;
    color: #380c48;
    font-family: 'HelveticaNeueB', sans-serif;
}
.firstOne h2{
    float: left;
    width:100%;
    font-size: 24px;
    color: #380c48;
}
.firstOneInner{
    float: left;
    width:50%;
    padding: 0 15px;
    padding-top: 25px;
}
.firstOneInner img{
    float: left;
    width:100%;
}
.titleH{
    float: left;
    width:100%;
    font-size: 46px;
    text-align: left;
    font-weight: normal;
    padding-top: 15px;
    color: #380c48;
    font-family: 'HelveticaNeue', sans-serif;
}
.textHalf{
    float: left;
    width:50%;
    text-align: left;
}
.textHalf h1{
    float: left;
    width: 100%;
    font-size: 46px;
    color: #380c48;
    font-family: 'HelveticaNeueB', sans-serif;
}
.textHalf p{
    float: left;
    width: 100%;
    font-size: 24px;
    color: #380c48;
}
.textHalfInner{
    float: left;
    width:50%;
    padding: 0 15px;
}
.textHalfInner img{
    float: left;
    width:100%;
}
.recipeDiv{
    float: left;
    width:100%;
    text-align: center;
}
.recipeItem{
    float: left;
    width:33.33%;
    text-align: center;
}
.recipeDiv img{
    max-width: 100%;
}
.recipeItem h1{
    float: left;
    width: 100%;
    font-size: 30px;
    color: #735d7a;
    text-align: center;
    font-family: 'HelveticaNeueB', sans-serif;
}
.recipeItem h1 small{
    font-family: 'HelveticaNeue', sans-serif;
    font-weight: 100;
}
.recipeItem p{
    float: left;
    width:100%;
    font-size: 22px;
    color: #3f0c53;
    text-align: center;
    padding: 0 35px;
    padding-top: 15px;
}
.recipeDivAbso{
    float: left;
    width:100%;
    text-align: center;
    position: relative;
    padding-top: 500px;
}
.absocenter1{
    position: absolute;
    top: 55px;
    left: -35px;
}
.seventhBanner{
    float: left;
    width:100%;
    background-color: #380c49;
    -webkit-box-shadow: 0px 5px 34px -9px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 5px 34px -9px rgba(0,0,0,0.75);
    box-shadow: 0px 14px 50px -10px rgba(0,0,0,0.75);
    position: relative;
}
.sevenInner{
    float: left;
    width:100%;
    text-align: center;
    padding-top: 15px;
    padding-bottom: 15px;
}
.sevenInner h1{
    float: left;
    width:100%;
    color: #fff;
    font-family: 'SourceSansPro-Bold', sans-serif;
    font-size: 38px;
}
.sevenInner h1 small{
    font-weight: normal;
}
.gridDiv{
    float: left;
    width:100%;
    padding: 0 40px;
}
.gridDiv div{
    float: left;
    width: 33.33%;
    padding: 25px;
}
.gridDiv div img{
    float: left;
    width:100%;
}
.under{
    float: left;
    margin-left: 60px;
}
.eighthBanner{
    float: left;
    width:100%;
    background-color: #f3e8f4;
    padding: 30px 0;
}
.eightInner{
    float: left;
    width:100%;
    text-align: center;
}
.eightPice{
    float: left;
    width:50%;
    padding: 0 10px;
    padding-top: 30px;
    padding-bottom: 50px;
}
.eightPice img{
    float: left;
    width: 84%;
    margin-bottom: 15px;
}
.eightPice h1{
    float: left;
    width: 100%;
    text-align: left;
    font-size: 40px;
    color: #380c48;
    font-family: 'HelveticaNeueB', sans-serif;
}
.eightPice h1 small{
    font-size: 27px;
}
.eightPice p{
    float: left;
    width: 100%;
    font-size: 22px;
    color: #380c48;
    text-align: left;
}
.ninthBanner{
    float: left;
    width:100%;
    background-color: #fff;
    position: relative;
    -webkit-box-shadow: 0px -10px 46px -9px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px -10px 46px -9px rgba(0,0,0,0.75);
    box-shadow: 0px -10px 46px -9px rgba(0,0,0,0.75);
}
.ninInner{
    float: left;
    width: 100%;
    background-image: url(../comnet/view/Landing/orders/assets/img/banner9.html);
    background-position: center !important;
    background-repeat: no-repeat;
    height: 810px;
    text-align: center;
    padding-top: 60px;
}
.ninInner img{
    max-width: 100%;
}
.lrDiv {
    float: left;
    width:100%;
    padding-top: 60px;
}
.leftNine{
    float: left;
    width: 30%;
    padding-left: 30px;
}
.leftNine h2{
    float: left;
    width: 100%;
    font-size: 30px;
    color: #735d7a;
    text-align: left;
    font-family: 'HelveticaNeueB', sans-serif;
}
.leftNine h2 small{
    font-family: 'HelveticaNeue', sans-serif;
    font-weight: 100;
}
.leftNine p {
    float: left;
    width: 100%;
    font-size: 22px;
    color: #380c48;
    text-align: left;
}


.rightNine{
    float: right;
    width: 30%;
    padding-left: 30px;
}
.rightNine h2{
    float: left;
    width: 100%;
    font-size: 30px;
    color: #735d7a;
    text-align: left;
    font-family: 'HelveticaNeueB', sans-serif;
}
.rightNine h2 small{
    font-family: 'HelveticaNeue', sans-serif;
    font-weight: 100;
}
.rightNine p {
    float: left;
    width: 100%;
    font-size: 22px;
    color: #380c48;
    text-align: left;
}
.tenthBanner{
    float: left;
    width: 100%;
    background-image: url(../comnet/view/Landing/orders/assets/img/banner10.html);
    background-position: center !important;
    background-repeat: no-repeat;
    height: 695px;
    position: relative;
    -webkit-box-shadow: 0px -16px 72px -29px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px -16px 72px -29px rgba(0,0,0,0.75);
    box-shadow: 0px -16px 72px -29px rgba(0,0,0,0.75);
}
.tenInner{
    float: left;
    width:100%;
    position: relative;
    padding-left: 17px;
    height: 100%;
}
.stamp {
    position: absolute;
    top: 54px;
    right: 68px;
}
.leftInner{
    float: left;
    width:100%;
    padding-top: 35px;
}
.leftInner img{
    float: left;
}
.leftInner h2{
    float: left;
    width: 100%;
    font-size: 33px;
    color: #380c48;
    font-family: 'HelveticaNeueB', sans-serif;
}
.leftInner h2 small{
    font-family: 'HelveticaNeue', sans-serif;
    font-weight: 100;
}
.leftInner h1{
    float: left;
    width: 100%;
    font-weight: 100;
    font-size: 49px;
    color: #380c48;
    line-height: 35px;
    font-family: 'HelveticaNeue', sans-serif;
}
.btonDivo{
    position: absolute;
    left:0;
    bottom: 70px;
}
.finalBanner{
    float: left;
    width:100%;
    background-color: #f3e8f4;
}
.finalInnerTitle{
    float: left;
    width:100%;
    text-align: center!important;
    padding-top: 30px;
}
.finalInnerTitle img{
    max-width: 100%;
}
.finalFinal{
    float: left;
    width: 100%;
    background-image: url(../comnet/view/Landing/orders/assets/img/banner11.html);
    background-position: center !important;
    background-repeat: no-repeat;
    height: 483px;
    text-align: center !important;
}
.finalFinal img{
    max-width: 100%;
}


.radieos1{
    float: left;
    width:100%;
}
.part1{
    float: left;
    position: relative;
    width: 100%;
    background-color: #fff;
    padding: 0px 0;
    margin-bottom: 21px;
    /* border-color: azure; */
    border: 2px solid #ded5c4;
    border-radius: 11px;
   
}
.radieos1 .part1 input{
    float: left;
}
.radieos1 .part1 label{
    float: left;
    width: 100%;
    position: relative;
    cursor: pointer;
    z-index: 999;
    margin: 0;
}
.radieos1 .part1 label img{
    position: absolute;
    left: 20px;
    bottom: 0px;
}
.radieos1 .part1 label:hover .check {
   /* border: 5px solid #FFFFFF;*/
}
.radieos1 .part1 .check{
	
    display: block;
    position: absolute;
    /* border: 5px solid #9aaec3; */
    /* border-radius: 100%; */
    height: 30px;
    width: 120px;
    top: 3px;
    left: 3px;
    z-index: 999;
    transition: border .25s linear;
    -webkit-transition: border .25s linear;
    background-image: url(../img/paketi_sec_ar.png);
}
   
}
.check::before {
    display: block;
    position: absolute;
    content: '';
    border-radius: 100%;
    height: 14px;
    width: 14px;
    top: 1px;
    left: 1px;
    margin: auto;
    transition: background 0.25s linear;
    -webkit-transition: background 0.25s linear;

}
.radieos1 .part1 input[type=radio]{
    position: absolute;
    visibility: hidden;

}
.radieos1 .part1 input[type=radio]:checked ~ .check {
    /*border: 5px solid #003366;*/
    background-image: url(../img/secili_paket_ar.png);

}

.radieos1 .part1 input[type=radio]:checked ~ .check::before{
    background: #f00;

}

.radieos1 .part1 input[type=radio]:checked ~ label{
    color: #000000;
    
}
.radieos1 .part1 input[type=radio]:checked ~ label{
    webkit-box-shadow: inset 0px 0px 39px -6px rgba(0,0,0,0.75);
    -moz-box-shadow: inset 0px 0px 39px -6px rgba(0,0,0,0.75);
    /* box-shadow: inset 0px 0px 39px -6px rgba(0,0,0,0.75); */
    background-color: #e8acac;
    /* border: 5px solid #E9BC4E; */
    border-radius: 9px;

}
.radieos1 .part1 input[type=radio]:checked ~ label .leftawiDiv span{
    color: #000 ;
}
.radieos1 .part1 input[type=radio]:checked ~ label .fyatDiv p{
}
.radieos1 .part1 input[type=radio]:checked ~ label .fyatDiv .msh{
    color: #000 !important;
}
.radieos1 .part1 input[type=radio]:checked ~ label .fyatDiv .selecto{
    background-color: #000 !important;


    background-image: url(img/siparis_onay.png);
background-repeat:no-repeat;
background-position: center right 5px;



}

/* ###########   Yeni  ############  */

.radieos2{
    float: left;
    width:100%;
    background-color: white;
    border-radius: 0px 0px 12px 12px;
}
.part2{
    float: left;
    position: relative;
    width: 50%;
    background-color: #f1edec;
    padding: 0px 0;
    margin-bottom: 21px;
    /* border-color: azure; */
    border: 2px solid #ded5c4;
    border-radius: 11px;
   
}
.radieos2 .part2 input{
    float: left;
}
.radieos2 .part2 label{
    float: left;
    width: 100%;
    position: relative;
    cursor: pointer;
    z-index: 999;
    margin: 0;
}
.radieos2 .part2 label img{
    position: absolute;
    left: 20px;
    bottom: 0px;
}
.radieos2 .part2 label:hover .check {
   /* border: 5px solid #FFFFFF;*/
}
.radieos2 .part2 .check{
    
    display: block;
    position: absolute;
    /* border: 5px solid #9aaec3; */
    /* border-radius: 100%; */
    height: 25px;
    width: 23px;
    top: 0px;
    left: 80%;
    z-index: 999;
    transition: border .25s linear;
    -webkit-transition: border .25s linear;
    background-image: url(../img/odeme_sec.png);
}
   
}
.check::before {
    display: block;
    position: absolute;
    content: '';
    border-radius: 100%;
    height: 14px;
    width: 14px;
    top: 1px;
    left: 1px;
    margin: auto;
    transition: background 0.25s linear;
    -webkit-transition: background 0.25s linear;

}
.radieos2 .part2 input[type=radio]{
    position: absolute;
    visibility: hidden;

}
.radieos2 .part2 input[type=radio]:checked ~ .check {
    /*border: 5px solid #003366;*/
    background-image: url(../img/secili_odeme.png);

}

.radieos2 .part2 input[type=radio]:checked ~ .check::before{
    background: #f00;

}

.radieos2 .part2 input[type=radio]:checked ~ label{
    color: #000000;
    
}
.radieos2 .part2 input[type=radio]:checked ~ label{
    webkit-box-shadow: inset 0px 0px 39px -6px rgba(0,0,0,0.75);
    -moz-box-shadow: inset 0px 0px 39px -6px rgba(0,0,0,0.75);
    /* box-shadow: inset 0px 0px 39px -6px rgba(0,0,0,0.75); */
    background-color: #e8acac;
    /* border: 5px solid #E9BC4E; */
    border-radius: 9px;

}
.radieos2 .part2 input[type=radio]:checked ~ label .leftawiDiv span{
    color: #000 ;
}
.radieos2 .part2 input[type=radio]:checked ~ label .fyatDiv p{
}
.radieos2 .part2 input[type=radio]:checked ~ label .fyatDiv .msh{
    color: #000 !important;
}
.radieos2 .part2 input[type=radio]:checked ~ label .fyatDiv .selecto{
    background-color: #000 !important;


    background-image: url(img/siparis_onay.png);
background-repeat:no-repeat;
background-position: center right 5px;



}

/*  ############################################## */

.dgozuk {display: none;}
.radioText{
    float: left;
    width: 72%;
    padding: 12px 0px;
    padding-left: 245px;
}
.radioText1{
    float: left;
    width: 71%;
    padding: 5px 0px;
    padding-left: 268px;
}
.gunlar{
    float: left;
    width:100%;
    margin: 0;
    font-weight: 900;
    font-family: 'HelveticaNeue', sans-serif;
    font-size: 20px;
    color: #7fbed4;
}
.gunlar1{
    float: left;
    width:100%;
    font-family: 'OpenSans-Semibold', sans-serif;
    font-size: 20px;
    margin: 0;
    color: #003366;
}
.saglik{
    float: left;
    width:100%;
    font-family: 'HelveticaNeueB', sans-serif;
    font-size: 22px;
    color: #003366;
    line-height: normal;
    padding: 25px 0px;
}
.kutu{
    float: left;
    width:100%;
    font-family: 'HelveticaNeue', sans-serif;
    font-size: 19px;
    color: #003366;
    padding: 5px 5px;
}

.radieos1 .part1 label img{
    position: absolute;
    left: -3%;
    bottom: 0;
    width: 40%;
}
.fyatDiv{
    float: right;
    width: 63%;
    position: relative;
    margin: 3px 3px 3px 3px;
    
}

.fyatDiv > span {
    float: right;
    width: 100%;
    font-size: 23px;
    font-family: 'ProximaLight';
    letter-spacing: -1px;
    color: #192a56 !important;
    line-height: 25px;
}
.fyatDiv > span b {
    font-family: ProximaBlack;
}
.fyatDiv > p {
    float: left;
    width: 100%;
    color: #18041f;
    font-family: ProximaBold;
    font-size: 15px;
    line-height: 16px;
    margin: 15px 0;
}
.fyatDiv > small {
    float: left;
    width: 100%;
    font-size: 19px;
    font-family: 'ProximaLight';
    letter-spacing: -1px;
    color: #182956;
    line-height: 20px;
}
.fyatDiv > strong {
    float: left;
    color: #182956;
    font-family: ProximaBlack;
    font-size: 18px;
    text-align: justify;
    margin-right: 10px;
}
.fyatDiv > strong > h1 {
    float: left;
    width: 100%;
    position: relative;
    font-size: 45px;
    line-height: 40px;
}
.fyatDiv > strong > h1:before {content: '';position: absolute;top: 45%;left: 0;right: 0;height: 4px;background: #ff8814;}
.fyatDiv > .simdifiyat {
    float: left;font-family: ProximaBlack;
    margin-left: 30px;
}

 .simdifiyat span {
    color: #9E9E9E;
    font-size: 18px;
    text-decoration: line-through;
}
.fyatDiv > .simdifiyat h3 {
    float: left;
    width: 100%;
    line-height: 40px;
    color: #e01f20;
    font-family: 'Oswald', sans-serif;
    font-size: 45px;
    text-shadow: 3px 2px 1px #f4ebd9;
}
.fyatDiv > .simdifiyat h3 small {
    font-family: 'ProximaLight';
    font-weight: normal;
    font-size: 14px;
    line-height: 15px;
}

        .danisma {float: right; 350text-align: center;width: 330px;background: #fff;border-radius: 9px;padding: 10px 0 0 0;text-align: center;}
        .danisma strong {font-family: 'ProximaBlack'; color: #073673;float: left; width: 100%;font-size: 32px;line-height: 25px;letter-spacing: -1px;}
        .danisma span {font-family: 'ProximaLight';width: 100%;float: left;color: #ff8814;font-size: 23px;line-height: 40px;}

        .sertifika {float: left;width: 100%;padding-bottom: 3%;border-bottom: 2px solid #ff8814;margin-bottom: 3%;}
        .sertifika img {float: left;width: 100%;}

.gunlar span{
    background-color: #ff9326;
    padding: 3px;
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
    border-radius: 7px;
}
.gunlar1 span{
    background-color: #ff9326;
    padding: 3px;
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
    border-radius: 7px;
}
.size{
    font-size: 36px;
    line-height: 40px;
}
.otherFinalRadioDiv{
    float: left;
    width:100%;
    padding-top: 10px;
}
.noFyat{
    float: left;
    color: #003367;
    font-size: 52px;
    width: 100%;
    font-weight: normal;
    text-decoration: line-through;
    font-family: 'ProximaNova-Light', sans-serif;
}
.fyatDiv1{
    float: left;
    width: 100%;
    padding-left: 0px;
}
.fyatDiv1 span{
    float: left;
    width: 100%;
    color: #ff9326;
    line-height: 26px;
    font-size: 52px;
    font-family: 'OpenSans-ExtraBold', sans-serif;
}
.fyatDiv1 p{
    float: left;
    width: 100%;
    color: #003366;
    font-size: 16px;
    margin: 0;
    line-height: 46px;
    font-family: 'OpenSans-Regular', sans-serif;
}
.gift{
    float: left;
    width:100%;
    background-color: #9fcedf;
    border-radius: 10px;
}
.msh{
    color: #000!important;
    text-decoration: line-through;
    padding: 0 !important;
}
.bigGift{
    float: left;
    width:100%;
    background-color: #fbd273;
    padding: 0px;
    border-radius: 10px;
}
.lasto{
    padding-top: 185px !important;
}
.padd{
    padding-top: 5px !important;
}
.lasto1{
    padding-top: 100px !important;
}
.padd1{
    padding-top: 5px !important;
}
.beforeRadios{
    float: left;
    width:100%;
    padding-top: 100px;
}
.beforeRadios h1{
    float: left;
    width: 50%;
    color: #7ebcd1;
    font-size: 20px;
    font-family: 'HelveticaNeueB', sans-serif;
    padding-top: 40px;
}
.beforeRadios img{
    float: right;
}
.commantsMainDiv{
    float: left;
    width:100%;
    background-color: #fff;
}
.banner5{
    float:left;
    width:100%;
    background-color:white;
    padding: 27px 20px 20px 31px;
}
.commentmain {
    float: left;
    width: 100%;
    border-top: 1px solid #d6d6d6;
    margin-top: 30px;
}
.commentmain a {
    text-decoration:none;
}
.basiccomm {
    float: left;
    width: 100%;
    padding-top: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #d6d6d6;
}
.victor {
    float: left;
    width: 14.74%;
}
.victor img {
    margin-left: 20px;
    -webkit-border-radius: 50%;
    width: 80%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}
.textcomm {
    float: left;
    width: 85.25%;
}
.commname {
    float: left;
    width: 100%;
    padding-top: 20px;
}
.commname p {
    font-size: 18px;
    float: left;
    color: #444444;
    line-height: 1.2;
    margin-left: 20px;
    width: 93%;
    margin-top: 0%;
    margin-bottom: 3%;
}
.namecolor {
    color: #ff4000;
}
.thetext {
    float: left;
    width: 100%;
}
.commimage {
    float: left;
    width: 100%;
}
.commimage img {
    float: left;
    margin-left: 20px;
    margin-bottom: 15px;
    max-width: 95%;
}
.subcom {
    float: left;
    width: 85%;
    margin-top: 13px;
    margin-left: 118px;
}
.textcomm p{
    font-size: 18px;
    float: left;
    color: #444444;
    line-height: 1.2;
    margin-left: 20px;
    width: 93%;
    margin-top: 0%;
    margin-bottom: 3%;
}
.banner5 h1{
    float: left;
    width: 100%;
    font-size: 33px;
    color: #380c48;
    font-family: 'HelveticaNeueB', sans-serif;
}
.banner5 h2{
    float: left;
    width: 100%;
    font-size: 24px;
    color: #380c48;
    font-family: 'HelveticaNeue', sans-serif;
}
.basiccomm:last-child{
    border:none;
}
.haho .haya{
            color: #ff9920 !important;
    }
.kalanurun p small{
    width:auto !important;
    font-size: 72px;
    color: #380c48;
}
.kalanurun p h5{
    width:auto !important;
    font-size: 72px;
}
.leftawiDiv{
    float: left;
    width: 50%;
}
.leftawiDiv span{
    float: left;
    width:100%;
    color: #000;
    font-size: 15px;
    font-family: HelveticaNeue;
}
.haho{
    float: left;
    width:100%;
    color: #000;
    font-size: 15px;
    font-family: HelveticaNeue;
}
.haho b{
    font-size: 21px;
    font-weight: 900;
    line-height: 22px;
    font-family: HelveticaNeueB;
}
.leftawiDiv span b{
        font-size: 22px;
        font-weight: 900;
        line-height: 22px;
        font-family: HelveticaNeue;
}
.obvo{
}
@media screen and (max-width: 1040px) {
    .bigContainer{
        width:100%;
    }
    .leftCounters{
        padding: 1%;
        width: 100%;
        margin-bottom: 3%;
    }
    .container{
        width:100%;
    }
    .firstHeader{
        float: left;
        width:100%;
        background-color: #222222;
        position: relative;
        -webkit-box-shadow: 0px 4px 22px -6px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 4px 22px -6px rgba(0,0,0,0.75);
        box-shadow: 0px 4px 22px -6px rgba(0,0,0,0.75);
    }
    .firstHeader p{
        float: left;
        width:50%;
        color: #fff;
        font-family: Arial, sans-serif;
        font-size: 4vw;
        padding:10px 0;
        padding-left: 1%;
    }
    .flags{
        float: left;
        width:50%;
        padding:10px 0;
        padding-right: 1%;
    }
    .flags img{
        float: right;
        width: 30%;
        padding-left: 7%;
        padding-bottom: 3%;
    }
    .flags span{
        float: right;
        color: #fff;
        font-family: Arial, sans-serif;
        font-size: 4vw;
    }
.danisma {width: 50%;padding: 1% 0 0 0;text-decoration: none;color: #073673;}
.danisma strong {font-size: 4vw;line-height: 5vw;letter-spacing: -0.1vw;text-decoration: none;}
.danisma span {font-size: 3vw;line-height: 4vw;}
.theForm {padding: 0 1%;padding-top: 1%;}
.selek {margin-bottom: 0;}
.selek > select {margin: 0 0 4% 0}
.Start1 > textarea {font-size: 5vw;height: 25vw;}
.dgozuk {
    display: block;
}


.mgozuk {display: none;}

    .flogo{
        padding-left: 1%;
    }
    .flogo img{
        float: left;
        width: 45%;
    }
    .slogo{
        float: left;
        width:50%;
        padding-right: 1%;
    }
    .slogo img{
        float: right;
        width:90%;
        padding-top: 3%;
    }
    .bannerCounterDiv{
        padding-bottom: 3%;
        background-position: center;
    }
    .titleSpan{
        font-size: 5vw;
        position: relative;
        font-weight: 100;
        z-index: 111;
    }
    .subtitleSpan{
        font-size: 5vw;
        padding-left: 4%;
        line-height: 6vw;
    }
    .borderImage{
        max-width: 90%;
    }
    .outerCounter{
        float: left;
        width:100%;
        padding-left: 2%;
    }
    .arothing{
        position: absolute;
        left: 16%;
        top:0;
        display: none;
    }
    .haho{
    }
    .Only{
        padding-top: 2%;
        color: #000 !important;
    }
    .selecto{
        float: left;
        width:100%;
        background: #ff7f00;
        color: #fff;
        font-size: 3.5vw;
        border-radius: 2vw;
        text-align: center;
        border: none;
        padding: 3% 0;
        margin-top: 5%;
    }
    .secAro{
        position: absolute;
        left: -3px !important;
        top: 16% !important;
        width: 10% !important;
    }
    .inputUnderRirle{
        font-family: 'SourceSansPro-Bold', sans-serif;
        font-size: 5.5vw;
        float: left;
        width: 100%;
        color: #ffffff;
    }
    .selectora{
        float: left;
        width:33.33%;
        padding-right: 2%;
    }
    .abbado{
        padding-left: 0%;
        width: 80%;
        cursor: pointer;
        float: left;
    }
    .fazlakeDiv{
        float: left;
        width:100%;
    }
    .fazlakeInner{
        float: left;
        width:100%;
        border-radius: 10px;
        background-color: #f1dedc;
        padding: 2% 4%;
    }
    .fazlakeInner span{
        color: #5c4875;
        float: left;
        width: 100%;
        font-size: 9vw;
    }
    .fazlakeInner h1{
        color: #5c4875;
        float: left;
        width: 100%;
        font-size: 9vw;
    }
    .fazlakeInner p{
        color: #5c4875;
        float: left;
        width: 50%;
        font-weight: 900;
        font-size: 6vw;
        padding-bottom: 2%;
    }
    #cond{
        float: left;
        width: 20%;
        margin-top: 5px;
        clear: left;
    }
    input[type="checkbox"]{
        width: 20px; /*Desired width*/
        height: 20px; /*Desired height*/
    }
    .fnot{
        text-decoration: line-through;
    }
    .haya{
        color: #ff9920 !important;
        font-size: 2.7vw !important;
    }
    .black{
        color: #000 !important;
    }
    .total{
        float: left;
        width:100%;
        padding: 1% 1%;
    }
    .total p{
        width:50%;
        color: #5c4875;
        float: left;
        font-size: 10vw;
    }
    .sero{
        float: right;
        width:50%;
    }
    .sero h1{
        float: right;
        color: #5c4875;
        width: 100%;
        font-size: 10vw;
    }



    .counter{
        float: left;
        width:100%;
    }
    .kalanurun{
        float: left;
        width: 31%;
    }
    #quata{
        float: left;
        width: 50%;
        font-size: 72px;
        color: #dc7249;
        font-family: 'SourceSansPro-Bold', sans-serif;
        margin: 0;
        text-align: center;
        line-height: 62px;
        height: 74px;
        margin-left: 119px;
        border: 4px solid #010101;
    }
    #quata1{
        float: left;
        width: 50%;
        font-size: 72px;
        background-color: #fff;
        color: #c5c5c5;
        font-family: 'SourceSansPro-Bold', sans-serif;
        margin: 0;
        font-weight: 900;
        text-align: center;
        line-height: 62px;
        height: 74px;
        margin-left: 119px;
        border: 4px solid #7fbed5;
    }
    #quata2{
        width: 87%;
        font-size: 8vw;
        line-height: 12vw;
        margin-left: 6%;
        border-radius: 10px;
    }
    .sayac{
        float: left;
        width: 64%;
    }
    .sayac span{font-size: 3vw;line-height: 4vw;margin-bottom: 2%;}
    .defaultCountdown{
    }
    #timer{
    }
    #vals{
        width: 91%;
        font-size: 8vw;
        line-height: 12vw;
        padding-left: 4%;
        margin-left: 7%;
        text-align: center;
    }
    #h{
    width: 35%;
    }
    #m{
        margin-left: 0;
        width: 35%;
    }
    #s{
        margin-left: 0;
        width: 30%;
    }
    #labels{
        float: left;
        width:100%;
        padding-left: 103px;
        padding-top: 10px;
    }

    #hl{
        font-size: 15px;
        margin-right: 80px;
        color: #fff;
        float: left;
    }
    #ml{
        font-size: 18px;
        margin-bottom: 10px;
        color: #fff;
        float: left;
    }
    #sl{
        font-size: 15px;
        margin-left: 69px;
        color: #fff;
        float: left;
    }
    .kalanurun span{
        font-size: 3vw;
        line-height: 4vw;
        margin-bottom: 2%;
    }
    .RightInput{
        width: 100%;
        padding: 1%;
    }
    .inputTitle{
        font-size: 5vw;
    }
    .RightInput input{
        font-size: 5vw;
        padding: 2%;
        height: 12vw;
    }
    .RightInput select{
        float: left;
        width: 100%;
        font-size: 5vw;
        padding: 2%;
        background-size: 5%;
        height: 12vw;
    }
    .inputoption{
        float: left;
        line-height: 46px;
        height: 65px;
        width:100%;
        border: 8px solid #de006d;
        font-size: 22px;
        padding-left: 20px;
        margin-bottom: 18px;
    }


    ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
        color: #000;
    }
    ::-moz-placeholder { /* Firefox 19+ */
        color: #000;
    }
    :-ms-input-placeholder { /* IE 10+ */
        color: #000;
    }
    :-moz-placeholder { /* Firefox 18- */
        color: #000;
    }
    .leftoption{
        float: left;
        width:30%;
    }
    .leftoption img{
        float: left;
        width:100%;
    }
    .leftawiDiv{
        float: left;
        width: 50%;
    }
    .leftawiDiv span{
        float: left;
        width:100%;
        font-size: 3.5vw;
    }
    .haho{
        float: left;
        width:100%;
        font-size: 3.5vw;
    }
    .haho .haya{
            color: #ff9920 !important;
            font-size: 2.7vw !important;
    }
    .leftawiDiv span b{
            font-size: 3.6vw;
            font-weight: 900;
            line-height: 4vw;
    }
    .haho b{
        font-size: 4.1vw;
        font-weight: 900;
    }

    .fyatDiv{margin: 2% 0;    width: 60%; z-index: 999;}
    .fyatDiv2{margin: 2% 0;    width: 100%; z-index: 999; padding: 0px 0px 3px 5px;} /*  ödeme yöntemi seçeneği başlık  */
    .fyatDiv > span {font-size: 5vw;
    letter-spacing: -0.1vw;
    /* line-height: 5vw; */}
    .fyatDiv > small {font-size: 4.5vw;letter-spacing: -0.1vw;line-height: 4vw;}
    .fyatDiv > p {font-size: 5vw;line-height: 4vw;margin: 2% 0;letter-spacing: -0.1vw;}
    .fyatDiv > strong {font-size: 4.5vw;letter-spacing: -0.1vw;}
    .fyatDiv > strong > h1 {font-size: 7vw;line-height: 7vw;}
    .fyatDiv > .simdifiyat {margin-left: 10%;letter-spacing: -0.1vw;}
    .fyatDiv > .simdifiyat span {font-size: 4.5vw;}
    .fyatDiv > .simdifiyat h3 {font-size: 10vw;line-height: 11vw;}
    .fyatDiv > .simdifiyat h3 small {font-size: 4.5vw;line-height: 4vw;}
    /* .radieos1 .part1 label img {width: 40%;} */
    .radieos1 .part1 .check {
	/* border: 0.9vw solid #e9bc4d; */
    height: 30px;
    width: 120px;
    top: 3px;
    left: 3px;
}
.radieos1 .part1 input[type=radio]:checked ~ .check {
    /*border: 0.7vw solid #e62117;*/
}
.check::before {height: 5vw;
    width: 5vw;
    top: 5%;
    left: 5%;
}
    .fyatDiv > strong > h1:before {height: 0.7vw;}
.btnzDiv {margin: 0 0 4% 0;}
    .lastInfos h2{
        font-size: 5vw;
        line-height: 5vw;
        letter-spacing: -0.1vw;
    }
    .lastInfos h1{
        color: #5c4875;
        float: left;
        width: 100%;
        font-size: 6vw;
    }
    .lastInfos p{
        font-size: 3.5vw;
        line-height: 4vw;
    }
    .btnDivInnerlool1 button {
        padding: 5% 0;
        font-size: 8vw;
    }
    .hido{
        display: none;
    }
    .obvo{
        display: block;

    }

.haya span{font-size: 2.5vw;text-align: center;}
}
.topo{
    float: left;
    width:100%;
}
.had{
    color: #ff7f00 !important;
}

.part1 img {
    width: 114px;
}

small.gif{
    font-weight:bold;
    font-size: 1.9vw;
}

@media screen and (max-width: 600px) {
    .part1 img {
        width: 30%;
    }

    small.gif{
        font-weight:bold;
        font-size: 4.9vw;
    }

}



