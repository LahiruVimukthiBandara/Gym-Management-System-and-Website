<?php

namespace App\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    public function navigateToUserShow($userId)
    {
        return redirect()->route('user.show', $userId);
    }

    public function render()
    {
        $currentYear = Carbon::now()->format('Y');
        $currentMonth = Carbon::now()->format('m');

        $users = User::search($this->search)
            ->with('fee')
            ->paginate($this->perPage);

        foreach ($users as $user) {
            if ($user->fee->isNotEmpty()) {

                $latestPaymentDate = $user->fee->max('date');
                $latestPaymentYear = Carbon::parse($latestPaymentDate)->format('Y');
                $latestPaymentMonth = Carbon::parse($latestPaymentDate)->format('m');

                if ($latestPaymentYear == $currentYear && $latestPaymentMonth == $currentMonth) {
                    $user->payment_status = 'paid';
                } else {
                    $user->payment_status = 'unpaid';
                }
            } else {
                $user->payment_status = 'unpaid';
            }
        }

        return view('livewire.user-table', compact('users'));
    }
}
