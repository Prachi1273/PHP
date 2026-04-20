<?php

namespace Modules\ProgrammaticSEO\Services;

class TemplateEngine
{
    public function render(string $template, array $data): string
    {
        foreach ($data as $key => $value) {
            $template = str_replace("{{$key}}", $value, $template);
        }

        return $template;
    }
}

