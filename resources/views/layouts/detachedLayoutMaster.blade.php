@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
@php $configData = Helper::applClasses(); @endphp

<html class="loading {{($configData['theme'] === 'light') ? '' : $configData['layoutTheme'] }}"
lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{ $configData['defaultLanguage'] }}@endif"
data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}"
@if($configData['theme'] === 'dark') data-layout="dark-layout" @endif>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="description" content="{{config('app.name')}} made by beingarslan">
  <meta name="keywords" content="Arslan Aslam Being beingarlsan laravel beingfastian fiverr">
  <meta name="author" content="Arslan Aslam">
  <title>@yield('title') - {{config('app.name')}}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

  {{-- Include core + vendor Styles --}}
  @include('panels/styles')
</head>

@isset($configData["mainLayoutType"])
@extends((( $configData["mainLayoutType"] === 'horizontal') ? 'layouts.horizontalDetachedLayoutMaster' :
'layouts.verticalDetachedLayoutMaster' ))
@endisset