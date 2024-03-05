<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Aplicaciones;
use Livewire\Attributes\On;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class AplicacionesTable extends DataTableComponent
{
	protected $model = Aplicaciones::class;

	public function configure(): void
	{
		$this->setPrimaryKey('id');
	}

	#[On('change-status')]
	public function changestatus($status)
	{
		flash()->addSuccess('Se cambio a ' . $status);
	}

	public function columns(): array
	{
		return [
			Column::make("Id", "id")
				->sortable(),
			Column::make("Nombre", "nombre")
				->sortable(),
			BooleanColumn::make("Activo")
				->setView('components.datatable.status')
				->sortable(),
			Column::make("Fecha creacion", "fecha_creacion")
				->sortable(),
			Column::make("Fecha modificacion", "fecha_modificacion")
				->sortable(),
			Column::make('Estado')
				->label(fn ($row) => view('livewire.update-state', ["id" => $row->id, "status" => 1]))->html(),
			Column::make('Actions')
				->label(
					function ($row) {
						$edit = '<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 rounded m-1" wire:click="$dispatch(\'open-modal\', {data: ' . $row . '})">Open Modal</button>';
						return $edit;
					}
				)->html(),
		];
	}
}
