@extends('admin.admin')
@section('styles')
    @parent

@endsection
@section('title')
    Bewerken {{$partner->name}}
@endsection
@section('main')
    <h1 class="bg-success text-center font-weight-bold text-white p-3 mb-0">Nieuwe Activiteit</h1>
    <form method="POST" action="{{route('admin.partners.update', $partner->name)}}" class=" p-3" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group ">
            <label class="col-form-label font-weight-bold  @if($errors->has('name')) text-danger  @endif">Naam <span class="text-danger">*</span> </label>
            <input type="text" name="name" id="name" class="form-control @if($errors->has('name')) is-invalid  @endif rounded-0" placeholder="HenkSpot69" value="{{$partner->name}}">
            @if($errors->has('name'))
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('name') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label class="col-form-label font-weight-bold  @if($errors->has('description')) text-danger  @endif" for="description">Beschrijving <span class="text-danger">*</span> </label>
            <textarea rows="5" style="resize: none" spellcheck="false"  name="description" id="description" class="form-control rounded-0  @if($errors->has('description')) is-invalid  @endif" placeholder="Henk heeft dit omdat we henk supporten in zijn bespottingen">{{$partner->description}}</textarea>
            @if($errors->has('description'))
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('description') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group ">
            <label class="col-form-label font-weight-bold  @if($errors->has('email')) text-danger  @endif">E-Mail <span class="text-danger">*</span> </label>
            <input type="email" name="email" id="email" class="form-control @if($errors->has('email')) is-invalid  @endif rounded-0" placeholder="henk@vogelspotten.nl" value="{{$partner->email}}">
            @if($errors->has('email'))
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('email') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group ">
            <label class="col-form-label font-weight-bold  @if($errors->has('phone_number')) text-danger  @endif">Telefoonnummer <span class="text-danger">*</span> </label>
            <input type="tel" name="phone_number" id="phone_number" class="form-control @if($errors->has('phone_number')) is-invalid  @endif rounded-0" placeholder="07143654365" value="{{$partner->phone_number}}">
            @if($errors->has('phone_number'))
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('phone_number') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group ">
            <label class="col-form-label font-weight-bold  @if($errors->has('website')) text-danger  @endif">Website <span class="text-danger">*</span> </label>
            <input type="text" name="website" id="website" class="form-control @if($errors->has('website')) is-invalid  @endif rounded-0" placeholder="VogelsSpottenMetHenkOpDinsdagMaarNietDeEersteVanJuliAlsDatVolgensHenkEenSlechteDagIs.henk" value="{{$partner->website}}">
            @if($errors->has('website'))
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('website') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="form-group">
            <input type="submit" class="form-control btn btn-block btn-light  rounded-0" role="button" value="Opslaan">
        </div>
    </form>

@endsection
@section('scripts')
    @parent

@endsection
