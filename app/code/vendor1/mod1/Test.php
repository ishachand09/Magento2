<?php

namespace vendor1\mod1;

use Magento\Catalog\Api\Data\CategoryInterface;

class Test
{
    protected $array;
    protected $string;
    protected $category;

    public function __construct(CategoryInterface $category, array $array = [8, 9, 8], string $string = "isha")
    {
        $this->array = $array;
        $this->string = $string;
        $this->category = $category;
    }

    public function displayParams()
    {
        echo "Array: ";
        print_r($this->array);
        echo "String: " . $this->string;
        // return [$this->array, $this->string]; 
    }
}
