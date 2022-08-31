<?php

namespace Nailalliance\ProConfirmation\Block;

class FetchProduct extends \Magento\Framework\View\Element\Template
{
    protected $registry;
    protected $productRepository;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Catalog\Model\ProductRepository $productRepository,
        array $data = []
    ) {
        $this->registry = $registry;
        $this->_checkoutSession = $checkoutSession;
        $this->productRepository = $productRepository;
        parent::__construct($context, $data);
    }

    public function getCurrentProduct()
    {
        return $this->registry->registry('current_product');
    }

    public function getProductById(int $productId)
    {
        return $this->productRepository->getById($productId);
    }
}
