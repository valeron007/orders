@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">

                    <div class="card-body">
                        <form id="order-form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName">Name client</label>
                                <input type="email" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhone">Phone</label>
                                <input type="tel" name="phone" class="form-control" id="exampleInputPhone" placeholder="Phone">
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputAddress">Address</label>--}}
{{--                                <input type="text" name="address" class="form-control" id="exampleInputAddress" placeholder="Address">--}}
{{--                            </div>--}}

                            <div class="form-group">
                                <label for="exampleInputPrice">Стоимость заказа</label>
                                <input type="number" name="price" class="form-control" id="exampleInputPrice" placeholder="Price">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTarif">Тарифы</label>
                                <select name="tarif" class="form-control" id="exampleFormControlTarif">
                                    @foreach ($tarifs as $tarif)
                                        <option value="{{$tarif['id']}}">{{ $tarif['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>

{{--                            <div class="form-group" id="adresses">--}}
                            <div class="d-none form-group" id="adresses">
                                <label for="exampleFormControlAdress">Выберите адрес</label>
                                <select name="adress" class="form-control" id="exampleFormControlAdress">

                                </select>
                            </div>



                            <div class="form-group">
                                <label for="datetimeorder">время доставки</label>
                                <div class='input-group date' id='datetimeorder'>
                                    <input id="delivery" type='datetime-local' name="date_livery" class="form-control" />
                                </div>
                            </div>


                            <button id="receive-order" type="submit" class="btn btn-primary" >Оформить заказ</button>
                        </form>
                        <div class="error">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

