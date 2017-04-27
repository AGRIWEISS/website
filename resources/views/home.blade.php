@extends('layouts.app')

@section('dashboard')
    <div class="panel panel-default">
        <div class="panel-heading">
            Weather
            <a href="{{action('WeatherMapController@index')}}" class="btn btn-primary pull-right">
                View Map
            </a>
        </div>

        <div class="panel-body">
            <weather-data :user="user" inline-template>
                <div>
                    <div class="pull-right">
                        <button class="btn btn-primary" :class="{active: displayUnits == 'us'}" @click="changeUnits('us')">
                            US
                        </button>
                        <button class="btn btn-primary" :class="{active: displayUnits == 'si'}" @click="changeUnits('si')">
                            SI
                        </button>
                    </div>
                    <dl class="dl-horizontal">
                        <dt>Temperature</dt><dd>@{{weather.currently['temperature']}} @{{ units[displayUnits]['temperature'] }}</dd>
                        <dt>Wind Speed</dt><dd>@{{weather.currently['windSpeed']}} @{{ units[displayUnits]['windSpeed'] }}</dd>
                        <dt>Humidity</dt><dd>@{{weather.currently['humidity'] * 100}} @{{ units[displayUnits]['humidity'] }}</dd>
                        <dt>Visibility</dt><dd>@{{weather.currently['visibility']}} @{{ units[displayUnits]['visibility'] }}</dd>
                    </dl>
                </div>
            </weather-data>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Financing</div>

        <div class="panel-body">

        </div>
    </div>
@endsection