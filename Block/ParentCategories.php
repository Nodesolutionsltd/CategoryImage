<?php

/**
 * NodeSolutions
 *
 * NOTICE OF LICENSE
 * 
 * @category    NodeSolutions
 * @package     NodeSolutions_CategoryImage
 * @license     NodeSolutions
 */
namespace NodeSolutions\CategoryImage\Block;

/**
 * Class ParentCategories
 * @package NodeSolutions\CategoryImage\Block
 */
class ParentCategories extends \Magento\Framework\View\Element\Template
{
    /**
     * @type _categoryHelper
     */
    protected $_categoryHelper;

    /**
     * @type categoryFactory
     */
    protected $categoryFactory;

    /**
     * @type _catalogLayer
     */
    protected $_catalogLayer;

    /**
     * @type _scopeConfig
     */
    protected $_scopeConfig;

    /**
     * ParentCategories constructor.
     *
     * @param StoreManagerInterface $storeManager
     * @param CollectionFactory $categoryCollectionFactory
     * @param Context $context
     * @param Category $categoryHelper
     * @param CategoryFactory $categoryFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory,
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Helper\Category $categoryHelper,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        array $data = []
    ) {
        $this->_scopeConfig = $context->getScopeConfig();
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        $this->_storeManager=$storeManager;
        $this->_categoryHelper = $categoryHelper;
        $this->categoryFactory = $categoryFactory;
        parent::__construct($context, $data);
    }

    /**
     * Get Module Status
     * @return string
     */
    public function getModuleStatus()
    {
        return $this->_scopeConfig->getValue(
            'module/general/enable',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Category id
     * @return string
     */
    public function getCategoryTitle()
    {
        return $this->_scopeConfig->getValue(
            'module/cat_content/cat_title',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Category id
     * @return string
     */
    public function getCategoryDesc()
    {
        return $this->_scopeConfig->getValue(
            'module/cat_content/cat_descri',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Category id
     * @return string
     */
    public function getCategoryGrid()
    {
        return $this->_scopeConfig->getValue(
            'module/cat_grid/category_grid_count',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Category View
     * @return string
     */
    public function getCategoryGridView()
    {
        return $this->_scopeConfig->getValue(
            'module/cat_grid/category_grid_view',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Category width
     * @return string
     */
    public function getCategoryImgWidth()
    {
        return $this->_scopeConfig->getValue(
            'module/cat_img/img_width',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Category height
     * @return string
     */
    public function getCategoryImgHeight()
    {
        return $this->_scopeConfig->getValue(
            'module/cat_img/img_height',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Parent Category
     * @return string
     */
    public function getParentCategories()
    {
        $rootCat = $this->_categoryHelper->getStoreCategories();
        return $rootCat;
    }

    /**
     * Get Base url
     * @return string
     */
    public function getBasrUrl(){
        return $this->_storeManager->getStore()->getBaseUrl();
    }

    /**
     * Get Category image
     * @return string
     */
    public function getCategoryImageUrlById($categoryId)
    {
        $category = $this->categoryFactory->create()->load($categoryId);
        if($category->getImageUrl()) {
            return $category->getImageUrl();
        } else {
            return false; 
        }
    }
}
