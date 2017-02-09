<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author gosia
 */
class View
{

    private $file;
    private $keys;
    private $values;

    public function __construct($file, array $keys = [])
    {
        if (!file_exists($file)) {
            throw new Exception('plik nie istnieje');
        }
        $this->file = $file;
        $this->keys = $keys;
        $this->values = [];
    }

    public function replace($key, $value)
    {
        if (!in_array($key, $this->keys)){
            throw new Exception('Klucz nie istnieje');
        }
        $this->values[$key] = $value;
    }

    public function getContent()
    {
        $file = file_get_contents($this->file);
        
        foreach ($this->keys as $renderKey){
            $contentReplace = '';
            if (isset($this->values[$renderKey]))
            {
                $contentReplace = (string)$this->values[$renderKey];
            }
            $file = str_replace('{{'.$renderKey.'}}', $contentReplace, $file);
        }
        return $file;
    }

    public function __toString()
    {
        return $this->getContent();
    }
}
