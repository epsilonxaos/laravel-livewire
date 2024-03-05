<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Mymodal extends Component
{
	public $data = null;
	public bool $open = false;

	public $nombre = '';

	protected $listeners = ['openModal' => '$refresh'];

	#[On('open-modal')]
	public function open($data)
	{
		$this->data = $data;
		$this->open = true;
	}

	#[On('save-modal')]
	public function save()
	{
		// Update function

		flash()->addSuccess('Aplicacion ' . $this->nombre . ' actualizada correctamente');

		$this->reset();
		// $this->close();
	}

	#[On('close-modal')]
	public function close()
	{
		$this->open = false;
	}


	public function render()
	{
		return view('livewire.mymodal');
	}
}
