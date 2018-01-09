<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'header.php';
?>

<div class="homePage onlyDesigners">
    <div class="container-fluid sliderSection nopadding">
        <div class="sliderContent">
            <img src="images/design-page-top-image.png" alt="img" class="img-responsive" />            
        </div>        
    </div>

    <div class="container-fluid margin40pxTB">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Designers</h2>                    
                </div>
            </div>
            <div class="row aboutusId">
                <div class="col-sm-3 text-center">
                    <h4><a href="#Anders">Anders Bylin</a></h4>                    
                </div>
                <div class="col-sm-3 text-center">
                    <h4><a href="#Gunilla">Gunilla Axen</a></h4>                    
                </div>
                <div class="col-sm-3 text-center">
                    <h4><a href="#Anna">Anna Berger</a></h4>                    
                </div>
                <div class="col-sm-3 text-center">
                    <h4><a href="#Karin">Karin Mannerstal</a></h4>                    
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid media designers nopadding" id="Anders" style="background: url(images/designer1-bg.png);">
        <div class="nopadding media-left designerDetail">
            <div class="designerContent">
                <h2>Anders Bylin</h2>
                <p>
                    Anders Bylin ar utbildad vid Handelshogskolan i 
                    Goteborg inom ekonomi och marknadsforing, 
                    men sadlade om 1996 nar han grundade Farg&Form.               
                </p>
                <p>
                    Anders Bylin star bakom var beromda djurserie. 
                    Djuren och deras renodlade grafiska stil blev en stor 
                    framgang, aven internationellt, och tog Farg&Form ut 
                    pa exportmarknaden. Monstren GRODA och LAMM ar 
                    tva populara monster i KIDS-sortiment. Ett annat av 
                    djuren har idag ett eget sortiment kallat MOZ som 
                    bygger helt pa den grafiska algen.               
                </p>                
            </div>
        </div>

        <div class="media-body nopadding designersImg">
            <div class="col-md-12 nopadding">
                <img src="images/designer1.png" />
            </div>
        </div>
    </div>

    <div class="container-fluid media designers nopadding" id="Gunilla" style="background: url(images/designer2-bg.png);">
        <div class="media-left designersImg nopadding">
            <div class="col-md-12 nopadding">
                <img src="images/designer2.png" />
            </div>
        </div>

        <div class="nopadding media-body designerDetail">
            <div class="designerContent">
                <h2>Gunilla Axen</h2>
                <p>
                    Gunila Axen skapade 1966 ett monster som skulle bli 
                    ett av Sveriges mest valkanda och langlivade.                
                </p>
                <p>
                    MOLN var Gunila Axens forsta salda arbete som 
                    nyutexaminerad fran Beckmans och har foljts av 
                    en mangfacetterad karriar innefattande en professur 
                    vid Konstfack. Idag finns MOLN-monstret pa 
                    barn-produkter i sex farger i vart KIDS-sortiment. 
                    Gunila Axen ligger aven bakom Farg&Forms omattligt 
                    populara ripsmattor som kommer i flera farger och 
                    utforanden.
                </p>
            </div>
        </div>                
    </div>


    <div class="container-fluid media designers nopadding" id="Anna" style="background: url(images/designer3-bg.png);">
        <div class="nopadding media-left designerDetail">
            <div class="designerContent">
                <h2>Anna Berger </h2>
                <p>
                    Anna Berger ar formgivaren bakom vara fina 
                    Skummisar och Filurer. Fantasidjuren har salts 
                    i flera ar under varumarket Skummis men har 
                    sedan 2011 flyttat in hos Farg&Form.                
                </p>
                <p>
                    Anna Berger fortsatter att utveckla konceptet 
                    tillsammans med oss och nya barnvagnsband, 
                    speldosor etc. ar att vanta. Anna Berger har aven, 
                    med sin gedigna erfarenhet av formgivning av 
                    barnklader och textila monster, tillsammans 
                    med Gunila Axen tagit fram var kollektion 
                    babyklader i monstret MOLN.
                </p>
            </div>
        </div>

        <div class="media-body nopadding designersImg">
            <div class="col-md-12 nopadding">
                <img src="images/designer3.png"/>
            </div>
        </div>
    </div>


    <div class="container-fluid media designers nopadding" id="Karin" style="background: url(images/designer4-bg.png);">
        <div class="media-left designersImg nopadding">
            <div class="col-md-12 nopadding">
                <img src="images/designer4.png" />
            </div>
        </div>

        <div class="nopadding media-body designerDetail">
            <div class="designerContent">
                <h2>Karin Mannerstal</h2>
                <p>
                    Karin Mannerstal ar designern bakom monstren 
                    TINY, RUTA, MONSTER och PENGUIN PALS.               
                </p>
                <p>
                    Karin ar utbildad vid Beckmans designhogskola och 
                    arbetar som grafisk formgivare, inredare och designer. 
                    Manga av er kanner kanske igen henne fran inrednings-
                    programmet Antligen Hemma. Att designa monster ar 
                    ett uppdrag som ligger Karin nara hjartat.
                </p>
            </div>
        </div>
    </div>






</div>


<?php include 'footer.php'; ?>
<script type="text/javascript">
    $(document).ready(function () {
        if ($(".designersImg").parent().width()>1024) {
            $(".designersImg img").width($(".designersImg").parent().width() / 2);
        }
    });
</script>