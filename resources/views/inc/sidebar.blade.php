@extends('layouts.default')

@section('title', 'Боковая панель')

@section('page-content')
<div class="sidebar" data-color="purple" data-background-color="white">
    <div class="logo"><a href="#" class="simple text logo-normal">
      Shop
    </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('categories') ? 'active' : '' }} ">
          <a class="nav-link" href="{{ url('categories') }}">
            <i class="material-icons">person</i>
            <p>Categories</p>
          </a>
      </li>
      <li class="nav-item {{ Request::is('add-category') ? 'active' : '' }} ">
        <a class="nav-link" href="{{ url('add-category') }}">
          <i class="material-icons">person</i>
          <p>Add Category</p>
        </li>
        <li class="nav-item {{ Request::is('products') ? 'active' : '' }} ">
          <a class="nav-link" href="{{ url('products') }}">
            <i class="material-icons">person</i>
            <p>Products</p>
          </li>
          <li class="nav-item {{ Request::is('add-products') ? 'active' : '' }} ">
            <a class="nav-link" href="{{ url('add-products') }}">
              <i class="material-icons">person</i>
              <p>Add Products</p>
            </li>
          </ul>
        </div>
</div>
@endsection
