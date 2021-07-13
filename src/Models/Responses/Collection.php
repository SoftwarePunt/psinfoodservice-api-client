<?php

namespace SoftwarePunt\PSAPI\Models\Responses;

class Collection
{
    // -----------------------------------------------------------------------------------------------------------------
    // Data

    protected string $name;
    protected int $pageSize;
    protected int $totalItemCount;
    /**
     * @var CollectionItem[]
     */
    protected array $items;

    public function __construct(int $pageSize, int $totalItemCount, array $items = [])
    {
        $this->pageSize = $pageSize;
        $this->totalItemCount = $totalItemCount;

        $this->setItems($items);
    }

    // -----------------------------------------------------------------------------------------------------------------
    // Getters

    public function getName(): string
    {
        return $this->name;
    }

    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    public function getTotalItemCount(): int
    {
        return $this->totalItemCount;
    }

    public function getPageCount(): int
    {
        return ceil($this->getTotalItemCount() / $this->pageSize);
    }

    // -----------------------------------------------------------------------------------------------------------------
    // Items - write

    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    public function addItem(CollectionItem $item): void
    {
        $this->items[] = $item;
    }

    // -----------------------------------------------------------------------------------------------------------------
    // Items - read

    public function getByIndex(int $index)
    {
        return $this->items[$index] ?? null;
    }
}