<?php

class Route
{
    public function match(RequestInterface $request)
    {
        return new RouteMatch(['foo' => 'bar']);
    }

    public function assemble(array $params = null, array $options = null)
    {
        if (isset($params['foo'])) 
        {
            return $params['foo'];
        }
        return '';
    }
}

