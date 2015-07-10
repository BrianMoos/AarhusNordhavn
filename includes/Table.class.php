<?php

class Table {
        private $headers;
        private $rows;

        public function __construct($headerArray) {
            $this->headers = $headerArray;
            $this->rows = array();
        }

        public function row_push($row) {
            if (count($row) != count($this->headers)) {
                die ("Wrong column count");
            }
            array_push($this->rows, $row);
            return true;
        }

        /*
         * display the table
         * consider possibility of parm for style
         */
        public function displayTable() {
            print("<table>\n");
            print("<tr>\n");
            foreach ($this->headers as $col) {
                printf("<th>%s</th>\n", $col);
            }
            print("</tr>\n");

            foreach ($this->rows as $row) {
                print("<tr>\n");
                foreach ($row as $col) {
                    printf("<td>%s</td>\n", $col);
                }
                print("</tr>\n");
            }
            print("</table>\n");
        }
}

