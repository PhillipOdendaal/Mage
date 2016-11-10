<?php
class NAMESPACE_Twitter_Block_Timeline extends Mage_Core_Block_Template
{
    /**
     * @param $username
     * @param $limit
     * @return array
     */
    public function getTimeline($username, $limit)
    {
        // $tweets = array();
        // code to get tweets here
        $tweets = array(
                        1 => "Tweet 1",
                        2 => "Tweet 2",
                        3 => "Tweet 3"
        );

        echo "in NAMESPACE_Twitter_Block_Timeline -> getTimeline()";
        print_r($tweets);

        return $tweets;
    }
}