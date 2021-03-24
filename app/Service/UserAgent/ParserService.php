<?php


namespace App\Service\UserAgent;



class ParserService implements UserAgentServiceInterface
{
    protected $data;
    protected $parser;

    public function __construct()
    {
        $this->parser = Parser::create();
    }

    public function parse($eu)
    {
        $this->data = $this->parser->parse($eu);
    }

    public function browser()
    {
        return $this->data->eu->family;
    }

    public function os()
    {
        return $this->data->os->family;
    }
}
