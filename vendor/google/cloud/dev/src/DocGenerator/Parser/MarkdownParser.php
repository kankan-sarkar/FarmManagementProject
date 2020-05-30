<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Dev\DocGenerator\Parser;

use Parsedown;
use DOMDocument;

class MarkdownParser implements ParserInterface
{
    private $currentFile;
    private $content;
    private $markdown;

    public function __construct($currentFile, $content)
    {
        $this->currentFile = $currentFile;
        $this->content = $content;
        $this->markdown = Parsedown::instance();

        set_error_handler(function($number, $error){
            if (preg_match('/^DOMDocument::loadHTML\(\): (.+)$/', $error, $m) === 1) {
                throw new \Exception($m[1]);
            }
        });
    }

    public function parse()
    {
        $html = $this->markdown->parse($this->content);

        try {
            $doc = new DOMDocument;
            $doc->loadHTML($html);
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage() .' ('. $this->currentFile .')');
        }

        $headings = $doc->getElementsByTagName('h1');
        $heading = $headings->item(0);

        if (!$heading) {
            throw new \RuntimeException('Missing h1 tag ('. $this->currentFile .')');
        }
        $heading->parentNode->removeChild($heading);

        $pathinfo = pathinfo($this->currentFile);
        $body = $doc->getElementsByTagName('body')->item(0);

        return [
            'id' => strtolower(trim($pathinfo['dirname'] .'/'. $pathinfo['filename'], '/.')),
            'type' => 'guide',
            'title' => $heading->textContent,
            'name' => $heading->textContent,
            'description' => $doc->saveHTML($body),
            'methods' => []
        ];
    }
}
