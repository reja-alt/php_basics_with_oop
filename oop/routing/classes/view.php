<?php

namespace App\View;


class View {
    public function __construct(protected string $link, protected array $params = [])
    {
        
    }

    public static function make(string $link, array $params = []): static
    {
        return new static($link,  $params);
    }

    public function render(): string {
        $viewPath = VIEW_PATH . '/' .  $this->link . '.php';

        if(!file_exists($viewPath)) {
            throw new \ViewNotFoundExtension();
        }

        // foreach($this->params as $key => $value) {
        //     $$key = $value;
        // }
        extract($this->params);
        ob_start();
        include $viewPath;
        return ob_get_clean();
        // include VIEW_PATH . '/' .  $this->view . '.php';
    }

    public function __toString(): string {
        return $this->render();
    }

    public function __get(string $name): string {
        return $this->params[$name] ?? null;
    }
}