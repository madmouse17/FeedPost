<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

class PostTable extends LivewireDatatable
{

    public function builder()
    {
        return Post::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID')
                ->defaultSort('asc')
                ->sortBy('id'),

            Column::name(('url'))
                ->linkto('')
                ->label('image'),

            Column::name('desc')
                ->label('desc'),

            DateColumn::name('tanggal')
                ->label('tanggal'),
        ];
    }
}
