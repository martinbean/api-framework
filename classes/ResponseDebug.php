<?php
/**
 * Debug response class.
 * 
 * @package api-framework
 * @author  Anders Hassis <anders@appanero.se>
 */
class ResponseDebug
{
    /**
     * Response data.
     *
     * @var string
     */
    protected $data;
    
    /**
     * Constructor.
     *
     * @param string $data
     */
    public function __construct($data)
    {
        $this->data = $data;
        return $this;
    }
    
    /**
     * Render the response as JSON.
     * 
     * @return string
     */
    public function render()
    {
        header('Content-Type: text/plain; charset=utf-8');
        print_r($this->data);
        die();
    }
}