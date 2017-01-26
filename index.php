<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Acasa</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/diagr1.css" rel="stylesheet">
    <link href="css/diagr2.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>

    <div class="brand">Delicventa Juvenila</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Acasa</a>
                    </li>
                    <li>
                        <a href="about.php">Despre</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="bibliografie.php">Bibliografie</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs" style="margin-bottom:100px;">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/dvj1.jpg" alt="">
                                <h1 class="brand-name" style="margin-top:30px;">Bataie intre adolescenti</h1>
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/dvj2.jpg" alt="">
                                <h1 class="brand-name" style="margin-top:30px;">Bataie la scoala</h1>
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/dvj3.jpg" alt="">
                                <h1 class="brand-name" style="margin-top:30px;">Bataie in grup</h1>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Ce este <strong>delicvența juvenilă</strong> si care sunt motivele aparitiei ei?</h2>
                    <hr>
                        <div id="video-container" class="col-md-6">
                                <!-- Video -->
                                <video id="video" width="600" height="365">
                                <source src="video/firstpg.webm" type="video/webm">
                                <source src="video/firstpg.ogv" type="video/ogv">
                                <source src="video/firstpg.mp4" type="video/mp4">
                                </video>
                                    <!-- Video Controls -->
                                    <div id="video-controls">
                                    <button type="button" id="play-pause">Play</button>
                                    <input type="range" id="seek-bar" value="0">
                                    <button type="button" id="mute">Mute</button>
                                    <input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
                                    <button type="button" id="full-screen">Full-Screen</button>
                                    </div>
                        </div>
                    <hr class="visible-xs">
                    <p>Delincvenţa juvenilă este o componentă a criminalităţii. Ea este un fenomen de devianţă, manifestat prin incapacitatea unor minori/adolescenți de a se adapta la normele de conduită din societate. Această incapacitate este datorată unor cauze de ordin bio-psiho-social.</p>
                    <p>În ţara noastră, există unii tineri şi minori care participă destul de activ la săvârşirea unor fapte penale. Ei participă şi săvârşesc îndeosebi infracţiuni cum ar fi: furturi, violuri, vătămări corporale, infracţiuni de lovituri cauzatoare de moarte, omor şi tentativă de omor.</p>
                    <p>Criminalitatea în rândul minorilor are multe cauze diferite de cele ale criminalităţii adulţilor. Analizând acest fenomen, pe genuri de infracţiuni s-au desprins următoarele cauze specifice ale apariției delicvenței juvenile sunt:
    <ul style="font-size:18px;">
        <li> creşterea situaţiilor de abandon şcolar a unor elevi cunoscuţi cu comportament deviant sau preocupări antisociale, lipsa unei activităţi utile;</li>
        <li> lipsa de supraveghere permanentă de către părinţi, supraveghetori, tutori etc.;</li>
        <li> familiile dezorganizate din rândul cărora provin unii minori infractori ai căror părinţi sunt cunoscuţi cu antecedente penale;</li>
        <li> Intermitență în educaţia minorilor de către şcoală, unităţi de ocrotire (case de copii, şcoli de reeducare, şcoli speciale) alte instituţii cu atribuţii în acest sens;</li>
        <li> necunoaşterea din timp a anturajului, a locurilor şi mediilor frecventate de minori;</li>
        <li> lipsa unei legături permanente între familie şi şcoală;</li>
        <li> influenţa unor infractori majori aflaţi în anturajul minorilor prin determinarea acestora de a comite fapte antisociale;</li>
        <li> consumul de către unii minori de substanţe halucinogene şi alcool pentru creşterea unei stări euforice.</li>
    </ul>
                    </p>
                </div>
            </div>
        </div>

    <div class="row" style="padding-bottom:100px;">
        <div class="box" style="padding-bottom:100px;">
            <div class="col-lg-12"  style="margin-left:23px;">
                <div class="chart">
                    <table id="data-table" border="1" cellpadding="10" cellspacing="0">
                        <caption>Date statistice privind infractiunile comise in perioada 2011-2015</caption>
                        <thead>
                            <tr>
                                <td>&nbsp;</td>
                                <th scope="col">2011</th>
                                <th scope="col">2012</th>
                                <th scope="col">2013</th>
                                <th scope="col">2014</th>
                                <th scope="col">2015</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Furturi</th>
                                <td>2172</td>
                                <td>2882</td>
                                <td>2770</td>
                                <td>1850</td>
                                <td>1761</td>
                            </tr>
                            <tr>
                                <th scope="row">Tâlhării</th>
                                <td>478</td>
                                <td>716</td>
                                <td>726</td>
                                <td>557</td>
                                <td>710</td>
                            </tr>
                            <tr>
                                <th scope="row">Loviri şi Vătămări</th>
                                <td>250</td>
                                <td>366</td>
                                <td>376</td>
                                <td>244</td>
                                <td>299</td>
                            </tr>
                            <tr>
                                <th scope="row">Violuri</th>
                                <td>67</td>
                                <td>97</td>
                                <td>96</td>
                                <td>103</td>
                                <td>110</td>
                            </tr>
                            <tr>
                                <th scope="row">Acte sexual cu minor</th>
                                <td>31</td>
                                <td>40</td>
                                <td>41</td>
                                <td>24</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <th scope="row">Omoruri</th>
                                <td>44</td>
                                <td>99</td>
                                <td>95</td>
                                <td>73</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <th scope="row">Ucideri din culpă</th>
                                <td>12</td>
                                <td>16</td>
                                <td>12</td>
                                <td>8</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <th scope="row">Infracţiuni rutiere</th>
                                <td>130</td>
                                <td>135</td>
                                <td>143</td>
                                <td>140</td>
                                <td>162</td>
                            </tr>
                            <tr>
                                <th scope="row">Consum şi Trafic de droguri</th>
                                <td>22</td>
                                <td>42</td>
                                <td>39</td>
                                <td>36</td>
                                <td>30</td>
                            </tr>
                        </tbody>
                    </table>
                </div>            
            </div>
        </div>
    </div>

