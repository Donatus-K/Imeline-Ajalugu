<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php 
        header('X-UA-Compatible: IE=edge,chrome=1');
      ?>
    <title>HTML Sample work</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/my_styles.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
        <div class="content-wrapper">
            <div class="ribbon">
                Tee ise
            </div>
            <div class="logo">
                <div id="tag">Imeline</div>Ajalugu
            </div>
            <div class="content">
                Vali nende põnevate lugude seast välja enda lemmikud. <br>
                Sinu ja teiste lugejate soovide põhjal paneme kokku ajakirja novembri numbri. 
                Nii sünnib Eesti esimene lugejate poolt kokku pandud ajakiri, mille Sina võid saada endale tasuta!
                <div class="cta">
                    Vali oma lemmikartiklid
                </div>
            </div>
        </div>
    </header>
    <section class="intro">
        <div class="content-wrapper">
            <h3>Pane kokku omaenda Imeline Ajalugu</h3>
            <p>
                Vali igast teemast kuni 3 artiklit Imelise Ajaloo novembri numbrisse. Tänutäheks saadame selle Sulle tasuta.<br>
                Kui Sul endal on ajakiri juba tellitud, telli tasuta number heale sõbrale, kolleegile või sugulasele.
            </p>
        </div>
    </section>
    <div class="content-wrapper">
        <div id="articles">
            <div class="panel clearfix">
                <div class="tab clearfix" data-toggle="collapse" data-target="#article-1" data-parent="#articles">
                    <span class="heading"><span class="glyphicon glyphicon-chevron-down"></span>Pingelised sündmused</span>
                    <span class="position">2/3</span>
                </div>

                <div id="article-1" class="collapse in">
                    <div class="article clearfix">
                        <div class="checkbox-holder" >
                            <input type="checkbox" name="check" id="Aaretejaht" value="none"><label for="Aaretejaht"></label>
                        </div>
                        <div class="thumbnail">
                            <img src="images/aaretejaht.jpg" alt="Aaretejaht" class="img-responsive">
                        </div>
                        <div class="content">
                            <h3>Aaretejaht</h3>
                            <p>1820: Hispaanlased lastivad laeva aaretega, kuid see röövitakse ja aare peidetakse väikesele saarele. Tänapäeva aaretejahtija läheb seda otsima.</p>
                        </div>
                    </div>
                    <div class="article clearfix">
                        <div class="checkbox-holder" >
                            <input type="checkbox" name="check" id="Purustav" value="none"><label for="Purustav"></label>
                        </div>
                        <div class="thumbnail">
                            <img src="images/purustav.jpg" alt="Purustav orkaan" class="img-responsive">
                        </div>
                        <div class="content">
                            <h3>Purustav orkaan</h3>
                            <p>
                                1900: Orkaan purustab Galvestoni linna. Katastroofis hukkub 8000 inimest ning see USA linn kaotab igaveseks oma jõukuse ja sära.
                            </p>
                        </div>
                    </div>
                    <div class="article clearfix">
                        <div class="checkbox-holder" >
                            <input type="checkbox" name="check" id="Hirmsaim" value="none"><label for="Hirmsaim"></label>
                        </div>
                        <div class="thumbnail">
                            <img src="images/hirmsaim.jpg" alt="Hirmsaim lennukatastroof" class="img-responsive">
                        </div>
                        <div class="content">
                            <h3>Hirmsaim lennukatastroof</h3>
                            <p>
                               1977: Gran Canaria lennuväljal plahvatanud pommi tõttu suunatakse paljud lennud Tenerifele. Tekkinud segaduses juhtub ajaloo suurim lennuõnnetus.
                            </p>
                        </div>
                    </div>
                    <div class="article clearfix">
                        <div class="checkbox-holder" >
                            <input type="checkbox" name="check" id="Samuraide" value="none"><label for="Samuraide"></label>
                        </div>
                        <div class="thumbnail">
                            <img src="images/samuraide.jpg" alt="Samuraide kättemaks" class="img-responsive">
                        </div>
                        <div class="content">
                            <h3>Samuraide kättemaks</h3>
                            <p>
                                1703: Noor mees sunnitakse enesetapule ning tema klanni samuraid peavad perekonna au taastama.
                            </p>
                        </div>
                    </div>
                    <div class="article clearfix">
                        <div class="checkbox-holder" >
                            <input type="checkbox" name="check" id="Project" value="none"><label for="Project"></label>
                        </div>
                        <div class="thumbnail">
                            <img src="images/azorian.jpg" alt="Project Azorian" class="img-responsive">
                        </div>
                        <div class="content">
                            <h3>Project Azorian</h3>
                            <p>
                                1968: Ootamatult upub nõukogude allveelaev K-129 tuumarakettidega pardal. Mõne aasta pärast alustab CIA vaenlase allveelaeva koopia ehitamist - algab projekt Azorian.
                            </p>
                        </div>
                    </div>
                    <div class="article clearfix">
                        <div class="checkbox-holder" >
                            <input type="checkbox" name="check" id="Viis" value="none"><label for="Viis"></label>
                        </div>
                        <div class="thumbnail">
                            <img src="images/viis.jpg" alt="Viis ööpäeva põrgus" class="img-responsive">
                        </div>
                        <div class="content">
                            <h3>Viis ööpäeva põrgus</h3>
                            <p>
                                1977: Palestiina terroristid kaaperdavad reisilennuki. Tund-tunnilt kustub reisijate lootus eluga pääseda. Lääne-Saksamaa saadab Somaaliasse teel olevale lennukile vastu eriüksuse.
                            </p>
                        </div>
                    </div>
                    <div class="article clearfix">
                        <div class="checkbox-holder" >
                            <input type="checkbox" name="check" id="Tuumakatastroof" value="none"><label for="Tuumakatastroof"></label>
                        </div>
                        <div class="thumbnail">
                            <img src="images/tuumakatastroo.jpg" alt="Tuumakatastroof Tšernobõlis" class="img-responsive">
                        </div>
                        <div class="content">
                            <h3>Tuumakatastroof Tšernobõlis</h3>
                            <p>
                                1986: Suur osa Nõukogude Liidu elektrist tuleb tuumajaamadest, kuid nende ehitamisel on tehtud mitmeid vigu. 26. aprillil toimub Tšernobõli tuumajaamas plahvatus ning ajaloo suurim tuumakatastroof saab tõeks.
                            </p>
                        </div>
                    </div>
                    <a data-toggle="collapse" href="#article-2" data-parent="#articles">Järgmiste artiklite juurde</a>
                </div>
            </div>
            <div class="panel clearfix">
                <div class="tab clearfix" data-toggle="collapse" data-target="#article-2" data-parent="#articles">
                    <span class="heading"><span class="glyphicon glyphicon-chevron-down"></span>Kuulsad teod</span>
                    <span class="position">0/3</span>
                </div>

                <div id="article-2" class="collapse">
                    <div class="article clearfix">
                        <div class="checkbox-holder" >
                            <input type="checkbox" name="check" id="Tuumakatastroof1" value="none"><label for="Tuumakatastroof1"></label>
                        </div>
                        <div class="thumbnail">
                            <img src="images/tuumakatastroo.jpg" alt="Tuumakatastroof Tšernobõlis" class="img-responsive">
                        </div>
                        <div class="content">
                            <h3>Tuumakatastroof Tšernobõlis</h3>
                            <p>
                                1986: Suur osa Nõukogude Liidu elektrist tuleb tuumajaamadest, kuid nende ehitamisel on tehtud mitmeid vigu. 26. aprillil toimub Tšernobõli tuumajaamas plahvatus ning ajaloo suurim tuumakatastroof saab tõeks.
                            </p>
                        </div>
                    </div>
                    <a data-toggle="collapse" href="#article-3" data-parent="#articles">Järgmiste artiklite juurde</a>
                </div>
            </div>
            <div class="panel clearfix">
                <div class="tab clearfix"  data-toggle="collapse" data-target="#article-3" data-parent="#articles">
                    <span class="heading"><span class="glyphicon glyphicon-chevron-down"></span>Igapäevane elu</span>
                    <span class="position">0/3</span>
                </div>

                <div id="article-3" class="collapse">
                    <div class="article clearfix">
                        <div class="checkbox-holder" >
                            <input type="checkbox" name="check" id="Tuumakatastroof2" value="none"><label for="Tuumakatastroof2"></label>
                        </div>
                        <div class="thumbnail">
                            <img src="images/tuumakatastroo.jpg" alt="Tuumakatastroof Tšernobõlis" class="img-responsive">
                        </div>
                        <div class="content">
                            <h3>Tuumakatastroof Tšernobõlis</h3>
                            <p>
                                1986: Suur osa Nõukogude Liidu elektrist tuleb tuumajaamadest, kuid nende ehitamisel on tehtud mitmeid vigu. 26. aprillil toimub Tšernobõli tuumajaamas plahvatus ning ajaloo suurim tuumakatastroof saab tõeks.
                            </p>
                        </div>
                    </div>
                    <a data-toggle="collapse" href="#article-4" data-parent="#articles">Järgmiste artiklite juurde</a>
                </div>
            </div>
            <div class="panel clearfix">
                <div class="tab clearfix"  data-toggle="collapse" data-target="#article-4" data-parent="#articles">
                    <span class="heading"><span class="glyphicon glyphicon-chevron-down"></span>Suured konfliktid</span>
                    <span class="position">0/3</span>
                </div>

                <div id="article-4" class="collapse">
                    <div class="article clearfix">
                        <div class="checkbox-holder" >
                            <input type="checkbox" name="check" id="Tuumakatastroof3" value="none"><label for="Tuumakatastroof3"></label>
                        </div>
                        <div class="thumbnail">
                            <img src="images/tuumakatastroo.jpg" alt="Tuumakatastroof Tšernobõlis" class="img-responsive">
                        </div>
                        <div class="content">
                            <h3>Tuumakatastroof Tšernobõlis</h3>
                            <p>
                                1986: Suur osa Nõukogude Liidu elektrist tuleb tuumajaamadest, kuid nende ehitamisel on tehtud mitmeid vigu. 26. aprillil toimub Tšernobõli tuumajaamas plahvatus ning ajaloo suurim tuumakatastroof saab tõeks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
    <div class="content-wrapper">
        <button class="done" data-toggle="modal" data-target="#myModal">Valmis!</button>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Kampaania tingimused</h4>
              </div>
              <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                </p>
                <p>
                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <p>
                      Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
                  </p>
                  <p>
                      Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                   </p>
                </div>
            </div>
          </div>
        </div>
        <div class="lower-content">
            <em>Imeline Ajalugu</em> on põhjamaade populaarseim ajalooajakiri, millel on Eestis üle 50 000 lugeja. 
            Ajakiri ilmub kord kuus, igas numbris on põnevad ja rikkalikult illustreeritud lood ligi 100 leheküljel. 
            Imelist Ajalugu annab Eestis välja AS Äripäev alates 2011 aaasta sügisest.
        </div>
        <div class="image">
            <img src="images/imeline-ajalugu.jpg" class="img-responsive" alt="Imeline Ajalugu">
        </div>
    </div>
    <footer>
        <div class="content-wrapper">
            <div class="footer-text">
                <p><a href="#">Tutvu kampaania tingimustega</a></p>
                <p>Klienditeeninduse e-post: <a href="mailto:register@imelineajalugu.ee">register@imelineajalugu.ee</a>, tel: 667 0099 (tööpäeviti 9–17)  </p>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.js"></script>
    <script src="js/myscripts.js"></script>
  </body>
</html>