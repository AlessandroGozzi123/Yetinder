<?php

namespace App\Service;

class redirect 
{
    public function redirect()
    {
        return $this->redirectToRoute('yetinder');
    }
}