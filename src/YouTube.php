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

	public function hello(){
		return "Hello! Your API Key is " . $this->youtube_api_key;
	}
}