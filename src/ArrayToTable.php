<?php

declare(strict_types=1);

namespace Oct8pus\ArrayToTable;

class ArrayToTable
{
    private array $data;
    private ?array $options;

    /**
     * Constructor
     *
     * @param array $data
     * @param array $options
     */
    public function __construct(array $data, array $options = [])
    {
        $this->data = $data;
        $this->options = $options;
    }

    /**
     * Render table
     *
     * @return string
     */
    public function render() : string
    {
        if (empty($this->data)) {
            return '';
        }

        $result = $this->renderHeader();
        $result .= $this->renderBody();
        $result .= $this->renderFooter();

        return $result;
    }

    /**
     * Render table header
     *
     * @return string
     */
    private function renderHeader() : string
    {
        $classes = array_key_exists('table-classes', $this->options) ? (' ' . $this->options['table-classes']) : '';

        $result = <<<TABLE
        <table class="table{$classes}">
        <thead>
          <tr>

        TABLE;

        $columns = array_keys($this->data[0]);

        foreach ($columns as $column) {
            $result .= "    <th scope=\"col\">{$column}</th>\n";
        }

        $result .= <<<'TABLE'
          </tr>
        </thead>

        TABLE;

        return $result;
    }

    /**
     * Render table body
     *
     * @return string
     */
    private function renderBody() : string
    {
        $result = "<tbody>\n";

        foreach ($this->data as $row) {
            $result .= "  <tr>\n";

            foreach ($row as $cell) {
                $result .= "    <td>{$cell}</td>\n";
            }

            $result .= "  </tr>\n";
        }

        return $result;
    }

    /**
     * Render table footer
     *
     * @return string
     */
    private function renderFooter() : string
    {
        return <<<'FOOTER'
        </tbody>
        </table>

        FOOTER;
    }
}

