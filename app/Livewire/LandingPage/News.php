<?php

namespace App\Livewire\LandingPage;

use App\Models\IdentitiySchool;
use App\Models\News as ModelsNews;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class News extends Component
{
    #[Layout('layouts.landing-page')]
    #[Title('Berita')]
    public function render()
    {
        return view('livewire.landing-page.news',[
            'News' => ModelsNews::all(),
            'IdentitySchool' => IdentitiySchool::first(),
        ]);
    }
}
