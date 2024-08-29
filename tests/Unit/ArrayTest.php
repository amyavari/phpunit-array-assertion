<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\DataProviderExternal;
use Tests\DataProvider\ArrayDataProvider;
use Tests\TestCase;

class ArrayTest extends TestCase
{
    #[DataProviderExternal(ArrayDataProvider::class, 'listArray')]
    public function test_list_order_matter($arr1, $arr2): void
    {
        $this->assertSame($arr1, $arr2);
    }

    #[DataProviderExternal(ArrayDataProvider::class, 'listArray')]
    public function test_list_order_not_matter($arr1, $arr2): void
    {
        sort($arr1);
        sort($arr2);
        
        $this->assertSame($arr1, $arr2);
    }

    #[DataProviderExternal(ArrayDataProvider::class, 'associativeArray')]
    public function test_associative_array($arr1, $arr2): void
    {
        ksort($arr1);
        ksort($arr2);
        
        $this->assertSame($arr1, $arr2);
    }

    #[DataProviderExternal(ArrayDataProvider::class, 'listOfAssociativeArrays')]
    public function test_list_of_associative_arrays_order_matter($arr1, $arr2): void
    {
        foreach ($arr1 as &$item) {
            ksort($item);
        }
        foreach ($arr2 as &$item) {
            ksort($item);
        }
        
        $this->assertSame($arr1, $arr2);
    }

    #[DataProviderExternal(ArrayDataProvider::class, 'listOfAssociativeArrays')]
    public function test_list_of_associative_arrays_order_not_matter($arr1, $arr2): void
    {
        foreach ($arr1 as &$item) {
            ksort($item);
        }
        foreach ($arr2 as &$item) {
            ksort($item);
        }

        usort($arr1, function ($a, $b) {
            return strcmp(serialize($a), serialize($b));
        });
        usort($arr2, function ($a, $b) {
            return strcmp(serialize($a), serialize($b));
        });
        
        $this->assertSame($arr1, $arr2);
    }
}
