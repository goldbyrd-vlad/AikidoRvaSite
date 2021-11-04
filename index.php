<?php
include_once('components/tools.php');
include_once('components/header.php');
include_once('components/navbar.php');

echo "hello world! this is a test!<hr>";
echo $test;
?>
<div class="container-fluid g-0 main">
    <div class="row justify-content-center g-0 mt-1">
        <div class="col-12 col-lg-12 text-center">
            <div class="logo p-4" uk-height-viewport="offset-top: true">
            <div class="display-1 mt-5" uk-parallax="y: -300;">
                <span ><b style="font-size: 2em;">Johnson's Bonding</b></span>
            </div>
                <b>Putting your feet back on the street!</b>
                <br>

                <b>(804)<span>439-</span>BAIL(<span>22</span>45)</b>
                <br>
                <b>24<span>/</span>7</b>
                <br>
            
            </div>
           
        </div>

    </div>
        <div class="row justify-content-center ">
            <div class="col-12 col-lg-12">
               
                <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top uk-background-fixed" style="background-image: url('images/index1.jpg');" uk-height-viewport="offset-top: true">
                <div class=" uk-text-center uk-margin-auto uk-margin-auto-vertical uk-width-5-6">
                    <h1 class="tag-line header" uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.4;"> Putting your feet</h1>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-12 text-center">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
               
                <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top uk-background-fixed" style="background-image: url('images/index2.jpg');" uk-height-viewport="offset-top: true">
                <div class=" uk-text-center uk-margin-auto uk-margin-auto-vertical uk-width-5-6">
                    <h1 class="tag-line header" uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.4;">back on the street!</h1>
                </div>
            </div>
            </div>
        </div>
        </div>

    </div>

    <div class="row justify-content-center ">
        <div class="col-11 col-lg-4 my-2" uk-scrollspy="target: > div; cls: uk-animation-slide-right-small; delay: 400; repeat:false;">
            <div class="h1 color-white my-4 header">
                Why choose us?

            </div>
            <div class="d-flex flex-row color-white background-color-dark h3 my-4">
                <div>
                    <i class="fas fa-check fa-lg color-accent"></i>
                    20+ years in business
                </div>
            </div>
            <div class="d-flex flex-row color-white background-color-dark h3 my-4">
                <div>
                    <i class="fas fa-check fa-lg color-accent"></i>
                </div>
                <div>
                    <ul class="verticalTextSlider background-color-dark">
                        <li>Bail Bonds</li>
                        <li>Secured Bonds</li>
                        <li>Cash Bonds</li>
                    </ul>
                </div>
            </div>
            <div class="d-flex flex-row color-white background-color-dark h3 my-4">
                <div>
                    <i class="fas fa-check fa-lg color-accent"></i>
                    Any
                </div>
                <div>
                    <ul class="verticalTextSlider background-color-dark">
                        <li>Jurisdiction</li>
                        <li>Court</li>
                        <li>Detention Center</li>
                    </ul>
                </div>
                
            </div>
            <div class="d-flex flex-row color-white background-color-dark h3 my-4">
                <div>
                    <i class="fas fa-check fa-lg color-accent"></i>
                    Notary on premises
                </div>
            </div>
            <div class="d-flex flex-row color-white background-color-dark h3 my-4">
                <div>
                    <i class="fas fa-check fa-lg color-accent"></i>
                </div>
                <div>
                    <ul class="verticalTextSlider background-color-dark">
                        <li>Statewide Bonding</li>
                        <li>Nationwide Bonding</li>
                    </ul>
                </div>
            </div>
            <div class="d-flex flex-row color-white background-color-dark h3 my-4">
                <div>
                    <i class="fas fa-check fa-lg color-accent"></i>
                    24 hours 7 days a week service
                </div>
            </div>
        </div>
        <div class="col-10 col-lg-2 my-2">
            <img class='img-fluid img-custom' src="images/index4.jpg" width="100%" uk-parallax="y:50, -30;rotate:5;viewport: 0.6;">
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="col-12 col-lg-6 my-4" uk-scrollspy="target: > div; cls: uk-animation-slide-right-small; delay: 400; repeat:false;">
            <div class="h1 color-white my-4 text-center header">
                What Others are Saying:

            </div>
            <div>
                <?php include_once("components/frontPageReviews.php");?>
            </div>
        </div>
        
    </div>
</div>
<script>
    $('.verticalTextSlider').bxSlider({
  mode: 'vertical',
  pager:false,
  controls:false,
  infiniteLoop:true,
  auto:true,
  speed:300,
  pause:2000
});
</script>
<?php
include_once('components/footer.php');
?>