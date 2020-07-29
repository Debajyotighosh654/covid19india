<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>YAAN</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Megrim">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Table-Fixed-Header.css">
    <link rel="stylesheet" href="assets/css/Card-Group-Classic.css">
    <link rel="stylesheet" href="assets/css/divider-text-middle.css">
    <link rel="stylesheet" href="assets/css/Dynamic-Table.css">
    <link rel="stylesheet" href="assets/css/Full-Width-Div.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/xstyle.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark" id="mainNav" style="height: 30px;">
        <div class="container-fluid"><a class="navbar-brand" href="#page-top" style="font-family: Poppins, sans-serif;margin-left: 5px;letter-spacing: 0px;color: #5781ff;font-weight: bold;font-size: 20px;"><img class="img-fluid" src="assets/img/17902-covid19-unscreen.gif" alt="YAAN" style="height: 40px;margin-right: 3px;color: rgba(254,209,54,0);">COVID 19 - INDIA</a>
            <button
                data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler border rounded border-primary navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                style="height: 22px;width: 22px;padding: 1px;margin-top: -14px;"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse d-xl-flex align-items-xl-center" id="navbarResponsive" style="margin-left: 0px;">
                    <ul class="nav navbar-nav text-center d-inline-flex ml-auto justify-content-xl-end text-uppercase" style="width: 800px;">
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#covid19-head">COVID-19 Live</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#change-me">INFO</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#Symptoms ">symptoms</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#Prevention">prevention</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#team">contact</a></li>
                    </ul>
                </div>
        </div>
    </nav>
    <div class="d-xl-flex justify-content-xl-center align-items-xl-center" id="covid19-head" style="margin-top: 100px;"><img src="assets/img/covid19/image.d7265326.png"></div>
    <div class="card d-inline-flex d-xl-flex flex-row justify-content-xl-center align-items-xl-center container" id="covid19card">
        <div class="card-body" id="card-confirm" style="width: 150px;background-color: rgba(255,17,16,0.15);height: 200px;margin-right: 5px;margin-left: 5px;border-radius: 15px;border-style: none;border-color: rgba(255,17,16,0);color: rgb(255,17,16);">
            <h4 class="card-title" style="font-size: 16px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;margin-bottom: 0px;"><strong>Confirmed</strong></h4><img class="img-fluid d-xl-flex justify-content-xl-center align-items-xl-center" src="assets/img/covid19/Confirm-gif.gif" style="position: relative;height: 69px;margin-top: 20px;">
            <h6 class="text-center card-subtitle mb-2 realtime-count"
                id="confirmed" style="margin-top: -80px;font-size: 15px;height: 17.6px;">0</h6>
            <h4 class="text-right d-flex justify-content-xl-center align-items-xl-center card-title realtime-count" style="font-size: 12px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;color: rgba(255,17,16,0);font-weight: bold;width: 80px;position: relative;top: 60%;left: 10%;"><i class="fas fa-long-arrow-alt-up" style="color: rgba(255,17,16,0.7);position: relative;right: 4px;"></i>&nbsp;<span id="deltaconfirmed" class="realtime-count"><br></span><br></h4>
        </div>
        <div class="card-body" id="card-active" style="width: 150px;background-color: rgba(16,114,255,0.15);height: 200px;margin-right: 5px;margin-left: 5px;border-radius: 15px;color: rgb(16,114,255);border-style: none;border-color: rgba(255,255,255,0);max-width: none;">
            <h4 class="card-title" style="font-size: 16px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;"><strong>Active</strong></h4><img class="img-fluid d-xl-flex justify-content-xl-center align-items-xl-center" src="assets/img/covid19/Active-gif.gif" style="position: relative;height: 69px;margin-top: 20px;border-style: none;border-color: rgb(0,0,0);">
            <h6
                class="text-center card-subtitle mb-2 realtime-count" id="active" style="margin-top: -80px;">0</h6>
        </div>
        <div class="card-body" id="card-recovered" style="width: 150px;background-color: rgba(84,199,30,0.15);height: 200px;margin-right: 5px;margin-left: 5px;border-radius: 15px;color: rgb(84,199,30);border-style: none;border-color: rgba(255,255,255,0);">
            <h4 class="card-title" style="font-size: 16px;text-align: center;letter-spacing: 1px;font-family: Poppins, sans-serif;"><strong>Recovered</strong></h4><img class="img-fluid d-xl-flex justify-content-xl-center align-items-xl-center" src="assets/img/covid19/Recovered4-gif.gif" style="position: relative;height: 90px;margin-top: -15px;margin-left: -10px;border-style: none;border-color: rgb(0,0,0);">
            <h6
                class="text-center card-subtitle mb-2 realtime-count" id="recovered" style="margin-top: -80px;">0</h6>
                <h4 class="text-right d-flex justify-content-xl-center align-items-xl-center card-title realtime-count" style="font-size: 12px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;color: rgba(255,17,16,0);font-weight: bold;width: 80px;position: relative;top: 60%;left: 10%;"><i class="fas fa-long-arrow-alt-up" style="color: rgba(84,199,30,0.7);position: relative;right: 4px;"></i>&nbsp;<span id="deltarecovered" class="realtime-count"><br></span><br></h4>
        </div>
        <div class="card-body" id="card-death" style="width: 150px;background-color: rgba(143,143,143,0.15);height: 200px;margin-right: 5px;margin-left: 5px;border-radius: 15px;color: rgb(143,143,143);border-style: none;border-color: rgba(255,255,255,0);">
            <h4 class="card-title" style="font-size: 16px;text-align: center;letter-spacing: 1px;font-family: Poppins, sans-serif;">Deceased</h4><img class="img-fluid d-xl-flex justify-content-xl-center align-items-xl-center" src="assets/img/covid19/Deceased1.gif" style="position: relative;margin-top: -10px;border-style: none;border-color: rgb(0,0,0);margin-left: -15px;">
            <h6 class="text-center card-subtitle mb-2 realtime-count"
                id="deaths" style="margin-top: -90px;">0</h6>
            <h4 class="text-right d-flex justify-content-xl-center align-items-xl-center card-title realtime-count" style="font-size: 12px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;color: rgba(255,17,16,0);font-weight: bold;width: 80px;position: relative;top: 60%;left: 10%;"><i class="fas fa-long-arrow-alt-up" style="color: rgba(143,143,143,0.7);position: relative;right: 4px;"></i>&nbsp;<span id="deltadeaths" class="realtime-count"><br></span><br></h4>
        </div>
    </div>
    <div class="d-flex container" id="india" style="/*width: 100%;*/height: 220px;/*background-color: red;*/">
        <div id="india-1" class="container" style="/*width: 100%;*/height: 220px;/*background-color: red;*/"><img class="img-fluid d-xl-flex justify-content-xl-center align-items-xl-center" id="namesta" src="assets/img/covid19/namaste.gif" style="position: relative;height: 80px;margin-top: -15px;margin-left: -12px;">
            <h4 class="text-left" id="text-india" style="font-size: 40px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;margin-top: -15px;color: rgb(255,17,16);">India</h4>
            <h4 class="text-left" id="text-sample" style="font-size: 15px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;margin-top: -8px;color: rgba(248,50,240,0.66);font-weight: bold;">sample reported today<br></h4>
            <h4 class="text-left" id="samplereportedtoday" style="font-size: 20px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;margin-top: -7px;color: rgb(237,15,228);font-weight: bold;">0</h4>
            <h4 class="text-left d-flex" id="text-last" style="font-size: 12px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;margin-top: 18px;color: rgb(115,115,115);font-weight: bold;"><strong>Last Updated on</strong></h4>
            <h4 class="text-left" id="lastupdatedtime" style="font-size: 12px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;margin-top: -5px;color: rgb(115,115,115);font-weight: bold;">0</h4>
        </div>
        <div id="india-2" class="container" style="/*width: 100%;*/height: 220px;/*background-color: red;*/">
            <h4 class="text-right" id="text-tested" style="font-size: 15px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;margin-top: 96px;color: rgba(110,15,205,0.66);font-weight: normal;"><strong>Tested</strong><br></h4>
            <h4 class="text-right" id="totalsamplestested" style="font-size: 25px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 2px;margin-top: -7px;color: #6e0fcd;font-weight: bold;">0</h4>
            <div id="asof-count" style="text-align:center;"></div>
            <h4 class="text-right d-flex justify-content-xl-end" id="text-asof" style="font-size: 12px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;margin-top: -5px;color: rgba(116,22,211,0.91);font-weight: bold;">As of&nbsp;<span id="date"><br></span><br></h4>
            <h4 class="text-right" id="per-source" style="font-size: 14px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;margin-top: -2px;color: rgba(116,22,211,0.91);font-weight: bold;">Per&nbsp;<a href="https://twitter.com/ICMRDELHI/status/1286510593147510785" style="background-color: rgba(209,168,251,0.5);border-radius: 15px;padding-right: 7px;padding-left: 7px;border-color: rgba(255,255,255,0);color: #6e0fcd;padding-bottom: 1px;padding-top: 1px;"
                    target="_blank">Source</a></h4>
        </div>
    </div>    <div id="realtimedata" class="container py-0">
        <!--<div class="row">
            <div class="col mx-auto bg-white">-->

                <!-- Fixed header table-->
                <div class="table-responsive col mx-auto">
                   <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col" class="col-md-3 col-xs-1" style="color:#f5cf07;">States</th>
                                <th scope="col" class="col-1.5 col-xs-1" style="color:#FF1110;">Confirmed</th>
                                <th scope="col" class="col-md-2 col-xs-1" style="color:#1072FF;">Active</th>
                                <th scope="col" class="col-md-1.5 col-xs-1" style="color:#54c71e;">Recovered</th>
                                <th scope="col" class="col-md-2 col-xs-1" style="color:#8f8f8f;">Deaths</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php

                                $data = file_get_contents('https://api.covid19india.org/data.json');
                                $coranalive = json_decode($data, true);

                                $statescount = count($coranalive['statewise']);

                                $i=1;
                                while($i < $statescount){
                                    ?>
                                    <tr>
                                        <!--<td class="col-2"><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>-->
                                        <td scope="col" class="col-3"><?php echo $coranalive['statewise'][$i]['state'] ?></td>
                                        <td scope="col" class="data col-2"><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
                                        <td scope="col" class="data col-2"><?php echo $coranalive['statewise'][$i]['active'] ?></td>
                                        <td scope="col" class="data col-2"><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
                                        <td scope="col" class="data col-1"><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>
                                    </tr>

                                <!--echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;
                                echo $coranalive['statewise'][$i]['state'] . "<br>"  ;
                                echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
                                echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
                                echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
                                echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ; -->

                                <?php
                                $i++;
                                }
                                ?>
                        </tbody>
                    </table>
                </div><!-- End -->
                
            <!--</div>
        </div>-->
    </div>
