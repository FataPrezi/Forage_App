@extends('default')
@section('reglement.create.content')
<?php use App\Type; ?>


<div class="login-box">
<div class="content">
    <div class="container-fluid"style='margin-right: auto; margin-left: auto' >
        <div class="card">
            <div class="card-header card-header-primary">
                    {{-- <a href="#" target="_blank">full documentation.</a> --}}
                <h3 class="card-title">Enregistrement Reglement</h3>
                 {{-- <p class="card-category">Clients --}}
                    {{-- <a target="_blank" href="#">Robert McIntosh</a>. Please checkout the --}}
                    {{-- <a href="#" target="_blank">full documentation.</a> --}}
                {{-- </p>  --}}
            </div>
            <div class="card-body" style='margin-right: auto; margin-left: auto'>
                <div class="row pt-5"></div>

                <form method="POST" action="{{route('reglements.store')}}">
                    {{ csrf_field() }}
                    {{-- <div class="form-group">
                        <label for="input-village">ID</label>
                        <input type="text" name="village" class="form-control" id="input-village" aria-describedby="emailHelp" placeholder="Enter ID">
                        <small id="input-village-help" class="form-text text-muted">
                            @if ($errors->has('village'))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->get('village') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </small>
                    </div>--}}
                    <div class="form-group">

                        <label for="facture_id">Facture ID</label>
                        <input type="text" name="facture_id" class="form-control" id="facture_id" aria-describedby="emailHelp" placeholder="Enter Facture ID">
                        <small id="emailHelp" class="form-text text-muted">
                            @if ($errors->has('facture_id'))
                            @foreach ($errors->get('facture_id') as $message)
                            <p class="text-danger">{{ $message }}</p>
                            @endforeach
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="montant">Montant</label>
                        <input type="numeric" name="montant" class="form-control" id="montant" aria-describedby="emailHelp" placeholder="Enter Montant">
                        <small id="input-nom-help" class="form-text text-muted">
                            @if ($errors->has('montant'))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->get('montant') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </small>
                    </div>

                                       <div class="form-group">
                            <label for="type">Type Paiement</label><br>
                            <select class="textWidth form-control" name="type" id="type" type="text">
                                <option disabled selected> -- Choisir une option -- </option>
                                  <option value="Espece"> Espece</option>
                                  <option value="Cheque"> Cheque</option>
                                  <option value="Visa"> Visa</option>
                                  <option value="Wari"> Wari</option>
                                  <option value="Virement"> Virement</option>
                                  <option value="Orange-Money"> Orange-Money</option>

                            </select>
                        </div>
                         {{-- <div class="form-group">
                        <label for="type" name="type">Type Paiement</label>
                    <select name="type" id="type">
                        @foreach($types as $type)
                        <option value="{{$type->id}}"> {{$type->name}} </option>
                        @endforeach
                    </select>
                    </div> --}}

                    <div class="form-group">
                        <label for="comptable">Comptable</label>
                        <input type="text" name="comptable" class="form-control" id="comptable" aria-describedby="emailHelp" placeholder="Comptable">
                        <small id="emailHelp" class="form-text text-muted">
                            @if ($errors->has('comptable'))
                            @foreach ($errors->get('comptable') as $message)
                            <p class="text-danger">{{ $message }}</p>
                            @endforeach
                            @endif
                        </small>
                    </div>
                    {{-- <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            Option one is this
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div> --}}
                <table>
                        <tr>
                                <td>
                    <button type="submit" class="btn btn-primary">Valider</button>
                                </td>
                                <td>
                                         &nbsp;&nbsp;
                                </td>
                                <td>
                    <button type="submit" class="btn btn-primary">Annuler</button>
                                </td>
                        </tr>
                </table>
                </form>
                <div class="row justify-content-center">
                    @if ($errors->any())

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
