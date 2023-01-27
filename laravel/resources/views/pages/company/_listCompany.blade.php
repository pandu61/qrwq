<table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Email
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($employees as $employee)
        <tr>
            <td>
                <div class="d-flex px-3 py-1">
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$employee->nama}}</h6>
                    </div>
                </div>
            </td>
            <td>
                <p class="text-sm font-weight-bold mb-0">{{$employee->email}}</p>
            </td>
        </tr>
        @empty
        <tr>
            <td>
                <div class="d-flex px-3 py-1">
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">No Data</h6>
                    </div>
                </div>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>