<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BannerMagic
 *
 * @author bazzdream
 */
class BannerMagic extends CWidget {
    public function run()
    {
       $random = rand(1,3);
       if($random == 1)
       {
           $advert =  "advert1.jpg";
       }
       else if($random == 2)
       {
           $advert = "advert2.jpg";
       }
       else
       {
           $advert = "advert3.jpg";
       }
       
       $this->render('bannermagic', array("advert"=>$advert));
    }
}

?>
