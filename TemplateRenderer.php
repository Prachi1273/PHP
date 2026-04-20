<?php

namespace Modules\ProgrammaticSEO\Services;

class TemplateRenderer
{
    public function render(string $template, array $variables): string
    {
        foreach ($variables as $key => $value) {
            $template = str_replace('{' . $key . '}', $value, $template);
        }

        return $template;
    }
}

