<?php
/**
 * 
 * Author: Kenny Ray
 * Email: kenny@kennyray.com
 * Date: 3/29/16
 * 
 */

namespace KennyRay\YouTube;

class YouTube 
{
	/**
     * @var string
     */
    protected $youtube_api_key; 

    /**
     * @var string
     */
    protected $base_api_url = "https://www.googleapis.com/youtube/v3/";

    //protected $part = ['id', 'snippet', 'contentDetails', 'player', 'status'];
    protected $part = 'id,snippet,contentDetails,player,status';



     /**
     * Constructor
     * $youtube = new Youtube(array('key' => 'KEY HERE'))
     *
     * @param string $key
     * @throws \Exception
     */
    public function __construct($key)
    {
        if (is_string($key) && !empty($key)) 
        {
            $this->youtube_api_key = $key;
        } 
        else 
        {
            throw new \Exception('Google API key is Required, please visit https://console.developers.google.com/');
        }
    }


    public function getVideoInfo($id)
    {
    	$params = array(
 			'id' => $id,
 			'key' => $this->youtube_api_key,
 			'part' => $this->part
    	);
    	$baseurl = $this->base_api_url . 'videos';
    	return $this->getData($baseurl, $params);  // This will be extracted to separate class
    }

    protected function getData($baseurl, $params)
    {	
    	$query_string = http_build_query($params);

    	$url = $baseurl . '?' . $query_string;
    
    	$ch = curl_init();  
	    curl_setopt($ch,CURLOPT_URL,$url);
	    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	    $output=curl_exec($ch);
	    curl_close($ch);

	    return $output;
    }







	public function hello(){
		return "Hello! Your API Key is " . $this->youtube_api_key;
	}
}