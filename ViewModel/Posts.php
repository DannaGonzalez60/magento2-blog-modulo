<?php
namespace MageMastery\Blog\ViewModel;

use MageMastery\Blog\Model\ResourceModel\Post\Collection;
use MageMastery\Blog\Service\PostsProvider;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Posts implements ArgumentInterface
{
    public function __construct(private PostsProvider $postsProvider) {}

    public function getPosts(int $limit): Collection
    {
        return $this->postsProvider->getPosts($limit);
    }
}
