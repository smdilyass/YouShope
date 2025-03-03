<?php

namespace App\Livewire;

use Livewire\Component;

class ProductSlider extends Component
{
    public $product;
    public $currentIndex = 0;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function next()
    {
        $this->currentIndex = ($this->currentIndex + 1) % count($this->product->images);
    }

    public function previous()
    {
        $this->currentIndex = ($this->currentIndex - 1 + count($this->product->images)) % count($this->product->images);
    }

    public function render()
    {
        return view('livewire.product-slider');
    }
}
