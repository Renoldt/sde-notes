<?php

interface Product {
    public function getName(): string;
}

class ProductA implements Product {
    public function getName(): string {
        return 'ProductA';
    }
}

class ProductB implements Product {
    public function getName(): string {
        return 'ProductB';
    }
}

class ProductFactory {
    public function createProduct(string $type): Product {
        switch ($type) {
            case 'A':
                return new ProductA();
            case 'B':
                return new ProductB();
            default:
                throw new InvalidArgumentException('Invalid product type.');
        }
    }
}

$productFactory = new ProductFactory();

$productA = $productFactory->createProduct('A');
echo $productA->getName(); // Output: ProductA

$productB = $productFactory->createProduct('B');
echo $productB->getName(); // Output: ProductB