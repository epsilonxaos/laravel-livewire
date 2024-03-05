<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class UpdateState extends Component
{
	public $id = null;
	public $status = null;

	public function mount($id, $status)
	{
		$this->id = $id;
		$this->status = $status;
	}

	public function render()
	{
		return view('livewire.update-state');
	}
}
