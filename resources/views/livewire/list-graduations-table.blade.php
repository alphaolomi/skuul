<div class="card">
    <div class="card-header">
        <h4 class="card-title">Graduations in this semster</h4>
    </div>
    <div class="card-body">
        @livewire('help-button', ['target_id' => 'graduation-help-text', 'text' => "Manage graduated students"])
        <x-adminlte-datatable id="graduation-list-table" :heads="['S/N','Profile photo', 'Name', 'email','gender' , '','', '']" class='text-capitalize' bordered striped head-theme="dark" beautify>
            @foreach($students as $student)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><img src="{{$student->profile_photo_url}}" alt="" class="rounded-circle" height="50px" width="50px"></td>
                    <td>{{ $student->name}}</td>
                    <td>{{ $student->email}}</td>
                    <td>{{$student->gender}}</td>
                    <td>@livewire('dropdown-links', [
                        'links' => [
                        ['href' => route("students.edit", $student->id), 'text' => 'Manage profile', 'icon' => 'fas fa-pen'],
                        ['href' => route("students.show", $student->id), 'text' => 'View', 'icon' => 'fas fa-eye'],
                        ],
                    ],)</td>
                    <td>
                        @livewire('delete-modal', ['modal_id' => $student->id ,"action" => route('students.graduations.reset', $student->id), 'item_name' => "would be reset to ungraduated", 'button_label' => 'Reset'])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>