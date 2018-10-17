@extends('layout')
@section('content')
<h3> One to One With HasOne</h3>
    <table class="uk-table uk-table-divider ">
      <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Name</th>
      </tr>
    </thead>
    @foreach($mahasiswa as $mahasiswas)
    <tbody>
      <tr>
        <td>  {{ $mahasiswas->username }} </td>
        <td>  {{ $mahasiswas->email }} </td>
        <td>  {{ $mahasiswas->profil->name }} </td>
      </tr>
    </tbody>
    @endforeach
  </table>
  <h3> One to One With BelongsTo</h3>
      <table class="uk-table uk-table-divider ">
        <thead>
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Name</th>
        </tr>
      </thead>
      @foreach($profil as $profils)
        <tbody>
          <tr>
            <td>  {{ $profils->mahasiswa->username }} </td>
            <td>  {{ $profils->mahasiswa->email }} </td>
            <td>  {{ $profils->name }} </td>
          </tr>
        </tbody>
      @endforeach
    </table>
@endsection
