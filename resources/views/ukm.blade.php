@extends('layout')
@section('content')
<h3> Many to Many With BelongsToMany by UKM</h3>
    <table class="uk-table uk-table-divider ">
      <thead>
      <tr>
        <th>Name</th>
        <th>Mahasiswa</th>
      </tr>
    </thead>
    <tbody>
        @foreach($ukm as $ukms)
        <tr>
            <td>{{ $ukms->name }}</td>
              <td>
                  @foreach($ukms -> mahasiswa as $mahasiswas)
                      @if($mahasiswas)
                        {{ $mahasiswas ->profil->name }} ,
                      @else
                      None
                      @endif
                  @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <h3> Many to Many With BelongsToMany by UKM</h3>
      <table class="uk-table uk-table-divider ">
        <thead>
        <tr>
          <th>Name</th>
          <th>UKM</th>
        </tr>
      </thead>
      <tbody>
          @foreach($mahasiswa as $mahasiswas)
          <tr>
              <td>{{ $mahasiswas->profil->name }}</td>
              <td>
                  @foreach($mahasiswas->ukm as $ukms)
                    {{ $ukms -> name }},
                  @endforeach
                </td>
          </tr>
          @endforeach
      </tbody>
    </table>
@endsection