<div id="canvas">
	<canvas id="myChart" height="220"></canvas>

    <div class="container text-center my-3">
      <h6 class="text-info" style="font-weight:200; font-size:18px;">
        Click on the Confirmed/ Recovered/ Deaths buttons above to see the chart individually.
      </h6>
    </div>


</div><div id="canvas2" style="width: 42%;margin-top: 50px;margin-bottom: 50px;">
	<canvas id="myChart2" height="120"></canvas>

    <!--<div class="container text-center my-3">
      <h6 class="text-info" style="font-weight:200; font-size:18px;">
        Click on the Confirmed/ Recovered/ Deaths buttons above to see the chart individually.
      </h6>
    </div>-->


</div><div id="canvas3" style="width: 42%;margin-top: 50px;margin-bottom: 50px;">
	<canvas id="myChart3" height="120"></canvas>

    <!--<div class="container text-center my-3">
      <h6 class="text-info" style="font-weight:200; font-size:18px;">
        Click on the Confirmed/ Recovered/ Deaths buttons above to see the chart individually.
      </h6>
    </div>-->


</div><div id="canvas4" style="width: 42%;margin-top: 50px;margin-bottom: 50px;">
	<canvas id="myChart4" height="120"></canvas>

    <!--<div class="container text-center my-3">
      <h6 class="text-info" style="font-weight:200; font-size:18px;">
        Click on the Confirmed/ Recovered/ Deaths buttons above to see the chart individually.
      </h6>
    </div>-->


