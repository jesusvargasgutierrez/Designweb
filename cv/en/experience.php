<!DOCTYPE HTML>
<html>
  <?php include('page/header.php'); ?>
  <?php include('page/body.php'); ?>
    <br />
    <style type="text/css">
       body{
          margin-top:100px !important;
        }
        .Yearly-timeline{ font-family: 'Poppins', sans-serif; }
        .Yearly-timeline:after{
            content: '';
            display: block;
            clear: both;
        }
        .Yearly-timeline .timeline{
            width: calc(50% + 17px);
            padding: 0 30px 30px 0;
            float: left; 
            position: relative;
        }
        .Yearly-timeline .timeline:before,
        .Yearly-timeline .timeline:after{
            content: '';
            height: 60px;
            width: 2px;
            border-left: 2px solid #70d6ff;
            transform: rotate(-45deg);
            position: absolute;
            right: 30px;
            bottom: 0;
        }
        .Yearly-timeline .timeline:after{
            background-color: #fff;
            height: 20px;
            width: 20px;
            border: 6px solid #70d6ff;
            border-radius: 50%;
            right: 0;
        }   
        .Yearly-timeline .timeline-content{
            color: #555;
            background: #70d6ff;
            text-align: center;
            min-height: 170px;
            padding: 30px 35px 35px;
            border-radius: 15px 15px 0 15px;
            display: block;
            position: relative;
            z-index: 1;
        }
        .Yearly-timeline .timeline-content:before{
            content: '';
            background-color: #fff;
            position: absolute;
            left: 17px;
            right: 17px;
            top: 17px;
            bottom: 17px;
            z-index: -1;
        }
        .Yearly-timeline .timeline-content:hover{ text-decoration: none; }
        .Yearly-timeline .timeline-icon{
            color: #777;
            font-size: 35px;
        }
        .Yearly-timeline .title{
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin: 0 0 8px;
        }
        .Yearly-timeline .description{
            color: #777;
            font-size: 13px;
            font-weight: 400;
            letter-spacing: 0.5px;
            line-height: 18px;
            margin: 0;
        }
        .Yearly-timeline .timeline:nth-child(even){
            padding: 0 0 30px 30px;
            float: right;
        }
        .Yearly-timeline .timeline:nth-child(even):before{
            transform: rotate(45deg);
            right: auto;
            left: 30px;
        }
        .Yearly-timeline .timeline:nth-child(even):after{
            right: auto;
            left: 0;
        }
        .Yearly-timeline .timeline:nth-child(even) .timeline-content{ border-radius: 15px 15px 15px 0; }
        .Yearly-timeline .timeline:nth-child(4n+2):before,
        .Yearly-timeline .timeline:nth-child(4n+2):after{
            border-color: #ff70a6;
        }
        .Yearly-timeline .timeline:nth-child(4n+2) .timeline-content{
            background: #ff70a6;
        }
        .Yearly-timeline .timeline:nth-child(4n+3):before,
        .Yearly-timeline .timeline:nth-child(4n+3):after{
            border-color: #ff9770;
        }
        .Yearly-timeline .timeline:nth-child(4n+3) .timeline-content{
            background: #ff9770;
        }
        .Yearly-timeline .timeline:nth-child(4n+4):before,
        .Yearly-timeline .timeline:nth-child(4n+4):after{
            border-color: #ffd670;
        }
        .Yearly-timeline .timeline:nth-child(4n+4) .timeline-content{
            background:#ffd670;
        }
        @media screen and (max-width:767px){
            .Yearly-timeline .timeline{
                width: 100%;
                padding: 30px 0 0 30px;
                margin: 0 0 20px;
            }   
            .Yearly-timeline .timeline:before,
            .Yearly-timeline .timeline:nth-child(even):before{
                transform: rotate(-45deg);
                bottom: auto;
                top: 0;
                right: auto;
                left: 30px;
            }
            .Yearly-timeline .timeline:after,
            .Yearly-timeline .timeline:nth-child(even):after{
                bottom: auto;
                top: 0;
                right: auto;
                left: 0;
            }
            .Yearly-timeline .timeline-content,
            .Yearly-timeline .timeline:nth-child(even) .timeline-content{
                border-radius: 0 15px 15px 15px;
            }
        }
    </style>
    <div class="h3 mb-4">
        Laboral experience and professional
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="Yearly-timeline">
                <div class="timeline">
                    <a href="" class="timeline-content">
                        <h3 class="title">2016-2020</h3>
                        <div class="description">
                            <em>
                                Developer .NET for RP fintech and credits
                            </em>
                            <br/><br/>
                            <strong class="mt-3">Technologies:</strong><br/>
                            <div class="description" style="text-decoration: none;">
                              <div>SCRUM Methodology</div>
                              <div>MVC</div>
                              <div>Layer programming</div>
                              <div>API Developer</div>
                              <div>.NET core</div>
                              <div>Stored procedures SQL Server</div>
                              <div>IIS</div>
                              <div>Microsoft azure</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="timeline">
                    <a href="" class="timeline-content">
                        <h3 class="title">2020-2021</h3>
                        <div class="description">
                            <em>
                                Master degree Software enginnier and Informatic system
                            </em>
                            <br/><br/>
                            <strong class="mt-3">Technologies:</strong><br/>
                            <div class="description" style="text-decoration: none;">
                              <div>Docker</div>
                              <div>Developer php</div>
                              <div>Developer laravel</div>
                              <div>Developer React Js</div>
                              <div>Databases MySql server, MongoDB</div>
                              <div>Server configuration IIS, AWS </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="timeline">
                    <a href="" class="timeline-content">   
                        <h3 class="title">2020-Currently</h3>
                        <p class="description">
                            <em>Developer</em>
                            <br/><br/>
                            <strong class="mt-3">Technologies:</strong><br/>
                            <div class="description" style="text-decoration: none;">
                              <div>Developer php</div>
                              <div>Developer laravel</div>
                              <div>Developer React Js</div>
                              <div>Developer Perl</div>
                              <div>Databses MySql server</div>
                              <div>Server configuration de servidores AWS </div>
                              <div>e-commerce</div>
                            </div>
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="" class="timeline-content">
                        <h3 class="title">2021-Currently</h3>
                        <p class="description">
                            <em>Own proyects</em>
                            <br/><br/>
                            <strong class="mt-3">Technologies:</strong><br/>
                            <div class="description" style="text-decoration: none;">
                              <div>Databases MySql server</div>
                              <div>Server configuration servidores AWS </div>
                              <div>Create and maintanaice e-commerce</div>
                            </div>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
  <?php include('page/footer.php'); ?>
</html>