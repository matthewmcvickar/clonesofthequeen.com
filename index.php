<?php

if ($_REQUEST['section'] == 'photos') { header('Location: http://clonesofthequeen.com/#photos'); }
if ($_REQUEST['section'] == 'about')  { header('Location: http://clonesofthequeen.com/#about');  }
if ($_REQUEST['section'] == 'store')  { header('Location: http://clonesofthequeen.com/#store');  }
if ($_REQUEST['section'] == 'press')  { header('Location: http://clonesofthequeen.com/#press');  }

?><!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />

    <title>Clones of the Queen</title>

    <!-- Blueprint -->
    <link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
    google.load('jquery', '1.4.2');
    google.load('jqueryui', '1.8.5');
    </script>

    <link rel="stylesheet" type="text/css" media="all" href="style.css" />

    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('.slideshow').cycle({
    		fx: 'fade',
    		random: 'false',
        timeout: 5000,
        pager: '#slideshow_navigation',
        pauseOnPagerHover: 'true',
        pagerAnchorBuilder: function(idx, slide) { return '#slideshow_navigation li:eq(' + idx + ') a'; }
    	});
    });
    </script>

    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-18238565-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
  </head>

  <body>
    <div class="container">
      <h1><a class="title" href="/" title="Clones of the Queen" rel="home">Clones of the Queen</a></h1>

      <div class="elsewhere">
        <a href="http://facebook.com/clonesofthequeen">Facebook</a>
        <a href="http://clonesofthequeen.bandcamp.com">Bandcamp</a>
        <a href="http://twitter.com/cotq">Twitter</a>
        <a href="https://soundcloud.com/cotq/sets">SoundCloud</a>
        <a href="http://cotq.tumblr.com">Tumblr</a>
        <a href="mailto:contact@clonesofthequeen.com">Email Us</a>
        <a class="last" href="http://eepurl.com/dvK_9">Mailing List</a>
      </div>

      <p class="intro">We are a dream-pop trio from Honolulu, Hawaii.</p>

      <p class="who">Ara Laylo on vocals, Paul Bajcar on guitars, Matthew McVickar on electronics.</p>

      <p class="click"><a href="http://clonesofthequeen.bandcamp.com/album/moonlight">Click here to download our EP <em>Moonlight</em> for free.</a></p>

      <p class="listen">Or listen right here:</p>

      <div class="player">
        <iframe style="border: 0; width: 350px; height: 470px;" src="http://bandcamp.com/EmbeddedPlayer/album=2722705087/size=large/bgcol=ffffff/linkcol=0687f5/notracklist=true/transparent=true/" seamless><a href="http://clonesofthequeen.bandcamp.com/album/moonlight">Moonlight by Clones of the Queen</a></iframe>
      </div>

      <!-- <a href="http://clonesofthequeen.bandcamp.com/album/braided"><img src="images/braided-huge.gif"></a> -->

      <hr>

      <div class="section">
        <div class="span-12 first">
          <h2><em>Gate</em> Is Our First EP</h2>
          <iframe style="border: 0; width: 100%; height: 120px;" src="http://bandcamp.com/EmbeddedPlayer/album=3663572557/size=medium/bgcol=ffffff/linkcol=0687f5/transparent=true/" seamless><a href="http://clonesofthequeen.bandcamp.com/album/gate">Gate by Clones of the Queen</a></iframe>
        </div>
        <div class="span-12 last">
          <h2><em>Braided</em> Is Our Second EP</h2>
          <iframe style="border: 0; width: 100%; height: 120px;" src="http://bandcamp.com/EmbeddedPlayer/album=2206149206/size=medium/bgcol=ffffff/linkcol=0687f5/transparent=true/" seamless><a href="http://clonesofthequeen.bandcamp.com/album/braided">Braided by Clones of the Queen</a></iframe>
        </div>
        <div class="clear"></div>
      </div>

      <hr>

      <h2 id="photos">Photos</h2>

      <div class="slideshow">
        <div><img src="http://farm6.staticflickr.com/5487/9459990467_c9fbb05cd3_b.jpg" title="Photo by Shirley Lam"><span>Photo by Shirley Lam</span></div>
        <div><img src="http://farm6.staticflickr.com/5336/9462771602_683bc9cd53_b.jpg" title="Photo by Shirley Lam"><span>Photo by Shirley Lam</span></div>
        <div><img src="http://farm8.staticflickr.com/7424/9462771584_69c2a2e1d2_b.jpg" title="Photo by Jason DeBord"><span>Photo by Jason DeBord</span></div>
        <div><img src="http://farm8.staticflickr.com/7426/9459990861_3da729ae4d_b.jpg" title="Photo by Jason DeBord"><span>Photo by Jason DeBord</span></div>
        <div><img src="http://farm8.staticflickr.com/7310/9462771768_04cc8e99ee_b.jpg" title="Photo by Jason DeBord"><span>Photo by Jason DeBord</span></div>
        <div><img src="http://farm6.staticflickr.com/5493/9462771864_e1c70501ce_b.jpg" title="Photo by Jason DeBord"><span>Photo by Jason DeBord</span></div>
        <div><img src="http://farm8.staticflickr.com/7369/9459991055_e1de2b2fc3_b.jpg" title="Photo by Lauren Howard"><span>Photo by Lauren Howard</span></div>
        <div><img src="http://farm9.staticflickr.com/8386/8632360217_850665a4fa_b.jpg" title="Photo by AJ Feducia"><span>Photo by AJ Feducia</span></div>
        <div><img src="http://farm9.staticflickr.com/8402/8632360177_ac4e7f08a2_b.jpg" title="Photo by AJ Feducia"><span>Photo by AJ Feducia</span></div>
        <div><img src="http://farm9.staticflickr.com/8254/8632360061_d49345fd58_b.jpg" title="Photo by AJ Feducia"><span>Photo by AJ Feducia</span></div>
        <div><img src="http://farm9.staticflickr.com/8384/8632360013_b693f9b954_b.jpg" title="Photo by AJ Feducia"><span>Photo by AJ Feducia</span></div>
        <div><img src="http://farm9.staticflickr.com/8522/8632359947_63d1793a01_b.jpg" title="Photo by David Randall"><span>Photo by David Randall</span></div>
        <div><img src="http://farm9.staticflickr.com/8105/8633467436_437ce1f04b_b.jpg" title="Photo by Colin Cross"><span>Photo by Colin Cross</span></div>
        <div><img src="http://farm9.staticflickr.com/8539/8633466918_b6b43006c3_b.jpg" title="Photo by Zach McCaffree"><span>Photo by Zach McCaffree</span></div>
        <div><img src="http://farm9.staticflickr.com/8541/8632359753_4fe867e81d_b.jpg" title="Photo by Zach McCaffree"><span>Photo by Zach McCaffree</span></div>
        <div><img src="http://farm9.staticflickr.com/8116/8632359763_379afc9968_b.jpg" title="Photo by Zach McCaffree"><span>Photo by Zach McCaffree</span></div>
        <div><img src="http://farm9.staticflickr.com/8394/8633466902_c0b6939f1f_b.jpg" title="Photo by Zach McCaffree"><span>Photo by Zach McCaffree</span></div>
        <div><img src="http://farm9.staticflickr.com/8244/8633466994_fe7c4d56c0_b.jpg" title="Photo by Shirley Lam"><span>Photo by Shirley Lam</span></div>
        <div><img src="http://farm9.staticflickr.com/8125/8632359833_21391b7f71_b.jpg" title="Photo by Shirley Lam"><span>Photo by Shirley Lam</span></div>
        <div><img src="http://farm9.staticflickr.com/8386/8632359835_a6c106a190_b.jpg" title="Photo by Shirley Lam"><span>Photo by Shirley Lam</span></div>
        <div><img src="http://farm9.staticflickr.com/8107/8632359799_d7fac13a5e_b.jpg" title="Photo by Shirley Lam"><span>Photo by Shirley Lam</span></div>
        <div><img src="http://farm9.staticflickr.com/8406/8632359979_0d15be4e79_b.jpg" title="Photo by Mark Kushimi"><span>Photo by Mark Kushimi</span></div>
        <div><img src="http://farm9.staticflickr.com/8519/8632359883_77f016ea52_b.jpg" title="Photo by Mark Kushimi"><span>Photo by Mark Kushimi</span></div>
        <div><img src="http://farm9.staticflickr.com/8543/8633467034_ece70d3466_b.jpg" title="Photo by Mark Kushimi"><span>Photo by Mark Kushimi</span></div>
        <div><img src="http://farm9.staticflickr.com/8251/8633467010_5ddd4b3aea_b.jpg" title="Photo by Partyyyface"><span>Photo by Partyyyface</span></div>
        <div><img src="http://farm9.staticflickr.com/8118/8632359909_6768bc8396_b.jpg" title="Photo by Miya Yamaoaka"><span>Photo by Miya Yamaoaka</span></div>
        <div><img src="http://farm9.staticflickr.com/8109/8633467130_145b334fe1_b.jpg" title="Photo by Kai Salus"><span>Photo by Kai Salus</span></div>
      </div>

      <ul id="slideshow_navigation">
        <li><a href="#"><img src="http://farm6.staticflickr.com/5487/9459990467_c9fbb05cd3_b.jpg" title="Photo by Shirley Lam"></a></li>
        <li><a href="#"><img src="http://farm6.staticflickr.com/5336/9462771602_683bc9cd53_b.jpg" title="Photo by Shirley Lam"></a></li>
        <li><a href="#"><img src="http://farm8.staticflickr.com/7424/9462771584_69c2a2e1d2_b.jpg" title="Photo by Jason DeBord"></a></li>
        <li><a href="#"><img src="http://farm8.staticflickr.com/7426/9459990861_3da729ae4d_b.jpg" title="Photo by Jason DeBord"></a></li>
        <li><a href="#"><img src="http://farm8.staticflickr.com/7310/9462771768_04cc8e99ee_b.jpg" title="Photo by Jason DeBord"></a></li>
        <li><a href="#"><img src="http://farm6.staticflickr.com/5493/9462771864_e1c70501ce_b.jpg" title="Photo by Jason DeBord"></a></li>
        <li><a href="#"><img src="http://farm8.staticflickr.com/7369/9459991055_e1de2b2fc3_b.jpg" title="Photo by Lauren Howard"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8386/8632360217_850665a4fa_b.jpg" title="Photo by AJ Feducia"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8402/8632360177_ac4e7f08a2_b.jpg" title="Photo by AJ Feducia"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8254/8632360061_d49345fd58_b.jpg" title="Photo by AJ Feducia"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8384/8632360013_b693f9b954_b.jpg" title="Photo by AJ Feducia"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8522/8632359947_63d1793a01_b.jpg" title="Photo by David Randall"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8105/8633467436_437ce1f04b_b.jpg" title="Photo by Colin Cross"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8539/8633466918_b6b43006c3_b.jpg" title="Photo by Zach McCaffree"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8541/8632359753_4fe867e81d_b.jpg" title="Photo by Zach McCaffree"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8116/8632359763_379afc9968_b.jpg" title="Photo by Zach McCaffree"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8394/8633466902_c0b6939f1f_b.jpg" title="Photo by Zach McCaffree"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8244/8633466994_fe7c4d56c0_b.jpg" title="Photo by Shirley Lam"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8125/8632359833_21391b7f71_b.jpg" title="Photo by Shirley Lam"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8386/8632359835_a6c106a190_b.jpg" title="Photo by Shirley Lam"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8107/8632359799_d7fac13a5e_b.jpg" title="Photo by Shirley Lam"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8406/8632359979_0d15be4e79_b.jpg" title="Photo by Mark Kushimi"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8519/8632359883_77f016ea52_b.jpg" title="Photo by Mark Kushimi"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8543/8633467034_ece70d3466_b.jpg" title="Photo by Mark Kushimi"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8251/8633467010_5ddd4b3aea_b.jpg" title="Photo by Partyyyface"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8118/8632359909_6768bc8396_b.jpg" title="Photo by Miya Yamaoaka"></a></li>
        <li><a href="#"><img src="http://farm9.staticflickr.com/8109/8633467130_145b334fe1_b.jpg" title="Photo by Kai Salus"></a></li>
      </ul>

      <p class="photo_warning">All photos are copyright their photographers, all rights reserved. Reuse is only permitted with permission&mdash;<a href="mailto:contact@clonesofthequeen.com">email us</a>. Please do not use one of these photos for a flyer without asking the photographer first and crediting them.</p>

      <hr>

      <h2 id="about">About</h2>
      <a style="float: right; width: 110px; margin-left: 2.5em; text-align: center;" href="files/COTQ Bio.pdf"><img src="files/thumbnails/bio.png" alt=""><br><strong>COTQ Bio (PDF)</strong></a>
      <div class="bio">
      <p>Clones of the Queen, abbreviated &#8216;COTQ&#8217; or just &#8216;Clones&#8217;, is a <strong>three-piece synth-pop band</strong> based in Honolulu, Hawai&#8217;i. The band started jamming together in the summer of 2009 in an old bank vault above a coffee shop, and now write, practice, and record in the Crow&rsquo;s Nest, a room on the fourth floor of the old Blaisdell Hotel in downtown Honolulu. With <strong>Ara Laylo on lead vocals, Paul Bajcar on guitar, and Matthew McVickar on drums and electronics</strong>, the trio delivers songs that are at once ambient and spirited, combining strong vocals, stormy percussion, and heavily-effected guitar lines and synth loops. Clones of the Queen derive their band name from the ant species Mycocepurus smithii, in which every individual is a genetic duplicate of the queen.</p>
      <p>The unsigned band has <strong>self-released three EPs</strong>: <strong><em>Moonlight</em></strong> in September 2013, <a href="http://clonesofthequeen.bandcamp.com/album/braided"><strong><em>Braided</em></strong></a> in July 2012, and their <strong><a href="http://www.kickstarter.com/projects/matthewmcvickar/clones-of-the-queen-the-first-ep">fan-funded</a></strong> debut EP <strong><a href="http://clonesofthequeen.bandcamp.com/album/gate"><em>Gate</em></a></strong> in December 2010. All of their music is free to download from their website.
      <p>Clones of the Queen was honored with <strong>opening for The Cure at Blaisdell Arena</strong> in July 2013. Lead singer of The Cure Robert Smith himself choose Clones to open the show, and they played to the acclaim of fans new and old and got <strong><a href="http://rocksubculture.com/2013/07/31/the-cure-the-great-circle-tour-at-neal-s-blaisdell-arena-honolulu-hawaii-7302013-concert-review/">great reviews</a></strong>.</p>
      <p>They have been <a href="http://yvynyl.tumblr.com/post/1047942186/i-often-wonder-what-it-must-be-like-to-be-an-indie"><strong>featured on the popular music blog yvynyl</strong></a>. The trio has been the main support for many visiting bands, opening for <strong>Toro Y Moi, of Montreal, Menomena, Diplo, Little Dragon, and Warpaint</strong>, for whom they opened at Aloha Tower on the opening night of Hallowbaloo 2011, Honolulu&#8217;s yearly Halloween music and street festival.</p>
      <p>They have played every one of downtown Honolulu&#8217;s nighttime hotspots, Waikiki&rsquo;s Hard Rock Cafe, and the <strong>Honolulu Academy of Arts</strong> and the <strong>Contemporary Museum of Honolulu</strong> multiple times for special events.</p>
      <p>The band has had dozens of write-ups in local newspapers (both the Star Advertiser and the Honolulu Weekly), and was named as the <a href="http://contests.thephoenix.com/50states/2011/hawaii"><strong>Best Band in Honolulu by the Boston Phoenix for their yearly Best New Bands in America feature in 2011</strong></a>.</p>
      <p>For more information, promo requests, or to set up an interview, please <a href="mailto:contact@clonesofthequeen.com">email the band</a>.</p>
      </div>

      <div class="clear"></div>

      <hr>

      <h2>Press</h2>

      <div class="section">
        <div class="span-18 first">
          <h3><em>Moonlight</em> EP</h3>
          <ul class="thumbs">
            <li><a href="http://clonesofthequeen.bandcamp.com/album/moonlight"><img src="files/thumbnails/moonlight-download.gif" alt="" />MP3 Download</a></li>
            <li><a href="files/COTQ - Moonlight - Cover.png"><img src="files/thumbnails/moonlight-cover.gif" alt="">Cover</a></li>
            <li><a href="files/COTQ - Moonlight - Digital Booklet.pdf"><img src="files/thumbnails/moonlight-booklet.gif" alt="" />Digital Booklet</a></li>
          </ul>
        </div>
        <div class="span-6 last">
          <h3>Live</h3>
          <ul class="thumbs">
            <li><a href="files/COTQ Stageplot and Backline.pdf"><img src="files/thumbnails/backline.png" alt="" />Stage Plot/Backline</a></li>
          </ul>
        </div>

        <div class="clear"><br><br></div>

        <div class="span-23 first last">
          <h3><em>Braided</em> EP</h3>
          <ul class="thumbs">
            <li><a href="http://clonesofthequeen.bandcamp.com/album/braided"><img src="files/thumbnails/braided_download.gif" alt="" />MP3 Download</a></li>
            <li><a href="files/COTQ - Braided - Cover.jpg"><img src="files/thumbnails/braided_cover.jpg" alt="">Cover</a></li>
            <li><a href="files/COTQ - Braided - Digital Booklet.pdf"><img src="files/thumbnails/braided_booklet.gif" alt="" />Digital Booklet</a></li>
          </ul>
        </div>

        <div class="clear"><br><br></div>

        <div class="span-24 first last">
          <h3><em>Gate</em> EP</h3>
          <ul class="thumbs">
            <li><a href="http://clonesofthequeen.bandcamp.com/album/gate"><img src="files/thumbnails/gate_download.gif" alt="" />MP3 Download</a></li>
            <li><a href="files/COTQ - Gate - Cover (Front).jpg"><img src="files/thumbnails/gate_front.jpg" alt="">Front Cover</a></li>
            <li><a href="files/COTQ - Gate - Cover (Back).jpg"><img src="files/thumbnails/gate_back.jpg" alt="">Back Cover</a></li>
            <li><a href="files/COTQ - Gate - Digital Booklet.pdf"><img src="files/thumbnails/gate_booklet.gif" alt="" />Digital Booklet</a></li>
          </ul>
        </div>
      </div>

      <div class="clear"></div>

      <a name="press"></a>

      <h3>Print Archive</h3>
      <ul class="links press">
        <li><a href="http://www.honolulupulse.com/music/honolulu-museum-art-musical-mix"><strong>2013-01-25</strong> &bull; Star Advertiser TGIF: Honolulu Museum of Art showcases musical mix</a></li>
        <li><a href="http://honoluluweekly.com/hotpicks/2013/01/secret%E2%80%99s-out/"><strong>2013-01-24</strong> &bull; Honolulu Weekly: Secret&rsquo;s Out</a></li>
        <li><a href="http://www.insideouthawaii.com/January-2013/Concert-Series/"><strong>2013-01-01</strong> &bull; Oahu Inside Out: Musicians to jam at Doris Duke</a></li>
        <li><a href="http://www.honolulupulse.com/music/sceneheard-clones-of-the-queen-get-braided"><strong>2012-08-13</strong> &bull; Scene &amp; Heard: Clones of the Queen Get &lsquo;Braided&rsquo; (Honolulu Pulse)</a></li>
        <li><a href="http://honoluluweekly.com/story-continued/2011/08/nightlife-2/"><strong>2011-08-17</strong> &bull; Honolulu Weekly: COTQ Runner-up for Best Band in Honolulu</a></li>
        <li><a href="http://honolulupulse.com/bars-clubs/event-what-to-expect-at-hallowbaloo"><strong>2011-08-05</strong> &bull; Honolulu Pulse: What to Expect at Hallowbaloo</a></li>
        <li><a href="http://contests.thephoenix.com/50states/2011/hawaii"><strong>2011-07-09</strong> &bull; Boston Phoenix: Best New Bands in America 2011</a></li>
        <li><a href="http://honoluluweekly.com/calendar/social-lite/2011/05/red-rockets-in-flight/"><strong>2011-05-18</strong> &bull; Honolulu Weekly: Red Rockets in Flight</a></li>
        <li><a href="http://staradvertiser.com/features/20110102_freewheeling_indie_bands_get_boost_from_venue_boom_social_media_savvy.html"><strong>2011-01-02</strong> &bull; Star Advertiser: Freewheeling indie bands&hellip;</a></li>
        <li><a href="http://honolulupulse.com/music/2011-year-of-the-indie-band"><strong>2010-12-30</strong> &bull; Honolulu Pulse: 2011: Year of the Indie Band</a></li>
        <li><a href="http://honolulupulse.com/events/pics-clones-of-the-queen-ep-release"><strong>2010-12-13</strong> &bull; Honolulu Pulse: Pics: Clones of the Queen EP Release</a></li>
        <li><a href="http://honozooloo.com/photoz/album/72157625444877185/cotq-release-party.html"><strong>2010-12-10</strong> &bull; Honozooloo: COTQ Release Party</a></li>
        <li><a href="http://honolulupulse.com/music/pics-clones-of-the-queen-cd-release-party-at-apartment"><strong>2010-12-10</strong> &bull; Honolulu Pulse: Pics: Clones of the Queen CD Release Party</a></li>
        <li><a href="http://honoluluweekly.com/hotpicks/2010/12/royalty-rock/"><strong>2010-12-08</strong> &bull; Honolulu Weekly: Royalty Rock</a></li>
        <li><a href="http://tgif.staradvertiser.com/archives/8355"><strong>2010-09-19</strong> &bull; Star Advertiser: Pics: ARTee at The Venue</a></li>
        <li><a href="http://honoluluweekly.com/calendar/social-lite/2010/10/too-good/"><strong>2010-10-13</strong> &bull; Honolulu Weekly: Too Good</a></li>
        <li><a href="http://honoluluweekly.com/calendar/social-lite/2010/09/winning-everything"><strong>2010-09-22</strong> &bull; Honolulu Weekly: Social Lite</a></li>
        <li><a href="http://staradvertiser.com/tgif/tgifstories/20100910_Indie_rock_local_style.html"><strong>2010-09-10</strong> &bull; Honolulu Star Advertiser: Indie rock, local style</a></li>
        <li><a href="http://contrastmagazine.com/feat/clonesofthequeen/"><strong>2010-08-01</strong> &bull; Contrast Magazine: Galaxy Rock</a></li>
        <li><a href="http://tgif.staradvertiser.com/archives/5612"><strong>2010-07-20</strong> &bull; Star Advertiser: Pics: Indie Rock at Fresh Cafe</a></li>
      </ul>

      <div class="clear"></div>

      <h3>Blog Archive</h3>
      <ul class="links blogs">
        <li><a href="http://schuylertsuda.blogspot.com/"><strong>2013-09-22</strong> &bull; Schuyler Tsuda</a></li>
        <li><a href="http://hawaiiindependent.net/hum"><strong>2013-09-20</strong> &bull; Gary Chun: The Hum</a></li>
        <li><a href="http://ceejeesplace.blogspot.com/2013/09/clones-of-queen-moonlight-2013.html"><strong>2013-09-15</strong> &bull; Ceejee&rsquo;s Place</a></li>
        <li><a href="http://rocksubculture.com/2013/07/31/the-cure-the-great-circle-tour-at-neal-s-blaisdell-arena-honolulu-hawaii-7302013-concert-review/"><strong>2013-07-31</strong> &bull; Rock Subculture</a></li>
        <li><a href="http://www.radiorimasto.com/2012/12/radiorimasto-puntata-039.html"><strong>2012-12-26</strong> &bull; Radio Rimasto</a></li>
        <li><a href="http://www.radiorimasto.com/2012/10/radiorimasto-puntata-030.html"><strong>2012-10-22</strong> &bull; Radio Rimasto</a></li>
        <li><a href="http://dayvanzombear.blogspot.com/2012/10/blog-post.html"><strong>2012-10-19</strong> &bull; Dayvan Zombear</a></li>
        <li><a href="http://inyourspeakers.com/content/news/89-meet-clones-queens-brand-ambient-electro-09112012"><strong>2012-09-11</strong> &bull; Inyourspeakers</a></li>
        <li><a href="http://glanigan.free.fr/?p=968"><strong>2012-08-28</strong> &bull; Le blog de Grégory</a></li>
        <li><a href="http://floorshimezipperboots.blogspot.com/2012/08/clones-of-queen-braided.html"><strong>2012-08-24</strong> &bull; Floorshime Zipper Boots</a></li>
        <li><a href="http://artandflea.tumblr.com/post/29971551733/an-interview-with-pink-mist-clones-of-the-queen-and"><strong>2012-08-22</strong> &bull; Art &amp; Flea</a></li>
        <li><a href="http://dedicatedearsfreealbumlist.blogspot.com/2012/08/clones-of-queen-braided-bandcampcom.html"><strong>2012-08-03</strong> &bull; Dedicated Ears</a></li>
        <li><a href="http://www.in4mants.com/hi/blog/clones-of-the-queen-braided-free-download/"><strong>2012-08-03</strong> &bull; in4mation</a></li>
        <li><a href="http://www.timbretantrums.com/2012/07/ktuh-playlist-jul31st-2012.html"><strong>2012-07-31</strong> &bull; Timbre Tantrums</a></li>
        <li><a href="http://volumecity.co.uk/2012/03/introducingfree-music-clones-of-the-queen-2-eps/"><strong>2012-03-29</strong> &bull; Volume City</a></li>
        <li><a href="http://rudified.com/photos/archives/1504"><strong>2011-09-10</strong> &bull; Rudified</a></li>
        <li><a href="http://hipsterseatingpineapples.wordpress.com/2011/08/18/at-sea-returns-to-port"><strong>2011-08-18</strong> &bull; Hipsters Eating Pineapples</a></li>
        <li><a href="http://frostclick.com/wp/index.php/2011/03/18/clones-of-the-queen-the-gate-ep-sultry-techno-sound-from-awesome-hawaii-based-trio/"><strong>2011-03-18</strong> &bull; FrostClick</a></li>
        <li><a href="http://honozooloo.com/2011/03/broadcast-3/"><strong>2011-03-07</strong> &bull; Honozooloo</a></li>
        <li><a href="http://contrastmagazine.com/blog/?p=8225"><strong>2011-03-04</strong> &bull; Contrast Magazine Blog</a></li>
        <li><a href="http://timbretantrums.com/2011/03/ain.html"><strong>2011-03-03</strong> &bull; Timbre Tantrums</a></li>
        <li><a href="http://kjacko.tumblr.com/post/2754889363/2011inmusic"><strong>2011-01-15</strong> &bull; K Jacko</a></li>
        <li><a href="http://theoreticallyvinyl.tumblr.com/post/2652831890/clones-of-the-queen-gate-ep"><strong>2011-01-08</strong> &bull; Theoretically Vinyl</a></li>
        <li><a href="http://in4mants.com/proceed/music-mixes/clones-of-the-queen-gate-ep-available/"><strong>2010-12-23</strong> &bull; in4mation</a></li>
        <li><a href="http://beatplay.wordpress.com/2010/12/20/clones-of-the-queen-gates-download/"><strong>2010-12-20</strong> &bull; The Beat-Play Experiment</a></li>
        <li><a href="http://honozooloo.com/2010/12/gate/"><strong>2010-12-10</strong> &bull; Honozooloo</a></li>
        <li><a href="http://kimboldrini.com/?portfolio=clones-of-the-queen"><strong>2010-10-01</strong> &bull; Kim Boldrini Photography</a></li>
        <li><a href="http://yvynyl.tumblr.com/post/1047942186/i-often-wonder-what-it-must-be-like-to-be-an-indie"><strong>2010-09-01</strong> &bull; yvynl</a></li>
        <li><a href="http://contrastmagazine.com/blog/?p=5259"><strong>2009-12-08</strong> &bull; Contrast: Time Wasterz</a></li>
        <li><a href="http://timbretantrums.com/2009/11/clones-of-queen.html"><strong>2009-11-05</strong> &bull; Timbre Tantrums</a></li>
      </ul>

      <div class="clear"></div>

      <h3>Videos</h3>
      <ul class="links">
        <li><a href="http://vimeo.com/29698840">Recording of a performance of &lsquo;Ray&rsquo; in September 2011 at Nextdoor by Vincent Ricafort</a></li>
        <li><a href="http://www.vimeo.com/15075276">Fan-made short film for &lsquo;Forest (Live at Loft)&rsquo; by Mikey Inouye</a></li>
      </ul>

      <div class="clear"></div>

      <hr>

      <div class="footer span-24">
        <div class="copyright">
          <p>
            Website, artwork, music, and words all &copy; Clones of the Queen.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="mailto:contact@clonesofthequeen.com">Email</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="http://twitter.com/cotq">Twitter</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="http://facebook.com/clonesofthequeen">Facebook</a>
          </p>
        </div>
      </div>

    </div>

  </body>
</html>