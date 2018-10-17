@extends('layout')
@section('content')
<h3> Many to One With BelongsTo</h3>
    <table class="uk-table uk-table-divider ">
      <thead>
      <tr>
        <th>Username</th>
        <th>Name</th>
        <th>Email</th>
        <th>Positon</th>

      </tr>
    </thead>
    <tbody>
        @foreach($position as $positions)
        <tr>
            <td>{{ $positions->mahasiswa->username }}</td>
            <td>{{ $positions->mahasiswa->profil->name }}</td>
            <td>{{ $positions->mahasiswa->email }}</td>
            <td>{{ $positions->name }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <hr class="uk-divider-icon">
  <h3> One to Many With HasMany</h3>
      <table class="uk-table uk-table-divider ">
        <thead>
        <tr>
          <th>Username</th>
          <th>Name</th>
          <th>Email</th>
          <th>Positon</th>

        </tr>
      </thead>
      <tbody>
          @foreach($mahasiswa as $mahasiswas)
          <tr>
              <td>{{ $mahasiswas->username }}</td>
              <td>{{ $mahasiswas->profil->name }}</td>
                <td>{{ $mahasiswas->email }}</td>
              <td>
                
                @foreach ($mahasiswas->position as $positions)
                  <li>{{ $positions->name }}</li>
                @endforeach
              </tr>
          @endforeach
      </tbody>
    </table>
@endsection
