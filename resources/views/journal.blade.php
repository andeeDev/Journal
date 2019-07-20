@include('header')
<?php
use Carbon\Carbon;
    //echo $dateTime->format('Y-m-d H:i:s') . "\n";
    $dd = new DateTime('now', new DateTimeZone('Europe/Kiev'));
    $timePoint = $dd->diff(new DateTime(null, new DateTimeZone('Europe/Kiev')));

    echo Carbon::now()->subDays(rand(1, 5));
echo Carbon::now()->subDays(rand(1, 5));

    //dd(new DateTime(null, new DateTimeZone('Europe/Kiev')));
    //$dd->setTimezone(new DateTimeZone('Europe/Kiev'));
    //echo 'dd = '.$dd->format('Y-m-d H:i:s');
//$timestamp = strtotime('+7 days', new DateTime());
//$class = \App\Models\Student::with('classes')->where('group_id', '=', 1)->get();//, 'classes'

//echo ;

//echo ($studentAndMark);

//echo App\Models\Student::where('group_id', '=', '2')->get();
$faker = Faker\Factory::create();
//echo $randomDate = Carbon::now()->subDays(rand(0, 7))->format('Y-m-d');
//dd($studentAndMark);
?>
<main class="page">
        <div class="row expanded">
            <div class="small-12 columns">
                <div class="callout clearfix paddings">
                    <h5 class="callout cabinet small clearfix margin-bottom">
                        {{$groupName->name}}
                        {{--@php()--}}

                        {{$faker->dateTimeBetween('-5 days', strtotime('+5 days'))->format('Y-m-d')}}
                        {{$faker->dateTimeBetween('-5 days', strtotime('+5 days'))->format('Y-m-d')}}
                    </h5>
                    <div class="show-for-medium table-scroll">
                        <table class="m-b-n b-none custom edit-table">
                            <thead class="text-center">
                                <tr>
                                    {{--{{$studentAndMark}}--}}
                                    {{$studentAndMark[0]}}

                                <th>ПІБ</th>
                                @foreach($studentAndMark as $student)
                                    @foreach($student->classes as $clazz)
                                        <th>{{ date('d.m',strtotime($clazz->datetime)) }}</th>
                                        @break
                                    @endforeach

                                @endforeach
                                <th>30.03</th>
                                <th>Тест</th>
                                <th>Сумма</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php ($timePoint = new DateTime( 'now' , new DateTimeZone('Europe/Kiev')))
                            {{--{{$timePoint->format('Y-m-d H:i:s')}}
                            {{$studentAndMark}}--}}
                                @foreach( $studentAndMark as $student )
                                    <tr class="text-center">
                                        <td class="" style="text-align:left">
                                            {{$student->surname.' '.$student->name }}
                                        </td>
                                        @foreach($student->classes as $class)
                                            {{--{{ $timePoint->diff(new DateTime($points->created_at, new DateTimeZone('Europe/Kiev')))->format('%h %d %R') }}--}}
                                            {{--@if( $timePoint->diff(new DateTime($points->created_at, new DateTimeZone('Europe/Kiev')))->d < 1 )--}}
                                                {{--{{ $dd->diff($points->created_at)->d }}--}}
                                               {{-- {{$points->created_at}}
                                                {{date('Y-m-d H:i:s', strtotime($dateTime))}}--}}
                                                {{--{{$class->pivot->point}}--}}

                                                <td>
                                                    <div style="display:flex;justify-content: center;align-items: center;">
                                                        <input type="text" maxlength="2" value="{{$class->pivot->point}}" data-uri="/1/1/1">
                                                    </div>
                                                </td>
                                            {{--@else--}}
                                                {{--<td>
                                                    <div style="display:flex; justify-content: center; align-items: center;">
                                                        <span style="text-align: center;">{{$points->point}}</span>
                                                    </div>
                                                </td>--}}
                                           {{-- @endif--}}
                                        @endforeach
                                        {{--<td>
                                            <div><input type="text" maxlength="2" value="" data-uri="/1/1/1"></div>
                                        </td>
                                        <td>
                                            <div style="display:flex;justify-content: center;align-items: center;" >4</div>
                                        </td>
                                        <td>
                                            <div style="display:flex;justify-content: center;align-items: center;" >4</div>
                                        </td>--}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
<script type="text/javascript" src="{{ asset('/js/calculateSumForStudent.js') }}"></script>
<?php

?>


@include('footer')

