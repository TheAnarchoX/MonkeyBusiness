@extends('admin.admin')
@section('styles')
    @parent

@endsection
@section('title')
   Bewerken {{$news->title}}
@endsection
@section('main')
    <h1 class="bg-success text-center font-weight-bold text-white p-3 mb-0">Bewerken {{$news->title}}</h1>
    <form method="POST" action="{{route('admin.nieuws.update', $news->slug)}}" class=" p-3" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('patch')
        <div class="form-group ">
            <label class="col-form-label font-weight-bold  @if($errors->has('title')) text-danger  @endif">Titel <span class="text-danger">*</span> </label>
            <input type="text" name="title" id="title" class="form-control @if($errors->has('title')) is-invalid  @endif rounded-0" placeholder="Verslag vogelspotten met Henk" value="{{$news->title}}">
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
            <label class="col-form-label font-weight-bold  @if($errors->has('body')) text-danger  @endif" for="description">Inhoud <span class="text-danger">*</span> </label>
            <textarea rows="5" style="resize: none" spellcheck="false"  name="body" id="body" class="form-control rounded-0  @if($errors->has('body')) is-invalid  @endif" placeholder="We zijn met henk gaan vogelspotten, het was leuk">{{$news->body}}</textarea>
            @if($errors->has('body'))
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('body') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label class="col-form-label font-weight-bold   @if($errors->has('news_img')) text-danger  @endif" for="news_img">Afbeelding <span class="text-danger">*</span> </label>
            <input type="file" name="news_img" id="news_img" value="{{$news->img_path}}" class="form-control-file rounded-0 @if($errors->has('news_img')) is-invalid  @endif" placeholder="Vogel spotten met Henk" accept="image/x-png,image/gif,image/jpeg" />
            @if($errors->has('news_img'))
                <div class="text-danger small">
                    <ul>
                        @foreach ($errors->get('news_img') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <small class="form-text font-italic">Ondersteunde formaten: JPG/PNG/GIF</small>

        </div>
        <div class="form-group">
            <label class="col-form-label font-weight-bold   @if($errors->has('publication_date')) text-danger  @endif" for="publication_date">Publicatie Datum <span class="text-danger">*</span> </label>
            <input type="date" name="publication_date" id="publication_date" value="{{date_format(date_create($news->publication_date), 'Y-m-d')}}" class="form-control rounded-0 @if($errors->has('publication_date')) is-invalid  @endif" min="{{date('Y-m-d')}}">
            @if($errors->has('publication_date'))
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('publication_date') as $message)
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
