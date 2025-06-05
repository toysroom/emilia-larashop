<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Carbon\Carbon;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $data = Carbon::now()->format("d/m/Y H:i:s");
        return view('layouts.app', compact('data'));
    }
}
