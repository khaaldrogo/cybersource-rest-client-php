<?php

namespace CybsAuthSdk;

interface TokenGenerator
{
    public function generateToken($resourcePath, $payloadData, $method, $merchantConfig);
}

?>