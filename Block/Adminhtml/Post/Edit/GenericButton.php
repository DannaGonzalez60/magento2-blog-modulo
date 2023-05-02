<?php

namespace MageMastery\Blog\Block\Adminhtml\Post\Edit;

use Magento\Framework\UrlInterface;

class GenericButton 
{
    public function __construct(private UrlInterface $url)
    {

    }

    public function getUrl(string $route = '', array $params = []): string{
        return $this->url->getUrl($route, $params);
    }
    
}
