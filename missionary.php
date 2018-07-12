<?php
    class Missionary {
        var $name;
        var $family_picture;
        var $country;
        $prayer_letters = [1, 2, 3]; // need to set size of 3 and be able to push data in later
        var $map;
        var $twitter_feed; // insert missionary's twitter feed; may need to be different kind of element
        var $facebook_feed; // insert missionary's facebook feed; may need to be different kind of element
        var $instagram_feed; // insert missionary's instagram feed; may need to be different kind of element
        
        function _contruct($nam, $cou) {
            $this->name = $nam;
            $this->country =  $cou;
        }
        
        function setName($nam) {
            $this->name = $nam;
        }
        
        function getName() {
            echo $this->name . "<br/>";
        }
        
        function setFamilyPicture($pic) {
            $this->family_picture = $pic;
        }
        
        function getFamilyPicture() {
            echo $this->family_picture . "<br/>";
        }
        
        function setCountry($cou) {
            $this->country = $cou;
        }
        
        function getCountry() {
            echo $this->country ."<br/>";
        }
        
        function getPrayerLetters($letters) {
            $this->prayer_letters = $letters;
        }
        
        function setPrayerLetters() {
            echo $this->prayer_letters ."<br/>";
        }
        
        function setMap($m) {
            $this->map = $m;
        }
        
        function getMap() {
            echo $this->map ."<br/>";
        }
        
        function setTwitterFeed($twitter) {
            $this->twitter_feed = $twitter;
        }
        
        function getTwitterFeed() {
            echo $this->twitter_feed ."<br/>";
        }
        
        function setFacebookFeed($facebook) {
            $this->facebook_feed = $facebook;
        }
        
        function getFacebookFeed() {
            echo $this->facebook_feed ."<br/>";
        }
        
        function setInstagramFeed($instagram) {
            $this->instagram_feed = $instagram;
        }
        
        function getInstagramFeed() {
            echo $this->instagram_feed ."<br/>";
        }
                
    }
?>