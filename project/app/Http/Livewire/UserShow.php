<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\User;
use Livewire\Component;

class UserShow extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name, $email, $password, $id;
    public $search = '';

    protected function rules()
    {
        return [
            'name' => 'required|string|min:6',
            'email' => ['required','email'],
            'password' => 'required|string',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveUser()
    {
        $validatedData = $this->validate();

        User::create($validatedData);
        session()->flash('message','User Added Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editUser(int $id)
    {
        $student = User::find($id);
        if($student){

            $this->id = $student->id;
            $this->name = $student->name;
            $this->email = $student->email;
            $this->password = $student->password;
        }else{
            return redirect()->to('/users');
        }
    }

    public function updateUser()
    {
        $validatedData = $this->validate();

        User::where('id',$this->id)->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password']
        ]);
        session()->flash('message','Student Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteStudent(int $id)
    {
        $this->id = $id;
    }

    public function destroyStudent()
    {
        User::find($this->id)->delete();
        session()->flash('message','User Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function render()
    {
        $students = User::where('name', 'like', '%'.$this->search.'%')->orderBy('id','DESC')->paginate(3);
        return view('livewire.user-show', ['users' => $students]);
    }
}