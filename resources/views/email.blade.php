@extends('layout')


@section('content')
<div class="col-lg-9 animated fadeInRight">
    <div class="mail-box-header">
        <form method="get" action="index.html" class="float-right mail-search">
            <div class="input-group">
                <input type="text" class="form-control form-control-sm" name="search" placeholder="Search email">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-sm btn-primary">
                    Search
                    </button>
                </div>
            </div>
        </form>
        <h2>
        Inbox ({{$content->first()->id}})
        </h2>
        <div class="mail-tools tooltip-demo m-t-md">
            <div class="btn-group float-right">
                <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></button>
                <button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></button>
            </div>
<form method="POST" action="/archive">
    @csrf
    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Refresh inbox"><i class="fa fa-refresh"></i> Refresh</button>
    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="fa fa-eye"></i> </button>
    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as important"><i class="fa fa-exclamation"></i> </button>
    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>
    <button a="/archieve" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" typle="submit" title="Mark as Archive"><i class="fa fa-archive"></i> </button>
</form>
                </div>
            </div>



<div class="mail-box">

    <table class="table table-hover table-mail">
    <tbody>
        @foreach ($content as $contents)
            <tr class="unread">
                <td class="check-mail">
                    <input type="checkbox" class="i-checks">
                </td>
            <td class="mail-ontact"><a href="/{{$contents->id}}">{{ $contents->title }}</a></td>
            <td class="mail-subject"><a href="/{{$contents->id}}">{{ $contents->body }}</a></td>
                <td class=""><i class="fa fa-paperclip"></i></td>
                <td class="text-right mail-date">{{ $contents->date }}</td>
            </tr>
        @endforeach
    <tr class="unread">
        <td class="check-mail">
            <input type="checkbox" class="i-checks">
        </td>
        <td class="mail-ontact"><a href="mail_detail.html">WeUsThem</a></td>
        <td class="mail-subject"><a href="mail_detail.html">Interview</a></td>
        <td class=""><i class="fa fa-paperclip"></i></td>
        <td class="text-right mail-date">6.10 AM</td>
    </tr>
    <tr class="unread">
        <td class="check-mail">
            <input type="checkbox" class="i-checks" checked>
        </td>
        <td class="mail-ontact"><a href="mail_detail.html">Good Luck</a></td>
        <td class="mail-subject"><a href="mail_detail.html">Just do it</a></td>
        <td class=""></td>
        <td class="text-right mail-date">8.22 PM</td>
    </tr>
    <tr class="read">
        <td class="check-mail">
            <input type="checkbox" class="i-checks">
        </td>
        <td class="mail-ontact"><a href="mail_detail.html">Facebook</a> <span class="label label-warning float-right">Clients</span> </td>
        <td class="mail-subject"><a href="mail_detail.html">Request </a></td>
        <td class=""></td>
        <td class="text-right mail-date">Jan 16</td>
    </tr>

    </tbody>
    </table>
  </div>
@endsection
