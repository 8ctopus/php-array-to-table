<?php

declare(strict_types=1);

namespace Oct8pus\ArrayToTable;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @covers \Oct8pus\ArrayToTable\ArrayToTable
 */
final class ArrayToTableTest extends TestCase
{
    public function testNoData() : void
    {
        $table = (new ArrayToTable([]))
            ->render();

        $this->assertEquals('', $table);
    }

    /**
     * Test rendering table
     */
    public function testBasic() : void
    {
        // set up test data
        $data = [
            [
                'id' => 1,
                'firstName' => 'John',
                'transactionId' => 'A1-2019',
                'refunded' => 0,
            ], [
                'id' => 2,
                'firstName' => 'Mark',
                'transactionId' => 'A1-2020',
                'refunded' => 0,
            ], [
                'id' => 3,
                'firstName' => 'Joe',
                'transactionId' => 'A1-2022',
                'refunded' => 1,
            ],
        ];

        // set up table options
        $options = [
            'table-classes' => 'table-striped table-bordered',
        ];

        $table = (new ArrayToTable($data, $options))
            ->render();

        // Assert that the result matches the expected output
        $expected = <<<'EXPECTED'
        <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">firstName</th>
            <th scope="col">transactionId</th>
            <th scope="col">refunded</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>John</td>
            <td>A1-2019</td>
            <td>0</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Mark</td>
            <td>A1-2020</td>
            <td>0</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Joe</td>
            <td>A1-2022</td>
            <td>1</td>
          </tr>
        </tbody>
        </table>

        EXPECTED;

        $this->assertEquals($expected, $table);
    }
}
