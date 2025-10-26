<?php

function heroSection($heros) {
    foreach ($heros as $hero) {
        echo    ' <section class="hero" id="home">
        <div class="container heroContainer">
            <div class="heroText">
                <p class="heroSmallText">AVAILABLE FOR FREELANCE</p>
                <h1 class="heroTitle">' . 
                    $hero ["heroTitleOne"] . '<br>' .        
                 $hero ["heroTitleTwo"] .
                '</h1>' .
                '<div class="heroSkills">
                    <span class="skill">' .  $hero ["textOne"] . '</span>
                    <span class="dot"></span>
                    <span class="skill">' . $hero ["textTwo"] . '</span>
                    <span class="dot"></span>
                    <span class="skill">' . $hero ["textThree"] . '</span>
                </div>
                <a href="#portfolio" class="btn">' . $hero ["button"] . '</a>
           </div>
        </div>
    </section>';

    }
}

function aboutSection($abouts) {
    foreach ($abouts as $about) {
        echo     '<section class="about" id="about">
        <div class="aboutContainer">
            <div class="aboutInfo">
            <h2 class="aboutName">' . $about["aboutName"] . '</h2>
            <h3 class="aboutPosition">' . $about["aboutPosition"] . '</h3>
            </div>
            <div class="aboutContent">
                <p class="aboutDescription">' .
                   $about ["aboutDescription"] . 
                '</p>
                <div class="aboutDetails">
                    <p><strong>LOCATION</strong>' . $about["location"] . '</p>
                    <p><strong>EXPERIENCE</strong>' . $about["experience"] . '</p>
                    <p><strong>DATE OF BIRTH</strong>' . $about["date"] . '</p>
                </div>
            </div>
        </div>
    </section>


    <div class="aboutStats">
        <div class="stat">
            <h3>' . $about["expNumber"] . '</h3>
            <p>Years of Experience</p>
        </div>
        <div class="stat">
            <h3>' . $about["projectNumber"] . '</h3>
            <p>Projects Completed</p>
        </div>
        <div class="stat">
            <h3>' . $about["clientNumber"] . '</h3>
            <p>Happy Clients</p>
        </div>
    </div>'; 
    }

}


function portfolioSection($portfolios) {
    foreach ($portfolios as $portfolio) {
        echo 
    '<section class="portfolio" id="portfolio">
  <div class="container portfolioContainer">
    <h2 class="sectionTitle">' . $portfolio["portfolioTitle"] . '</h2>
    <div class="portfolioCards">

      <div class="portfolioCard">
        <div class="portfolioImage" style="background-image: url("");"></div>
        <div class="portfolioText">
          <p class="portfolioCategory">' . $portfolio["categoryOne"] . '</p>
          <h3 class="portfolioTitle">' . $portfolio["cardTitleOne"] . '</h3>
          <p class="portfolioDescription">' . $portfolio["descriptionOne"] . '</p>
          </div>
      </div>

      <div class="portfolioCard">
        <div class="portfolioImage" style="background-image: url("");"></div>
        <div class="portfolioText">
          <p class="portfolioCategory">' . $portfolio["categoryTwo"] . '</p>
          <h3 class="portfolioTitle">' . $portfolio["cardTitleTwo"] . '</h3>
          <p class="portfolioDescription">' . $portfolio["descriptionTwo"] .
          '</p>
        </div>
      </div>

      <div class="portfolioCard">
        <div class="portfolioImage" style="background-image: url("");"></div>
        <div class="portfolioText">
          <p class="portfolioCategory">' . $portfolio["categoryThree"] .  '</p>
          <h3 class="portfolioTitle">' . $portfolio["cardTitleThree"] . '</h3>
          <p class="portfolioDescription">' . $portfolio["descriptionThree"] . 
          '</p>
        </div>
      </div>

      <div class="portfolioCard">
        <div class="portfolioImage" style="background-image: url("");"></div>
        <div class="portfolioText">
          <p class="portfolioCategory">' . $portfolio["categoryFour"] . '</p>
          <h3 class="portfolioTitle">' . $portfolio["cardTitleFour"] . '</h3>
          <p class="portfolioDescription">' . $portfolio["descriptionFour"] . 
          '</p>
        </div>
      </div>

      <div class="portfolioCard">
        <div class="portfolioImage" style="background-image: url("");"></div>
        <div class="portfolioText">
          <p class="portfolioCategory">' . $portfolio["categoryFive"] . '</p>
          <h3 class="portfolioTitle">' . $portfolio["cardTitleFive"] .  '</h3>
          <p class="portfolioDescription">' . $portfolio["descriptionFive"] .
          '</p>
        </div>
      </div>

    </div>
  </div>
</section>';
    }

};

function servicesSection($services) {
    foreach ($services as $service) {
        
        echo '<section class="services" id="services">
        <div class="container servicesContainer">
            <h2 class="serviceTitle">' . $service["title"] . '</h2>
            <div class="servicesGrid">
                <div class="service">
                    <div class="serviceIcon">
                    <img src="#" alt="Branding Icon">
                    </div>
                    <div class="serviceNumber"> 01</div>
                    <h3 class="serviceTitle">' . $service["serviceTitleOne"] . '</h3>
                    <p class="serviceDescription">' . $service["descriptionOne"] .
                    '</p>
                </div>

                <div class="service">
                    <div class="serviceIcon">
                    <img src="#" alt="Design Icon">
                    </div>
                    <div class="serviceNumber">02</div>
                    <h3 class="serviceTitle">' . $service["serviceTitleTwo"] . '</h3>
                    <p class="serviceDescription">' . $service["descriptionTwo"] . 
                    '</p>
                </div>

                <div class="service">
                    <div class="serviceIcon">
                    <img src="#" alt="Development Icon">
                    </div>
                    <div class="serviceNumber">03</div>
                    <h3 class="serviceTitle">' . $service["serviceTitleThree"] . '</h3>
                    <p class="serviceDescription">' . $service["descriptionThree"] . 
                    '</p>
                </div>
            </div>
        </div>
</section>';
    }
};    