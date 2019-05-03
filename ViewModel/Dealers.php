<?php
declare(strict_types=1);

namespace Yireo\ExampleDealersStorefront\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

use Yireo\ExampleDealers\Api\Data\DealerInterface;
use Yireo\ExampleDealers\Api\DealerRepositoryInterface;

/**
 * Class Dealers
 * @package Yireo\ExampleDealers\ViewModel
 */
class Dealers implements ArgumentInterface
{
    /**
     * @var DealerRepositoryInterface
     */
    private $dealerRepository;

    /**
     * Dealers constructor.
     * @param DealerRepositoryInterface $dealerRepository
     */
    public function __construct(
        DealerRepositoryInterface $dealerRepository
    ) {
        $this->dealerRepository = $dealerRepository;
    }

    /**
     * @return DealerInterface[]
     */
    public function getDealers(): array
    {
        return $this->dealerRepository->getAll();
    }
}
