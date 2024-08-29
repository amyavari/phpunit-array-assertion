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
}