</div>

    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Noroc Andrei 2017</p>
                </div>
            </div>
        </div>
    </footer>


<!-- JavaScript at the bottom for fast page loading -->
        
    <!-- Grab jQuery from Google -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>



<script type="text/javascript">

//video script------------------------------------------------------------------------------------------------------------

    window.onload = function() {

    // Video
    var video = document.getElementById("video");

    // Buttons
    var playButton = document.getElementById("play-pause");
    var muteButton = document.getElementById("mute");
    var fullScreenButton = document.getElementById("full-screen");

    // Sliders
    var seekBar = document.getElementById("seek-bar");
    var volumeBar = document.getElementById("volume-bar");


    // Event listener for the play/pause button
    playButton.addEventListener("click", function() {
        if (video.paused == true) {
            // Play the video
            video.play();

            // Update the button text to 'Pause'
            playButton.innerHTML = "Pause";
        } else {
            // Pause the video
            video.pause();

            // Update the button text to 'Play'
            playButton.innerHTML = "Play";
        }
    });


    // Event listener for the mute button
    muteButton.addEventListener("click", function() {
        if (video.muted == false) {
            // Mute the video
            video.muted = true;

            // Update the button text
            muteButton.innerHTML = "Unmute";
        } else {
            // Unmute the video
            video.muted = false;

            // Update the button text
            muteButton.innerHTML = "Mute";
        }
    });


    // Event listener for the full-screen button
    fullScreenButton.addEventListener("click", function() {
        if (video.requestFullscreen) {
            video.requestFullscreen();
        } else if (video.mozRequestFullScreen) {
            video.mozRequestFullScreen(); // Firefox
        } else if (video.webkitRequestFullscreen) {
            video.webkitRequestFullscreen(); // Chrome and Safari
        }
    });


    // Event listener for the seek bar
    seekBar.addEventListener("change", function() {
        // Calculate the new time
        var time = video.duration * (seekBar.value / 100);

        // Update the video time
        video.currentTime = time;
    });

    
    // Update the seek bar as the video plays
    video.addEventListener("timeupdate", function() {
        // Calculate the slider value
        var value = (100 / video.duration) * video.currentTime;

        // Update the slider value
        seekBar.value = value;
    });

    // Pause the video when the seek handle is being dragged
    seekBar.addEventListener("mousedown", function() {
        video.pause();
    });

    // Play the video when the seek handle is dropped
    seekBar.addEventListener("mouseup", function() {
        video.play();
    });

    // Event listener for the volume bar
    volumeBar.addEventListener("change", function() {
        // Update the video volume
        video.volume = volumeBar.value;
    });
}

//diagram script -------------------------------------------------------------------------------------------------------

