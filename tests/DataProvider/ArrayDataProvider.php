<?php

namespace Tests\DataProvider;

class ArrayDataProvider
{
    public static function listArray(): array
    {
        return [
            'ordered_same_items' => [
                'arr1' => ['ali', '3', 4, 'yavari'],
                'arr2' => ['ali', '3', 4, 'yavari'],
            ],
            'ordered_one_different_item' => [
                'arr1' => ['ali', '3', 4, 'yavari'],
                'arr2' => ['ali', '3', 4, 'another'],
            ],
            'ordered_with_extra_item' => [
                'arr1' => ['ali', '3', 4, 'yavari'],
                'arr2' => ['ali', '3', 4, 'yavari', 'newOne'],
            ],
            'ordered_with_less_item' => [
                'arr1' => ['ali', '3', 4, 'yavari'],
                'arr2' => ['ali', '3', 4],
            ],
            'ordered_with_false_item' => [
                'arr1' => ['ali', '3', 4, 'yavari'],
                'arr2' => ['ali', '3', 4, false],
            ],
            'ordered_with_true_item' => [
                'arr1' => ['ali', '3', 4, 'yavari'],
                'arr2' => ['ali', '3', 4, true],
            ],
            'not_ordered_same_items' => [
                'arr1' => ['ali', '3', 4, 'yavari'],
                'arr2' => ['ali', 'yavari', 4, '3'],
            ],
            'not_ordered_one_different_item' => [
                'arr1' => ['ali', '3', 4, 'yavari'],
                'arr2' => ['ali', 'another', 4, '3'],
            ],
            'not_ordered_with_extra_item' => [
                'arr1' => ['ali', '3', 4, 'yavari'],
                'arr2' => ['ali', 'newOne', 'yavari', 4, '3'],
            ],
            'not_ordered_with_less_item' => [
                'arr1' => ['ali', '3', 4, 'yavari'],
                'arr2' => ['ali', 4, '3'],
            ],
            'not_ordered_with_false_item' => [
                'arr1' => ['ali', '3', 4, 'yavari'],
                'arr2' => ['ali', false, 4, '3'],
            ],
            'not_ordered_with_true_item' => [
                'arr1' => ['ali', '3', 4, 'yavari'],
                'arr2' => ['ali', true, 4, '3'],
            ],
        ];
    }

    public static function associativeArray(): array
    {
        return [
            'ordered_same_items' => [
                'arr1' => ['a' => 1, 'b' => 'Ali', 'c' => 'test'],
                'arr2' => ['a' => 1, 'b' => 'Ali', 'c' => 'test'],
            ],
            'ordered_one_different_item' => [
                'arr1' => ['a' => 1, 'b' => 'Ali', 'c' => 'test'],
                'arr2' => ['a' => 1, 'b' => 'Ali', 'c' => 'another'],
            ],
            'ordered_with_extra_item' => [
                'arr1' => ['a' => 1, 'b' => 'Ali', 'c' => 'test'],
                'arr2' => ['a' => 1, 'b' => 'Ali', 'c' => 'test', 'd' => 'extra'],
            ],
            'ordered_with_less_item' => [
                'arr1' => ['a' => 1, 'b' => 'Ali', 'c' => 'test'],
                'arr2' => ['a' => 1, 'c' => 'test'],
            ],
            'ordered_with_false_item' => [
                'arr1' => ['a' => 1, 'b' => 'Ali', 'c' => 'test'],
                'arr2' => ['a' => 1, 'b' => 'Ali', 'c' => false],
            ],
            'ordered_with_true_item' => [
                'arr1' => ['a' => 1, 'b' => 'Ali', 'c' => 'test'],
                'arr2' => ['a' => 1, 'b' => 'Ali', 'c' => true],
            ],
            'not_ordered_same_items' => [
                'arr1' => ['a' => 1, 'b' => 'Ali', 'c' => 'test'],
                'arr2' => ['b' => 'Ali', 'c' => 'test', 'a' => 1],
            ],
            'not_ordered_one_different_item' => [
                'arr1' => ['a' => 1, 'b' => 'Ali', 'c' => 'test'],
                'arr2' => ['b' => 'Ali', 'c' => 'another', 'a' => 1],
            ],
            'not_ordered_with_extra_item' => [
                'arr1' => ['a' => 1, 'b' => 'Ali', 'c' => 'test'],
                'arr2' => ['d' => 'extra', 'b' => 'Ali', 'c' => 'test', 'a' => 1],
            ],
            'not_ordered_with_less_item' => [
                'arr1' => ['a' => 1, 'b' => 'Ali', 'c' => 'test'],
                'arr2' => ['b' => 'Ali', 'a' => 1],
            ],
            'not_ordered_with_false_item' => [
                'arr1' => ['a' => 1, 'b' => 'Ali', 'c' => 'test'],
                'arr2' => ['b' => 'Ali', 'c' => false, 'a' => 1],
            ],
            'not_ordered_with_true_item' => [
                'arr1' => ['a' => 1, 'b' => 'Ali', 'c' => 'test'],
                'arr2' => ['b' => 'Ali', 'c' => true, 'a' => 1],
            ],
        ];
    }
}