</div><div id="canvas5" style="width: 42%;margin-top: 50px;margin-bottom: 50px;">
	<canvas id="myChart5" height="120"></canvas>

    <!--<div class="container text-center my-3">
      <h6 class="text-info" style="font-weight:200; font-size:18px;">
        Click on the Confirmed/ Recovered/ Deaths buttons above to see the chart individually.
      </h6>
    </div>-->


</div>
    <div class="d-xl-flex justify-content-xl-center align-items-xl-center" id="change-me" style="color: rgb(0,0,0);background-color: rgba(236,236,236,0.94);height: 525px;margin-top: -1500px;">
        <div class="container" style="height: 400px;">
            <div class="row d-xl-flex align-items-xl-center" style="height: 420px;">
                <div class="col-md-12 d-xl-flex justify-content-xl-center align-items-xl-center" style="height: 60px;margin-bottom: 30px;">
                    <h1 class="text-nowrap text-uppercase text-center d-flex justify-content-center align-items-center">About COVID-19</h1>
                </div>
                <div class="col-md-12 col-xl-5 offset-xl-0 d-xl-flex align-items-xl-center" id="corona-img" style="height: 300px;"><img class="rounded img-fluid d-xl-flex mx-auto" src="assets/img/covid19/covid-19img.jpg" style="border-width: 0px;box-shadow: 0px 5px 12px rgba(39,39,39,0.41);height: 270px;width: 425px;"></div>
                <div class="col d-xl-flex justify-content-xl-start align-items-xl-start"
                    style="margin-top: -240px;height: 40px;">
                    <p class="text-left d-inline-block d-xl-flex align-items-xl-start" style="margin-left: -5px;color: rgb(0,0,0);font-size: 30px;line-height: 19px;height: 40px;font-family: Montserrat, sans-serif;">What is COVID - 19 (Corona Virus)<br></p>
                </div>
                <div class="col-md-12 justify-content-xl-center align-items-xl-center" id="col-md-12-info" style="height: 240px;margin-left: 475px;margin-top: -260px;max-width: 665px;">
                    <p class="text-justify d-inline-block" style="color: rgb(0,0,0);font-size: 13px;line-height: 20px;font-family: Montserrat, sans-serif;width: 100%;margin-bottom: 0px;">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered corona virus. Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special
                        treatment.&nbsp; Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.<br><br>The best way to prevent
                        and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not
                        touching your face.The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example,
                        by coughing into a flexed elbow).<br></p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-xl-center align-items-xl-center" id="d-xl-flex-symptoms" style="width: 100%;height: 42em;background-color: rgb(255,255,255);">
        <div class="container" id="Symptoms" style="padding-right: 30px;padding-left: 30px;height: 585px;margin-top: 50px;">
            <div class="cust_bloglistintro" style="max-width: 540px;">
                <h1 class="d-xl-flex text-center" data-aos="fade-up" data-aos-delay="250" style="font-size: 40px;line-height: 46px;color: #000000;font-family: Montserrat, sans-serif;font-weight: 10000;letter-spacing: 1px;border-color: rgba(255,255,255,0);">Corona Virus Symptoms&nbsp;</h1>
            </div>
            <div class="row text-center justify-content-center" data-aos="zoom-in" data-aos-delay="200" style="margin-left: -30px;padding-bottom: 20px;width: 1140px;margin-right: 0px;margin-top: 40px;">
                <div class="col-sm-6 col-md-4 col-xl-3 portfolio-item" data-bs-hover-animate="pulse" style="height: 170px;margin-right: 80px;margin-top: 40px;background-color: rgb(255,255,255);width: 53px;padding-left: 0px;max-width: 14%;margin-left: 80px;margin-bottom: 40px;"><a class="d-xl-flex align-items-xl-center portfolio-link" data-toggle="modal" href="guide/type.png" style="color: rgba(255,255,255,0);width: 160px;"><img class="img-fluid d-xl-flex" src="assets/img/covid19/cough1-unscreen.gif" style="height: 105px;width: 100%;/*margin-left: 7.2px;*/background-color: rgba(255,255,255,0);margin-top: 5px;padding: 0px;"></a>
                    <div
                        class="text-center d-xl-flex justify-content-center align-items-center align-content-center align-items-xl-center portfolio-caption" style="width: 150px;height: 60px;background-color: rgba(248,10,10,0);margin-left: 5px;">
                        <h4 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="font-size: 21px;width: 100%;height: 45px;line-height: 40px;font-style: normal;margin-top: 0px;margin-right: 0px;padding-top: 0px;padding-right: 0px;margin-left: 0px;color: #000000;background-color: rgba(255,255,255,0);font-family: Poppins, sans-serif;font-weight: 100;"><strong>Cough</strong><br></h4>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 portfolio-item" data-bs-hover-animate="pulse" style="height: 170px;margin-right: 80px;margin-top: 40px;background-color: rgb(255,255,255);width: 53px;padding-left: 0px;max-width: 14%;margin-left: 80px;margin-bottom: 40px;"><a class="d-xl-flex align-items-xl-center portfolio-link" data-toggle="modal" href="guide/type.png" style="color: rgba(255,255,255,0);width: 160px;"><img class="img-fluid d-xl-flex" src="assets/img/covid19/runny-nose-unscreen.gif" style="height: 105px;width: 100%;/*margin-left: 7.2px;*/background-color: rgba(255,255,255,0);margin-top: 5px;padding: 0px;"></a>
                <div
                    class="text-center d-xl-flex justify-content-center align-items-center align-content-center align-items-xl-center portfolio-caption" style="width: 150px;height: 60px;background-color: rgba(248,10,10,0);margin-left: 5px;">
                    <h4 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="font-size: 21px;width: 100%;height: 45px;line-height: 40px;font-style: normal;margin-top: 0px;margin-right: 0px;padding-top: 0px;padding-right: 0px;margin-left: 0px;color: #000000;background-color: rgba(255,255,255,0);font-weight: 100;font-family: Poppins, sans-serif;"><strong>Runny Nose</strong></h4>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 portfolio-item" data-bs-hover-animate="pulse" style="height: 170px;margin-right: 80px;margin-top: 40px;background-color: rgb(255,255,255);width: 53px;padding-left: 0px;max-width: 14%;margin-left: 80px;margin-bottom: 40px;"><a class="d-xl-flex justify-content-xl-center align-items-xl-center portfolio-link" data-toggle="modal" href="guide/type.png" style="color: rgba(255,255,255,0);width: 160px;"><img class="img-fluid d-xl-flex" src="assets/img/covid19/fever.gif" style="height: 105px;width: 70%;/*margin-left: 7.2px;*/background-color: rgba(255,255,255,0);margin-top: 5px;padding: 0px;"></a>
            <div
                class="text-center d-xl-flex justify-content-center align-items-center align-content-center align-items-xl-center portfolio-caption" style="width: 150px;height: 60px;background-color: rgba(248,10,10,0);margin-left: 5px;">
                <h4 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="font-size: 21px;width: 100%;height: 45px;line-height: 40px;font-weight: 100;font-style: normal;margin-top: 0px;margin-right: 0px;padding-top: 0px;padding-right: 0px;margin-left: 0px;color: #000000;background-color: rgba(255,255,255,0);font-family: Poppins, sans-serif;"><strong>Fever</strong></h4>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-xl-3 portfolio-item" data-bs-hover-animate="pulse" style="height: 170px;margin-right: 80px;margin-top: 40px;background-color: rgb(255,255,255);width: 53px;padding-left: 0px;max-width: 14%;margin-left: 80px;margin-bottom: 20px;"><a class="d-xl-flex justify-content-xl-center align-items-xl-center portfolio-link" data-toggle="modal" href="guide/type.png" style="color: rgba(255,255,255,0);width: 160px;"><img class="img-fluid d-xl-flex" src="assets/img/covid19/cold-unscreen.gif" style="height: 105px;width: 70%;/*margin-left: 7.2px;*/background-color: rgba(255,255,255,0);margin-top: 5px;padding: 0px;"></a>
        <div
            class="text-center d-xl-flex justify-content-center align-items-center align-content-center align-items-xl-center portfolio-caption" style="width: 150px;height: 60px;background-color: rgba(248,10,10,0);margin-left: 5px;">
            <h4 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="font-size: 21px;width: 100%;height: 45px;line-height: 40px;font-weight: 100;font-style: normal;margin-top: 0px;margin-right: 0px;padding-top: 0px;padding-right: 0px;margin-left: 0px;color: #000000;background-color: rgba(255,255,255,0);font-family: Poppins, sans-serif;"><strong>Cold</strong></h4>
    </div>
    </div>
    <div class="col-sm-6 col-md-4 col-xl-3 portfolio-item" data-bs-hover-animate="pulse" style="height: 170px;margin-right: 80px;margin-top: 40px;background-color: rgb(255,255,255);width: 53px;padding-left: 0px;max-width: 14%;margin-left: 80px;margin-bottom: 20px;"><a class="d-xl-flex justify-content-xl-center align-items-xl-center portfolio-link" data-toggle="modal" href="guide/type.png" style="color: rgba(255,255,255,0);width: 160px;"><img class="img-fluid d-xl-flex" src="assets/img/covid19/16939-a-sleepy-or-tired-boy-un-chico-cansado-o-dormido.gif" style="height: 105px;width: 70%;/*margin-left: 7.2px;*/background-color: rgba(255,255,255,0);margin-top: 5px;padding: 0px;"></a>
        <div
            class="text-center d-xl-flex justify-content-center align-items-center align-content-center align-items-xl-center portfolio-caption" style="width: 150px;height: 60px;background-color: rgba(248,10,10,0);margin-left: 5px;">
            <h4 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="font-size: 21px;width: 100%;height: 45px;line-height: 40px;font-weight: 100;font-style: normal;margin-top: 0px;margin-right: 0px;padding-top: 0px;padding-right: 0px;margin-left: 0px;color: #000000;background-color: rgba(255,255,255,0);font-family: Poppins, sans-serif;"><strong>Tiredness</strong></h4>
    </div>
    </div>
    <div class="col-sm-6 col-md-4 col-xl-3 portfolio-item" data-bs-hover-animate="pulse" style="height: 170px;margin-right: 80px;margin-top: 40px;background-color: rgb(255,255,255);width: 53px;padding-left: 0px;max-width: 14%;margin-left: 80px;margin-bottom: 20px;"><a class="d-xl-flex justify-content-xl-center align-items-xl-center portfolio-link" data-toggle="modal" href="guide/type.png" style="color: rgba(255,255,255,0);width: 160px;"><img class="img-fluid d-xl-flex" src="assets/img/covid19/difficulty-breathing-unscreen.gif" style="height: 105px;width: 100%;/*margin-left: 7.2px;*/background-color: rgba(255,255,255,0);margin-top: 5px;padding: 0px;"></a>
        <div
            class="text-center d-xl-flex justify-content-center align-items-center align-content-center align-items-xl-center portfolio-caption" style="width: 150px;height: 60px;background-color: rgba(248,10,10,0);margin-left: 5px;">
            <h4 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="font-size: 21px;width: 100%;height: 45px;line-height: 24px;font-weight: 100;font-style: normal;margin-top: 0px;margin-right: 0px;padding-top: 0px;padding-right: 0px;margin-left: 0px;color: #000000;background-color: rgba(255,255,255,0);font-family: Poppins, sans-serif;"><strong>Difficulty Breathing</strong></h4>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="d-xl-flex justify-content-xl-center align-items-xl-center" id="d-xl-flex-Prevention" style="width: 100%;height: 48em;background-color: rgb(255,255,255);">
        <div class="container" data-aos="fade" id="Prevention" style="padding-right: 30px;padding-left: 30px;height: 600px;margin-top: 30px;max-width: 1400px;border-style: none;">
            <div class="cust_bloglistintro" style="max-width: 650px;">
                <h1 class="d-xl-flex text-center" data-aos="fade-up" data-aos-delay="250" style="font-size: 40px;line-height: 46px;color: #000000;font-family: Montserrat, sans-serif;font-weight: 10000;letter-spacing: 1px;border-color: rgba(255,255,255,0);">6 Steps Prevention Against Corona Virus&nbsp;</h1>
            </div>
            <div class="row text-center justify-content-center" data-aos="zoom-in" data-aos-delay="200" style="width: 1200px;margin-top: 40px;padding-bottom: 20px;margin-left: 70px;">
                <div class="col-sm-6 col-md-4 col-xl-3 d-xl-flex justify-content-xl-center align-items-xl-center portfolio-item" data-bs-hover-animate="pulse" style="height: 140px;margin-top: 40px;background-color: rgb(255,255,255);padding-left: 0px;max-width: 30%;margin-bottom: 40px;margin-right: 40px;margin-left: 40px;"><a class="d-xl-flex align-items-xl-center portfolio-link" data-toggle="modal" href="guide/type.png" style="color: rgba(255,255,255,0);width: 125px;height: 100px;margin-right: 5px;"><img class="img-fluid d-xl-flex" src="assets/img/covid19/wash%20hand5.gif" style="height: 100%;width: 100%;/*margin-left: 7.2px;*/background-color: rgba(255,255,255,0);margin-top: 5px;padding: 0px;"></a>
                    <div
                        class="text-center d-xl-flex align-content-center justify-content-xl-center align-items-xl-center portfolio-caption" style="height: 120px;background-color: rgba(248,10,10,0);margin-left: 5px;width: 150px;margin-right: -12px;">
                        <h4 class="text-left d-xl-flex align-items-xl-center" style="font-size: 12px;line-height: 16px;font-weight: 100;font-style: normal;color: #000000;background-color: rgba(255,255,255,0);font-family: Poppins, sans-serif;text-align: center;margin-bottom: 0px;"><br><strong>Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.</strong><br><br><br></h4>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 d-xl-flex justify-content-xl-center align-items-xl-center portfolio-item" data-bs-hover-animate="pulse" style="height: 140px;margin-top: 40px;background-color: rgb(255,255,255);padding-left: 0px;max-width: 30%;margin-bottom: 40px;margin-right: 40px;margin-left: 40px;"><a class="d-xl-flex align-items-xl-center portfolio-link" data-toggle="modal" href="guide/type.png" style="color: rgba(255,255,255,0);width: 125px;height: 100px;margin-right: 5px;"><img class="img-fluid d-xl-flex" src="assets/img/covid19/cover%20nose.gif" style="height: 100%;width: 100%;/*margin-left: 7.2px;*/background-color: rgba(255,255,255,0);margin-top: 5px;padding: 0px;"></a>
                <div
                    class="text-center d-xl-flex align-content-center justify-content-xl-center align-items-xl-center portfolio-caption" style="height: 120px;background-color: rgba(248,10,10,0);margin-left: 5px;width: 150px;margin-right: -12px;">
                    <h4 class="text-left d-xl-flex align-items-xl-center" style="font-size: 12px;line-height: 16px;font-weight: 100;font-style: normal;color: #000000;background-color: rgba(255,255,255,0);font-family: Poppins, sans-serif;text-align: center;margin-bottom: 0px;"><br><strong>Cover your mouth and nose with a disposable tissue or flexed elbow when you cough or sneeze.</strong><br><br><br></h4>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-xl-flex justify-content-xl-center align-items-xl-center portfolio-item" data-bs-hover-animate="pulse" style="height: 140px;margin-top: 40px;background-color: rgb(255,255,255);padding-left: 0px;max-width: 30%;margin-bottom: 40px;margin-right: 40px;margin-left: 40px;"><a class="d-xl-flex align-items-xl-center portfolio-link" data-toggle="modal" href="guide/type.png" style="color: rgba(255,255,255,0);width: 125px;height: 100px;margin-right: 5px;"><img class="img-fluid d-xl-flex" src="assets/img/covid19/social%20distanc2.gif" style="height: 100%;width: 100%;/*margin-left: 7.2px;*/background-color: rgba(255,255,255,0);margin-top: 5px;padding: 0px;"></a>
            <div
                class="text-center d-xl-flex align-content-center justify-content-xl-center align-items-xl-center portfolio-caption" style="height: 120px;background-color: rgba(248,10,10,0);margin-left: 5px;width: 150px;margin-right: -12px;">
                <h4 class="text-left d-xl-flex align-items-xl-center" style="font-size: 12px;line-height: 16px;font-weight: 100;font-style: normal;color: #000000;background-color: rgba(255,255,255,0);font-family: Poppins, sans-serif;text-align: center;margin-bottom: 0px;"><br><strong>Avoid close contact (1 meter or 3 feet) with people who are unwell.</strong><br><br><br></h4>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-xl-3 d-xl-flex justify-content-xl-center align-items-xl-center portfolio-item" data-bs-hover-animate="pulse" style="height: 140px;margin-top: 40px;background-color: rgb(255,255,255);padding-left: 0px;max-width: 30%;margin-bottom: 40px;margin-right: 40px;margin-left: 40px;"><a class="d-xl-flex align-items-xl-center portfolio-link" data-toggle="modal" href="guide/type.png" style="color: rgba(255,255,255,0);width: 125px;height: 100px;margin-right: 5px;"><img class="img-fluid d-xl-flex" src="assets/img/covid19/stay%20home.gif" style="height: 100%;width: 100%;/*margin-left: 7.2px;*/background-color: rgba(255,255,255,0);margin-top: 5px;padding: 0px;"></a>
        <div
            class="text-center d-xl-flex align-content-center justify-content-xl-center align-items-xl-center portfolio-caption" style="height: 120px;background-color: rgba(248,10,10,0);margin-left: 5px;width: 150px;margin-right: -12px;">
            <h4 class="text-left d-xl-flex align-items-xl-center" style="font-size: 12px;line-height: 16px;font-weight: 100;font-style: normal;color: #000000;background-color: rgba(255,255,255,0);font-family: Poppins, sans-serif;text-align: center;margin-bottom: 0px;"><br><strong>Stay home and self-isolate from others in the household if you feel unwell.</strong><br><br><br></h4>
    </div>
    </div>
    <div class="col-sm-6 col-md-4 col-xl-3 d-xl-flex justify-content-xl-center align-items-xl-center portfolio-item" data-bs-hover-animate="pulse" style="height: 140px;margin-top: 40px;background-color: rgb(255,255,255);padding-left: 0px;max-width: 30%;margin-bottom: 40px;margin-right: 40px;margin-left: 40px;"><a class="d-xl-flex align-items-xl-center portfolio-link" data-toggle="modal" href="guide/type.png" style="color: rgba(255,255,255,0);width: 125px;height: 120px;margin-right: 5px;"><img class="img-fluid d-xl-flex" src="assets/img/covid19/stay-informated-unscreen.gif" style="height: 100%;width: 100%;/*margin-left: 7.2px;*/background-color: rgba(255,255,255,0);margin-top: 5px;padding: 0px;"></a>
        <div
            class="text-center d-xl-flex align-content-center justify-content-xl-center align-items-xl-center portfolio-caption" style="height: 120px;background-color: rgba(248,10,10,0);margin-left: 5px;width: 150px;margin-right: -12px;">
            <h4 class="text-left d-xl-flex align-items-xl-center" style="font-size: 12px;line-height: 16px;font-weight: 100;font-style: normal;color: #000000;background-color: rgba(255,255,255,0);font-family: Poppins, sans-serif;text-align: center;margin-bottom: 0px;"><br><strong>Stay informed by watching news &amp; follow the recommended practices.</strong><br><br><br></h4>
    </div>
    </div>
    <div class="col-sm-6 col-md-4 col-xl-3 d-xl-flex justify-content-xl-center align-items-xl-center portfolio-item" data-bs-hover-animate="pulse" style="height: 140px;margin-top: 40px;background-color: rgb(255,255,255);padding-left: 0px;max-width: 30%;margin-bottom: 40px;margin-right: 40px;margin-left: 40px;"><a class="d-xl-flex align-items-xl-center portfolio-link" data-toggle="modal" href="guide/type.png" style="color: rgba(255,255,255,0);width: 125px;height: 125px;margin-right: 5px;"><img class="img-fluid d-xl-flex" src="assets/img/covid19/medical%20care.gif" style="height: 100%;width: 100%;/*margin-left: 7.2px;*/background-color: rgba(255,255,255,0);margin-top: 5px;padding: 0px;"></a>
        <div
            class="text-center d-xl-flex align-content-center justify-content-xl-center align-items-xl-center portfolio-caption" style="height: 120px;background-color: rgba(248,10,10,0);margin-left: 5px;width: 150px;margin-right: -12px;">
            <h4 class="text-left d-xl-flex align-items-xl-center" style="font-size: 12px;line-height: 16px;font-weight: 100;font-style: normal;color: #000000;background-color: rgba(255,255,255,0);font-family: Poppins, sans-serif;text-align: center;margin-bottom: 0px;"><br><strong>If you have fever, cough and difficulty breathing, seek medical care early.</strong><br><br><br></h4>
    </div>
    </div>
    </div>
    </div>
    </div>
    <section id="team" class="bg-light" style="padding-top: 10px;height: 500px;margin-top: 0px;">
        <div id="team-text" style="text-align: center;margin-bottom: 3px;">
            <h2 class="divider-style" style="margin-top: 30px;margin-bottom: 30px;"><span style="background-color: rgb(248,249,250);font-size: 50px;">HI !</span></h2>
        </div>
        <div class="container-fluid justify-content-center align-items-center flex-wrap" data-aos="zoom-in" style="width: 1500px;">
            <div class="row d-flex justify-content-center align-items-center flex-wrap" data-aos="zoom-in" style="height: 350px;">
                <div class="col-sm-4 col-xl-2 d-flex flex-column" data-aos="zoom-in" style="text-shadow: 0px 0px;padding-top: 15px;padding-bottom: 15px;background-color: #ffffff;margin-right: 20px;margin-left: 20px;">
                    <div class="d-flex flex-column team-member"><img class="rounded img-fluid mx-auto" src="assets/img/team/debraj(new).jpg" style="border-width: 0px;box-shadow: 0px 5px 12px rgba(39,39,39,0.41);">
                        <p class="text-muted" style="margin-top: 20px;font-size: 18px;">Web Developer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://www.instagram.com/debraj010/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/debraj.karmakar.923" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/debraj-karmakar-275570199/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex container" id="india-3" style="/*width: 100%;*/height: 150px;/*background-color: red;*/max-width: 745px;margin-right: 0;margin-left: 0;margin-top: 13px;">
                    <div id="india-4" class="container" style="/*width: 100%;*/height: 100%;/*background-color: red;*/">
                        <h4 class="text-left" data-aos="fade-up" style="font-size: 35px;text-align: center;font-family: Montserrat, sans-serif;letter-spacing: 1px;margin-top: 0px;color: rgb(0,0,0);font-weight: bold;"><strong>Debraj Karmakar</strong><br></h4>
                        <h4 class="text-left" data-aos="fade-up" data-aos-delay="100" style="font-size: 15px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;margin-top: 15px;color: rgb(204,204,204);font-weight: bold;">debrajkarmakar010@gmail.com<br></h4>
                        <h4 class="text-left" data-aos="fade-up" data-aos-delay="150" style="font-size: 15px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;margin-top: 0px;color: rgb(204,204,204);font-weight: bold;">+91 9647576886<br></h4>
                        <h4 class="text-left" data-aos="fade-up" data-aos-delay="200" style="font-size: 15px;text-align: center;font-family: Poppins, sans-serif;letter-spacing: 1px;margin-top: 0px;color: rgb(204,204,204);font-weight: bold;">Kolkata, Kalyani<br></h4>
                    </div>
                    <div id="india-5" class="container" style="/*width: 100%;*/height: 100%;/*background-color: red;*/">
                        <h4 class="text-right" data-aos="fade-up" data-aos-delay="100" style="font-size: 13px;text-align: center;font-family: Poppins, sans-serif;color: rgb(109,109,109);font-weight: bold;margin-top: 60px;"><strong>B.Tech (Hons.), Computer Science &amp; Engineering</strong><br></h4>
                        <h4 class="text-right" data-aos="fade-up" data-aos-delay="150" style="font-size: 16px;text-align: center;font-family: Poppins, sans-serif;color: rgb(204,204,204);font-weight: bold;margin-top: 10px;">JIS College of Engineering<br></h4>
                        <h4 class="text-right" data-aos="fade-up" data-aos-delay="200" style="font-size: 16px;text-align: center;font-family: Poppins, sans-serif;color: rgb(204,204,204);font-weight: bold;margin-top: 10px;">2018 - 2022<br></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" style="background-image: url('assets/img/map-image.png');">
        <div class="container">
            <div class="row" id="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Contact</h2>
                    <h3 class="section-subheading text-muted">Get Updates &amp; More<br></h3>
                </div>
            </div>
            <div class="row d-xl-flex justify-content-xl-center align-items-xl-center" id="row-body">
                <div class="col-lg-12 d-flex">
                    <form id="contactForm" name="contactForm" novalidate="novalidate" style="margin-right: 200px;">
                        <div class="form-row" style="width: 800px;">
                            <div class="col col-md-6">
                                <div class="form-group"><input class="form-control" type="text" id="name" placeholder="Your Name *" required=""><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" id="email" placeholder="Your Email *" required=""><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="tel" placeholder="Your Phone *" required=""><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" id="message" placeholder="Your Message *" required=""></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col" id="none">
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-danger border rounded border-danger btn-xl text-uppercase" id="sendMessageButton" type="submit" style="background-color: #FC1D1D;">Send Message</button></div>
                        </div>
                    </form><img class="img-fluid d-xl-flex mx-auto" src="assets/img/animation-640-kd60ppnl-unscreen.gif" style="position: relative;top: -30px;right: 180px;box-shadow: 0px 5px 0px rgba(39,39,39,0);border-style: none;height: 300px;width: 300px;border-radius: 0;"></div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Debraj Karmakar 2020</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="https://mail.google.com/mail/u/0/?tab=wm&amp;ogbl#inbox?compose=VpCqJWJCrqFfmDlSnxWJSSqNPjxBNhpxsSqKBzDftjJjfVTqPPzlQmsNqSlKxzLPQGqBqpG" target="_blank"><i class="fab fa-google"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/debraj.karmakar.923" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/debraj-karmakar-275570199/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/debraj010/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/counterup2-1.0.1.min.js.js"></script>
    <script src="assets/js/Dynamic-Table.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/xswiper.js"></script>
</body>

</html>