// Wait for the DOM to load everything, just to be safe
$(document).ready(function() {

    // Create our graph from the data table and specify a container to put the graph in
    createGraph('#data-table', '.chart');
    
    // Here be graphs
    function createGraph(data, container) {
        // Declare some common variables and container elements 
        var bars = [];
        var figureContainer = $('<div id="figure"></div>');
        var graphContainer = $('<div class="graph"></div>');
        var barContainer = $('<div class="bars"></div>');
        var data = $(data);
        var container = $(container);
        var chartData;      
        var chartYMax;
        var columnGroups;
        
        // Timer variables
        var barTimer;
        var graphTimer;
        
        // Create table data object
        var tableData = {
            // Get numerical data from table cells
            chartData: function() {
                var chartData = [];
                data.find('tbody td').each(function() {
                    chartData.push($(this).text());
                });
                return chartData;
            },
            // Get heading data from table caption
            chartHeading: function() {
                var chartHeading = data.find('caption').text();
                return chartHeading;
            },
            // Get legend data from table body
            chartLegend: function() {
                var chartLegend = [];
                // Find th elements in table body - that will tell us what items go in the main legend
                data.find('tbody th').each(function() {
                    chartLegend.push($(this).text());
                });
                return chartLegend;
            },
            // Get highest value for y-axis scale
            chartYMax: function() {
                var chartData = this.chartData();
                // Round off the value
                var chartYMax = Math.ceil(Math.max.apply(Math, chartData) / 1000) * 1000;
                return chartYMax;
            },
            // Get y-axis data from table cells
            yLegend: function() {
                var chartYMax = this.chartYMax();
                var yLegend = [];
                // Number of divisions on the y-axis
                var yAxisMarkings = 4;                      
                // Add required number of y-axis markings in order from 0 - max
                for (var i = 0; i < yAxisMarkings; i++) {
                    yLegend.unshift(((chartYMax * i) / (yAxisMarkings - 1)) / 1000);
                }
                return yLegend;
            },
            // Get x-axis data from table header
            xLegend: function() {
                var xLegend = [];
                // Find th elements in table header - that will tell us what items go in the x-axis legend
                data.find('thead th').each(function() {
                    xLegend.push($(this).text());
                });
                return xLegend;
            },
            // Sort data into groups based on number of columns
            columnGroups: function() {
                var columnGroups = [];
                // Get number of columns from first row of table body
                var columns = data.find('tbody tr:eq(0) td').length;
                for (var i = 0; i < columns; i++) {
                    columnGroups[i] = [];
                    data.find('tbody tr').each(function() {
                        columnGroups[i].push($(this).find('td').eq(i).text());
                    });
                }
                return columnGroups;
            }
        }
        
        // Useful variables for accessing table data        
        chartData = tableData.chartData();      
        chartYMax = tableData.chartYMax();
        columnGroups = tableData.columnGroups();
        
        // Construct the graph
        
        // Loop through column groups, adding bars as we go
        $.each(columnGroups, function(i) {
            // Create bar group container
            var barGroup = $('<div class="bar-group"></div>');
            // Add bars inside each column
            for (var j = 0, k = columnGroups[i].length; j < k; j++) {
                // Create bar object to store properties (label, height, code etc.) and add it to array
                // Set the height later in displayGraph() to allow for left-to-right sequential display
                var barObj = {};
                barObj.label = this[j];
                barObj.height = Math.floor(barObj.label / chartYMax * 100) + '%';
                barObj.bar = $('<div class="bar fig' + j + '"><span>' + barObj.label + '</span></div>')
                    .appendTo(barGroup);
                bars.push(barObj);
            }
            // Add bar groups to graph
            barGroup.appendTo(barContainer);            
        });
        
        // Add heading to graph
        var chartHeading = tableData.chartHeading();
        var heading = $('<h4>' + chartHeading + '</h4>');
        heading.appendTo(figureContainer);
        
        // Add legend to graph
        var chartLegend = tableData.chartLegend();
        var legendList  = $('<ul class="legend"></ul>');
        $.each(chartLegend, function(i) {           
            var listItem = $('<li><span class="icon fig' + i + '"></span>' + this + '</li>')
                .appendTo(legendList);
        });
        legendList.appendTo(figureContainer);
        
        // Add x-axis to graph
        var xLegend = tableData.xLegend();      
        var xAxisList   = $('<ul class="x-axis"></ul>');
        $.each(xLegend, function(i) {           
            var listItem = $('<li><span>' + this + '</span></li>')
                .appendTo(xAxisList);
        });
        xAxisList.appendTo(graphContainer);
        
        // Add y-axis to graph  
        var yLegend = tableData.yLegend();
        var yAxisList   = $('<ul class="y-axis"></ul>');
        $.each(yLegend, function(i) {           
            var listItem = $('<li><span>' + this + '</span></li>')
                .appendTo(yAxisList);
        });
        yAxisList.appendTo(graphContainer);     
        
        // Add bars to graph
        barContainer.appendTo(graphContainer);      
        
        // Add graph to graph container     
        graphContainer.appendTo(figureContainer);
        
        // Add graph container to main container
        figureContainer.appendTo(container);
        
        // Set individual height of bars
        function displayGraph(bars, i) {        
            // Changed the way we loop because of issues with $.each not resetting properly
            if (i < bars.length) {
                // Animate height using jQuery animate() function
                $(bars[i].bar).animate({
                    height: bars[i].height
                }, 800);
                // Wait the specified time then run the displayGraph() function again for the next bar
                barTimer = setTimeout(function() {
                    i++;                
                    displayGraph(bars, i);
                }, 100);
            }
        }
        
        // Reset graph settings and prepare for display
        function resetGraph() {
            // Stop all animations and set bar height to 0
            $.each(bars, function(i) {
                $(bars[i].bar).stop().css('height', 0);
            });
            
            // Clear timers
            clearTimeout(barTimer);
            clearTimeout(graphTimer);
            
            // Restart timer        
            graphTimer = setTimeout(function() {        
                displayGraph(bars, 0);
            }, 200);
        }
        
        // Helper functions
        
        // Call resetGraph() when button is clicked to start graph over
        $('#reset-graph-button').click(function() {
            resetGraph();
            return false;
        });
        
        // Finally, display graph via reset function
        resetGraph();
    }   
});

</script>