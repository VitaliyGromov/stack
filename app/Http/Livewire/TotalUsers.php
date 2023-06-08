<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class TotalUsers extends Component
{
    public $totalUsers;

    public $admins;

    public $stockWorkers;

    public $kitchenWorkers;

    private function getAllUsersByRole(string $roleName):int
    {
        return $users = User::role($roleName)->get()->count();
    }

    public function mount()
    {
        $this->totalUsers = User::count();
        $this->admins = $this->getAllUsersByRole('администратор');
        $this->kitchenWorkers = $this->getAllUsersByRole('работник кухни');
        $this->stockWorkers = $this->getAllUsersByRole('рвботник склада');
    }

    public function render()
    {
        return view('livewire.total-users');
    }
}
