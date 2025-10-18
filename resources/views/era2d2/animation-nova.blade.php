@extends('era2d2.index')

@section('animation')
<div class="era2-animation container2" aria-hidden="true">
  <div class="sun" role="img" aria-label="sol"></div>

  <div class="mountains">
    <div class="mountain one"></div>
    <div class="mountain two"></div>
    <div class="mountain three"></div>
  </div>

  <div class="trees">
    <div class="tree t1"></div>
    <div class="tree t2"></div>
    <div class="tree t3"></div>
    <div class="tree t4"></div>
  </div>

  <div class="leafContainer" aria-hidden="true"></div>
  <div class="particles" aria-hidden="true"></div>
</div>
@endsection

