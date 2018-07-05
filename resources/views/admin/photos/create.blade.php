@extends('admin.admin')
@section('styles')
    @parent

@endsection
@section('title')
    Foto Uploaden
@endsection
@section('main')
    <h1 class="bg-success text-center font-weight-bold text-white p-3 mb-0">Foto Uploaden</h1>
    <form method="POST" action="{{route('admin.fotos.store')}}" class=" p-3" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label class="col-form-label font-weight-bold   @if($errors->has('img')) text-danger  @endif" for="img">Afbeelding <span class="text-danger">*</span> </label>
            <input type="file" name="img" id="img" value="{{old('img')}}" class="form-control-file rounded-0 @if($errors->has('img')) is-invalid  @endif" placeholder="Vogel spotten met Henk" accept="image/x-png,image/gif,image/jpeg" />
            @if($errors->has('img'))
                <div class="text-danger small">
                    <ul>
                        @foreach ($errors->get('img') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <small class="form-text font-italic">Ondersteunde formaten: JPG/PNG/GIF</small>

        </div>

        <div class="form-group ">
            <label class="col-form-label font-weight-bold  @if($errors->has('title')) text-danger  @endif">Titel <span class="text-danger">*</span> </label>
            <input type="text" name="title" id="title" class="form-control @if($errors->has('title')) is-invalid  @endif rounded-0" placeholder="Vogel spotten met Henk" value="{{old('title')}}">
            @if($errors->has('title'))
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('title') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label class="col-form-label font-weight-bold  @if($errors->has('description')) text-danger  @endif" for="description">Beschrijving <span class="text-danger">*</span> </label>
            <textarea rows="5" style="resize: none" spellcheck="false"  name="description" id="description" class="form-control rounded-0  @if($errors->has('description')) is-invalid  @endif" placeholder="Henk is leuk en daarom gaan we met henk vogelspotten">{{old('description')}}</textarea>
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
        <div class="form-group">
            <input type="submit" class="form-control btn btn-block btn-light  rounded-0" role="button" value="Opslaan">
        </div>
    </form>

@endsection
@section('scripts')
    @parent

@endsection
