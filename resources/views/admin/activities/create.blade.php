@extends('admin.admin')
@section('style')
    @parent
@endsection
@section('title')
    Nieuwe Activiteiten
@endsection
@section('main')
    <h1 class="bg-success text-center font-weight-bold text-white p-3 mb-0">Nieuwe Activiteit</h1>
    <form method="POST" action="{{route('admin.activiteiten.store')}}" class=" p-3" enctype="multipart/form-data">
        {{csrf_field()}}
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
            <label class="col-form-label font-weight-bold   @if($errors->has('activity_img')) text-danger  @endif" for="activity_img">Afbeelding <span class="text-danger">*</span> </label>
            <input type="file" name="activity_img" id="activity_img" value="{{old('activity_img')}}" class="form-control-file rounded-0 @if($errors->has('activity_img')) is-invalid  @endif" placeholder="Vogel spotten met Henk" accept="image/x-png,image/gif,image/jpeg" />
                @if($errors->has('activity_img'))
                <div class="text-danger small">
                    <ul>
                        @foreach ($errors->get('activity_img') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
         <small class="form-text font-italic">Ondersteunde formaten: JPG/PNG/GIF</small>

        </div>
        <div class="form-group">
            <label class="col-form-label font-weight-bold   @if($errors->has('target')) text-danger  @endif" for="target">Doelgroep <span class="text-danger">*</span> </label>
            <select name="target" id="target" class="form-control rounded-0 @if($errors->has('target')) is-invalid  @endif" >
                <option value="Iedereen" @if(old('target') == 'Iedereen') selected @endif>Iedereen</option>
                <option value="Kinderen" @if(old('target') == 'Kinderen') selected @endif>Kinderen</option>
                <option value="Jongeren" @if(old('target') == 'Jongeren') selected @endif>Jongeren</option>
                <option value="Ouderen" @if(old('target') == 'Ouderen') selected @endif>Ouderen</option>
                <option value="Gezinnen" @if(old('target') == 'Gezinnen') selected @endif>Gezinnen</option>
                <option value="Mannen" @if(old('target') == 'Mannen') selected @endif>Mannen</option>
                <option value="Vrouwen" @if(old('target') == 'Vrouwen') selected @endif>Vrouwen</option>
            </select>
            @if($errors->has('target'))
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('target') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label class="col-form-label font-weight-bold   @if($errors->has('event_date')) text-danger  @endif" for="event_date">Datum <span class="text-danger">*</span> </label>
            <input type="date" name="event_date" id="event_date" value="{{old('event_date')}}" class="form-control rounded-0 @if($errors->has('event_date')) is-invalid  @endif" min="{{date('Y-m-d')}}">
            @if($errors->has('event_date'))
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('event_date') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label class="col-form-label font-weight-bold   @if($errors->has('location')) text-danger  @endif" for="location">Locatie <span class="text-danger">*</span> </label>
            <select name="location" id="location" class="form-control rounded-0 @if($errors->has('location')) is-invalid  @endif">
                <option value="Natuurcentrum de Mol" @if(old('location') == 'Natuurcentrum de Mol') selected @endif>Natuurcentrum de Mol</option>
                <option value="Theehuis de Crone" @if(old('location') == 'Theehuis de Crone') selected @endif>Theehuis de Crone</option>
                <option value="Parkeerplaats de Rode Ooievaar" @if(old('location') == 'Parkeerplaats de Rode Ooievaar') selected @endif>Parkeerplaats de Rode Ooievaar</option>
                <option value="Restaurant De 3 Dikke Dames" @if(old('location') == 'Restaurant De 3 Dikke Dames') selected @endif>Restaurant De 3 Dikke Dames</option>
            </select>
            @if($errors->has('location'))
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('location') as $message)
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
