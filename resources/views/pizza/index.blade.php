@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="" class="list-group-item">View</a>
                        <a href="" class="list-group-item">Create</a>
                    </ul>
            </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name of pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="name of pizza">
                    </div>
                    <div class="form-group">
                        <label for="decription">Description of pizza</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-inline">
                        <label for="">Pizza price($)</label>
                        <input type="number" class="form-inline" placeholder="small pizza">
                        <input type="number" class="form-inline" placeholder="medium pizza">
                        <input type="number" class="form-inline" placeholder="large pizza">
                    </div>
                    <div class="form-group">
                        <label for="description">Category</label>
                        <select class="form-control">
                            <option value=""></option>
                            <option value="vegetarian">Vegetarian Pizza</option>
                            <option value="nonvegetarian">Non vegetarian Pizza</option>
                            <option value="traditional">Traditional Pizza</option>
                        </select>
                    </div>
                    <div class="form-group">
                         <label for="">Image</label>
                         <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">Save</button>


                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
