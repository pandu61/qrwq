
    @foreach($companies as $company)
        <option value="{{$company->id}}">{{$company->nama}}</option>
    @endforeach
    <option onclick="nextPage()">Next</option>
    <option onclick="previuosPage()">Previous</option>
